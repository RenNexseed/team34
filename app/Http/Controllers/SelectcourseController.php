<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectcourseController extends Controller
{
    public function index()
    {
        return view('shop/selectcourse');
        return view('top2/selectcourse');
    }
}
