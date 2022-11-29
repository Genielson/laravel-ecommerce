<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\State;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
class PaymentController extends Controller
{
    public function index(){
        session_start();
        $user = Auth::user();
        $cart = new Cart();
        $itens = $cart->getAllItensLastCart();
        $_SESSION['itens-cart'] = $itens;
        $_SESSION['email-user'] = $user->email;
        $address = new Address();
        $states = State::all();
        $userAddress = $address->getAddressUserLogged();
        $subtotal = NULL;
        $total = NULL;
        $frete_test = 20;
        foreach($itens as $item){
            $subtotal += $item->price * $item->quantity;
        }
        $total += $subtotal + $frete_test;

        $_SESSION['data-pre-order']['subtotal'] = $subtotal;
        $_SESSION['data-pre-order']['total'] = $total;
        $_SESSION['data-pre-order']['frete'] = $frete_test;



        return view('payment.payment',[
            'itens' => $itens,
            'subtotal' => $subtotal,
            'frete' => $frete_test,
            'total' => $total,
            'endereco' => $userAddress,
            'estados' => $states
        ]);
    }
}
