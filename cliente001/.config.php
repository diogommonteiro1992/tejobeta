<?php
// Client specific configuration

define('CLIENT_PATH', __DIR__);
define('TEMPLATE_PATH', CLIENT_PATH . '/templates');

define('DB_HOST', 'localhost');
define('DB_USER', 'client');
define('DB_PASS', 'password');
define('DB_NAME', 'client_site');

define('SITE_KEY', 'ABC123');
define('ROOT_VALIDATOR', 'https://rootserver.com/api/validador.php');

function db_connect() {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($mysqli->connect_error) {
        die('DB Connection failed: ' . $mysqli->connect_error);
    }
    return $mysqli;
}
