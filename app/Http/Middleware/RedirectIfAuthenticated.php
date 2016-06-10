<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;


class RedirectIfAuthenticated
{
    protected $auth;

    public function __construct(Guard $auth){
        $this->auth = $auth;
    }

    public function handle($request, Closure $next){
        if ($this->auth->check()) {
            return redirect('/perfil');
        }
        return $next($request);
    }
}
