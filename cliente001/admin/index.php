<?php
require_once __DIR__ . '/../.config.php';
require_once __DIR__ . '/../includes/twig_loader.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';
    // Dummy check
    if ($user === 'client' && $pass === 'client') {
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
        exit;
    }
    $error = 'Invalid login';
}

$twig = get_twig(__DIR__ . '/templates');
echo $twig->render('login.twig', ['error' => $error ?? null]);
