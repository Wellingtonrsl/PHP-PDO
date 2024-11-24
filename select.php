<?php

require_once "connect.php";

$sql = $conn->query("SELECT * FROM usuarios");

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
foreach ($dados as $key => $values) {
    echo "Registro $key:<br>";
    foreach ($values as $campo => $valor) {
        echo "$campo: $valor<br>";
    }
    echo "<br>";
}
