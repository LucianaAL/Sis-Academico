<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfissional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('profissional',function(Blueprint $table){
          $table->integer('profissional_id')->primary();
          $table->string('nome');
          $table->string('cpf',14)->unique();
          $table->enum('sexo',['Feminino','Masculino']);
          $table->binary('foto')->nullable();
          $table->string('nacionalidade')->nullable();
          $table->date('data_nasc');
          $table->string('rg',9);
          $table->string('org_emis',5)->nullable();
          $table->date('data_expedi')->nullable();
          $table->enum('est_nasc',['AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO'])->nullable();
          $table->string('mun_nasc',150)->nullable();
          $table->string('cep',10);
          $table->string('endereco',150);
          $table->string('numero',8)->nullable();
          $table->string('complemento',150)->nullable();
          $table->string('bairro',100)->nullable();
          $table->enum('uf',['AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO'])->nullable();
          $table->string('municipio',150);
          $table->string('telefone',10)->nullable();
          $table->string('escolaridade',50)->nullable();
          $table->enum('posgrad',['SIM','NAO'])->nullable();
          $table->string('anoform',4)->nullable();
          $table->string('profissional_disciplina');

          $table->foreign('profissional_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('profissional_disciplina')->references('id')->on('disciplina');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profissional');
    }
}
