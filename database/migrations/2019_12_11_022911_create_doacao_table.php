<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doacao', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('id_pessoa')->unsigned();
            $table->integer('id_banco')->unsigned(); //Referencia ao banco
            $table->string('tipo_sangue');
            $table->integer('quantidade');
            $table->string('data_doacao');
            $table->string('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doacao');
    }
}
