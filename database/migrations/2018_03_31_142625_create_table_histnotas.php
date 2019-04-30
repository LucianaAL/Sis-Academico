<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHistnotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('histnotas',function(Blueprint $table){
         $table->integer('histnotas_id')->unsigned();
         $table->integer('histnotas_disciplina')->unsigned()->unique();
         $table->double('1media',4,2)->unsigned();
         $table->double('2media',4,2)->unsigned()->nullable();
         $table->double('3media',4,2)->unsigned()->nullable();
         $table->double('4media',4,2)->unsigned()->nullable();
         $table->double('5media',4,2)->unsigned()->nullable();
         $table->double('6media',4,2)->unsigned()->nullable();
         $table->double('7media',4,2)->unsigned()->nullable();
         $table->double('8media',4,2)->unsigned()->nullable();
         $table->double('9media',4,2)->unsigned()->nullable();
         $table->double('10media',4,2)->unsigned()->nullable();
         $table->double('11media',4,2)->unsigned()->nullable();
         $table->double('12media',4,2)->unsigned()->nullable();

         $table->foreign('histnotas_id')->references('id')->on('users')->onDelete('cascade');
         $table->foreign('histnotas_disciplina')->references('disciplina_id')->on('disciplina');
      });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histnotas');
    }
}
