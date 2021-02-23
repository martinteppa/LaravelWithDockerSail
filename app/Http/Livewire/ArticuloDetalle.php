<?php

namespace App\Http\Livewire;

use App\Models\Articulo;
use Livewire\Component;
use Cart;


class ArticuloDetalle extends Component
{
    public $articulo;
    public $count=1;
    
    public function mount($id)
    {
        $this->articulo = Articulo::find($id);
    }
    public function incrementar(){
        $this->count+=1;
    }
    public function store($product_id,$product_name,$product_price){

        $product_tax=$this->articulo->iva->alicuota;

        Cart::add($product_id,$product_name,$this->count,$product_price,[],$product_tax)->associate('App\Models\Articulo');
        session()->flash('message','Item añadido al carrito');
        return redirect()->route('carrito');
        


    }
    public function storeWithDiscount($product_id,$product_name,$product_price){

       

        $desc=$product_price*$this->articulo->descuento;
        $product_price_desc=$product_price-$desc;
        $product_tax=$this->articulo->iva->alicuota;
        Cart::add($product_id,$product_name,$this->count,$product_price_desc,['descuento' => 'si'],$product_tax)->associate('App\Models\Articulo');
        session()->flash('message','Item añadido al carrito');
        return redirect()->route('carrito');
    }
    public function decrementar(){
        
        if($this->count<=1){
            $this->count=1;
        }else{ 
        $this->count-=1;
        }
    }
    public function render(){
        

        return view('livewire.articulo-detalle', ['articulo' => $this->articulo]);

        
    }
}