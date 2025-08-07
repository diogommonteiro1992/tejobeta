<?
header('Content-type: text/javascript');
include("../bd/bd.php");
$l=mysql_query("select lang.name, (select twitter from contacts where contacts.lang=lang.id) as twitter, (select type_activity from site where site.lang=lang.id) as type_activity, (select count(id) and settings.active_activity from activities where active) as active_activity from lang,settings where lang.id='".((int)$_GET['l'])."' and lang.name='".mysql_real_escape_string($_GET['d'])."' and lang.active");
if(!$l)
{
	$l=mysql_query('select lang.name, (select twitter from contacts where contacts.lang=lang.id) as twitter, (select type_activity from site where site.lang=lang.id) as type_activity, (select count(id) and settings.active_activity from activities where active) as active_activity from lang,settings where lang.active order by pos limit 1');
}

$lingua=mysql_fetch_assoc($l);

include('/home/worldwid/public_html/c1s/php/front/lingua/'.$lingua['name'].'.php');
include('/home/worldwid/public_html/c1s/php/front/root/script.js.php');
?>