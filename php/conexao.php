<?php

$usuario = 'postgres';
$senha = '1234';
$database = 'resirevive';
$host = 'localhost';

try {
    $conn = new PDO("pgsql:host=$host;dbname=$database;user=$usuario;password=$senha");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Falha ao conectar ao banco de dados: ' . $e->getMessage());
}
?>
