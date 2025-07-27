<?php
// Global configuration for root server

define('ROOT_PATH', __DIR__);

define('PUBLIC_PATH', ROOT_PATH . '/public');
define('ADMIN_PATH', ROOT_PATH . '/admin');
define('API_PATH', ROOT_PATH . '/api');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'root_platform');

define('ADMIN_2FA_CODE', '123456');

// Simple function to connect using MySQLi
function db_connect() {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($mysqli->connect_error) {
        die('DB Connection failed: ' . $mysqli->connect_error);
    }
    return $mysqli;
}
