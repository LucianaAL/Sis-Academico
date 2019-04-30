<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDiretor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('diretor',function(Blueprint $table){
          $table->increments('id')->unsigned();
          $table->integer('diretor_id');
          $table->string('nome',100);
          $table->string('cpf',14)->unique();
          $table->enum('sexo',['Feminino','Masculino']);
          $table->binary('foto')->nullable();
          $table->string('nacionalidade',150)->nullable();
          $table->date('data_nasc');
          $table->string('rg',7);
          $table->string('org_emis',5)->nullable();
          $table->date('data_expedi')->nullable();
          $table->enum('est_nasc',['AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO'])->nullable();
          $table->string('mun_nasc',150)->nullable();
          $table->string('cep',10);
          $table->string('endereco',150);
          $table->string('numero',8);
          $table->string('complemento',150)->nullable();
          $table->string('bairro',100);
          $table->enum('uf',['AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO'])->nullable();
          $table->string('municipio',150);
          $table->string('telefone',10);
          $table->string('escolaridade',50);
          $table->enum('posgrad',['SIM','NAO'])->nullable();
          $table->string('area',50)->nullable();
          $table->string('cargo',50)->nullable();
          $table->string('anoform',4)->nullable();
          $table->string('diretor_inep');

          $table->foreign('diretor_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('diretor_inep')->references('inep')->on('escola');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diretor');
    }
}
