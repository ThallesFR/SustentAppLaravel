<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function() {
    Route::get('',[PagesController::class,'index'])->name('index');
    Route::get('info',[PagesController::class,'info'])->name('info');
});


Route::prefix('produtos')->group(function() {
    Route::get('/ambiente/{ambiente}', [ProdutosController::class, 'ambiente'])->name('produtos.ambiente');
    Route::get('/ambiente/{ambiente}/{movel}', [ProdutosController::class, 'movel'])->name('produtos.ambiente.movel');
});


Route::prefix('carrinho')->group(function() {
    Route::get('/', [CarrinhoController::class, 'page'])->name('carrinho');
    Route::post('/cadastrarItem',[CarrinhoController::class,'cadastrarItem'])->name('carrinho.cadastrarItem');
    Route::put('/quantidadeItem/{id}',[CarrinhoController::class,'quantidadeItem'])->name('carrinho.quantidadeItem');
    Route::delete('/delete', [CarrinhoController::class, 'delete'])->name('carrinho.delete');
    Route::delete('/deleteAll', [CarrinhoController::class, 'deleteAll'])->name('carrinho.deleteAll');
});


Route::prefix('pedidos')->group(function() {
    Route::post('/cadastrarPedido}', [PedidosController::class, 'cadastrarPedido'])->name('pedidos');
    Route::delete('/delete',[PedidosController::class,'delete'])->name('pedidos.delete');
});


Route::prefix('cadastro')->group(function() {
    Route::get('/',[UserController::class,'cadastro'])->name('cadastro');
    Route::post('/cadastrarUser}', [UserController::class, 'cadastrarUser'])->name('cadastro.user');
});


Route::prefix('perfil')->group(function() {
    Route::get('/',[PerfilController::class,'perfil'])->name('perfil');
});


Route::prefix('login')->group(function() {
    Route::get('/',[UserController::class,'login'])->name('login');
    Route::get('/authLogout',[UserController::class,'logout'])->name('auth.logout');
    Route::post('/auth',[UserController::class,'auth'])->name('auth.user');
});


