<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Roles;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

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

    public function redirectTo(Request $request){

        $validateData = $request->validate([
            'captcha' => 'required|captcha',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $role = Auth::user();
            $role_details = Roles::where('id', $role->role_id)->first();
            $role_name = $role_details->name;

                // Check user role
                switch ($role_name) {
                    case 'Parish Priest':
                        return  redirect()->route('baptism.index');
                        break;
                    case 'Church Employee':
                        return redirect()->route('churchbuidingfund.index');
                        break;
                    case 'Parish council':
                        return redirect()->route('churchbuidingfund.index');
                        break;
                    default:
                        return redirect()->route('login');
                        break;
            }
        }else{
            return Redirect::back()->withErrors(['Invalid credentials']);
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
