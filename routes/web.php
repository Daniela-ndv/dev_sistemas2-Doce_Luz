<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartaoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FormaPagamentoTipoCartaoController;
use App\Http\Controllers\ItemVendaController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TipoProdutoController;
use App\Http\Controllers\IndexController;
use App\Models\FormaPagamentoTipoCartao;


Route::get('/', [IndexController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {

    //ROTAS CARTÃO
    Route::get('/cartao', [CartaoController::class, 'index'])->name('cartao.index'); 
    Route::get('/cartao/create', [CartaoController::class, 'create'])->name('cartao.create');
    Route::post('/cartao', [CartaoController::class, 'store'])->name('cartao.store');
    Route::get('/cartao/edit/{id}', [CartaoController::class, 'edit'])->name('cartao.edit');
    Route::put('/cartao/update/{id}', [CartaoController::class, 'update'])->name('cartao.update');
    Route::get('/cartao/destroy/{id}', [CartaoController::class, 'destroy'])->name('cartao.destroy');
    Route::post('/cartao/search', [CartaoController::class, 'search'])->name('cartao.search');
    Route::get('/cartao/chart/', [CartaoController::class, 'chart'])->name('cartao.chart');
    Route::get('/cartao/report/', [CartaoController::class, 'report'])->name('cartao.report');

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

    //ROTAS PRODUTO
    Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index'); 
    Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');
    Route::post('/produto', [ProdutoController::class, 'store'])->name('produto.store');
    Route::get('/produto/edit/{id}', [ProdutoController::class, 'edit'])->name('produto.edit');
    Route::put('/produto/update/{id}', [ProdutoController::class, 'update'])->name('produto.update');
    Route::get('/produto/destroy/{id}', [ProdutoController::class, 'destroy'])->name('produto.destroy');
    Route::post('/produto/search', [ProdutoController::class, 'search'])->name('produto.search');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
