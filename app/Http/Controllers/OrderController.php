<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\State;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{


    public function createOrder(){
            DB::beginTransaction();
            session_start();
            $user = Auth::user();
            $order = new Order();
            $myCart = new Cart();
            $address = new Address();
            $address->updateAllAddressWithOrderInfo($_POST);
            $userCart = $myCart->getCartUserLogged();
            $myCart->closeUserLoggedCart();
            $order->id_user = $user->id;
            $order->id_cart = $userCart[0]->id;
            $order->total_value = $_SESSION['data-pre-order']['total'];
            $order->frete = $_SESSION['data-pre-order']['frete'];

            if($order->save()){
                DB::commit();
                return view('payment.payment-paypal');
            }else{
                DB::rollBack();
                return redirect()->route('pedidos')
                ->with('messageOrderFail','Houve um erro ao realizar o pedido!');
            }
    }

}
