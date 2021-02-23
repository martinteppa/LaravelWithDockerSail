<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CarritoComponent extends Component
{   
    public function increaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty); 

    }
    public function decreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty); 

    }
    public function destroy($rowId){
        Cart::remove($rowId);
        $this->emit('updateCart');
        session()->flash('message','Item quitado');
        

    }
    public function destroyAll(){
        $this->emit('updateCart');
        Cart::destroy();
        
    }
    public function render()
    {
        return view('livewire.carrito-component');
    }
    public function comprar(){

        return redirect()->route('pedidos');
    }
    public function agregar(){
        return redirect()->route('articulos');
    }
}
