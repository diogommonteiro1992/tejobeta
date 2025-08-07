<?php
header('Content-Type: text/html', true, 200);
session_id($_POST[session_name()]);
session_start();
include '../bd/bd.php';
include('/home/worldwid/public_html/c1s/php/front/general/recruit_upload.php');
?>