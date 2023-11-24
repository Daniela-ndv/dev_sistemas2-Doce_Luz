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

//ROTAS PEDIDO
Route::get('/pedido', [PedidoController::class, 'index'])->name('pedido.index'); 
Route::get('/pedido/create', [PedidoController::class, 'create'])->name('pedido.create');
Route::post('/pedido', [PedidoController::class, 'store'])->name('pedido.store');
Route::get('/pedido/edit/{id}', [PedidoController::class, 'edit'])->name('pedido.edit');
Route::put('/pedido/update/{id}', [PedidoController::class, 'update'])->name('pedido.update');
Route::get('/pedido/destroy/{id}', [PedidoController::class, 'destroy'])->name('pedido.destroy');
Route::post('/pedido/search', [PedidoController::class, 'search'])->name('pedido.search');
Route::get('/pedido/chart/', [PedidoController::class, 'chart'])->name('pedido.chart');
Route::get('/pedido/report/', [PedidoController::class, 'report'])->name('pedido.report');

// ROTAS PRODUTO
Route::resource('/produto', ProdutoController::class);
Route::post('/produto/search', [ProdutoController::class, 'search'])->name('produto.search');


