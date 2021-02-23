



<div class="flex flex-col shadow rounded"> 

    <div class="grid grid-cols-2">
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            ID
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            {{$articulo->id}}
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            nombre
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            {{$articulo->nombre}}
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Descripcion
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            {{$articulo->Descripcion}}
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Precio
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            {{$articulo->precio_venta}}
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Descuento
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            {{$articulo->descuento}}
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Sin Desc
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            <a href="#" wire:click.prevent="store({{$articulo->id}},'{{$articulo->nombre}}' , {{$articulo->precio_venta}})">Agregar Sin desc</a> 
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Con desc
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            <a href="#" wire:click.prevent="storeWithDiscount({{$articulo->id}},'{{$articulo->nombre}}' , {{$articulo->precio_venta}})">Agregar Con desc</a> 
        </div>

        <div class="bg-gray-400 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Cantidad
        </div>

        <input type="number" class=" focus:outline-none text-center w-full bg-gray-400  font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" wire:model="count">
                                    
    
        <button wire:click="decrementar" class=" bg-gray-400 text-gray-600 hover:text-gray-700 hover:bg-gray-300  w-full rounded-l cursor-pointer outline-none">
            <span class="m-auto text-2xl font-thin">−</span>
        </button>
    
        <button wire:click="incrementar" class="bg-gray-400 text-gray-600 hover:text-gray-700 hover:bg-gray-300  w-full rounded-r cursor-pointer">
            <span class="m-auto text-2xl font-thin">+</span>
        </button>  
        
    </div>
</div>  

{{-- 


<div class="flex flex-col shadow rounded"> 

    <div class="grid grid-cols-2">
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            ID
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            {{$articulo->id}}
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            nombre
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            {{$articulo->nombre}}
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Descripcion
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            {{$articulo->Descripcion}}
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Precio
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            {{$articulo->precio_venta}}
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Descuento
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            {{$articulo->descuento}}
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Sin Desc
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            <a href="#" wire:click.prevent="store({{$articulo->id}},'{{$articulo->nombre}}' , {{$articulo->precio_venta}})">Agregar Sin desc</a> 
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Con desc
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
            <a href="#" wire:click.prevent="storeWithDiscount({{$articulo->id}},'{{$articulo->nombre}}' , {{$articulo->precio_venta}})">Agregar Con desc</a> 
        </div>

        <div class="bg-gray-400 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Cantidad
        </div>

        <input type="number" class=" focus:outline-none text-center w-full bg-gray-400  font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" wire:model="count">
                                    
    
        <button wire:click="decrementar" class=" bg-gray-400 text-gray-600 hover:text-gray-700 hover:bg-gray-300  w-full rounded-l cursor-pointer outline-none">
            <span class="m-auto text-2xl font-thin">−</span>
        </button>
    
        <button wire:click="incrementar" class="bg-gray-400 text-gray-600 hover:text-gray-700 hover:bg-gray-300  w-full rounded-r cursor-pointer">
            <span class="m-auto text-2xl font-thin">+</span>
        </button>  
        
    </div>
</div>   --}}

