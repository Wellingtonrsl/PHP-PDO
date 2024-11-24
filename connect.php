<?php

try {

$conn = new PDO("mysql:dbname=db_pdo;host=localhost", "root", "");

} catch (Exception $e) {
echo "Erro ao conectar com o Banco de Dados! ".$e;
}

