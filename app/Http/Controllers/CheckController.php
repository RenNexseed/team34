<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CheckController extends Controller
{
    public function index()
    {
        return view('shop.check');
    }
    public function confirm()
    {
        return view('shop.confirm');
    }
}
