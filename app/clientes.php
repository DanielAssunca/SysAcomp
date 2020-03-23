<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class clientes extends Model
{
    protected $fillable = ["id",
      "nome", "email", "telefone", "tipocliente"
    ];
    protected $table = "clientes";
}

