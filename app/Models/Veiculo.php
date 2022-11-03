<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    public function modelo(): Attribute
    {
        return new Attribute(
            get: fn ($valor) => $valor . " - XPTO2",
            set: fn ($valor) => $valor . "Modificado no Mutator"
        );
    }

    public function nomeCompleto(): Attribute
    {
        return new Attribute(
            get: fn ($valor, $attributes) => $attributes['fabricante'] . ': ' . $attributes['modelo']
        );
    }

    // Modelo antigo...

    // public function getDisponivelEmAttribute()
    // {
    //     $dataCarbon = new Carbon($this->attributes['disponivel_em']);
    //     return $dataCarbon->format('d/m/Y');
    // }

    // public function setModeloAttribute($valor)
    // {
    //     $this->attributes['modelo'] = strtoupper($valor);
    // }
}
