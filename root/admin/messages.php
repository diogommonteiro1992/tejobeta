<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/twig_loader.php';

session_start();
if (!($_SESSION['admin'] ?? false)) {
    header('Location: login.php');
    exit;
}

$messages = [];
$logFile = __DIR__ . '/../data/messages.log';
if (file_exists($logFile)) {
    $lines = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        list($date, $name, $email, $msg) = explode("\t", $line, 4);
        $messages[] = ['date' => $date, 'name' => $name, 'email' => $email, 'message' => $msg];
    }
}

$twig = get_twig(__DIR__ . '/templates');
echo $twig->render('messages.twig', ['messages' => $messages]);

