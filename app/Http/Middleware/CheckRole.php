<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\RolePermission;

/*use Illuminate\Support\Facades\DB;
use App\Permission;
use App\User;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Session; ****
*/


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
/*       $loginuser =  Auth::user()->toArray();
         $permissions = DB::table('role_has_permissions')
                                        ->leftJoin('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                                        ->select('permissions.name')
                                        ->where('role_id',$loginuser['role_id'])
                                        ->get()->toArray();
        $permissions = array_column($permissions,'name');
*/

       $permissions_withroles = RolePermission::with('getPermissionname')
                                     ->where('role_id',Auth::user()->id)
                                     ->get()->toArray();

        foreach ($permissions_withroles as $value){
            $permissions[] =$value['get_permissionname']['name'];
        }

        $current_route = \Request::route()->getName();

        if (in_array($current_route, $permissions)) {
            session(['permission' => $permissions]);
            return $next($request);
        }

        return redirect()->route('login');
        abort(404);
    }

}
