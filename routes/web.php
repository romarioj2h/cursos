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

Route::get('/', [
    'as' => 'index',
    'uses' => 'IndexController@index'
]);
Route::get('/curso', [
    'as' => 'curso.index',
    'uses' => 'CursoController@index'
]);
Route::get('/categoria/{id}', [
    'as' => 'categoria.get',
    'uses' => 'CategoriaController@categoria'
]);
Route::get('/curso/{id}', [
    'as' => 'curso.get',
    'uses' => 'CursoController@curso'
]);
Route::get('/criador', [
    'as' => 'criador.index',
    'uses' => 'CriadorController@index'
]);
Route::get('/categoria', [
    'as' => 'categoria.index',
    'uses' => 'CategoriaController@index'
]);
Route::get('/criador/{id}', [
    'as' => 'criador.get',
    'uses' => 'CriadorController@criador'
]);
Route::get('/busca', [
    'as' => 'busca.get',
    'uses' => 'BuscaController@index'
]);