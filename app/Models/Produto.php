<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'tipo_id',
        'codigo',
        'valorCusto',
        'valorVenda',
        'descricao',
        'imagem',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'valorCusto' => 'decimal:2',
        'valorVenda' => 'decimal:2',
    ];

    public function tipo_produto(){
        //relacionamento 1 - 1
        return $this->belongsTo(TipoProduto::class,
        'tipo_id','id');
    }

    public function item_venda(){ 
        //relacionamento 1 - n
        return $this->hasMany(ItemVenda::class);
    }

    public function pedidos(){
        //relacionamento n - n 
        return $this->belongsToMany(Pedido::class,
            'item_venda','id');
    }//'item_venda': tabela intermediária
}
