<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('cod_art')->nullable();
            $table->foreign('cod_art')
                ->references('id')
                ->on('articulos')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('cod_lista')->nullable();
            $table->foreign('cod_lista')
                ->references('id')
                ->on('listas')
                ->onDelete('set null')
                ->onUpdate('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('precios');
    }
}
