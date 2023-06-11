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

});




Route::prefix('produtos')->group(function() {

    Route::get('/cozinha',[ProdutosController::class,'cozinha'])->name('produto.cozinha');
});
