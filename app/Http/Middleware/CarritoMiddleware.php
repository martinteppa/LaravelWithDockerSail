<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Cart;

class CarritoMiddleware
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
        if(Cart::count()==0){

            return $next($request);
        }else{

            return redirect()->route('articulos', ['id' => session()->get('idcliente')] );
        }
        
    }
}
