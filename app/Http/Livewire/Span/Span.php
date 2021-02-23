<?php

namespace App\Http\Livewire\Span;

use Livewire\Component;
use Cart;


class Span extends Component
{
    public $contador;
    protected $listeners =['updateCart' => 'render'];
    
    public function render()
    {
        $this->contador=Cart::count();
        return view('livewire.span.span', ['contador' => $this->contador,]);
    }
}
