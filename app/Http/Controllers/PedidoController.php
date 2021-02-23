<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cliente;
use App\Models\detalle_pedido;
use App\Models\Pedido;
use Illuminate\Support\Carbon;
use Cart;

class PedidoController extends Controller
{
    public $pedido;
    
    public function index()
    {
        if(/* !Auth::user()->cuit ||  */!Auth::user()->name)
        {   
            session()->flash('message','Necesita agregar su nombre y/o cuit en su perfil');
            return view('livewire.carrito-component');
        }
        else
        {
            $ide = session()->get('idcliente');
            $cliente=Cliente::where('id', $ide)->first();
            return view('pedidoCheckOut' , ['cliente' => $cliente]);
        }       
    }
    public function store(Request $request){

           
            $this->pedido= new Pedido();
            $this->pedido->fechaPedido=Carbon::now();
            $this->pedido->user_id=$request->id_vendedor;
            $this->pedido->cliente_id=$request->id_cliente;
            $this->pedido->desc=$request->desc;
            $this->pedido->precioTotal= Cart::total(); 
            $this->pedido->impuestosTotales=Cart::tax();
            $this->pedido->save();
            session()->flash('message','Pedido Realizado!!!!');

            foreach(Cart::content() as $item){
                $detallePedido = new detalle_pedido();
                $detallePedido->precioProducto = $item->subtotal;
                $detallePedido->impuesto =$item->tax*$item->qty;
                $detallePedido->cantidad= $item->qty;
                $detallePedido->art_id= $item->model->id;
                $detallePedido->pedido_id= $this->pedido->id;
                $detallePedido->created_at=Carbon::now();
                $detallePedido->save();
            }
            Cart::destroy();
            session(['idcliente' => 'null']);
            return redirect()->route('inicio');

        
        
    }

}
