<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminloginMiddleware
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
        if(Auth::check())
        {
            $user = Auth::user();
            if($user->quyen==1)
            {
                return $next($request);
            }
            else{
                return redirect('adminb/danhsachdata');
            }
                
        }
        else
        {
            return redirect('admin/dangnhap');
        }
    }
}
