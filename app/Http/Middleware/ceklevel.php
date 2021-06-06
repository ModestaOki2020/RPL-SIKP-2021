<?php

namespace App\Http\Middleware;
use\DB;

use Closure;

class ceklevel
{
    
    public function handle($request, Closure $next, ...$levels)
    { 
        if(in_array($request->user()->level,$levels)){
            return $next($request);
        }
        return redirect('/'); 
        /*$roles = array_slice(func_get_args(), 3);

        foreach ($roles as $role) { 
        $user = \Auth::user()->role;
        if( $user == $role){
            return $next($request);
        }
    }*/
    }
}
