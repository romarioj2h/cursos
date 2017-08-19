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
Route::get('/contato', [
    'as' => 'contato.index',
    'uses' => 'ContatoController@index'
]);
Route::post('/contato', [
    'as' => 'contato.post',
    'uses' => 'ContatoController@adicionar'
]);
Route::get('/sobre', [
    'as' => 'sobre.index',
    'uses' => 'SobreController@index'
]);
Route::get('/dash/categoria', [
    'as' => 'dash.categoria.index',
    'uses' => 'Dash\CategoriaController@index'
]);
Route::match(['get', 'post'], '/dash/categoria/adicionar', [
    'as' => 'dash.categoria.adicionar',
    'uses' => 'Dash\CategoriaController@adicionar'
]);
Route::get('/dash/curso', [
    'as' => 'dash.curso.index',
    'uses' => 'Dash\CursoController@index'
]);
Route::match(['get', 'post'], '/dash/curso/adicionar', [
    'as' => 'dash.curso.adicionar',
    'uses' => 'Dash\CursoController@adicionar'
]);

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/dash', 'DashboardController@index')->name('dashboard.index');
