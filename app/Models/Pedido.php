<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario_id',
        'produto_id',
        'quantidade',
        'forma_pagamento_id',
        'cartao_id',
        'status_id',
        'observacao',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function produto(){
        //relacionamento 1 - 1
        return $this->belongsTo(Produto::class,
        'produto_id','id');
    }

    public function usuario(){
        //relacionamento 1 - 1
        return $this->belongsTo(User::class,
        'usuario_id','id');
    }

    public function formaPagamento(){
        //relacionamento 1 - 1
        return $this->belongsTo(FormaPagamentoTipoCartao::class,
        'forma_pagamento_id','id');
    }

    public function status(){
        //relacionamento 1 - 1
        return $this->belongsTo(Status::class,
        'status_id','id');
    }

    public function cartao(){
        //relacionamento 1 - 1
        return $this->belongsTo(Cartao::class,
        'cartao_id','id');
    }

    public function item_venda(){
        //relacionamento 1 - n
        return $this->hasMany(ItemVenda::class);
    }

    public function produtos(){
        //relacionamento n - n
        return $this->belongsToMany(Produto::class,
            'item_venda','id');
    }//'item_venda': tabela intermediária
}
