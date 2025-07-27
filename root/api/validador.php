<?php
require_once __DIR__ . '/../config.php';
header('Content-Type: application/json');

$siteKey = $_GET['site_key'] ?? '';
$clientIp = $_SERVER['REMOTE_ADDR'];

$mysqli = db_connect();
$stmt = $mysqli->prepare('SELECT status, allowed_ip FROM websites WHERE site_key = ?');
$stmt->bind_param('s', $siteKey);
$stmt->execute();
$result = $stmt->get_result();
if ($row = $result->fetch_assoc()) {
    if ($row['allowed_ip'] && $row['allowed_ip'] !== $clientIp) {
        $status = 'blocked';
    } else {
        $status = $row['status'];
    }
} else {
    $status = 'unknown';
}

echo json_encode(['status' => $status]);
