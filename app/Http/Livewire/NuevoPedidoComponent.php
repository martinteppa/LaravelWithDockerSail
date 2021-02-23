<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;


class NuevoPedidoComponent extends Component
{
    public $vend_id;

    public function mount(){

        $this->vend_id= Auth::user()->id;
    }


    public function render()
    {
        

        $clientes=Cliente::where('vendedor_id' , 'like' , $this->vend_id)->get();
        /* $clientes=Cliente::all(); */
        return view('livewire.nuevo-pedido-component' ,compact('clientes',$this->vend_id));

        
        
    }
    public function goto($ide){
        session(['idcliente' => $ide]);
        return redirect()->route('articulos');
    }
}
