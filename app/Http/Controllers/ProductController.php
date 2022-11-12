<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showDetailsProduct(){
        return view('product-details.product-details');
    }

    public function showListProducts(){
        return view('product-list.product-list');
    }

    public function detailProduct(){
        return view('product-details.product-details');
    }
}
