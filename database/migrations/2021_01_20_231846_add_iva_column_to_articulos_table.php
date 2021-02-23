<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIvaColumnToArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articulos', function (Blueprint $table) {
            $table->unsignedBigInteger('iva_id')->nullable();
            
            $table->foreign('iva_id')
            ->references('id')
            ->on('ivas')
            ->onUpdate('cascade')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articulos', function (Blueprint $table) {
            //
        });
    }
}
