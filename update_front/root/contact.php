<?php
if (!defined('ROOT_URL_SCHEME')) {
    define('ROOT_URL_SCHEME', @$_SERVER['REQUEST_SCHEME'] ? : ('http' . ($_SERVER['HTTPS'] ? 's' : '')));
}

if (!defined('SERVER_NAME')) {
    define('SERVER_NAME', $_SERVER['SERVER_NAME'] = preg_replace('@^www\.@', '', $_SERVER['SERVER_NAME']));
}

define('ROOT', '/home/worldwid/public_html/c1s/');

define('ROOT_FRONT', ROOT . 'php/front/');

/*session_start();

include($path=$_SERVER['DOCUMENT_ROOT'].'/bd/bd.php');

include(dirname(dirname(__FILE__)).'/lingua/'.($_SESSION?$_SESSION['lingua']:$_SESSION['lingua']=current(mysql_fetch_assoc(mysql_query('select nome from lang order by pos limit 1')))).'.php');

class Mailer{
    private $_params;
    private $_errors;

    public function __construct($p=null) {
        $this->LoadParams($p);
        $this->_errors = array();
    }

    public function run($e=null,$m=null) {	
        if($this->Validate()){
            $res = $this->SendEmail($e,$m);
            if($res === true) {
                $this->OnSuccess();
            } else {
                $this->OnError();	
            }

			return $res;

        } else {
            $this->OnError();		
        }
    }

    public function LoadParams($p=null) {
        return!!$this->_params = $p?$p:$_POST['contact'];
    }

    private function Validate() {
        if(!(isset($this->_params['name']) && $this->_params['name'] != ''))

            $this->_errors['name'] = 'empty';

        if(!(isset($this->_params['email']) && $this->_params['email'] != ''))

            $this->_errors['email'] = 'empty';

        else{

            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

            if(!preg_match($email_exp,$this->_params['email']))

                $this->_errors['email'] = 'invalid';

        }

        if(!(isset($this->_params['subject']) && $this->_params['subject'] != ''))

            $this->_errors['subject'] = 'empty';

        if(!(isset($this->_params['message']) && $this->_params['message'] != ''))

            $this->_errors['message'] = 'empty';

        

        return (count($this->_errors) == 0);

    }



    private function SendEmail($e=null,$m=null){

        $headers = 

            'From: "' . $this->_params['name'] . '" <' . $this->_params['email'] . ">\r\n" .

            'Reply-To: "' . $this->_params['name'] . '" <' . $this->_params['email'] . ">\r\n" .

            "Content-type: text/html; charset=utf-8\r\n" .

            'X-Mailer: PHP/' . phpversion();

		//foreach(array('stripslashes','if'=>function($c,$t,$f){return$c?$t:$f;},'var_dump')as$k=>$v)$k&&!$k/1==$k?$$k=$v:$$v=$v;

		$this->_params['subject']=stripslashes($this->_params['subject']);

		$this->_params['message']=$m?$m:stripslashes($this->_params['message']);

		$m=<<<EMAIL

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">

		<title>{$this->_params['subject']}</title>

	</head>

	<body>

		{$this->_params['message']}

	</body>

</html>

EMAIL;

        

        return mail($e?$e:$this->_params['email'], stripslashes($this->_params['subject']), $m, $headers);

    }



    private function OnSuccess(){        

        echo '{"success": true}';

    }



    private function OnError(){

        $response = '{';

        $response .= '"success": false, "errors": [';

        

        foreach($this->_errors as $key => $value) {  

            $response .= "{ \"field\": \"$key\", \"error\": \"$value\"},";

        }

        if(count($this->_errors) > 0)

            $response = substr($response, 0, -1);

        $response .= ']}';

        

        echo $response;

    }

    

}



$mailer = new Mailer();



$mailer->LoadParams(

	array(

		'email'=>$to=current(mysql_fetch_array(mysql_query("select email from contacts where id=(select id from lang where nome='".($_SESSION['lingua']?$_SESSION['lingua']:'pt')."')"))),

		'subject'=>sprintf($email['message']['subject'],ucfirst($_SERVER['SERVER_NAME'])).': '.$_POST['contact']['subject'],

		'message'=>sprintf(

			$email['message']['body'],

			strip_tags($_POST['contact']['name']),

			strip_tags($_POST['contact']['email']),

			strip_tags($_POST['contact']['subject']),

			$_SESSION['lingua'],

			nl2br(strip_tags($_POST['contact']['message']))

		),

		'name'=>strip_tags($_POST['contact']['name'])

	)

);



if($mailer->run($to))

{



	//Workaround para poupar codigo

	ob_start();

	include(dirname(dirname(__FILE__)).'/lingua/'.current(mysql_fetch_row(mysql_query('select nome from lang order by pos limit 1'))).'.php');

	

	$mailer->LoadParams(

		array(

			'email'=>$to,

			'subject'=>sprintf($email['confirm']['subject'],ucfirst($_SERVER['SERVER_NAME'])).': '.strip_tags($_POST['contact']['subject']),

			'message'=>sprintf($email['confirm']['body'],nl2br(strip_tags($_POST['contact']['message']))),

			'name'=>ucfirst(current(explode('.',$_SERVER['SERVER_NAME'])))

		)

	);

	$mailer->run($_POST['contact']['email']);

	ob_end_clean();

}*/

