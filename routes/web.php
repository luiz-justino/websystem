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

Route::get('/', 'ClienteController@index')->name('index');
Route::get('/clientes', 'ClienteController@clientes')->name('clientes');
Route::get('/novoCliente', 'ClienteController@create')->name('novoCliente');
Route::post('/novoCliente', 'ClienteController@store');
Route::get('/clientes/editar/{id}', 'ClienteController@edit')->name('editaCliente');
Route::post('/clientes/editar/{id}', 'ClienteController@update')->name('atualizaCliente');
Route::get('/clientes/excluir/{id}', 'ClienteController@destroy')->name('excluiCliente');
Route::get('/relatorios', 'ClienteController@relatorios')->name('relatorios');