<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//produtos
Route::get('/produtos', [ProductController::class,'index'])->name('produtos');
Route::get('/produtos/listar', [ProductController::class,'listar']);
Route::get('/produtos/cadastrar', [ProductController::class,'create']);
Route::post('/produtos/listar', [ProductController::class,'store']);
Route::get('/produtos/{id}/edit', [ProductController::class,'produtos.edit']);
Route::put('/produtos/{id}', [ProductController::class,'produtos.update']);
Route::delete('/produtos/{id}/delete', [ProductController::class,'destroy']);

//categorias
Route::get('/categorias', [CategoryController::class, 'index']);
Route::get('/categorias/listar', [CategoryController::class, 'listar']);
Route::get('/categorias/cadastrar', [CategoryController::class, 'create']);
Route::get('/categorias/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/categorias/{id}', [CategoryController::class, 'update']);
Route::post('/categorias/listar', [CategoryController::class, 'store']);
Route::delete('/categorias/{id}/delete', [CategoryController::class, 'destroy']);

