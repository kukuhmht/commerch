<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password, 'user_type' => '2'])) {
            $request->session()->put('username', $request->username);
            return redirect('/');
        }else{
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
