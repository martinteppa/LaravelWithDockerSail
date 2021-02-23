<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('cantidad');
            

            $table->unsignedBigInteger('pedido_id');
            $table->foreign('pedido_id')
                ->references('id')
                ->on('pedidos')
                ->onDelete('cascade')
                ->onUpdate('cascade');  
            $table->unsignedBigInteger('art_id');
            $table->foreign('art_id')
                ->references('id')
                ->on('articulos')
                ->onUpdate('cascade');      
            $table->float('precioProducto');
            $table->float('impuesto');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_pedidos');
    }
}
