<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->role==1){
            return $next($request); 
        }
        elseif(Auth::check() && Auth::user()->role==0){
            return redirect()->route('notAdmin');
            //echo "Ban da dang nhap nhung ko co admin";
        }
        else{
            return redirect()->route('adminLogin')
            ->with('error','Ban chua dang nhap, vui long dang nhap');
        }
        
    }
}
