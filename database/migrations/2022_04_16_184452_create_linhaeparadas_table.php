<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linhaeparadas', function (Blueprint $table) {
            $table->id();
            $table->integer('ordem');
            $table->integer('sentido'); //0 ida, 1 volta, 2 partida, 3 km morto
            $table->integer('linha_id');
            $table->integer('dia'); //0 dia util, 1 sábado e 2, domingo
            $table->integer('parada_id');
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
        Schema::dropIfExists('linhaeparadas');
    }
};
