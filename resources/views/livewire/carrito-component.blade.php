
<div class="flex flex-col shadow rounded">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    
    
    @if (Cart::count()>0)
        <div class="bg-gray-300 px-2 py-2 grid grid-cols-5 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl overflow-auto ">
            <div>
                Nombre
            </div>
            <div>
                Impuestos
            </div>
            <div>
                Cantidad    
            </div>
            <div>
                Subtotal
            </div>
            <div class="mx-auto">
                Quitar
            </div>
        </div>    
            @foreach (Cart::content() as $item)
            <div class="bg-gray-100 hover:bg-gray-200  grid grid-cols-5 px-2 py-4 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
                <div>
                    {{$item->model->nombre}}
                </div>
                <div>
                    {{$item->tax*$item->qty}}
                </div>
                <div>
                    {{$item->qty}}
                </div>
                <div>
                    ${{$item->subtotal}}
                </div>
                <div class="mx-auto">
                    <a href="#" wire:click.prevent="destroy('{{$item->rowId}}')">X</a>
                </div>
            </div>     
            @endforeach
                <div class="bg-gray-300 px-2 py-2 grid grid-cols-2 text-xs sm:text-ms md:text-base lg:text-lg xl:text-xl mx-auto w-full">
                    <div>
                        Subtotal
                    </div>
                    <div>
                        ${{Cart::subtotal()}}
                    </div>
                    <div>
                        Impuestos
                    </div>
                    <div>
                        ${{Cart::tax()}}
                    </div>
                    <div class="py=6">
                        Total
                    </div>
                    <div>
                        ${{Cart::total()}}
                    </div>
                   
             
                </div>
                <div class="grid grid-cols-3 h-10 shadow">
                    <button class="bg-red-500 hover:bg-red-700 text-white" wire:click.prevent="destroyAll()">Borrar</button>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white" wire:click.prevent="comprar()">Comprar</button>
                    <button class="bg-green-500 hover:bg-green-700 text-white" wire:click.prevent="agregar()">Agregar Mas</button>


                </div>
        @else
            <p>No hay productos en el carrito</p>

        @endif    
        

    </div>

</div>



