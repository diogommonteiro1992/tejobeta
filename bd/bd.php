<?php
// Conexão com a base de dados usando mysqli para compatibilidade com PHP 8
include "config.php";

$conn = new mysqli($server, $user, $password, $nome_bd);
if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}
