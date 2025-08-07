<?

header('Content-Type: text/html; charset=utf-8', true);



include('/home/worldwid/public_html/c1s/php/setup/setup.php');



//***************************************************************************************

//codigo de debug - retirado do freemaps



	define('IN_DEBUG_ENV', preg_match('@\.int[\\\/]?@i', $_SERVER['SERVER_NAME']) || getenv('DEBUG'));//detecta se estamos no servidor de teste

	// define('SERVER_NAME', $_SERVER['SERVER_NAME']=preg_replace('@^www\.@i', '', $_SERVER['SERVER_NAME']));

	define('SERVER_NAME', preg_replace('@^www\.@i', '', $_SERVER['SERVER_NAME']));



	if(IN_DEBUG_ENV)

	{

	

		//need to declare those here to have a reference available for later on

		$_errors = array();



		//stores error messages inside the array

		set_error_handler(function($errno, $errstr, $errfile, $errline)use(&$_errors){

			$_errors[] = array(

				'type' => $errno,

				'msg' => $errstr,

				'file' => $errfile,

				'line' => $errline

			);

		}, ~0);//all errors



		register_shutdown_function(function()use(&$_errors){

			//fatal errors won't call the error handler! (http://stackoverflow.com/a/7313887/2729937)

			$last_error = error_get_last();



			if($last_error['type'] & (E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR))

			{

				//since the error handler didnt run on a fatal error, we add it "manually"

				$_errors[] = $last_error;

			}

			

			

		

			$path = $_SERVER['DOCUMENT_ROOT'] . '/.debug/' . gmdate('Y/m/d') . '/';

			if(!@file_exists($path) || !@is_dir($path))

			{

				mkdir($path, 0777, true);

			}

			file_put_contents(

				$path . gmdate('H-i-s') . trim(+microtime(), 0) . '_back-root-_index.php',

				'<?php return ' . var_export($_errors, true) . ';'

			);

			

		});

	}





//***************************************************************************************



if(mysql_num_rows(mysql_query('select locked from ip_tries where locked and ip=\''.$_SERVER['REMOTE_ADDR'].'\'')))die('O ip '.$_SERVER['REMOTE_ADDR'].' foi bloqueado por excesso de tentativas de login');



$pfx='/home/worldwid/public_html/c1s/php/back/';



$bd=new SQLite3('/home/worldwid/public_html/c1s/c1s.sqlite3',SQLITE3_OPEN_READONLY);



