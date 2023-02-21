<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function loginrequest(Request $request)
    {
        if(Auth::attempt($request->except("_token"))){
            return redirect('/admin/category');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect("login");
    }
}
