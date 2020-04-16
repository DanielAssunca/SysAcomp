<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acompanhamentos extends Model
{
    protected $fillable = [
        "id",
        "clientes_id", "usuarios_id", "data_acompanhamento", "regras_de_acordo", "parcelamento_de_acordo", "categorias_de_acordo",
        "certificados_de_acordo", "deadlines_de_acordo", "planos_igualsite", "vencimento_de_acordo", "tickets", "reclamações"

    ];
    protected $table = "acompanhamentos";

    public function clientes(){
        return $this->belongsTo('App\clientes', 'clientes_id');
    }
}
