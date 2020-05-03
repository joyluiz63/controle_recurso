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

Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
Route::get('/login', ['as'=>'login', 'uses'=>'LoginController@index']);
Route::post('/login/entrar', ['as'=>'login.entrar', 'uses'=>'LoginController@entrar']);
Route::get('/login/sair', ['as'=>'login.sair', 'uses'=>'LoginController@sair']);

//ROTAS ADMIN
Route::get('/admin/users', ['as'=>'admin.users', 'uses'=>'Admin\UserController@index']);
Route::get('/admin/users/adicionar', ['as'=>'admin.users.adicionar', 'uses'=>'Admin\UserController@adicionar']);
Route::post('/admin/users/salvar', ['as'=>'admin.users.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/admin/users/editar/{id}', ['as'=>'admin.users.editar', 'uses'=>'Admin\UserController@editar']);
Route::put('/admin/users/atualizar/{id}', ['as'=>'admin.users.atualizar', 'uses'=>'Admin\UserController@atualizar']);
Route::get('/admin/users/deletar/{id}', ['as'=>'admin.users.deletar', 'uses'=>'Admin\UserController@deletar']);
