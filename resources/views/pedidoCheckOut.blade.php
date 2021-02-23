<x-app-layout>
  {{Cart::total()}}
  <div class="flex flex-col shadow rounded bg-gray-100"> 
    <div class="mx-auto font-mono text-base lg:text-lg xl:text-xl">
      REVISE SU PEDIDO
    </div>
    <form action="{{route('pedidos.crear')}}" method="POST">
          
    @csrf
    <div class="grid grid-cols-2">
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
          ID CLIENTE
          
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
          <label>
            <input class="w-full" type="text" name="id_cliente" value="{{session()->get('idcliente')}}" readonly>
          </label>
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
          NOMBRE CLIENTE
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
          <label>  
            <input class="w-full" type="text" name="nombre_cliente" value="{{$cliente->nombre}}" readonly>
          </label>
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
          CUIT CLIENTE
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
          <label>
            <input class="w-full" type="text" name="cuit_cliente"  value="{{$cliente->cuit}}" readonly>
          </label>
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
          NOMBRE VENDEDOR
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
          <label>
            <input class="w-full" type="text" name="nonbre_vendedor" value="{{auth()->user()->name}}" readonly>
          </label>
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
          ID VENDEDOR
        </div>
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
          <label>
            <input class="w-full" type="text" name="id_vendedor" value="{{auth()->user()->id}}" readonly>
          </label>
        </div>
        <div class="bg-gray-300 px-2 py-3 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl ">
            Descripcion  
        </div> 
        <div class="bg-gray-100  px-2 py-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">                                  
          <label>
            <input class="w-full" type="text" name="desc"  placeholder="Ingrese descripcion">
          </label>
        </div> 
    </div>
    <div class="grid grid-cols-1">

      <button type="submit" class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"> ENVIAR PEDIDO</button>
    </div>
    
              
        
        
    </form>
  </div>  

</x-app-layout>