<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = [
      "nome", "email", "telefone", "tipocliente", "cep",
      "logradouro", "cidade", "bairro", "numero"
    ];
    protected $table = "clientes";
}

