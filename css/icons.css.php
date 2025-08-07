<?
	//http://www.php.net/manual/en/function.header.php --> codigo com base nos comments
	include('../bd/bd.php');
	$t=current(mysql_fetch_row(mysql_query('select unix_timestamp(max(last_modified)) as now from icons')));
    if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $_SERVER['HTTP_IF_MODIFIED_SINCE'] && (strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $t)) {
		header('Last-Modified: '.gmdate('D, d M Y H:i:s', $t).' GMT', true, 304);
    } else {
		header('Last-Modified: '.gmdate('D, d M Y H:i:s', $t).' GMT', true, 200);
		header('Content-Type: text/css');
		$result=mysql_query('select src,class from icons');
		while($row=mysql_fetch_assoc($result))
		{
			$css.=<<<EOCSS
.icons-$row[class]{
	background-image:url('/$row[src]') !important;
}\n
EOCSS;
		}
		header('Content-Length: '.strlen($css.="[class|=icons]{
	background-position: center center !important;
	background-size: 128px 128px !important;
	background-repeat: no-repeat !important;
}"));
		echo $css;
    }//[class|=icons] --> selecciona todos os que tenham a classe icons, num conjunto de classes divididas por -
?>