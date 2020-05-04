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
Route::group(['middleware'=>'auth'], function(){

Route::get('/admin/users', ['as'=>'admin.users', 'uses'=>'Admin\UserController@index']);
Route::get('/admin/users/adicionar', ['as'=>'admin.users.adicionar', 'uses'=>'Admin\UserController@adicionar']);
Route::post('/admin/users/salvar', ['as'=>'admin.users.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/admin/users/editar/{id}', ['as'=>'admin.users.editar', 'uses'=>'Admin\UserController@editar']);
Route::put('/admin/users/atualizar/{id}', ['as'=>'admin.users.atualizar', 'uses'=>'Admin\UserController@atualizar']);
Route::get('/admin/users/deletar/{id}', ['as'=>'admin.users.deletar', 'uses'=>'Admin\UserController@deletar']);

Route::get('/admin/recursos', ['as'=>'admin.recursos', 'uses'=>'Admin\RecursoController@index']);
Route::get('/admin/recursos.visualizar/{id}', ['as'=>'admin.recursos.visualizar', 'uses'=>'Admin\RecursoController@visualizar']);
Route::get('/admin/recursos/adicionar', ['as'=>'admin.recursos.adicionar', 'uses'=>'Admin\RecursoController@adicionar']);
Route::post('/admin/recursos/salvar', ['as'=>'admin.recursos.salvar', 'uses'=>'Admin\RecursoController@salvar']);
Route::get('/admin/recursos/editar/{id}', ['as'=>'admin.recursos.editar', 'uses'=>'Admin\RecursoController@editar']);
Route::put('/admin/recursos/atualizar/{id}', ['as'=>'admin.recursos.atualizar', 'uses'=>'Admin\RecursoController@atualizar']);
Route::get('/admin/recursos/deletar/{id}', ['as'=>'admin.recursos.deletar', 'uses'=>'Admin\RecursoController@deletar']);

Route::get('/admin/projetos', ['as'=>'admin.projetos', 'uses'=>'Admin\UserController@index']);
Route::get('/admin/projetos/visualizar', ['as'=>'admin.projetos.visualizar', 'uses'=>'Admin\UserController@visualizar']);
Route::get('/admin/projetos/adicionar', ['as'=>'admin.projetos.adicionar', 'uses'=>'Admin\UserController@adicionar']);
Route::post('/admin/projetos/salvar', ['as'=>'admin.projetos.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/admin/projetos/editar/{id}', ['as'=>'admin.projetos.editar', 'uses'=>'Admin\UserController@editar']);
Route::put('/admin/projetos/atualizar/{id}', ['as'=>'admin.projetos.atualizar', 'uses'=>'Admin\UserController@atualizar']);
Route::get('/admin/projetos/deletar/{id}', ['as'=>'admin.projetos.deletar', 'uses'=>'Admin\UserController@deletar']);

Route::get('/admin/contas', ['as'=>'admin.contas', 'uses'=>'Admin\UserController@index']);
Route::get('/admin/contas/visualizar', ['as'=>'admin.contas.visualizar', 'uses'=>'Admin\UserController@visualizar']);
Route::get('/admin/contas/adicionar', ['as'=>'admin.contas.adicionar', 'uses'=>'Admin\UserController@adicionar']);
Route::post('/admin/contas/salvar', ['as'=>'admin.contas.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/admin/contas/editar/{id}', ['as'=>'admin.contas.editar', 'uses'=>'Admin\UserController@editar']);
Route::put('/admin/contas/atualizar/{id}', ['as'=>'admin.contas.atualizar', 'uses'=>'Admin\UserController@atualizar']);
Route::get('/admin/contas/deletar/{id}', ['as'=>'admin.contas.deletar', 'uses'=>'Admin\UserController@deletar']);

Route::get('/admin/executados', ['as'=>'admin.executados', 'uses'=>'Admin\UserController@index']);
Route::get('/admin/executados/visualizar', ['as'=>'admin.executados.visualizar', 'uses'=>'Admin\UserController@visualizar']);
Route::get('/admin/executados/adicionar', ['as'=>'admin.executados.adicionar', 'uses'=>'Admin\UserController@adicionar']);
Route::post('/admin/executados/salvar', ['as'=>'admin.executados.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/admin/executados/editar/{id}', ['as'=>'admin.executados.editar', 'uses'=>'Admin\UserController@editar']);
Route::put('/admin/executados/atualizar/{id}', ['as'=>'admin.executados.atualizar', 'uses'=>'Admin\UserController@atualizar']);
Route::get('/admin/executados/deletar/{id}', ['as'=>'admin.executados.deletar', 'uses'=>'Admin\UserController@deletar']);

Route::get('/admin/planejados', ['as'=>'admin.planejados', 'uses'=>'Admin\UserController@index']);
Route::get('/admin/planejados/visualizar', ['as'=>'admin.planejados.visualizar', 'uses'=>'Admin\UserController@visualizar']);
Route::get('/admin/planejados/adicionar', ['as'=>'admin.planejados.adicionar', 'uses'=>'Admin\UserController@adicionar']);
Route::post('/admin/planejados/salvar', ['as'=>'admin.planejados.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/admin/planejados/editar/{id}', ['as'=>'admin.planejados.editar', 'uses'=>'Admin\UserController@editar']);
Route::put('/admin/planejados/atualizar/{id}', ['as'=>'admin.planejados.atualizar', 'uses'=>'Admin\UserController@atualizar']);
Route::get('/admin/planejados/deletar/{id}', ['as'=>'admin.planejados.deletar', 'uses'=>'Admin\UserController@deletar']);

Route::get('/admin/compras', ['as'=>'admin.compras', 'uses'=>'Admin\UserController@index']);
Route::get('/admin/compras/visualizar', ['as'=>'admin.compras.visualizar', 'uses'=>'Admin\UserController@visualizar']);
Route::get('/admin/compras/adicionar', ['as'=>'admin.compras.adicionar', 'uses'=>'Admin\UserController@adicionar']);
Route::post('/admin/compras/salvar', ['as'=>'admin.compras.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/admin/compras/editar/{id}', ['as'=>'admin.compras.editar', 'uses'=>'Admin\UserController@editar']);
Route::put('/admin/compras/atualizar/{id}', ['as'=>'admin.compras.atualizar', 'uses'=>'Admin\UserController@atualizar']);
Route::get('/admin/compras/deletar/{id}', ['as'=>'admin.compras.deletar', 'uses'=>'Admin\UserController@deletar']);

Route::get('/admin/eventos', ['as'=>'admin.eventos', 'uses'=>'Admin\UserController@index']);
Route::get('/admin/eventos/visualizar', ['as'=>'admin.eventos.visualizar', 'uses'=>'Admin\UserController@visualizar']);
Route::get('/admin/eventos/adicionar', ['as'=>'admin.eventos.adicionar', 'uses'=>'Admin\UserController@adicionar']);
Route::post('/admin/eventos/salvar', ['as'=>'admin.eventos.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/admin/eventos/editar/{id}', ['as'=>'admin.eventos.editar', 'uses'=>'Admin\UserController@editar']);
Route::put('/admin/eventos/atualizar/{id}', ['as'=>'admin.eventos.atualizar', 'uses'=>'Admin\UserController@atualizar']);
Route::get('/admin/eventos/deletar/{id}', ['as'=>'admin.eventos.deletar', 'uses'=>'Admin\UserController@deletar']);

Route::get('/admin/prorrogas', ['as'=>'admin.prorrogas', 'uses'=>'Admin\UserController@index']);
Route::get('/admin/prorrogas/visualizar', ['as'=>'admin.prorrogas.visualizar', 'uses'=>'Admin\UserController@visualizar']);
Route::get('/admin/prorrogas/adicionar', ['as'=>'admin.prorrogas.adicionar', 'uses'=>'Admin\UserController@adicionar']);
Route::post('/admin/prorrogas/salvar', ['as'=>'admin.prorrogas.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/admin/prorrogas/editar/{id}', ['as'=>'admin.prorrogas.editar', 'uses'=>'Admin\UserController@editar']);
Route::put('/admin/prorrogas/atualizar/{id}', ['as'=>'admin.prorrogas.atualizar', 'uses'=>'Admin\UserController@atualizar']);
Route::get('/admin/prorrogas/deletar/{id}', ['as'=>'admin.prorrogas.deletar', 'uses'=>'Admin\UserController@deletar']);

Route::get('/admin/prazos', ['as'=>'admin.prazos', 'uses'=>'Admin\UserController@index']);
Route::get('/admin/prazos/visualizar', ['as'=>'admin.prazos.visualizar', 'uses'=>'Admin\UserController@visualizar']);
Route::get('/admin/prazos/adicionar', ['as'=>'admin.prazos.adicionar', 'uses'=>'Admin\UserController@adicionar']);
Route::post('/admin/prazos/salvar', ['as'=>'admin.prazos.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/admin/prazos/editar/{id}', ['as'=>'admin.prazos.editar', 'uses'=>'Admin\UserController@editar']);
Route::put('/admin/prazos/atualizar/{id}', ['as'=>'admin.prazos.atualizar', 'uses'=>'Admin\UserController@atualizar']);
Route::get('/admin/prazos/deletar/{id}', ['as'=>'admin.prazos.deletar', 'uses'=>'Admin\UserController@deletar']);

});