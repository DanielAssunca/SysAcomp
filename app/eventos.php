<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    protected $fillable = [
        "data_evento", "logo_evento", "site_evento", "site_entidade", "nome",
        "localevento"
    ];
    protected $table = "eventos";
    ///Aqui em baixo é o relacionamento 1:N UM CLIENTE PODE TER VARIOS EVENTOS (belongsTo)
    public function clientes(){
        return $this->belongsTo('App\clientes', 'clientes_id');
    }
      //OPOSTO DO DE CIMA!
     ///Aqui em baixo é o relacionamento 1:N UM EVENTO PODE TER VARIOS CONTATOS(hasMany)
    public function contatos(){
        return $this->hasMany('App\contatos', 'eventos_id');
    }

}
