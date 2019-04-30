<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDisciplina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('disciplina', function (Blueprint $table) {
        $table->increments('id',6);
        $table->string('nome',100);
  });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
