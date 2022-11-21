<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;

class UserOrderController extends Controller
{
    public function allDataOrderUser(){

        $allOrders = new Order();
        $allOrders = $allOrders->getAllOrderUserLogged();
        return view('account.order-list',['itens'=> $allOrders]);
    }
}