if (

!preg_match('/^(?:[a-f\d]{32}|[a-z\d]{26})$/i', $_COOKIE[session_name() ])
 || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest'
 || strtolower($_SERVER['SERVER_PROTOCOL']) === 'http/1.0'
)

{

    // header('Location: /',302);
    die('{"success": false, "errors": [{"error": "refresh"}]}');

}

session_start();

include ($path = $_SERVER['DOCUMENT_ROOT'] . '/bd/bd.php');

include (dirname(dirname(__FILE__)) . '/lingua/' . ($_SESSION['lingua'] ? $_SESSION['lingua'] : $_SESSION['lingua'] = current(mysql_fetch_row(mysql_query('select name from lang order by pos limit 1')))) . '.php');

include (ROOT . 'php/setup/setup.php');

// header('Content-Type: application/json; charset=utf-8', true);


require_once (ROOT_FRONT . '/general/functions.php');

// time based heuristics
if (isset($_SESSION['spam']))

{

    $fails = array();

    $diff = array();

    if (count($_SESSION['spam']['send_tries']) > 1)

    {

        ksort($_SESSION['spam']['send_tries']);

        foreach (array_reverse($_SESSION['spam']['send_tries'], true) as $time => $success)

        {

            if ($success)

            {

                break;

            }

            if (isset($fails[0]))

            {

                $diff[] = current($fails) - $time;

            }

            $fails[] = $time;

        }

    }

    if (

    !$_SESSION['spam']['first_access'] // didnt access index.php
     || !$_SESSION['spam']['last_access'] // didnt access index.php
     || (time() - $_SESSION['spam']['first_access']) <= 11 // too quick for an human writing properly
     || (

    count($fails) >= 3 // there were 3 or more failed attempts
     && array_sum($diff) <= 20 // the sum of the time difference between tries is up to 20 seconds
    )
 || (

    count($fails) >= 5 // there were 5 or more failed attempts
     && array_sum($diff) <= 3600 // the sum of the time difference between tries is up to 1 hour
    )
)

    {

        @mysql_query('

			insert into

				ip_sends (`ip`, `max`, `emails`)

				values ("' . $_SERVER['REMOTE_ADDR'] . '", 0, ' . count($_SESSION['spam']['send_tries']) . ')

			on duplicate key

				update emails = ' . count($_SESSION['spam']['send_tries']) . ', `max` = 0

		');

    }

    $_SESSION['spam']['last_try']['contact'] = time();

}

else

{

    $_SESSION['spam'] = array(

        'first_access' => null,

        'last_access' => null,

        'last_try' => array(

            'contact' => time()

        ) ,

        'send_tries' => array()

    );

}

$_SESSION['spam']['send_tries'][$_SESSION['spam']['last_try']['contact']] = false;

if (!preg_match('/^[a-z\d][a-z\d._%\-]+@[a-z\d.\-]+\.[a-z]{2,4}$/i', $_POST['contact']['email']))

die('{"success": false, "errors": [{ "field": "email", "error": "invalid"}]}');

if (!$_POST['contact']['message'])

die('{"success": false, "errors": [{ "field": "message", "error": "empty"}]}');

/*if(!preg_match('/^[A-Za-z ]+$/',$_POST['contact']['name']))

	die('{"success": false, "errors": [{ "field": "name", "error": "empty"}]}');*/

// deixa links passar: $regex='@(?:(?:[a-z]+:\/\/[\d]+|(?:[a-z]+:\/\/)?[\d]+[\\\/])|(?:[a-z]+:\/\/(?:(?:[012]\d{1,2}|[1-9])\.){3}(?:[012]\d{1,2}|[1-9]))|(?:(?:[a-z]+:\/\/)?(?:www\.)?[a-z\-\d]+\.(?:[a-z]{2}|biz|co(?:m?(?:\.[a-z]{2})?)?|ed?u|in(?:fo|t)|gov|mil|net|org|xxx)))(?:[^a-z\d]|$)@i';
$regex = '@https?\s*:|www\s*\.|[a-z\-\d]+\s*\.\s*(?:biz|co(?:m?(?:\s*\.\s*[a-z]{2})?)?|ed?u|in(?:fo|t)|gov|mil|net|org|top|xxx|[a-z]{2})@i';

if (preg_match($regex, $_POST['contact'][$f = 'name']) || preg_match($regex, $_POST['contact'][$f = 'message']) || preg_match($regex, $_POST['contact'][$f = 'subject']))

die('{"success": false, "errors": [{ "field": "' . $f . '", "error": "spam", "type": "link"}]}');

if (current((array)@mysql_fetch_assoc(mysql_query('select day(`time`)=day(now()) and `max`<=`emails` from ip_sends where ip="' . ($_SERVER['REMOTE_ADDR'] = mysql_real_escape_string($_SERVER['REMOTE_ADDR'])) . '"'))))

die('{"success": false, "errors": [{ "error": "spam", "type": "ip"}]}');
/*$regex='(black (?:fri)?day|buy(?:er| now)|bank(?: account)?|babyliss|cialis|earn(?:ing)?(?: (?:more|extra))?|fake(?: (?:cloth|watch|shoe))|(?:(?:add|few(?: more)|inc(?:rease|\.)?) )inch(?:es)?|increase(?: (?:your )?income)?|pills?|(?:on )?sales?|(?:re)?sell(?:ers?)?|send (?:us )?(?:your? )?(?:bank|(?:the )amm?ount)|viagra)';

if(preg_match('/'.$regex.'/',$_POST['contact'][$f='name'],$m)||preg_match('/'.$regex.'/',$_POST['contact'][$f='message'],$m)||preg_match('/'.$regex.'/',$_POST['contact'][$f='subject'],$m))

	die('{"success": false, "errors": [{ "field": "'.$f.'", "error": "spam", "type": "text", "word": "'.$m[1].'"}]}');*/

$site = mysql_fetch_assoc(mysql_query("select site.*,contacts.*,settings.* from site,contacts,settings where site.lang=(SELECT id FROM lang WHERE name='" . ($_SESSION['lingua'] ? $_SESSION['lingua'] : 'pt') . "') and site.lang=contacts.lang and site.id>0 and settings.id=1"));

if (!$_POST['contact']['privacy_policy'] && $site['show_privacy_policy']) {
    die('{"success": false, "errors": [{ "field": "privacy_policy", "error": "not_checked"}]}');
}

$site['version_number_n'] = + implode('',

array_map(

function ($v)
{

    return ($v < 10 ? 0 : '') . $v; //$v < 10
    
}
,

preg_split('@\.@', $site['version_number'])
)
);

$bd = new SQlite3(ROOT . 'c1s.sqlite3', SQLITE3_OPEN_READONLY);

$general = array(

    'site' => $bd->querySingle('select * from site where site="' . SERVER_NAME . '" or site=(select parked from parked where site="' . SERVER_NAME . '")', true) ,

    'exts' => array()

);

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

while ($ext = $exts_r->fetchArray(SQLITE3_ASSOC))

{

    if (!isset($general['exts'][$ext['ext_name']]) || $ext['site'] != '*')

    {

        $ext_settings_r = @mysql_query('select * from ext_' . $ext['ext_name'] . '_settings where id=1');

        if (!$ext_settings_r || !mysql_num_rows($ext_settings_r))

        {

            break;

        }

        $ext['settings'] = @mysql_fetch_assoc($ext_settings_r);

        mysql_free_result($ext_settings_r);

        $ext['enabled'] = (

        $ext['enabled']
 || ($ext['demo'] && $_SESSION['adm_lvl'])
 || ($ext['debug'] && $_SESSION['adm_lvl'] >= 5)
) && $ext['settings']['enabled'];

        $general['exts'][$ext['ext_name']] = $ext;

    }

}

$exts_r->finalize();

$bd->close();

if (

!isset($_SESSION['csrf_token'])
 || !isset($_POST['csrf_token'])
 || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])
)

