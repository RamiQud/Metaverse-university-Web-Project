<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminabout;

class Adminhome extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function Packeges()
    {
        return view('Packeges');
    }
    public function CreatAvatar()
    {
        return view('Creat-Avatar');
    }
    public function GeneralChat()
    {
        return view('General-Chat');
    }
    public function SupportServices()
    {
        return view('Support&Services');
    }
    public function contact()
    {
        return view('contact');
    }



    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function logout()
    {
        return view('index');
    }
 

    //user login pages
    // public function login()
    // {
    //     return view('auth.UserPasswords.login');
    // }
    // public function registertion()
    // {
    //     return view('auth.UserPasswords.registertion');
    // }
    // public function registertionPost()
    // {
    //     return view('auth.UserPasswords.registertion');
    // }
    // function registertionPost(Request $request)
    // {
    //     $request->validate([
    //         'numberId' => 'required|unique:users',
    //         'username' => 'required|unique:users',
    //         'password' => 'required'
    //     ]);

    //     $data = [
    //         'numberId' => $request->numberId,
    //         'username' => $request->username,
    //         'password' => $request->password
    //     ];
    //     $user = new adminabout();
    //     $user->numberId = $request->input('numberId');
    //     $user->username = $request->input('username');
    //     $user->password = $request->input('password');
    //     if ($user->save()) {
    //         return redirect(route('registertion'))->with("success", "تم تسجيل المستخدم بنجاح");
    //     } else {
    //         $userExists = adminabout::where('numberId',  $user->numberId)->exists();
    //         return redirect(route('registertion'))->with("error", "المستخدم مسجل مسبقا");
    //     }
    // }
}
