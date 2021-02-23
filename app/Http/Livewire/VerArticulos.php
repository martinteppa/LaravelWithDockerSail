<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Lista;
use Illuminate\Support\Facades\DB;




class VerArticulos extends Component
{   
    use WithPagination;

    public $busqueda;
    public $busqueCodigo;
     
    
    
    public function updating()
    {
       
        $this->resetPage();
        
        
    }
  
    public function render()
    {
        
        
        
        /* session(['idcliente' => $this->ide]); */

        

        
        $lista=Lista::where('cliente_id' , session()->get('idcliente'))->first();

        $tabla = DB::table('precios')
        ->where('cod_lista' , $lista->id)
        ->join('articulos','articulos.id','=','precios.cod_art');

        
        $precios = $tabla->where('nombre','like','%'.$this->busqueda.'%')
        ->where('codigo_articulo','like','%'.$this->busqueCodigo.'%')
        ->paginate(3);   
        return view('livewire.ver-articulos', ['precios' => $precios]);
       
 

        
    }
    public function ver($ide){
        
        
        redirect()->route('detalleArticulos', $ide);

        
    }

    

    
}