{

    die('{"success": false, "errors": [{"error": "refresh"}]}');

}

// exit on outdated versions
if ($site['version_number_n'] >= 180520)

{

    if (

    isset($general['exts'])
 && $general['exts']['data']['enabled']
 && !isset($_POST['ext_data']['consentment'])
 && !$_POST['ext_data']['consentment']
)

    {

        die('{"success": false, "errors": [{ "error": "ext_data", "type": "consentment"}]}');

    }

}

if ($captcha = $site['contact_captcha'])

{

    function captcha($l = 'en')

    {

        $o = array(

            'pt' => array(
                'zero',
                'um',
                'dois',
                'tr&ecirc;s',
                'quatro',
                'cinco',
                'seis',
                'sete',
                'oito',
                'nove'
            ) ,

            'en' => array(
                'zero',
                'one',
                'two',
                'three',
                'four',
                'five',
                'six',
                'seven',
                'eight',
                'nine'
            ) ,

            'fr' => array(
                'z&eacute;ro',
                'un',
                'deux',
                'trois',
                'quatre',
                'cinq',
                'six',
                'sept',
                'huit',
                'neuf'
            ) ,

            'cz' => array(
                'nula',
                'jedna',
                'dva',
                'tri',
                'ctyri',
                'pet',
                '&scaron;est',
                'sedm',
                'osm',
                'devet'
            ) ,

            'ru' => array(
                'ноль',
                'один',
                'два',
                'три',
                'четыре',
                'пять',
                'шесть',
                'семь',
                'восемь',
                'девять'
            )

        );

        if (!$o[$l]) return false;

        $c = '+-x';

        $r = array(
            0,
            0
        );

        do

        {

            $q = $o[$l][$r[0] = mt_rand(0, 9) ] . ' ' . ($x = $c[mt_rand(0, 2) ]) . ' ' . $o[$l][$r[1] = mt_rand(0, 9) ];

            switch ($x)

            {

                case '+':

                    $n = $r[0] + $r[1];

                break;

                case '-':

                    $n = $r[0] - $r[1];

                break;

                case 'x':

                    $n = $r[0] * $r[1];

                break;

            }

        }

        while ($n < 0 || $n > 9);

        return array(
            $q,
            $o[$l][$n],
            $n
        );

    }

    if (

    $_SESSION['answer_contact']['str'] !== strtolower(trim($_POST['contact']['captcha']))
 && ($_SESSION['answer_contact']['int'] != $_POST['contact']['captcha'])
)

    {

        $a = captcha($_SESSION['lingua']);

        while (

        // answer from the new captcha is the same as the old one
        ($a[2] / 1 === $_SESSION['answer_contact']['int'] / 1)

        // new answer is the same as the sent answer
         || ($a[1] === strtolower(trim($_POST['contact']['captcha'])))
 || ($a[2] == $_POST['contact']['captcha'])
)

        {

            $a = captcha($_SESSION['lingua']);

        }

        $_SESSION['answer_contact'] = array(
            'str' => $a[1],
            'int' => $a[2]
        );

        die('{"errors":[{"field":"captcha","error":"wrong_captcha"}],"new_captcha":"' . $a[0] . '"}');

    }

}

