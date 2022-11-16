<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['id_cart','id_user','total_value','frete','status'];

    public function getAllOrderUserLogged(){
        $user = Auth::user();
        $orders = DB::table('orders')
            ->join('table_address','table_address.id_user','=','orders.id_user')
            ->where('orders.id_user',$user->id)->get()->toArray();
    }

}
