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
}
