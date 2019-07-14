<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;


class CategoriesController extends Controller
{
    public function show($id)
    {
        $products = Product::where('category', $id)->get();
        return view('shop/find',["products" => $products]);
    }
}