<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class AssignGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,  $guard = null)
    {
        $urlCurrent = URL::current();
        Session::flash('redirect', $urlCurrent);
        $siteId = Request::segment(1);
        if(!Auth::guard($guard)->check()) {
            switch ($guard) {
                case 'admin':
                    $redirect = '/admin/login';
                    break;
                case 'web':
                    $redirect = '/login';
                    break;
                default:
                    $redirect = '/';
                    break;
            }
            return redirect($redirect);
        }
        Auth::shouldUse($guard);
        return $next($request);
    }
}
