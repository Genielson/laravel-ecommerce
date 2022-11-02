<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function addProductToFavorites($id){
        $user = Auth::user();
        $favorite = new Favorite();
        $favorite->id_user = $user->id;
        $favorite->id_product = $id;
        if($favorite->save()){
            return true;
        }else{
            return false;
        }
    }
}
