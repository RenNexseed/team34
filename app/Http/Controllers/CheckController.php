<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Create;


class CheckController extends Controller
{
    public function index(CreateForm $request)
    {
        return view('shop.check');
    }
    public function confirm(Request $request)
    {
        $data = $request->all();

        return view('shop.confirm', ['hoge' => $data]);
    }
    public function thanks(Request $request)
    {
        $data = $request->all();

        return view('shop.thanks', ['hoge' => $data]);
    }
}
