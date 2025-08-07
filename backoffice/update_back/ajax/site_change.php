<?
if($_SESSION['adm_lvl']>=3)
{
	foreach($_POST as $k=>$v)if(!is_array($v))$_POST[$k]=stripslashes($v);
	$result=mysql_query("Select site.id as id,site.lang as lang,lang.active as active from site,lang where site.lang=lang.id order by pos");
	if(!$result || mysql_error())
	{
		die ("3");
	}
	else
	{
		while($site=mysql_fetch_assoc($result))foreach($site as $k=>$v)${$k}[]=$v;
		
		foreach($_POST['site'] as $k=>$v)
		{
			if($a=!!$activo[array_search($k,$id)]||$_SESSION['adm_lvl']>=3)
			{
			
				mysql_query(
					sprintf("UPDATE site a INNER JOIN lang b ON b.id = a.lang SET a.name='%s',a.title='%s',a.seo_key='%s',a.seo_desc='%s',a.maintenance='%d'".(($i++>=1&&$_SESSION['adm_lvl']>=5)?",b.active='".((int)!!$v['activo'])."'":'')." WHERE a.lang = '$k'",
						mysql_real_escape_string(striptags($v['nome'],$tags_title)),
						mysql_real_escape_string(striptags($v['titulo'],$tags_title)),
						mysql_real_escape_string($v['seo_key']),
						mysql_real_escape_string($v['seo_desc']),
						(int)!!$v['manutencao']
					)
				);
			}
		}

		echo ((!mysql_error())?'1':'3');
	}
	
	mysql_query(
		sprintf(
			'update settings set color="%s", form_subscribe="%d",contact_captcha="%d",form_subscribe_captcha="%d",recruit_active="%d",review_active="%d",show_cookies_warning="%d",show_privacy_policy="%d",show_news_categories="%d" where id="1"',
			mysql_real_escape_string($_POST['cor']),
			((int)!!$_POST['form_subscribe']),
			((int)!!$_POST['contact_captcha']),
			((int)!!$_POST['form_subscribe_captcha']),
			((int)!!$_POST['recruit_active']),
			((int)!!$_POST['review_active']),
			((int)!!$_POST['show_cookies_warning']),
			((int)!!$_POST['show_privacy_policy']),
			((int)!!$_POST['show_news_categories'])
		)
	);
	
	$linguas=mysql_query('select name,id from lang where active');
	while(($lingua=mysql_fetch_assoc($linguas)))
	{
		if($_POST['form_subscribe_text_'.$lingua['name']])
		{
			mysql_query($q='update site set form_subscribe_text="'.mysql_real_escape_string($_POST['form_subscribe_text_'.$lingua['name']]).'" where lang='.$lingua['id']);
		}
		
		if($_POST['recruit_title_'.$lingua['name']])
		{
			mysql_query(
				sprintf(
					'update site set recruit_title="%s", recruit_desc="%s" where lang="'.$lingua['id'].'"',
					mysql_real_escape_string($_POST['recruit_title_'.$lingua['name']]),
					mysql_real_escape_string($_POST['recruit_desc_'.$lingua['name']])
				)
			);
		}
		
	}

	$site['version_number_n'] = +implode('',
		array_map(
			function($v){
				return (!@$v[1] ? 0 : '') . $v;//$v < 10
			},
			preg_split('@\.@', current(mysql_fetch_row(mysql_query("SELECT version_number FROM settings where id = 1"))))
		)
	);
	if($site['version_number_n'] >= 160713)//16.7.13
	{
		mysql_query(
			sprintf(
				'update settings set show_consumer_complaints_resolution="%d" where id="1"',
				((int)!!$_POST['show_consumer_complaints_resolution'])
			)
		);
	}
	if($site['version_number_n'] >= 190617)//19.6.17
	{
		mysql_query(
			sprintf(
				'update settings set show_complaints_book="%d" where id="1"',
				((int)!!$_POST['show_complaints_book'])
			)
		);
	}
	if($site['version_number_n'] >= 210415)//21.4.15
	{
		mysql_query(
			sprintf(
				'update settings set show_news_categories_list="%d", show_news_categories_images="%d" where id="1"',
				((int)!!$_POST['show_news_categories_list']),
				((int)!!$_POST['show_news_categories_images'])
			)
		);
	}
	
	
	mysql_query('update background set background.start="'.mysql_real_escape_string($_POST['bg_even_start']).'", background.end="'.mysql_real_escape_string($_POST['bg_even_end']).'", type='.((int)$_POST['bg_type']).'  where id="1"');
	mysql_query('update background set background.start="'.mysql_real_escape_string($_POST['bg_odd_start']).'", background.end="'.mysql_real_escape_string($_POST['bg_odd_end']).'", type='.((int)$_POST['bg_type']).' where id="2"');
	
	if($_SESSION['adm_lvl']>=5)
	{
		mysql_query('update settings set google_analytics="'.mysql_real_escape_string($_POST['google_analytics']).'", logo_footer="'.((int)!!$_POST['logo_footer']).'" where id=1');
	}
	
	($_POST['logo_high']&&fclose(fopen($_SERVER['DOCUMENT_ROOT'].'/high.style','w')))or(@unlink($_SERVER['DOCUMENT_ROOT'].'/high.style'));
}
else
{
	echo "3";
}