<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemVenda extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pedido_id',
        'produto_id',
        'quantidade',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function pedido(){
        //relacionamento 1 - 1
        return $this->belongsTo(Pedido::class,
        'pedido_id','id');
    }

    public function produto(){
        //relacionamento 1 - 1
        return $this->belongsTo(Produto::class,
        'produto_id','id');
    }
}