class Mailer
{

    private $_params;

    private $_errors;

    private $regen = 0;

    private $lang = 'pt';

    public function __construct($p = null)
    {

        $this->LoadParams($p);

        $this->_errors = array();

    }

    public function run($e = null, $m = null)
    {

        if ($this->Validate($e))
        {

            $res = $this->SendEmail($e, $m);

            if ($res === true)

            $this->OnSuccess();

            else

            $this->OnError();

            return $res;

        }
        else

        $this->OnError();

    }

    public function LoadParams($p = null, $n = 0, $l = 'en')
    {

        $this->regen = $n;

        $this->lang = $l;

        return !!$this->_params = $p ? $p : $_POST['contact'];

    }

    private function Validate($e = null)
    {

        /*if(!(isset($this->_params['name']) && $this->_params['name'] != ''))*/

        $this->_errors = array();

        if ((!isset($this->_params['name'])) || !$this->_params['name'])

        $this->_errors['name'] = 'empty';

        if ((!isset($this->_params['email'])) || !$this->_params['email'])

        $this->_errors['email'] = 'empty';

        else if ($e)
        {

            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

            if (!preg_match($email_exp, $e))

            $this->_errors['email'] = 'invalid';

        }

        else
        {

            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

            if (!preg_match($email_exp, $this->_params['email']))

            $this->_errors['email'] = 'invalid';

        }

        if ((!isset($this->_params['subject'])) || !$this->_params['subject'])

        $this->_errors['subject'] = 'empty';

        if ((!isset($this->_params['message'])) || !$this->_params['message'])

        $this->_errors['message'] = 'empty';

        return (count($this->_errors) === 0);

    }

