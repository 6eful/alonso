<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cliente extends Model {
  protected $fillable = [
    'razaosocial', 'nomefantasia', 'cnpj', 'endereco', 'email', 'telefone', 'celular', 'cpf', 'nomeResponsavel', 'idusuario',
  ];

  public function listacontrato($idcliente) {
    $contratos = DB::table('propostas')->where('idcliente', '=', $idcliente)->get();
    return $contratos;
  }

}
