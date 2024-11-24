<?php

require_once "connect.php";


$res = $conn->prepare("DELETE FROM usuarios WHERE id = :id");
$res->bindValue(":id", "3");
$res->execute();
if ($res != '') {
    echo "Excluido com sucesso!!";
}
