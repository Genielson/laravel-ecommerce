<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    public function allDataOrderUser(){
        return view('account.order-list');
    }
}