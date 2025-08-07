<?php
session_start();
if ($_SESSION) {
    session_destroy();
}
require '/home/worldwid/public_html/c1s/php/back/root/_index2.php';
?>