<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function loginAdmin(){
        return view('admin.login');
    }
}
