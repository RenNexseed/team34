<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('shop/category');
    }
    public function show($id)
    {
        return view('shop/showCategory');
    }
    public function list(int $id)
    {
         //Diaryモデルを使用して、diariesテーブルから$idと一致するidをもつデータを取得
        $diary = Category::find($id); 

        return view('shops.showCategory', [
            'category' => $category,
        ]);
    }
    
}
