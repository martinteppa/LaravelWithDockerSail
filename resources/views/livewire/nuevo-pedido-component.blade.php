

<div class="flex flex-col shadow rounded bg-gray-400"> 
    <div class="mx-auto font-mono text-base lg:text-lg xl:text-xl">
        Eliga su cliente
    </div>
    
    <div class="bg-gray-300 px-2 py-2 grid grid-cols-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl overflow-auto ">
        {{-- <div class="w-5 ">
            ID
        </div> --}}
        <div>
            NOMBRE
        </div>
        <div>
            CUIT
        </div>
        <div> 
            Accion
        </div>
        
    </div>
    @foreach ($clientes as $cliente) 
    <div class="bg-gray-100  grid grid-cols-3 px-2 py-2 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl hover:bg-gray-300 ">
        
        {{-- <div>
            {{$cliente->id}}
        </div> --}}
        <div>
            {{-- <a href="{{route('articulos' , ['id' => $cliente->id])}}" class="text-indigo-600 hover:text-indigo-900 uppercase">{{$cliente->nombre}}</a>
             --}}
            {{$cliente->nombre}}
        </div>
        <div>
            {{$cliente->cuit }}
        </div>
        <div>
            <button class="uppercase px-3 py-2 bg-blue-600 text-blue-50 max-w-max shadow hover:shadow-lg" wire:click="goto({{$cliente->id}})">ver</button>
        </div>
        
    </div>
    @endforeach
</div>