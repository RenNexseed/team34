<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;


class CategoriesController extends Controller
{
    public function show(Request $request)
    {
        // $products = Product::where('category', $id)->get();
        // return view('shop/find',["products" => $products]);

      return view('shop.find')->with('products', Product::where('category', $request->category)->get());
    }
}

// return view('shop.find')->with('products', Product::where('name', 'like' , "%{$request->name}%")->get());