<?php

require_once 'connect.php';

$sql = $conn->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");

$sql->bindValue(":nome", "teste1");
$sql->bindValue(":email", "teste1@gmail.com");
$sql->execute();