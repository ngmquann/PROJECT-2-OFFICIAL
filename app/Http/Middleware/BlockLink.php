<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BlockLink
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
            // dd($roles); // echo + exit
            
            $r = $user->adminname == null ? "admin" : "erro";
            if (in_array($r, $user)) {
                return $next($request);
            }
        }
        return redirect('login_admin');
    }
}
