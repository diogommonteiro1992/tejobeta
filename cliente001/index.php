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

$mysqli = db_connect();
$css = '';
$result = $mysqli->query('SELECT css FROM custom_css WHERE id=1');
if ($row = $result->fetch_assoc()) {
    $css = $row['css'];
}

$twig = get_twig(TEMPLATE_PATH . '/default');
echo $twig->render('page.twig', [
    'content' => 'Hello World',
    'custom_css' => $css
]);
