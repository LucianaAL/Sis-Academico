<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('funcionario',function(Blueprint $table){
          $table->integer('funcionario_id')->primary();
          $table->string('nome');
          $table->string('cpf', 14)->unique();
          $table->enum('sexo',['Feminino','Masculino']);
          $table->binary('foto')->nullable();
          $table->string('nacionalidade',150)->nullable();
          $table->date('data_nasc');
          $table->string('rg', 9);
          $table->string('org_emis')->nullable();
          $table->date('data_expedi')->nullable();
          $table->enum('est_nasc',['AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO']);
          $table->string('mun_nasc',150)->nullable();
          $table->string('cep',10);
          $table->string('endereco',150);
          $table->string('numero',8)->nullable();
          $table->string('complemento',150)->nullable();
          $table->string('bairro',100)->nullable();
          $table->enum('uf',['AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO']);
          $table->string('municipio',150);
          $table->string('telefone')->nullable();
          $table->enum('escolaridade',['Sem Escolaridade','Ensino Fundamental','Ensino Médio Incompleto','Ensino Médio Completo','Ensino Superior Incompleto','Ensino Superior Completo']);
          $table->enum('posgrad',['Sim','Nao'])->nullable();
          $table->string('area',50)->nullable();
          $table->string('anoform',4)->nullable();
          $table->enum('diretor',['Sim','Nao']);
          $table->string('funcionario_inep');

          $table->foreign('funcionario_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('funcionario_inep')->references('inep')->on('escola');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionario');
    }
}
