<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartaoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;

use App\Http\Controllers\FormaPagamentoTipoCartaoController;
use App\Http\Controllers\ItemVendaController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TipoProdutoController;
use App\Models\FormaPagamentoTipoCartao;


Route::get('/', function () {
    return view('index');
});

//ROTAS CARTÃO
Route::resource('/cartao', CartaoController::class);
Route::post('/cartao/search', [CartaoController::class, 'search'])->name('cartao.search');

// ROTAS PEDIDO
Route::resource('/pedido', PedidoController::class);
Route::post('/pedido/search', [PedidoController::class, 'search'])->name('pedido.search');

// ROTAS PRODUTO
Route::resource('/produto', ProdutoController::class);
Route::post('/produto/search', [ProdutoController::class, 'search'])->name('produto.search');


