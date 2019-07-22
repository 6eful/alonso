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

Route::get('/login', ['as'=>'login','uses'=>'User\UsuarioController@index']);
Route::get('/login/sair', ['as'=>'login.sair','uses'=>'User\UsuarioController@sair']);
Route::post('/login/entrar', ['as'=>'user.login.entrar','uses'=>'User\UsuarioController@entrar']);

Route::group(['middleware'=>'auth'],function(){
  Route::get('/dashboard',['as'=>'user.dashboard', 'uses'=>'User\DashboardController@index']);

  Route::get('/usuario',['as'=>'usuario.index', 'uses'=>'User\UsuarioController@listausuario']);
  Route::get('/usuario/adicionar',['as'=>'usuario.adicionar.index', 'uses'=>'User\UsuarioController@pageAdicionar']);
  Route::post('/usuario/salvar',['as'=>'usuario.salvar', 'uses'=>'User\UsuarioController@salvar']);
  Route::get('/usuario/editar/{id}',['as'=>'usuario.editar.index', 'uses'=>'User\UsuarioController@pageEditar']);
  Route::put('/usuario/salvar/{id}',['as'=>'usuario.atualizar', 'uses'=>'User\UsuarioController@atualizar']);
  Route::get('/usuario/deletar/{id}',['as'=>'usuario.deletar', 'uses'=>'User\UsuarioController@deletar']);

  Route::get('/cliente',['as'=>'cliente.index', 'uses'=>'User\Cliente\ClienteController@listacliente']);
  Route::get('/cliente/adicionar',['as'=>'cliente.adicionar.index', 'uses'=>'User\Cliente\ClienteController@pageAdicionar']);
  Route::post('/cliente/salvar',['as'=>'cliente.salvar', 'uses'=>'User\Cliente\ClienteController@salvar']);
  Route::get('/cliente/editar/{id}',['as'=>'cliente.editar.index', 'uses'=>'User\Cliente\ClienteController@pageEditar']);
  Route::put('/cliente/salvar/{id}',['as'=>'cliente.atualizar', 'uses'=>'User\Cliente\ClienteController@atualizar']);
  Route::get('/cliente/deletar/{id}',['as'=>'cliente.deletar', 'uses'=>'User\Cliente\ClienteController@deletar']);
  Route::get('/cliente/visualizar/{id}',['as'=>'cliente.visualizar', 'uses'=>'User\Cliente\ClienteController@visualizar']);

  Route::get('/proposta',['as'=>'proposta.index', 'uses'=>'User\PropostaController@listaproposta']);
  Route::get('/proposta/adicionar',['as'=>'proposta.adicionar.index', 'uses'=>'User\PropostaController@pageAdicionar']);
  Route::post('/proposta/salvar',['as'=>'proposta.salvar', 'uses'=>'User\PropostaController@salvar']);
  Route::get('/proposta/editar/{id}',['as'=>'proposta.editar.index', 'uses'=>'User\PropostaController@pageEditar']);
  Route::put('/proposta/salvar/{id}',['as'=>'proposta.atualizar', 'uses'=>'User\PropostaController@atualizar']);
  Route::get('/proposta/deletar/{id}',['as'=>'proposta.deletar', 'uses'=>'User\PropostaController@deletar']);
});
