<?php

require_once 'connect.php';

$sql = $conn->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");

$sql->bindValue(":nome", "teste");
$sql->bindValue(":email", "teste@gmail.com");
$sql->execute();