<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

class Endereco extends DataLayer
{
    public function __construct()
    {
        parent::__construct('endereco', ["user_id"], "id", false);
    }

    public function add(User $user, string $rua, string $numero): Endereco
    {
        $this->user_id = $user->id;
        $this->rua = $rua;
        $this->numero = $numero;

        return $this;;
    }

}