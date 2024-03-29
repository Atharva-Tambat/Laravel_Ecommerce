<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
      
        if($request->session()->has('ADMIN_ID')){
            return $next($request);
        }
        else{
             session()->flash('error','Access Denied');
            return redirect('admin/');
        }


    }
}
