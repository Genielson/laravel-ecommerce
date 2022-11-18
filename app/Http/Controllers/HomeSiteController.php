<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;

class HomeSiteController extends Controller
{
    public function index(){

         $cart = new Cart();
         $quantityItensCart = $cart->getQuantityItensCart();
         $priceAllCart = $cart->getAllPriceCart();

        return view('home.home',[

        ]);
    }
}
