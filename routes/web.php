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

/* Route::get('/', function () {
    return view('welcome');
}); */

// Rota para listar todas as marcas
Route::get('/marcas', 'MarcaController@index')->name('marcas.index');

// Rota para exibir o formulário de criação de uma nova marca
Route::get('/marcas/create', 'MarcaController@create')->name('marcas.create');

// Rota para armazenar uma nova marca no banco de dados
Route::post('/marcas', 'MarcaController@store')->name('marcas.store');

// Rota para exibir os detalhes de uma marca específica
Route::get('/marcas/{id}', 'MarcaController@show')->name('marcas.show');

// Rota para exibir o formulário de edição de uma marca
Route::get('/marcas/{id}/edit', 'MarcaController@edit')->name('marcas.edit');

// Rota para atualizar uma marca no banco de dados
Route::put('/marcas/{id}', 'MarcaController@update')->name('marcas.update');

// Rota para excluir uma marca do banco de dados
Route::delete('/marcas/{id}', 'MarcaController@destroy')->name('marcas.destroy');
