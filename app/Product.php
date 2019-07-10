<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function order()
    {
      return $this->hasOne('App\Order');
    }

    public function men()
    {
      $products = App\Product::where('products', 1)
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();
    }

}
