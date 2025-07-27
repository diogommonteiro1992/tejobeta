<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/twig_loader.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';
    // Simplified auth - replace with secure check
    if ($user === 'admin' && $pass === 'admin') {
        $_SESSION['admin'] = true;
        header('Location: dashboard.php');
        exit;
    }
    $error = 'Invalid credentials';
}

$twig = get_twig(__DIR__ . '/templates');
echo $twig->render('login.twig', ['error' => $error ?? null]);
