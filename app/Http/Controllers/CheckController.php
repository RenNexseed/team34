<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Create;
use Mail;
use App\Mail\PostSent;
use Illuminate\Support\Facades\Auth;



class CheckController extends Controller
{
    public function index()
    {
        return view('shop.check');
    }
    public function confirm(Request $request)
    {
        $data = $request->all();
        $request->flash();

        return view('shop.confirm', ['hoge' => $data]);
    }
    public function thanks(Request $request)
    {
        $data = $request->all();
        Mail::send(['text' => 'mail'], ['name' => 'kazuya'], function($message) {
            $message->to(\Auth::user()->email, \Auth::user()->name)->subject('おめでとうございます');
            $message->to('firsttime.netshopping@gmail.com')->subject('おめでとうございます');
            $message->from('firsttime.netshopping@gmail.com', 'はじめてのネットショッピング');
        });
        return view('shop.thanks', ['hoge' => $data]);
    }
}
