<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
 
    public function handle(Request $request, Closure $next)
    {
        //dd($request->user()->rol);
        $user=$request->user();
        if ($user->rol=='admin'){
            return $next($request);
        }
        else{
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
        //return abort (404);
        
    }
}
