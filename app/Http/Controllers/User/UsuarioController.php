<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class UsuarioController extends Controller
{
    public function index(){
      if (Auth::check()) {
        return redirect()->route('user.dashboard');
      } else {
        return view('home');
      }

    }

    public function entrar(Request $request){
      $dados = $request->all();
      if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['password']])){
        return redirect()->route('user.dashboard');
      }
      return redirect()->route('login');
    }

    public function sair() {
      Auth::logout();
      return redirect()->route('login');
    }

    public function listausuario(){
      $dados = User::paginate(2);
      return view('painel.modules.usuario.index', compact('dados'));
    }

    public function pageAdicionar(){
      return view('painel.modules.usuario.adicionar');
    }

    public function salvar(Request $request){
      $dados = [
        "_token" => $request['remember_token'],
        "name" => $request['name'],
        "email" => $request['email'],
        "password" => bcrypt($request['password']),
      ];
      User::create($dados);
      return redirect()->route('usuario.index');
    }

    public function pageEditar($id) {
      $dado = User::find($id);
      return view('painel.modules.usuario.editar',compact('dado'));
    }

    public function atualizar(Request $request, $id){
      $dados = [
        "_token" => $request['remember_token'],
        "name" => $request['name'],
        "email" => $request['email'],
        "password" => bcrypt($request['password']),
      ];
      User::find($id)->update($dados);
      return redirect()->route('usuario.index');
    }

    public function deletar($id) {
      User::find($id)->delete();
      return redirect()->route('usuario.index');
    }
}
