<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



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

Route::get('/', 'ProdutoController@retornaIndex');
Route::get('/cadastro','ProdutoController@guardarAtriz');
Route::post('/cadastro/post','ProdutoController@guardarAtriz');
Route::post('/deletar/produto/{id}','ProdutoController@deletarProduto');
Route::post('/edita/produto/{id}','ProdutoController@editaProduto');
Auth::routes();
Route::get('/teste', 'ProdutoController@teste');

