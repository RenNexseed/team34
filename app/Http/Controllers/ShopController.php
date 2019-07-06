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

    public function create()
    {
      return view('shop.createproducts');  

      
    }

    
 

    public function store()
    {


       $data = request()->all();

       $product = new Product();


       //$imgpath = $this->saveProfileImage($request->file('picture_path'));


       $product->name = $data['name'];
       $product->category = $data['category'];
       $product->price = $data['price'];
       $product->description = $data['description'];


       $imgPath = $data['picture_path']->store('images', 'public');

       $product->picture_path = $imgPath;


       $product->save();

       return redirect('/home');
    }

    public function destroy($productId)
    {
      $product = Product::find($productId);

      $product->delete();

      return redirect('/home');
    }

    public function find(Request $request)
    {

      //$products = Product::find($request->name);

      //return view('shop.find', ['products'=> $products]);
      return view('shop.find')->with('products', Product::where('name', $request->name)->first());
      
    }
}