    private function SendEmail($e = null, $m = null)
    {

        $headers =

        'From: "' . $this->_params['name'] . '" <' . $this->_params['email'] . ">\r\n" .

        'Reply-To: ' . ($this->_params['reply'] ? $this->_params['reply'] : $this->_params['email']) . "\r\n" .

        "Content-type: text/html; charset=utf-8\r\n" .

        'X-Mailer: PHP/' . phpversion();

        //foreach(array('stripslashes','if'=>function($c,$t,$f){return$c?$t:$f;},'var_dump')as$k=>$v)$k&&!$k/1==$k?$$k=$v:$$v=$v;
        $this->_params['subject'] = stripslashes($this->_params['subject']);

        $this->_params['message'] = $m ? $m : stripslashes($this->_params['message']);

        $m = <<<EMAIL

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">

		<title>{$this->_params['subject_prefix']}{$this->_params['subject']}</title>

	</head>

	<body>

		{$this->_params['message']}

	</body>

</html>

EMAIL;
        

        return send_mail($e ? $e : $this->_params['email'], stripslashes($this->_params['subject_prefix'] . $this->_params['subject']) , $m, $headers);

    }

    private function OnSuccess()
    {

        if ($this->regen && function_exists('captcha'))

        {

            $a = captcha($this->lang);

            while (

            // answer from the new captcha is the same as the old one
            ($a[2] / 1 === $_SESSION['answer_contact']['int'] / 1)

            // new answer is the same as the sent answer
             || ($a[1] === strtolower(trim($_POST['contact']['captcha'])))
 || ($a[2] == $_POST['contact']['captcha'])
)

            {

                $a = captcha($this->lang);

            }

            $_SESSION['answer_contact'] = array(
                'str' => $a[1],
                'int' => $a[2]
            );

            echo '{"success": true,"new_captcha":"', $a[0], '"}';

        }

        else echo '{"success": true}';

    }

