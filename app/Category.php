<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // const CREATED_AT = null;
    // const UPDATED_AT = null;

    public function men()
    {
      $products = App\Product::where('products', 1)
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();
    }
}
