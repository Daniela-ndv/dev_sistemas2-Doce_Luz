<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo_id',
        'nomeTitular',
        'numeroCartao',
        'dataValidade',
        'codigoSeguranca',
        'imagem',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        //'dataValidade' => 'date',
    ];

    public function tipo_cartao(){
        //relacionamento 1 - 1
        return $this->belongsTo(FormaPagamentoTipoCartao::class,
        'tipo_id','id');
    }

    /*public function usuario(){
        //relacionamento 1 - 1
        return $this->belongsTo(User::class,
        'usuario_id','id');
    }*/

    public function pedido(){
        //relacionamento 1 - n
        return $this->hasMany(Pedido::class);
    }
}