if ($_POST['log_in']){



	//corrige o problema do php automaticamente colocar \ antes de ' e de "

	if(ini_get('magic_quotes_gpc')) $_POST['password']=stripslashes($_POST['password']);

	

	$result=mysql_query('SELECT * FROM user WHERE username=\''.mysql_real_escape_string($_POST['login']).'\' and password=\''.md5($_POST['password']).'\'');

	if(mysql_num_rows($result)){

		session_start();

		$row = mysql_fetch_array($result);

		$_SESSION['id_user'] = $row['id'];

		$_SESSION['adm_lvl'] = $row['level'];

		$_SESSION['active'] = $row['active'];

		$_SESSION['nome'] = $row['username'];

		$_SESSION['nome_pessoal'] = $row['name'];

		$_SESSION['email'] = $row['email'];

		

		/*selecciona a lingua guardada. se nao houver nenhuma, selecciona pt*/

		$_SESSION['lang_back'] = mysql_fetch_assoc(mysql_query('select * from lang where id="'.$row['lang'].'" or name="pt" order by id="'.$row['lang'].'" desc'));

		

		mysql_query('update user set n_attempts_success='.($row['n_attempts_success']+1).',ip_last_access=\''.$_SERVER['REMOTE_ADDR'].'\',hour_last_login=now() where id='.$row['id']);

		/*mysql_query('

			insert into ip_tries (ip,success) values(\''.$_SERVER['REMOTE_ADDR'].'\',1)

			on duplicate key

			update ip_tries set success=(select success+1 from (select * from ip_tries where ip=\''.$_SERVER['REMOTE_ADDR'].'\' as c1)),failed=0,first_failed_time=null

		');*/

		

		mysql_query('

			insert into ip_tries (ip,success) values(\''.$_SERVER['REMOTE_ADDR'].'\',1)

			on duplicate key

			update

				success=(select success+1 from (select * from ip_tries as c11 where ip=\''.$_SERVER['REMOTE_ADDR'].'\') as c12),

				tries=(select tries+1 from (select * from ip_tries as c21 where ip=\''.$_SERVER['REMOTE_ADDR'].'\') as c22),

				failed=0,first_failed_time=null

		');

		

		//mysql_query('update ip_tries set tries='.($row['n_tentativas_sucesso']+1).',ip_ultimo_acesso=\''.$_SERVER['REMOTE_ADDR'].'\' where id='.$row['id']);

		if ($_SESSION['adm_lvl']<5&&!$bd->querySingle('select ifnull(backoffice+(count(site)-1),1) from site where site="'.str_replace('www.','',$_SERVER['SERVER_NAME']).'" or site=(select parked from parked where site="'.str_replace('www.','',$_SERVER['SERVER_NAME']).'")'))

		{

			header("location:index2.php?d=1");

		}

		else if ($_SESSION['active']<=0)

		{

			header("refresh:0;url=index2.php?e=2");

		}

		else

		{

			//versao do backoffice

			$_SESSION['backoffice_version'] = file_get_contents(dirname(dirname($pfx)).'/update/.version');

			header("location:index.php");

		}

		$bd->close();

		die('');

	} else {

		$bd->close();

		mysql_query('update user set n_failed_attempts=(select n_failed_attempts+1 from (select * from user where username=\''.mysql_real_escape_string($_POST['login']).'\') as c1),ip_last_access=\''.$_SERVER['REMOTE_ADDR'].'\' where username=\''.mysql_real_escape_string($_POST['login']).'\' and id>0');

		/*

			onde estiver now()-xxx trocar o xxx por o tempo em segundos antes de bloquear (600 segundos=10 minutos)

			onde estiver failed>=x, trocar o x pelo maximo de tentativas-1

		*/

		mysql_query('

			insert into ip_tries (ip,failed) values(\''.$_SERVER['REMOTE_ADDR'].'\',1)

			on duplicate key

			update

				failed=(select if(

						(now()-600)>first_failed_time,

						1,failed+1

					) from (select * from ip_tries where ip=\''.$_SERVER['REMOTE_ADDR'].'\') as c1),

				first_failed_time=(

					select if(

						(now()-600)>first_failed_time,

						now(),ifnull(first_failed_time,now())

						

					) from (select * from ip_tries where ip=\''.$_SERVER['REMOTE_ADDR'].'\') as c1),

				last_try=now(),

				locked=(select if(

					locked,

					locked,

					if(

						(now()-600)>first_failed_time,

						now(),first_failed_time

					)!=now() and failed>=4

				) from (select * from ip_tries where ip=\''.$_SERVER['REMOTE_ADDR'].'\') as c1),

				tries=(select tries+1 from (select * from ip_tries as c21 where ip=\''.$_SERVER['REMOTE_ADDR'].'\') as c22)

		');

		header("refresh:0;url=index2.php?e=1");

	}

} else {

	session_start();

	if(($_SESSION['id_user'] == null)  || ($_SESSION['id_user'] == '')  || ($_SESSION['id_user'] == ' '))

	{

		session_destroy();

		$_SESSION = array();

		$bd->close();

		header("location:index2.php");

		die('');

	}

	

	$exts=array();//lista das extensoes

	//$exts_r=$bd->query('select *,(1*(not demo or ( demo and (not demo_limit or demo_limit>date("now"))))*active) as enabled, ( demo and (not demo_limit or demo_limit>date("now"))) as demo from ext where site="'.str_replace('www.','',$_SERVER['SERVER_NAME']).'" or site=(select parked from parked where site="'.str_replace('www.','',$_SERVER['SERVER_NAME']).'")');

	$exts_r = $bd->query('

		select *,

			(

				demo and

				(not demo_limit or demo_limit > date("now"))

			) as demo,

			active as enabled

		from ext

		where

			site in("' . SERVER_NAME . '", "*")

			or site = (select parked from parked where site = "' . SERVER_NAME . '")

		order by site = "*", ext_name

	');

	while($ext = $exts_r->fetchArray(SQLITE3_ASSOC))

	{

		if(!isset($exts[$ext['ext_name']]) || $ext['site'] != '*')

		{

			// $ext['enabled']=($ext['enabled']||$ext['demo']||($ext['debug']&&$_SESSION['adm_lvl']>=5));

			$ext['enabled'] = (

				$ext['enabled']

				|| ($ext['demo'] && $_SESSION['adm_lvl'])

				|| ($ext['debug'] && $_SESSION['adm_lvl']>=5)

			);

			

			$exts[$ext['ext_name']]=$ext;

		}

	}



	$linguas = array(

		'all' => array(

			'list' => array()

		),

		'list' => array()

	);



	$linguas_r=mysql_query('select * from lang order by pos');//begin lang

	while($lingua=mysql_fetch_assoc($linguas_r))

	{

		$linguas['all'][$lingua['name']] = array_merge($lingua, array('exist'=>true));

		

		list($linguas['all']['lingua_'.$lingua['id']], $linguas['all'][], $linguas['all']['list'][])=array(

			&$linguas['all'][$lingua['name']],

			&$linguas['all'][$lingua['name']],

			&$linguas['all'][$lingua['name']]

		);

		

		if($lingua['active'])

			list($linguas['lingua_'.$lingua['id']], $linguas[], $linguas['list'][])=array(

				&$linguas['all'][$lingua['name']],

				&$linguas['all'][$lingua['name']],

				&$linguas['all'][$lingua['name']]

			);

			

	}

	mysql_free_result($linguas_r);//end lang

	

	$lingua=mysql_query("select *, (select count(id) from lang where active) as n_linguas from lang where id='".$linguas['list'][0]['id']."'");

	if(!mysql_num_rows($lingua))

	{

		die('Lingua inexistente');

	}

	$_SESSION['adm_lang']=$lingua=&$_SESSION['lang_back'];//mysql_fetch_assoc($lingua);

	

	//$site = mysql_fetch_assoc(mysql_query("SELECT *, (select color from settings where id=1) as color, (select layout from settings where id=1) as layout FROM site WHERE lang='$lingua[id]'"));

	$site = mysql_fetch_assoc(mysql_query("SELECT settings.*, site.*, site.id id FROM site, settings where settings.id = 1 and lang='$lingua[id]'"));

	//$ingles = $site[idioma_en];

	$ingles = !!$linguas['list'][1]['active'];

	

	if($_SESSION['adm_lvl']>=5 && isset($_REQUEST['update']))

	{

		//header('location:index.php');

		include($pfx.'root/update.php');

		die('');

	}

	

	include ($f=$pfx.'lang/').(is_file($f.$_SESSION['lang_back']['name'].'.php')?$_SESSION['lang_back']['name']:'en').'.php';

	$misc=&$text['misc'];

	

	require($pfx.'general/misc.php');

	

	//obrigatorio p/ o ispconfig

	// header('Content-type: text/html; charset=ISO-8859-15', true );

	

	$site['version_number_n'] = +implode('',

		array_map(

			function($v){

				return ($v < 10 ? 0 : '') . $v;//$v < 10

			},

			preg_split('@\.@', $site['version_number'])

		)

	);

	

	if(!defined('ROOT_URL_SCHEME'))

	{

		define('ROOT_URL_SCHEME', @$_SERVER['REQUEST_SCHEME'] ?: ('http' . ($_SERVER['HTTPS'] ? 's' : '')));

	}

	

	if(false){?><?}?>

<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="utf8">

	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />

    <title><?= $site['title']; ?> - <?=$misc['title']?></title>

	<?require($pfx.'general/head.php');?>

</head>

	<!--<body onload="load()">-->

	<body>

		<?

			$row = mysql_fetch_assoc(mysql_query("SELECT * FROM user WHERE id = '$_SESSION[id_user]'"));

			if(!$_REQUEST['p'])$_REQUEST['p']='pages_list';

		?>

		<div id="alertMessage" class="error"></div>

		<div id="header">

			<div id="account_info">

				<?

					if($_SESSION['adm_lvl']>=5)

					{

						$version=@mysql_fetch_assoc(@mysql_query('select version_number number,date_format(version_date,"%d-%m-%Y") `date` from settings where id=1'));

						echo '<div id="header_version" class="setting',$_SESSION['backoffice_version']!=$version['number']? ' new_version' : '' ,'" title="',$text['header']['changelog']['updated'],' ',$version['date'],'"><a href="?p=changelog"><b>',$text['header']['changelog']['version'],' ',$version['number'],'</b></a></div>';

						unset($version);

					}

				?>

				<div class="setting" title="<?=$text['header']['changelog']['desc']?>">

					<a href='?p=changelog'><b><?=$text['header']['changelog']['title']?></b></a>

				</div>

				<div class="setting" title="<?=$text['header']['account']?>">

					<a href="?p=user"><b><?=$text['header']['wellcome']?> </b><?=$_SESSION['nome_pessoal']?><img src="images/gear.png" class="gear"  alt="<?=$text['header']['account']?>"></a>

				</div>

				<div class="logout" title="<?=$text['header']['logout']?>"><b><a href="index.php?p=logout"><?=$text['header']['logout']?></a></b></div> 

			</div>

		</div>

		<div id="shadowhead"></div>

		<?require($pfx.'general/navigation.php');?>

		<div id="content"><?			

			//changelog

			if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'changelog')//feito

				if(!$pfx||@is_file('includes/changelog.php'))include('includes/changelog.php');else include($pfx.'includes/changelog.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'pages_list')//feito

				if(!$pfx||@is_file('includes/pages_list.php'))include('includes/pages_list.php');else include($pfx.'includes/pages_list.php');

			//Destaques

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'highlights_list')//feito

				if(!$pfx||@is_file('includes/highlights_list.php'))include('includes/highlights_list.php');else include($pfx.'includes/highlights_list.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'highlights_insert')//feito

				if(!$pfx||@is_file('includes/highlights_insert.php'))include('includes/highlights_insert.php');else include($pfx.'includes/highlights_insert.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'highlights_edit')//feito

				if(!$pfx||@is_file('includes/highlights_edit.php'))include('includes/highlights_edit.php');else include($pfx.'includes/highlights_edit.php');

			//equipa

			/*else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'equipa')//feito

				if(!$pfx||@is_file('includes/equipa.php'))include('includes/equipa.php');else include($pfx.'includes/equipa.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'inserir_equipa')//feito

				if(!$pfx||@is_file('includes/inserir_equipa.php'))include('includes/inserir_equipa.php');else include($pfx.'includes/inserir_equipa.php');*/

			//contactos

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'contacts_list')//feito

				if(!$pfx||@is_file('includes/contacts_list.php'))include('includes/contacts_list.php');else include($pfx.'includes/contacts_list.php');

			//portfolio

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'portfolio_list')//feito

				if(!$pfx||@is_file('includes/portfolio_list.php'))include('includes/portfolio_list.php');else include($pfx.'includes/portfolio_list.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'inserir_portfolio')//feito

				if(!$pfx||@is_file('includes/inserir_portfolio.php'))include('includes/inserir_portfolio.php');else include($pfx.'includes/inserir_portfolio.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'portfolio_edit')//feito

				if(!$pfx||@is_file('includes/portfolio_edit.php'))include('includes/portfolio_edit.php');else include($pfx.'includes/portfolio_edit.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'activities_settings')//feito

				if(!$pfx||@is_file('includes/activities_settings.php'))include('includes/activities_settings.php');else include($pfx.'includes/activities_settings.php');

			//noticias

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'news_list')//feito

				if(!$pfx||@is_file('includes/news_list.php'))include('includes/news_list.php');else include($pfx.'includes/news_list.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'news_edit')//feito

				if(!$pfx||@is_file('includes/news_edit.php'))include('includes/news_edit.php');else include($pfx.'includes/news_edit.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'news_category_list')//feito

				if(!$pfx||@is_file('includes/news_category_list.php'))include('includes/news_category_list.php');else include($pfx.'includes/news_category_list.php');

			//equipa

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'team_list')//feito

				if(!$pfx||@is_file('includes/team_list.php'))include('includes/team_list.php');else include($pfx.'includes/team_list.php');

			/*else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'inserir_equipa')//feito

				if(!$pfx||@is_file('includes/inserir_equipa.php'))include('includes/inserir_equipa.php');else include($pfx.'includes/inserir_equipa.php');*/

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'team_edit')//feito

				if(!$pfx||@is_file('includes/team_edit.php'))include('includes/team_edit.php');else include($pfx.'includes/team_edit.php');

			//sobre nos

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'about_activities')

				if(!$pfx||@is_file('includes/about_activities.php'))include('includes/about_activities.php');else include($pfx.'includes/about_activities.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'about_highlights')

				if(!$pfx||@is_file('includes/about_highlights.php'))include('includes/about_highlights.php');else include($pfx.'includes/about_highlights.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'about_content')

				if(!$pfx||@is_file('includes/about_content.php'))include('includes/about_content.php');else include($pfx.'includes/about_content.php');

			//slideshow

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'slideshow_list' && $_SESSION['adm_lvl'] >= 2)//feito

				if(!$pfx||@is_file('includes/slideshow_list.php'))include('includes/slideshow_list.php');else include($pfx.'includes/slideshow_list.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'slideshow_edit' && $_SESSION['adm_lvl'] >= 2)//feito

				if(!$pfx||@is_file('includes/slideshow_edit.php'))include('includes/slideshow_edit.php');else include($pfx.'includes/slideshow_edit.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'slideshow_detalhes' && $_SESSION['adm_lvl'] >= 2)//feito

				if(!$pfx||@is_file('includes/slideshow_detalhes.php'))include('includes/slideshow_detalhes.php');else include($pfx.'includes/slideshow_detalhes.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'highlights_settings' && $_SESSION['adm_lvl'] >= 2)//feito

				if(!$pfx||@is_file('includes/highlights_settings.php'))include('includes/highlights_settings.php');else include($pfx.'includes/highlights_settings.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'slideshow_settings' && $_SESSION['adm_lvl'] >= 2)//feito

				if(!$pfx||@is_file('includes/slideshow_settings.php'))include('includes/slideshow_settings.php');else include($pfx.'includes/slideshow_settings.php');

			

			//CRM

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'crm_contacts' && $_SESSION['adm_lvl'] >= 2)//feito

				if(!$pfx||@is_file('includes/crm_contacts.php'))include('includes/crm_contacts.php');else include($pfx.'includes/crm_contacts.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'edit_crm_contact' && $_SESSION['adm_lvl'] >= 2)//feito

				if(!$pfx||@is_file('includes/edit_crm_contact.php'))include('includes/edit_crm_contact.php');else include($pfx.'includes/edit_crm_contact.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'crm_contact_insert' && $_SESSION['adm_lvl'] >= 2)//feito

				if(!$pfx||@is_file('includes/crm_contact_insert.php'))include('includes/crm_contact_insert.php');else include($pfx.'includes/crm_contact_insert.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'crm_categories' && $_SESSION['adm_lvl'] >= 2)//feito

				if(!$pfx||@is_file('includes/crm_categories.php'))include('includes/crm_categories.php');else include($pfx.'includes/crm_categories.php');

			

			//reviews

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'reviews_list' && $_SESSION['adm_lvl'])//feito

				if(!$pfx||@is_file('includes/reviews_list.php'))include('includes/reviews_list.php');else include($pfx.'includes/reviews_list.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'reviews_edit' && $_SESSION['adm_lvl'] >= 2)//feito

				if(!$pfx||@is_file('includes/reviews_edit.php'))include('includes/reviews_edit.php');else include($pfx.'includes/reviews_edit.php');

			

			//utilizadores/administradores

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'user')

				include("{$pfx}includes/user.php");//1 administrador

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'administrators'  && $_SESSION['adm_lvl'] >= 4)

				if(!$pfx||@is_file('includes/administrators.php'))include('includes/administrators.php');else include($pfx.'includes/administrators.php');

				//lista de administradores

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'administrator_insert' && $_SESSION['adm_lvl'] >= 4)

				if(!$pfx||@is_file('includes/administrator_insert.php'))include('includes/administrator_insert.php');else include($pfx.'includes/administrator_insert.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'administrator_edit' && $_SESSION['adm_lvl'] >= 4)

				if(!$pfx||@is_file('includes/administrator_edit.php'))include('includes/administrator_edit.php');else include($pfx.'includes/administrator_edit.php');

			//outros

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'site' && $_SESSION['adm_lvl'] >= 3)

				if(!$pfx||@is_file('includes/site.php'))include('includes/site.php');else include($pfx.'includes/site.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'site_image_resolutions'  && $_SESSION['adm_lvl'] >= 3)

				if(!$pfx||@is_file('includes/site_image_resolutions.php'))include('includes/site_image_resolutions.php');else include($pfx.'includes/site_image_resolutions.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'site_languages'  && $_SESSION['adm_lvl'] >= 5)

				if(!$pfx||@is_file('includes/site_languages.php'))include('includes/site_languages.php');else include($pfx.'includes/site_languages.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'site_layout'  && $_SESSION['adm_lvl'] >= 5)

				if(!$pfx||@is_file('includes/site_layout.php'))include('includes/site_layout.php');else include($pfx.'includes/site_layout.php');

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'site_css_fix' && $_SESSION['adm_lvl'] >= 5)

				if(!$pfx||@is_file('includes/site_css_fix.php'))include('includes/site_css_fix.php');else include($pfx.'includes/site_css_fix.php');

			

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'pages_add' && $_SESSION['adm_lvl'] >= 5)

				if(!$pfx||@is_file('includes/pages_add.php'))include('includes/pages_add.php');else include($pfx.'includes/pages_add.php');

				

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'edit_privacy_policy' && $_SESSION['adm_lvl'] >= 2)

				if(!$pfx||@is_file('includes/edit_privacy_policy.php'))include('includes/edit_privacy_policy.php');else include($pfx.'includes/edit_privacy_policy.php');

				

			else if (!$_REQUEST['ext'] && $_REQUEST['p'] == 'logout'){ 

				session_start(); 

				session_destroy();

				$_SESSION = array();

				echo "<script>history = new history();</script>";

				echo "<script>/*history.go(-history.length);*/ location = 'index2.php'</script>";	

			}

			else

			{

				include($pfx.'extensions/includes.php');

				

				if($_REQUEST['p']&&($_REQUEST['p']=explode('_',$_REQUEST['p'],2))&&$ext[$_REQUEST['p'][0]]&&$exts[$_REQUEST['p'][0]]['enabled'])

				{

					if(is_dir(dirname($_SERVER['SCRIPT_FILENAME']).'/extensions/'.$_REQUEST['p'][0].'/'))

						$pfx=dirname($_SERVER['SCRIPT_FILENAME']).'/';

					

					include(($root=$pfx.'extensions/'.$_REQUEST['p'][0].'/').'lang/'.$lingua['name'].'.php');

					

					$out=$text[$_REQUEST['p'][1]];

					$misc=$text['misc'];

					

					$url=ROOT_URL_SCHEME . '://'.$_SERVER['SERVER_NAME'].str_replace('index.php','',$_SERVER['PHP_SELF']).'extensions/'.$_REQUEST['p'][0].'/';

					/*$front=explode('/',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

					unset($front[4]);

					$front=implode('/',$front);*/

					$front=$_SERVER['DOCUMENT_ROOT'].'/';//$front=implode('/',array_slice(explode('/',$_SERVER['PWD']),0,4)).'/';

					

					function include_lib($l){global$root;return(!$l||!@is_dir($root.'/lib/')||!@is_file($root.'/lib/'.$l.'.php'))?false:include($root.'/lib/'.$l.'.php');};

					

					include($root.$ext[$_REQUEST['ext']=$_REQUEST['p'][0]][$_REQUEST['p']=$_REQUEST['p'][1]]);

				}

				else if($_REQUEST['p']&&$_REQUEST['ext']&&$ext[$_REQUEST['ext']]&&$exts[$_REQUEST['ext']]['enabled'])

				{

					if(is_dir(dirname($_SERVER['SCRIPT_FILENAME']).'/extensions/'.$_REQUEST['p'][0].'/'))

						$pfx=dirname($_SERVER['SCRIPT_FILENAME']).'/';

					

					include(($root=$pfx.'extensions/'.$_REQUEST['ext'].'/').'lang/'.$lingua['name'].'.php');

					

					$out=$text[$_REQUEST['p']];
					echo '<pre>' . print_r($out, true) . '</pre>';
					die();

					$misc=$text['misc'];

					

					$url=ROOT_URL_SCHEME . '://'.$_SERVER['SERVER_NAME'].str_replace('index.php','',$_SERVER['PHP_SELF']).'extensions/'.$_REQUEST['ext'].'/';

					/*$front=explode('/',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

					unset($front[4]);

					$front=implode('/',$front);*/

					$front=$_SERVER['DOCUMENT_ROOT'].'/';//$front=implode('/',array_slice(explode('/',$_SERVER['PWD']),0,4)).'/';

					

					function include_lib($l){global$root;return(!$l||!@is_dir($root.'/lib/')||!@is_file($root.'/lib/'.$l.'.php'))?false:include($root.'/lib/'.$l.'.php');};

					

					include($root.$ext[$_REQUEST['ext']][$_REQUEST['p']]);

				}

				else if($_REQUEST['p']) echo '<h3>Erro de acesso à página</h3><p>Tentou aceder a uma página inexistente neste site ou uma página que não tem permissões de acesso.</p>';

				else

				{

					//include("{$pfx}includes/resumo.php");

				}

			}

			?>

		</div>

	</body>

</html>

<?}$bd->close();?>