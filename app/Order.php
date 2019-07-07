<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function product()
    {
      return $this->belongsTo('App\Product');

    }

     // public function getData()
     // {
     //    return $this->id .':' . $this->amount . '('
     //     . $this->product->name.$this->product->description.')';
     //  }
}
