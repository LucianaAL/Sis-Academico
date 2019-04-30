<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno',function(Blueprint $table){
            $table->integer('aluno_id')->primary();
            $table->string('nome');
            $table->string('cpf',14)->unique();
            $table->enum('sexo',['Feminino','Masculino']);
            $table->binary('foto')->nullable();
            $table->string('nacionalidade',50)->nullable();
            $table->date('data_nasc');
            $table->string('nome_pai',100)->nullable();
            $table->string('nome_mae',100)->nullable();
            $table->string('rg', 9);
            $table->string('org_emis')->nullable();
            $table->date('data_expedi')->nullable();
            $table->enum('est_nasc',['AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO']);
            $table->string('mun_nasc',120)->nullable();
            $table->string('cep',10);
            $table->string('endereco',150);
            $table->string('numero',8)->nullable();
            $table->string('complemento',150)->nullable();
            $table->string('bairro',100)->nullable();
            $table->enum('uf',['AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO']);
            $table->string('municipio',150);
            $table->string('telefone')->nullable();
            $table->integer('aluno_turma')->unsigned();
            $table->string('aluno_inep');

            $table->foreign('aluno_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('aluno_turma')->references('id')->on('turma');
            $table->foreign('aluno_inep')->references('inep')->on('escola');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno');
    }
}
