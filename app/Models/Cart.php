<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['id','iduser','status'];


    public function getAllItensLastCart(){
        $user = Auth::user();
        $cart = Cart::where('status','')->where('id_user',$user->id)->get();
        if(count($cart) >= 1){
            $cart = $cart[0];
            $itens = DB::table('cart_itens')
            ->join('carts','cart_itens.cart_id','=','carts.id')
            ->join('products','products.id','=','cart_itens.id_product')
            ->where('cart_id',$cart->id)->get()->toArray();
            return $itens;
        }else{
            return NULL;
        }

    }

    public function getCartUserLogged(){
        $user = Auth::user();
        $cart = Cart::where('status','')->where('id_user',$user->id)->get();
        return $cart;
    }

    public function closeUserLoggedCart(){
        $user = Auth::user();
        DB::table('carts')->where('status','=',0)->where('id_user','=',$user->id)->update(['status' => 1]);
    }

    public function getQuantityItensCart(){
        $user = Auth::user();
        if($user == NULL){
            return NULL;
        }else{
            $cart = DB::table('carts')->where('status','')
            ->where('id_user',$user->id)->get()->toArray();
            if($cart == NULL){
                return 0;
            }else{
                return DB::table('cart_itens')->where('cart_id',$cart[0]->id)->count();
            }
        }
    }

    public function getAllPriceCart(){
        $user = Auth::user();
        if($user == NULL){
            return NULL;
        }else{
            $cart = DB::table('carts')->where('status','')
            ->where('id_user',$user->id)->get()->toArray();
            if($cart == NULL){
                return 0;
            }else{
                $itens = DB::table('cart_itens')->join('products','products.id','=','cart_itens.id_product')
                ->where('cart_id',$cart[0]->id)->get()->toArray();
                $totalPrice = 0;
                foreach($itens as $item){
                    $totalPrice += $item->price;
                }
                return $totalPrice;
            }
        }
    }

}
