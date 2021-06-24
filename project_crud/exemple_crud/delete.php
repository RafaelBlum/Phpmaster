<?php

require __DIR__ ."/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById("7");
$end = (new \Source\Models\Endereco())->findById("6");

if($end){
    $end->destroy();
}else{
    var_dump("USUÁRIO NÃO EXISTE!!! ::" . $user);
}


