<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfEscolaTurma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('prof_escola_turma',function(Blueprint $table){
          $table->string('prof_id');
          $table->string('escola_id',6);
          $table->string('turma_id',6);


          $table->foreign('prof_id')->references('profissional_id')->on('profissional');
          $table->foreign('turma_id')->references('id')->on('turma');
          $table->foreign('escola_id')->references('inep')->on('escola');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prof_escola_turma');
    }
}
