<div class="flex flex-col shadow rounded"> 
    @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
    @endif
    <div class="bg-gray-300 px-2 py-2 grid grid-cols-3 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl overflow-auto ">
        <div class="w-5 ">
            ID
        </div>
        <div>
            NOMBRE
        </div>
        <div>
            ROL
        </div>
    </div>
    <div class="bg-gray-100  grid grid-cols-3 px-2 py-2 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
        <div>
            {{Auth::user()->id}}
        </div>
        <div>
            {{Auth::user()->name}}
        </div>
        <div>
            {{Auth::user()->role_id}}
        </div>
    </div>
    
</div>
