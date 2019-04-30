<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSecretaria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('secretaria',function(Blueprint $table){
          $table->integer('secretaria_id')->unsigned();
          $table->enum('tipo',['Estadual','Municipal']);

          $table->foreign('secretaria_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('secretaria');
    }
}
