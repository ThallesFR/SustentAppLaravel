<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProdutosController;
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
    Route::get('carrinho',[PagesController::class,'carrinho'])->name('carrinho');
    Route::get('cadastro',[PagesController::class,'cadastro'])->name('cadastro');

});

Route::prefix('produtos')->group(function() {
    Route::get('/ambiente/{ambiente}', [ProdutosController::class, 'ambiente'])->name('produtos.ambiente');
    Route::get('/ambiente/{ambiente}/{movel}', [ProdutosController::class, 'movel'])->name('produtos.ambiente.movel');
});
