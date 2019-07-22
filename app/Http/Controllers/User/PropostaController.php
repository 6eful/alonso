<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proposta;
use App\Cliente;
use App\Parcela;
use Exception;

class PropostaController extends Controller
{
    public function listaproposta(){
      $db = new Proposta();
      $dados = $db->listarproposta();
      $dado = json_decode($dados,true);
      //dd($dado);
      //$dado = json_encode($dados, true);
      return view('painel.modules.proposta.index', compact('dado'));
    }

    public function pageAdicionar() {
      $cliente = Cliente::all();
      return view('painel.modules.proposta.adicionar', compact('cliente'));
    }

    public function salvar(Request $request) {
      $req = $request->all();

      $dado = [
        'idcliente'=>$req['idcliente'],
        'endereco'=>$req['endereco'],
        'valor'=>$req['valor'],
        'sinal'=>$req['sinal'],
        'numeroparcela'=>$req['numeroparcela'],
        'documento'=>isset($req['documento']) ? $req['documento'] : '',
        'status'=> $req['status'],
      ];

      if($request->hasfile('documento')) {
        $doc = $request->file('documento');
        $num = rand(1111,9999);
        $dir = "doc/upload/";
        $ex = $doc->guessClientExtension();
        $nomeDoc = "doc".$num.".".$ex;
        $doc->move($dir,$nomeDoc);
        $dado['documento'] = $dir."/".$nomeDoc;
      }
      try {
        $acordo = Proposta::create($dado);
        $idproposta = $acordo->id;
        //return $idproposta;
        foreach ($req as $key => $value) {
          $reg = 0;
          $cont = 0;

          for($i=0; $i < sizeof($req); $i++){

            if($key == "parcela".$cont){

              $parcela[$reg]['idproposta'] = $idproposta;
              $parcela[$reg]['valor'] = $value;

            }
            if($key == "dataparcela".$cont) {

              $parcela[$reg]['data'] = $value;
              $enviar = Parcela::create($parcela[$reg]);

            }

            $cont++;
            $reg++;
          }
        }
        //return $idproposta;

        //dd($parcela);
        return redirect()->route('proposta.index');
      } catch(Exception $e){
        return $e->getMessage();
      }
    }

    public function pageEditar($id) {
      $cliente = Cliente::all();
      $dado = Proposta::find($id);
      $parcela = new Parcela();
      //$result = json_decode($data, true);
      $parcelas = json_decode($parcela->listaparcelas($id), true);
      return view('painel.modules.proposta.editar', compact('dado','cliente','parcelas'));
    }

    public function atualizar(Request $request,$id) {
      $req = $request->all();

      $dado = [
        'idcliente'=>$req['idcliente'],
        'endereco'=>$req['endereco'],
        'valor'=>$req['valor'],
        'sinal'=>$req['sinal'],
        'numeroparcela'=>$req['numeroparcela'],
        'documento'=>$req['documento'],
        'status'=> $req['status'],
      ];

      if($request->hasfile('documento')) {
        $doc = $request->file('documento');
        $num = rand(1111,9999);
        $dir = "doc/upload/";
        $ex = $doc->guessClientExtension();
        $nomeDoc = "doc".$num.".".$ex;
        $doc->move($dir,$nomeDoc);
        $dado['documento'] = $dir."/".$nomeDoc;
      }

      try {
        $acordo = Proposta::find($id)->update($dado);
        $idproposta = $id;
        $del = Parcela::where('idproposta', $idproposta)->delete();
        foreach ($req as $key => $value) {
          $reg = 0;
          $cont = 0;
          for($i=0; $i < sizeof($req); $i++){
            if($key == "parcela".$cont){
              $parcela[$reg]['idproposta'] = $idproposta;
              $parcela[$reg]['valor'] = $value;
            }
            if($key == "dataparcela".$cont) {
              $parcela[$reg]['data'] = $value;
              Parcela::create($parcela[$reg]);
            }
            $cont++;
            $reg++;
          }
        }
        return redirect()->route('proposta.index');
      } catch(Exception $e){
        return $e->getMessage();
      }
    }

    public function deletar($id){
      Proposta::find($id)->delete();
      $del = Parcela::where('idproposta', $id)->delete();
      return redirect()->route('proposta.index');
    }
}
