<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Proposta extends Model
{
  protected $fillable = [
    'idcliente', 'endereco', 'valor', 'sinal', 'numeroparcela', 'documento', 'status',
  ];

  public function listarproposta() {
    $proposta = DB::table('propostas')
            ->distinct()
            ->join('parcelas', 'propostas.id', '=', 'parcelas.idproposta')
            ->leftJoin('clientes', 'propostas.idcliente', '=', 'clientes.id')
            ->select('propostas.*', 'clientes.nomeResponsavel','parcelas.data','parcelas.valor as vparcela')
            //->select('propostas.*', 'clientes.nomeResponsavel')
            ->groupBy('id')
            ->get();
    return $proposta;
  }

}
