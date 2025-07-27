<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/twig_loader.php';

$twig = get_twig(PUBLIC_PATH . '/templates');

echo $twig->render('home.twig');
