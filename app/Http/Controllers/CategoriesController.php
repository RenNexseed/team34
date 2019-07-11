<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;


class CategoriesController extends Controller
{
    public function index()
    {
        return view('shop/category');
    }
    public function show($id)
    {
        $products = Product::where('category', $id)->get();
        return view('shop/showCategory',["products" => $products]);
    }
//     public function list(int $id, Request $request)
//     {
//          //Diaryモデルを使用して、diariesテーブルから$idと一致するidをもつデータを取得

//         $category = Category::find($id); 
// $orders = Order::with('product')->get();
//         return view('shops.showCategory', [
//             'category' => $category,
//         ]);
    // }
    public function store()
    {
        $product = new Category();
        $producs = Products::all();

        $puroducts->id =  $products->id;


        


        // $cart->save();

        return redirect('/showCategory');
    }

}
