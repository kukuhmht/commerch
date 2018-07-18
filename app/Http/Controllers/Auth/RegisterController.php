<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Users;

class RegisterController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('auth/register');
    }

    public function register(Request $request)
    {
        $this->validate($request,[
            'username'              => 'required|min:6|string',
            'password'              => 'required|min:8|confirmed|string',
            'email'                 => 'required|email|string',
            'password_confirmation' => 'required'
        ]);

        $user = new Users;
        $user->username = $request['username'];
        $user->password = Hash::make($request['password']);
        $user->user_type = '2';
        $user->email = $request['email'];
        $user->verified = true;

        if($user->save()){
            return redirect('/');
        }
    }
}
