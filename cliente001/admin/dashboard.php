<?php
require_once __DIR__ . '/../.config.php';
require_once __DIR__ . '/../includes/twig_loader.php';

session_start();
if (!($_SESSION['user'] ?? false)) {
    header('Location: index.php');
    exit;
}

$twig = get_twig(__DIR__ . '/templates');
echo $twig->render('dashboard.twig');
