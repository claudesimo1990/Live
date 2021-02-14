<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class loginController extends Controller
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
    //protected $redirectTo = RouteServiceProvider::ADMIN;
    /**
     * Create a new controller instance.
     *
     * @return Factory|View
     */

    public function dashboard(){
        return view('admin.home');
    }

    public function getForm(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser && Hash::check($request->password, $existingUser->password)) {
            $request->session()->put('user',$request->email);
            return redirect()->to('/admin/home');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->to('login');
    }
}
