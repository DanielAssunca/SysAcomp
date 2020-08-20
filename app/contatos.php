<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contatos extends Model
{
    protected $fillable = [
        "id",
        "nome", "email", "celular", "telefone", "skype", "modinscricoes"
    ];
    //"eventos_id"
    //protected $table = "contatos";

    //public function evento(){
        //return $this->belongsTo('App\eventos', 'eventos_id');
    //}
}
