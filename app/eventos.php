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

    public function clientes()
    {
        return $this->belongsTo('App\clientes', 'clientes_id');
    }
}
