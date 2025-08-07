<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/bd/bd.php';
include '/home/worldwid/public_html/c1s/php/front/extensions/newsletter/ajax/' . preg_replace('/[^a-z_\-]/', '', $_REQUEST['f']) . '.php';
?>