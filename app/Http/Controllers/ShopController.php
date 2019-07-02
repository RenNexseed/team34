<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){

      return view('shop.home')->with('products', Product::all());

    }

    public function show($productId){


      return view('shop.open')->with('product', Product::find($productId));
    }

    public function order()
    {
        // views/shop/order.blade.phpを表示する
        return view('shop.order')->with('products', Product::all());
    }
}
