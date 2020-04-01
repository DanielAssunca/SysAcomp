<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contatos extends Model
{
    protected $fillable = [
        "nome", "email", "celular", "telefone", "skype", "modinscricoes"
    ];
    protected $table = "contatos";

    public function eventos()
    {
        return $this->belongsTo('App\eventos', 'eventos_id');
    }
}

