<?php
session_start();
require 'bd/bd.php';

header('X-UA-Compatible: IE=edge,chrome=1'); //NAO RETIRAR!!!!! OBRIGATORIO PRA FUNCIONAR NO IE!!!!!!!

$high = @is_file('high.style'); //DEFINE SE SE UTILIZA OU NAO O ESTILO MAIS ALTO

require '/home/worldwid/public_html/c1s/php/front/root/_index.php';?>