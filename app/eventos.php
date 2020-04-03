<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    protected $fillable = ["id","clientes_id",
         "data_evento", "logo_evento", "site_evento", "site_entidade", "nome",
        "localevento",  "cod_centro_de_custo"
    ];
    protected $table = "eventos";

    ///Aqui em baixo é o relacionamento 1:N UM CLIENTE PODE TER VARIOS EVENTOS (belongsTo)
    public function clientes(){
        return $this->belongsTo('App\clientes', 'clientes_id');
    }

    public function contatos(){
        return $this->hasMany('App\contatos', 'eventos_id');
    }

}
