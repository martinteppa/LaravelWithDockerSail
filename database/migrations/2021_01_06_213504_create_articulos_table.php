<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->String("codigo_articulo");
            $table->String("nombre");
            $table->String("Descripcion");
            $table->Float("precio_venta",8,2);
            
            $table->timestamps();
            $table->decimal('descuento');
           
            $table->float("precio_desc");
            $table->enum('stock_status',['disponible','sinStock']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
