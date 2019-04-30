<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHistorico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('historico',function(Blueprint $table){
        $table->integer('historico_id')->unsigned();
        $table->integer('historico_inep')->unsigned();
        $table->string('periodo',4);
        $table->string('anocursado',60);
        $table->enum('modalidade',['Fundamental','Medio']);
        $table->string('municipio',150);
        $table->enum('uf',['AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO']);


        $table->foreign('historico_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('historico_inep')->references('inep')->on('escola');
      });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('historico');
    }
}
