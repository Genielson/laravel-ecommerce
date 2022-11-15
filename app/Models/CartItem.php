<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CartItem extends Model
{
    use HasFactory;
    protected $table = 'cart_itens';
    protected $fillable = ['cart_id','id_product','quantity'];


    public function addingOrIncrementItemCart($idCart,$idProduct,$quantity = null){
        $itens = DB::table('cart_itens')->where('id',$idCart)
        ->where('id_product',$idProduct)->get()->toArray();
        if(count($itens) >= 1){
         DB::table('cart_itens')->where('id',$idCart)
        ->where('id_product',$idProduct)->where('cart_id', $idCart)
        ->update(['quantity' => $itens[0]->quantity + $quantity ]);
        }else{
            DB::table('cart_itens')->insert([
                'cart_id' => $idCart,
                'id_product' => $idProduct,
                'quantity' => $quantity
            ]);
        }
        return true;
    }
}
