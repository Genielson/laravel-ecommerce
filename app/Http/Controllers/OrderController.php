<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{


    public function createOrder(){
        $user = Auth::user();
        $order = new Order();
        $order->id_cart = ;
        $order->id_user = $user->id;
        $order->total_value = $_SESSION['data-pre-order']['total'];


    }

}
