<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartaoController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome');
});


// ROTAS CARTAO
    Route::get('/cartao',
        [CartaoController::class, 'index'])->name('cartao.index');

    //chama o formulário cartao
    Route::get('/cartao/create',
        [CartaoController::class, 'create'])->name('cartao.create');

    //realiza a ação de salvar os dados do fomulário
    Route::post('/cartao',
        [CartaoController::class, 'store'])->name('cartao.store');

    //chama o formulário para edição
    Route::get('/cartao/edit/{id}', //passar o ID na edição
        [CartaoController::class, 'edit'])->name('cartao.edit');

    //realiza a ação de atualizar os dados do formulário
    Route::put('/cartao/update/{id}',
        [CartaoController::class, 'update'])->name('cartao.update');

    //chama o método para excluir o registro
    Route::get('/cartao/destroy/{id}',
        [CartaoController::class, 'destroy'])->name('cartao.destroy');

    //chama o método search para pesquisar e filtar o registro da listagem
    Route::post('/cartao/search',
        [CartaoController::class, 'search'])->name('cartao.search');


// ROTAS PEDIDO
    Route::get('/pedido',
        [PedidoController::class, 'index'])->name('pedido.index');

    //chama o formulário pedido
    Route::get('/pedido/create',
        [PedidoController::class, 'create'])->name('pedido.create');

    //realiza a ação de salvar os dados do fomulário
    Route::post('/pedido',
        [PedidoController::class, 'store'])->name('pedido.store');

    //chama o formulário para edição
    Route::get('/pedido/edit/{id}', //passar o ID na edição
        [PedidoController::class, 'edit'])->name('pedido.edit');

    //realiza a ação de atualizar os dados do formulário
    Route::put('/pedido/update/{id}',
        [PedidoController::class, 'update'])->name('pedido.update');

    //chama o método para excluir o registro
    Route::get('/pedido/destroy/{id}',
        [PedidoController::class, 'destroy'])->name('pedido.destroy');

    //chama o método search para pesquisar e filtar o registro da listagem
    Route::post('/pedido/search',
        [PedidoController::class, 'search'])->name('pedido.search');
