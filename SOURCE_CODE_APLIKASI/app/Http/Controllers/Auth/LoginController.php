<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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

    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = RouteServiceProvider::HOME;

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'required' => ':attribute tidak boleh kosong'
        ], [
            'email' => 'Alamat email',
            'password' => 'Kata sandi',
        ]);
        $loginInput = $request->email;
        $user = User::where('email', $loginInput)->orWhere('name', $loginInput)->first();
        if ($user && Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
            return redirect()->intended('/admin/dashboard')
                ->with('success', 'Berhasil Login');
        }
        if (!$user) {
            return redirect("login")->with('error', 'Username atau Email anda salah');
        }
        return redirect("login")->with('error', 'Kata sandi anda salah');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login')->with('success', 'Berhasil Logout');
    }
}
