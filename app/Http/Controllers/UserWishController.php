<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserWishController extends Controller
{
    public function allDataWishUser(){
        return view('account.wish-list');
    }
}
