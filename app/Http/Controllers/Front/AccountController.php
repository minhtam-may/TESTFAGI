<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AccountController extends Controller
{
    public function login()
    {
        return view('front.account.login');
    }

    public function checkLogin(Request $request)
    {
        // Validator::make($request->all(),[
        //     'email' => 'required|email',
        //     'password'=>'required'
        // ])->validate();

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 2,//user
        ];

        $remember = $request->remember;

        if(Auth::attempt($credentials, $remember)) {
            return redirect('');
        } else {
            return back()->with('notification', 'Email or password is wrong');
        };
    }

    public function logout()
    {
        Auth::logout();

        return back();
    }
}
