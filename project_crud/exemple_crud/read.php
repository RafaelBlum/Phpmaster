<?php

require __DIR__. "/../vendor/autoload.php";

use Source\Models\User;


/*$conexao = Connect::getInstance(); // Pego a conexão com banco mysql
$error = Connect::getError();      // Pego aqui os erros gerados

if($error){
    echo $error->getMessage();
    die();
}

$query = $conexao->query("SELECT * FROM USERS");

var_dump($query->fetchAll());*/

$user = new User();
$list  = $user->find()->fetch(true);

/** @var $use User */
foreach ($list as $use){
    var_dump($use->data());
    foreach ($use->addEndereco() as $end){
        var_dump($end->data());
    }
}