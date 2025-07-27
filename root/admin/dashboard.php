<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/twig_loader.php';

session_start();
if (!($_SESSION['admin'] ?? false)) {
    header('Location: login.php');
    exit;
}

$mysqli = db_connect();
$result = $mysqli->query('SELECT id, domain, status FROM websites');
$sites = $result ? $result->fetch_all(MYSQLI_ASSOC) : [];

$twig = get_twig(__DIR__ . '/templates');
echo $twig->render('dashboard.twig', ['sites' => $sites]);
