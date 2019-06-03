<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Roles;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user();
        $role_details = Roles::where('id', $role->role_id)->first();
        $role_name = $role_details->name;

        // Check user role
        switch ($role_name) {
            case 'Parish Priest':
                return redirect()->route('baptism.index');
                break;
            case 'Church Employee':
                return redirect()->route('churchbuidingfund.index');
                break;
            case 'Parish council':
                return redirect()->route('churchbuidingfund.index');
                break;
            default:
                return '/login';
                break;
        }

//        return view('home');
    }
}
