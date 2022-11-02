<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function index(){
        return view('cart.cart');
    }

    public function addItemToCart($id){
        $user = Auth::user();
        DB::beginTransaction();
        $cart = Cart::create([
           'id_user' => $user->id
        ]);
        $cartItem = new CartItem();
        $cartItem->cart_id = $cart->id;
        $cartItem->id_product = $id;
        if($cartItem->save()){
            DB::commit();
            return true;
        }else{
            DB::rollBack();
            return false;
        }

    }

  
}
