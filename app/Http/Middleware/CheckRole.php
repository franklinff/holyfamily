<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;


class CheckRole
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
        $loginuser =  Auth::user()->toArray();

        $permissions = DB::table('role_has_permissions')
                                ->leftJoin('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                                ->select('permissions.name')
                                ->where('role_id',$loginuser['role_id'])
                                ->get()->toArray();

        $permissions = array_column($permissions,'name');

        $current_route = \Request::route()->getName();

        // dd($current_route);
        if (in_array($current_route, $permissions)) {
            session(['permission' => $permissions]);
            return $next($request);
        }

        return redirect()->route('login');
       // abort(404);
    }

}
