<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEscola extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escola', function (Blueprint $table) {
          $table->increments('id',6);
          $table->string('inep',6)->unique();
          $table->string('utb',90)->nullable();
          $table->string('nome',100);
          $table->enum('sit_funcionamento',['Ativo','Desativado'])->nullable();
          $table->binary('foto')->nullable();
          $table->string('cep',10);
          $table->string('endereco',150);
          $table->string('numero',8);
          $table->string('bairro',100);
          $table->string('municipio',120);
          $table->enum('uf',['AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO'])->nullable();
          $table->enum('local_funcionamento',['Predio Escolar','Casa do Professor','Unidade Socioeducativa','Templo/Igreja','Salas em Outra Escola','Unidade Prisional','Sala de Empresas','Outros'])->nullable();
          $table->string('gestor',100);

    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('escola');
    }
}
