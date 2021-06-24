<?php

require  __DIR__. "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Endereco;

$user = new User();
$user->name = "Luane";
$user->sobrenome = "Martinez";
$user->genero = "feminino";

$user->save();

$end = new Endereco();
$end->add($user, "Lucas de oliveira", "333");
$end->save();


var_dump($user);