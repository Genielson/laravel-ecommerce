<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{

    public function showDetailsProduct(){
        return view('product-details.product-details');
    }

    public function showListProducts(){
        return view('product-list.product-list');
    }

    public function detailProduct($id){

        $product = Product::find($id);
        $categories = Category::all();
        $products = Product::offset(0)->limit(10)->get();

        return view('product-details.product-details',[
            'produto' => $product,
            'categorias' => $categories,
            'produtos' => $products
        ]

    );
    }
}
