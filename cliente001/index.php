<?php
require_once __DIR__ . '/.config.php';
require_once __DIR__ . '/includes/twig_loader.php';

function is_authorized()
{
    $url = ROOT_VALIDATOR . '?site_key=' . urlencode(SITE_KEY);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    if ($response) {
        $data = json_decode($response, true);
        return $data['status'] === 'active';
    }
    return false;
}

if (!is_authorized()) {
    echo 'Site not authorized';
    exit;
}

$twig = get_twig(TEMPLATE_PATH . '/default');
echo $twig->render('page.twig', ['content' => 'Hello World']);
