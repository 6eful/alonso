<?php

namespace App\Http\Controllers\User\Cliente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use Auth;

class ClienteController extends Controller
{
    public function listacliente() {
      $dados = Cliente::paginate(2);
      return view('painel.modules.cliente.index', compact('dados'));
    }

    public function pageAdicionar(){
      return view('painel.modules.cliente.adicionar');
    }

    public function salvar(Request $request) {
      $dado = $request->all();
      $dado['idusuario'] = Auth::user()->id;
      Cliente::create($dado);
      return redirect()->route('cliente.index');
    }

    public function pageEditar($id){
      $dado = Cliente::find($id);
      return view('painel.modules.cliente.editar', compact('dado'));
    }

    public function atualizar(Request $request, $id) {
      $dado = $request->all();
      Cliente::find($id)->update($dado);
      return redirect()->route('cliente.index');
    }

    public function deletar($id) {
      Cliente::find($id)->delete();
      return redirect()->route('cliente.index');
    }

    public function visualizar($id) {
      $contratos = new Cliente();
      $listadecontratos = json_decode($contratos->listacontrato($id), true);
      $dadosusuario = Cliente::find($id);
      //dd($dadosusuario);
      return view('painel.modules.cliente.contratos', compact('listadecontratos','dadosusuario'));
    }


}
