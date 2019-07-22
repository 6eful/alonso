<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razaosocial');
            $table->string('nomefantasia');
            $table->string('cnpj');
            $table->string('endereco');
            $table->string('email');
            $table->string('telefone');
            $table->string('celular');
            $table->string('cpf');
            $table->string('nomeResponsavel');
            $table->integer('idusuario')->unsigned();
            $table->foreign('idusuario')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
