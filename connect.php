<?php

try{

    $pdo = new PDO("mysql:dbname=dbpdo, host=localhost", "root", "");

}catch(Exception $e){

    echo"Erro ao conectar " . $e;

}
