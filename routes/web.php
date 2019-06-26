<?php

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

Route::get('/', 'HomeController@index');

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/edita/{id}', 'ProdutoController@edita');
Route::post('/produtos/edita/{id}', 'ProdutoController@edita');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('login', 'LoginController@form');
Route::post('login', 'LoginController@login');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
