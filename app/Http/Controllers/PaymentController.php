<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Address;

class PaymentController extends Controller
{
    public function index(){

        $cart = new Cart();
        $itens = $cart->getAllItensLastCart();
        $address = new Address();
        $userAddress = $address->getAddressUserLogged();
        $subtotal = NULL;
        $total = NULL;
        $frete_test = 20;
        foreach($itens as $item){
            $subtotal += $item->price * $item->quantity;
        }
        $total += $subtotal + $frete_test;
        return view('payment.payment',[
            'itens' => $itens,
            'subtotal' => $subtotal,
            'frete' => $frete_test,
            'total' => $total,
            'endereco' => $userAddress
        ]);
    }
}
