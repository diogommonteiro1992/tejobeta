<?php
require_once __DIR__ . '/../.config.php';
require_once __DIR__ . '/../includes/twig_loader.php';

session_start();
if (!($_SESSION['user'] ?? false)) {
    header('Location: index.php');
    exit;
}

$mysqli = db_connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $css = $_POST['css'] ?? '';
    $stmt = $mysqli->prepare('UPDATE custom_css SET css=? WHERE id=1');
    $stmt->bind_param('s', $css);
    $stmt->execute();
}

$result = $mysqli->query('SELECT css FROM custom_css WHERE id=1');
$row = $result->fetch_assoc();
$css = $row['css'] ?? '';

$twig = get_twig(__DIR__ . '/templates');
echo $twig->render('dashboard.twig', ['css' => $css]);
