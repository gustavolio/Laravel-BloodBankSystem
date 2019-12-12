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
            $table->foreign('id_pessoa')->
                references('id')->
                on('pessoas')->
                onDelete('cascade');

            $table->integer('id_banco');
            $table->foreign('id_banco')->
                references('id')->
                on('banco_sangue')->
                onDelete('cascade');    

            $table->date('data');
            $table->string('tipo_sangue');
            $table->integer('quantidade');
            $table->string('tipo');

            $table->timestamps();
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
