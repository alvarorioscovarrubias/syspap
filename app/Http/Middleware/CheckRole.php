<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
{

    public function handle($request, Closure $next, $role)
    {
	    if ($role != Auth::user()->rol->name) {
	        return redirect('home');
	    }

	    if (!auth()->check()) { 
            return redirect()->route('login');
        }
	    
	    return $next($request);
    }

}