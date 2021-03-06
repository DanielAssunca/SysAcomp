<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class clientes extends Model
{
    protected $fillable = ["id",
      "nome", "email", "telefone", "tipocliente", "customizacoes", "observacoes",
      "cep", "rua", "bairro", "cidade", "uf", "ibge"
    ];
    protected $table = "clientes";

    public function eventos(){
        return $this->hasMany('App\eventos', 'clientes_id');
    }


    public function acompanhamentos(){
        return $this->hasMany('App\acompanhamentos', 'clientes_id');
    }


}