    private function OnError()
    {

        $response = '{';

        $response .= '"success": false, "errors": [';

        foreach ($this->_errors as $key => $value)
        {

            $response .= "{ \"field\": \"$key\", \"error\": \"$value\"},";

        }

        if (count($this->_errors) > 0)

        $response = substr($response, 0, -1);

        if ($this->regen && function_exists('captcha'))

        {

            $a = captcha($this->lang);

            while (

            // answer from the new captcha is the same as the old one
            ($a[2] / 1 === $_SESSION['answer_contact']['int'] / 1)

            // new answer is the same as the sent answer
             || ($a[1] === strtolower(trim($_POST['contact']['captcha'])))
 || ($a[2] == $_POST['contact']['captcha'])
)

            {

                $a = captcha($this->lang);

            }

            $_SESSION['answer']['contact'] = array(
                'str' => $a[1],
                'int' => $a[2]
            );

            $response .= '],"new_captcha":"' . $a[0] . '"}';

        }

        else $response .= ']}';

        echo $response;

    }

}

$mailer = new Mailer();

ob_start();

include (dirname(dirname(__FILE__)) . '/lingua/' . current(mysql_fetch_row(mysql_query('select name from lang order by pos limit 1'))) . '.php');

$email_html = require (ROOT_FRONT . 'root/email_structure.php');

$mailer->LoadParams(

array(

    'email' => $to = current(mysql_fetch_array(mysql_query("select email from contacts where id=(select id from lang where name='" . ($_SESSION['lingua'] ? $_SESSION['lingua'] : 'pt') . "')"))) ,

    'reply' => $_POST['contact']['email'],

    'subject_prefix' => '',

    'subject' => sprintf($email['confirm']['subject'], ucfirst($_SERVER['SERVER_NAME'])) ,

    'message' => sprintf(

    $email_html['message'],

    sprintf($email['confirm']['subject'], ucfirst($_SERVER['SERVER_NAME'])) ,

    sprintf(

    $email['message']['body'],

    strip_tags($_POST['contact']['name']) ,

    strip_tags($_POST['contact']['email']) ,

    strip_tags($_POST['contact']['subject']) ,

    $_SESSION['lingua'],

    nl2br(strip_tags($_POST['contact']['message']))
)
) ,

    'name' => '=?utf-8?B?' . base64_encode(strip_tags($_POST['contact']['name'])) . '?='

) , 0
);

if ($mailer->run($to))

