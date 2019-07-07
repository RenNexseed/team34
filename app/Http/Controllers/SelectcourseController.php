<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectcourseController extends Controller
{
    public function index()
    {
        return view('shop/selectcourse');
      
    }
    public function top2()
    {
        
        return view('shop/top2');
    }
}
