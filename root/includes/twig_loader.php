<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

function get_twig($path)
{
    $loader = new FilesystemLoader($path);
    $twig = new Environment($loader);
    return $twig;
}
