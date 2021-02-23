<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pedido;

class PedidosComponent extends Component
{
    public $pedidos;
    public function render()
    {

        $this->pedidos=Pedido::where('user_id', auth()->user()->id)->get();
        return view('livewire.pedidos-component', ['pedidos' => $this->pedidos]);
    }
}
