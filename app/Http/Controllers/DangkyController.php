<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DangkyController extends Controller
{
    //
    public function showFromRegister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $user =new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt( $request->password);

        $user->save();

        return redirect() ->route('show-form-register')->with('success','dang ky thanh cong');

    }
    public function showFromLogin()
    {
        return view('auth.login');
    }
    public  function  login(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email , 'password' => $request->password]))
        {
            return  redirect()->route('show-profile');
        }
        return  redirect()->route('show-form-login')->with('error','loi roi ban oi');
    }

    public  function ShowProfile()
    {
        if(Auth::check())
        {
            return view('auth.profile');
        }
        return redirect()->route('show-form-login');
    }

    public  function  logout()
    {
        Auth::logout();
        return redirect()->route('show-form-login');

    }
}
