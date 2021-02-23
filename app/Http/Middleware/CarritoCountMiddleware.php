<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Cart;

class CarritoCountMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Cart::count()>0){

            return $next($request);
        }else{
            session()->flash('message','agregue item/s al carrito!!');
            return redirect()->route('carrito');
        }
        
    }
}
