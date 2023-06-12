<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Models\DataCustumer;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\dataCustume;

class AuthManagerController extends Controller
{
    function login()
    {
        return view('login');
    }
    function registertion()
    {
        return view('AdminDashBoard.registertion');
    }
    function index()
    {
        return view('index');
    }

    function registertionPost(Request $request)
    {
        $request->validate([
            'numberId' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required'
        ]);

        $data = [
            'numberId' => $request->numberId,
            'username' => $request->username,
            'password' => $request->password
        ];
        $user = new User();
        $user->numberId = $request->input('numberId');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        if ($user->save()) {
            return redirect(route('registertion'))->with("success", "تم تسجيل المستخدم بنجاح");
        } else {
            $userExists = User::where('numberId',  $user->numberId)->exists();
            return redirect(route('registertion'))->with("error", "المستخدم مسجل مسبقا");
        }
    }

    function loginPost(Request $request)
    {
        $request->validate([
            'numberId' => 'required|exists:users',
            'password' => 'required'
        ]);

        $user = User::where('numberId', $request->input('numberId'))->first();
        if ($user || password_verify($request->input('password'), $user->password)) {
            auth()->login($user);
            session(['username' => $user->username]);
            // return redirect(route('login'))->with("success",  $user->password);
            return redirect(route('index'))->with("success", $user->username);
        } else {
            return redirect(route('login'))->with("error", "تفاصيل تسجيل الدخول غير صحيحة.");
        }
    }



}
