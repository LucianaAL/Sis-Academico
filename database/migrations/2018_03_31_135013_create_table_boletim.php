<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBoletim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('boletim',function(Blueprint $table){
            $table->integer('boletim_id')->unsigned();
            $table->integer('boletim_inep')->unsigned();
            $table->integer('boletim_disciplina')->unsigned()->unique();
            $table->double('1bimestre',4,2)->unsigned();
            $table->integer('1falta')->unsigned();
            $table->double('2bimestre',4,2)->unsigned()->nullable();
            $table->integer('2falta')->unsigned()->nullable();
            $table->double('3bimestre',4,2)->unsigned()->nullable();
            $table->integer('3falta')->unsigned()->nullable();
            $table->double('4bimestre',4,2)->unsigned()->nullable();
            $table->integer('4falta')->unsigned()->nullable();
            $table->double('media',4,2)->unsigned()->nullable();
            $table->double('final',4,2)->unsigned()->nullable();
            $table->double('notafinal',4,2)->unsigned()->nullable();

            $table->foreign('boletim_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('boletim_inep')->references('inep')->on('escola');
            $table->foreign('boletim_disciplina')->references('disciplina_id')->on('disciplina');
          //
        });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boletim');
    }
}
