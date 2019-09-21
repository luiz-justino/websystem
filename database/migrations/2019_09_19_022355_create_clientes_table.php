<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 255);
            $table->string('email', 255);
            $table->integer('idade', 3);
            $table->char('estado_civil', 13);
            $table->string('endereco', 150);
            $table->string('numero', 20);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->char('estado', 2);
            $table->tinyInteger('ativo', FALSE);
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
        Schema::dropIfExists('clientes');
    }
}
