<?php

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

Route::get('/clientes/remove/{id}', 'ClientesController@remover')->name('clientes.remove');
Route::resource('clientes', 'clientesController');
Route::get('/eventos/remove/{id}', 'EventosController@remover')->name('eventos.remove');
Route::resource('eventos', 'EventoController');
Route::resource('home', 'HomeController');


