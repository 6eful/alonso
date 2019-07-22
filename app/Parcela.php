<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Parcela extends Model
{
  protected $fillable = [
    'idproposta', 'valor', 'data',
  ];

  public function listaparcelas($idproposta) {
    $parcelas = DB::table('parcelas')->where('idproposta', '=', $idproposta)->get();
    return $parcelas;
  }

}
