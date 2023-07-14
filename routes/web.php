<?php

use App\Http\Controllers\ProdutoController;
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

Route::get('/', [ProdutoController::class, 'listar']);
Route::get('/adicionar', [ProdutoController::class,'adicionar']);

Route::post('/salvar',[ProdutoController::class, 'salvar']);
Route::get('/excluir/{id}',[ProdutoController::class, 'excluir']);
Route::get('/editar/{id}', [ProdutoController::class, 'editar']);
Route::post('/atualizar/{id}', [ProdutoController::class, 'atualizar']);