<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/twig_loader.php';

$twig = get_twig(PUBLIC_PATH . '/templates');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if ($name && $email && $message) {
        $entry = date('c') . "\t$name\t$email\t" . str_replace(["\r", "\n"], ' ', $message) . "\n";
        file_put_contents(__DIR__ . '/data/messages.log', $entry, FILE_APPEND);
        $success = true;
    } else {
        $error = 'All fields are required';
    }
    echo $twig->render('contact.twig', ['error' => $error ?? null, 'success' => $success ?? false]);
    return;
}

echo $twig->render('contact.twig');

