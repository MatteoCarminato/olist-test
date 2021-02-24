<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TipoProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('tipo-produtos', [TipoProdutoController::class,'index',])->name('tipo-produtos.index');
//Route::post('tipo-produtos', [TipoProdutoController::class,'store',])->name('tipo-produtos.store');
//Route::get('tipo-produtos/create', [TipoProdutoController::class,'create',])->name('tipo-produtos.create');
//Route::get('tipo-produtos/{tipoProduto}', [TipoProdutoController::class,'show',])->name('tipo-produtos.show');
//Route::get('tipo-produtos/{tipoProduto}/edit', [TipoProdutoController::class,'edit',])->name('tipo-produtos.edit');
//Route::put('tipo-produtos/{tipoProduto}', [TipoProdutoController::class,'update',])->name('tipo-produtos.update');
//Route::delete('tipo-produtos/{tipoProduto}', [TipoProdutoController::class,'destroy',])->name('tipo-produtos.destroy');

Route::get('produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::post('produtos', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get('produtos/create', [ProdutoController::class,'create',])->name('produtos.create');
Route::get('produtos/{produto}', [ProdutoController::class,'show',])->name('produtos.show');
Route::get('produtos/{produto}/edit', [ProdutoController::class, 'edit',])->name('produtos.edit');
Route::put('produtos/{produto}', [ProdutoController::class, 'update',])->name('produtos.update');
Route::delete('produtos/{produto}', [ProdutoController::class, 'destroy',])->name('produtos.destroy');
