<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Address extends Model
{

    use HasFactory;
    protected $table = 'table_address';
    protected $fillable = ['id_user','address','number','state','city','country','district','cep'];

    public function getAddressUserLogged(){
        $user = Auth::user();
        $address = DB::table('table_address')
        ->where('id_user',$user->id)->get()->toArray();
    }



}
