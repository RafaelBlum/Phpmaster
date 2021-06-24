<?php


namespace source\Models;
use Source\Models\Endereco;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", ["name", "sobrenome"]);
    }

    //CONECXÃO DAS TABELAS
    public function addEndereco()
    {
        return (new Endereco())->find("user_id = :uid", "uid={$this->id}")->fetch(true);
    }

}