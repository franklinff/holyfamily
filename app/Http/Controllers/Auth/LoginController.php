<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Roles;
use Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo(){
        $role = Auth::user();
        $role_details = Roles::where('id', $role->role_id)->first();
        $role_name = $role_details->name;

        // Check user role
        switch ($role_name) {
            case 'Parish Priest':
                return '/baptism';
                break;
            case 'Church Employee':
                return '/churchbuidingfund';
                break;
            case 'Parish council':
                return '/churchbuidingfund';
                break;
            default:
                return '/login';
                break;
        }
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
