<?php

require_once "connect.php";

$sql = $conn->prepare("UPDATE usuarios SET nome = :n, email = :e WHERE id = :id");

$sql->bindValue(":n", "work");
$sql->bindValue(":e", "work@gmail.com");
$sql->bindValue(":id", 1);

$sql->execute();
