<?php

require __DIR__ ."/../vendor/autoload.php";

use Source\Models\User;


$user = (new User())->findById("1");
//$user->name = "Liane";
//$user->save();

$end = (new \Source\Models\Endereco())->findById("6");
$end->rua = "XXXXXXXXXXXXX";

$end->save();


var_dump($end->rua);