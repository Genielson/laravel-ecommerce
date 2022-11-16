<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class UserOrderController extends Controller
{
    public function allDataOrderUser(){



        return view('account.order-list');
    }
}
