<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fechaPedido', $precision = 0);
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onDelete('set null')
                ->onUpdate('cascade');    
            $table->String('desc',30)->nullable();
            $table->String('precioTotal');
            $table->String('impuestosTotales');    

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
