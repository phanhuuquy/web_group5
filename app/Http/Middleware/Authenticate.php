<?php

namespace App\Http\Middleware;

use App\Models\GianHang;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate 
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        $id = Auth::id();
        $is_regist_shop = GianHang::firstWhere('id_user', $id);
        if ($is_regist_shop) {
            return redirect()->route('user.home');
        }

        return $next($request);
    }
}
