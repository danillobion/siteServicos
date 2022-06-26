<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusdosistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Statusdosistemas', function (Blueprint $table) {
            $table->id();
            $table->integer('versao');
            $table->string('descricao');
            $table->string('tipo'); //tipo de atualizacao (alta, media, baixa)
            $table->string('link')->nullable();
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
        Schema::dropIfExists('Statusdosistemas');
    }
}
