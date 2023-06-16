<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('/')->group(function() {
    Route::get('',[PagesController::class,'index'])->name('index');
    Route::get('login',[PagesController::class,'login'])->name('login');
    Route::get('info',[PagesController::class,'info'])->name('info');
    Route::get('perfil',[PagesController::class,'perfil'])->name('perfil');

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

Route::prefix('cadastro')->group(function() {
    Route::get('/',[UserController::class,'cadastro'])->name('cadastro');
    Route::post('/cadastrarUser}', [UserController::class, 'cadastrarUser'])->name('cadastro.user');

});