{

    ob_end_clean();

    //Workaround para poupar codigo
    include (dirname(dirname(__FILE__)) . '/lingua/' . ($_SESSION['lingua'] = $_SESSION['lingua'] ? $_SESSION['lingua'] : current(mysql_fetch_row(mysql_query('select name from lang order by pos limit 1')))) . '.php');

    $email_html = require ('/home/worldwid/public_html/c1s/php/front/root/email_structure.php');

    /*$mailer->LoadParams(
    
    array(
    
    'email'=>$to,
    
    'subject_prefix'=>'',
    
    'subject'=>sprintf($email['confirm']['subject'],ucfirst($_SERVER['SERVER_NAME'])),
    
    'message'=>'<img src="http://'.$_SERVER['SERVER_NAME'].'/images/logo.png" alt="Logo"/><br/>'.
    
    sprintf(utf8_encode($email['confirm']['body']),nl2br(strip_tags($_POST['contact']['message']))),
    
    'name'=>ucfirst(current(explode('.',$_SERVER['SERVER_NAME'])))
    
    ),1,$_SESSION['lingua']
    
    );*/

    $mailer->LoadParams(

    array(

        'email' => $to,

        'subject_prefix' => '',

        'subject' => sprintf($email['confirm']['subject'], ucfirst($_SERVER['SERVER_NAME'])) ,

        'message' => sprintf(

        $email_html['confirm'],

        sprintf($email['confirm']['subject'], ucfirst($_SERVER['SERVER_NAME'])) ,

        sprintf($email['confirm']['body'], nl2br(strip_tags($_POST['contact']['message'])))
) ,

        'name' => ucfirst(current(explode('.', $_SERVER['SERVER_NAME'])))

    ) , 1, $_SESSION['lingua']
);

    $mailer->run($_POST['contact']['email']);

    if (mysql_num_rows($contacts_r = mysql_query('select id,message from crm_contacts where email="' . mysql_real_escape_string($_POST['contact']['email']) . '"')))

    {

        while ($contacts = mysql_fetch_assoc($contacts_r))

        {

            $contacts['message'] .= "\r\n[" . date('d-m-Y H:i:s') . "]\r\n" . strip_tags($_POST['contact']['subject'] . ': ' . $_POST['contact']['message']);

            if ($site['version_number_n'] >= 180520 && isset($general['exts']['data']) && $general['exts']['data']['enabled'])

            {

                @mysql_query('update crm_contacts set message="' . mysql_real_escape_string($contacts['message']) . '", ext_data_consentment="' . (+!!$_POST['ext_data']['consentment']) . '"  where id=' . $contacts['id']);

            }

            else

            {

                @mysql_query('update crm_contacts set message="' . mysql_real_escape_string($contacts['message']) . '" where id=' . $contacts['id']);

            }

        }

    }

    else

    {

        if ($site['version_number_n'] >= 180520 && isset($general['exts']['data']) && $general['exts']['data']['enabled'])

        {

            mysql_query(

            sprintf(

            'insert into crm_contacts (`email`,`name`,`message`,lang,`date`,ip,source,ext_data_consentment) values("%s","%s","%s",%d,now(),"%s","contact",%d)',

            mysql_real_escape_string($_POST['contact']['email']) ,

            mysql_real_escape_string($_POST['contact']['name']) ,

            mysql_real_escape_string(strip_tags($_POST['contact']['subject'] . ': ' . $_POST['contact']['message'])) ,

            current(mysql_fetch_row(mysql_query('select id from lang where name="' . $_SESSION['lingua'] . '"'))) ,

            $_SERVER['REMOTE_ADDR'],

            !!$_POST['ext_data']['consentment']
)
);

        }

        else

        {

            mysql_query(

            sprintf(

            'insert into crm_contacts (`email`,`name`,`message`,lang,`date`,ip,source) values("%s","%s","%s",%d,now(),"%s","contact")',

            mysql_real_escape_string($_POST['contact']['email']) ,

            mysql_real_escape_string($_POST['contact']['name']) ,

            mysql_real_escape_string(strip_tags($_POST['contact']['subject'] . ': ' . $_POST['contact']['message'])) ,

            current(mysql_fetch_row(mysql_query('select id from lang where name="' . $_SESSION['lingua'] . '"'))) ,

            $_SERVER['REMOTE_ADDR']
)
);

        }

    }

}

$_SESSION['spam']['send_tries'][$_SESSION['spam']['last_try']['contact']] = true;

@mysql_query('

	insert into

		ip_sends (`ip`,`max`,`emails`)

		values ("' . $_SERVER['REMOTE_ADDR'] . '",5+(rand()*5),1)

	on duplicate key

		update emails=(select `emails`*(day(`time`)=day(now())) from (select * from ip_sends where ip="' . $_SERVER['REMOTE_ADDR'] . '") a)+1

');

