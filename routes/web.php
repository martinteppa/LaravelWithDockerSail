<?php

use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\VerArticulos;
use App\Http\Livewire\ArticuloDetalle;
use App\Http\Livewire\CarritoComponent;
use App\Http\Livewire\Inicio;
use App\Http\Livewire\NuevoPedidoComponent;
use App\Http\Livewire\PedidosComponent;


Route::get('/', function () {
    return view('bienvenido');
});


Route::middleware(['auth:sanctum', 'verified' ,'vendedor'])->get('/inicio', Inicio::class)->name('inicio');

Route::middleware(['auth:sanctum', 'verified' ,'vendedor' , 'carrito'])->get('/nuevoPedido', NuevoPedidoComponent::class)->name('nuevoPedido');


Route::middleware(['auth:sanctum', 'verified','vendedor'])->get('/nuevoPedido/articulos', VerArticulos::class)->name('articulos');


Route::middleware(['auth:sanctum', 'verified','vendedor'])->get('/detalle_articulo/{id}', ArticuloDetalle::class)->name('detalleArticulos');


Route::middleware(['auth:sanctum', 'verified','vendedor'])->get('/carrito', CarritoComponent::class)->name('carrito');


Route::middleware(['auth:sanctum', 'verified','vendedor','carritoLleno'])->get('/pedido', [PedidoController::class, 'index'])->name('pedidos'); 

Route::middleware(['auth:sanctum', 'verified','vendedor','carritoLleno'])->post('/pedidosRealizado', [PedidoController::class, 'store'])->name('pedidos.crear'); 

Route::middleware(['auth:sanctum', 'verified','vendedor'])->get('/misPedidos', PedidosComponent::class)->name('misPedidos'); 

