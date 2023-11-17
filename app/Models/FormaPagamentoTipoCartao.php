<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPagamentoTipoCartao extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function cartao(){ 
        //relacionamento 1 - n
        return $this->hasMany(Cartao::class);
    }

    public function pedido(){ 
        //relacionamento 1 - n
        return $this->hasMany(Pedido::class);
    }
}
