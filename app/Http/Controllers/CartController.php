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
        $cart = new Cart();
        $itens = $cart->getAllItensLastCart();

        return view('cart.cart',
        [
            'itens' => $itens
        ]);

    }

    public function addItemToCart($id){
        $user = Auth::user();
        DB::beginTransaction();

        $cart = Cart::where('status','')->where('id_user',$user->id)->get();
        if(count($cart) >= 1){
            $cart = $cart[0];
        }else{
            $cart = NULL;
        }

        $cartItem = new CartItem();
        if($cart == NULL){
            $cart = new Cart();
            $cart->id_user = $user->id;
            $cart->status = false;
            $cart->save();
        }

        $cartItem->cart_id = $cart->id;

        $quantity = NULL;
        if(isset($_POST['quantidade'])){
            $quantity = $_POST['quantidade'];
        }else{
            $quantity = 1;
        }

        if($cartItem->addingOrIncrementItemCart($cart->id,$id,$quantity)){
            DB::commit();
            return view('cart.cart');
        }else{
            DB::rollBack();
            return false;
        }

    }


}
