<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTurma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma', function (Blueprint $table) {
          $table->increments('id',6);
          $table->string('turma_descricao',50);
          $table->string('ano',4);
          $table->enum('turno',['Manha','Tarde','Noite']);
          $table->enum('modalidade',['Ensino Fundamental','Ensino Médio','Ensino EJA']);
          $table->string('turma_inep', 6);

          $table->foreign('turma_inep')->references('inep')->on('escola');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turma');
    }
}
