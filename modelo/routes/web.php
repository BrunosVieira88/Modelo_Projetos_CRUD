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
Route::get('/cadastro','ProdutoController@retornaView');
Route::post('/cadastro/post','ProdutoController@guardarAtriz');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
