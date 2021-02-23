

<div class="flex flex-col shadow rounded"> 
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success bg-red-500">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="mx-auto font-mono text-base lg:text-lg xl:text-xl">
        Lista de Articulos
    </div>
    <div class="grid grid-cols-2 mx-auto">
        <div>
            <label for="name"> </label>
            <input class=" text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl" type="text" wire:model.debounce.500ms="busqueda"  id="name" placeholder="Ingrese nombre" class="form-control">
        </div>
        <div>
            <label for="name"> </label>
        <input class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl" type="text" wire:model.debounce.500ms="busqueCodigo"  id="name" placeholder="Y/O Ingrese el codigo" class="form-control">
        </div>
    </div>
    <div class="bg-gray-300 px-2 py-2 grid grid-cols-4 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl  ">
        <div>
            Codigo 
        </div>
        <div>
            nombre
        </div>
        <div>
            stk
        </div>
        <div>
            accion
        </div>
    </div>
    
      



@foreach ($precios as $precio)
        
        
    
    <div class="bg-gray-100 hover:bg-gray-300 grid grid-cols-4 px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
        
        <div>
            {{$precio->codigo_articulo}}
        </div>
        <div>
            {{$precio->nombre}}
        </div>
        @if ($precio->stock_status=='disponible')
            <div>
                disp.
            </div>
        @else    
            <div>
                no disp.
            </div>
        @endif
        
        @if ($precio->stock_status=='disponible')
        <div>
            <button class="uppercase px-3 py-2 bg-blue-600 text-blue-50 max-w-max shadow hover:shadow-lg" wire:click="ver({{$precio->cod_art}})">ver</button>
        </div> 
        @else
        <div>
            <button class="uppercase px-3 py-2 bg-red-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg">ver</button>
        </div>     
        @endif
                
    </div>

   
@endforeach
    
    <div class="mx-auto">
        {{$precios->links('pagination')}}
    </div>
    
</div>