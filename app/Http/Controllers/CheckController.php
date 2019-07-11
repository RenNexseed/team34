<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\Create;
use Mail;
// use App\Mail\PostSent;
// use Illuminate\Support\Facades\Auth;
// use App\http\Requests\CreateForm;


class CheckController extends Controller
{
    public function index()
    {

        return view('shop.check');
    }
    public function confirm(Request $request)
    {
        $request->validate([
       'name' => 'required',  // 必須・文字列・２５５文字以内
        'mail' => 'required',               // 必須
        'zip01' => 'required|integer',          // 必須・整数
        'pref01' => 'required',          // 必須・整数
        'addr01' => 'required',          // 必須・整数
        'addr0' => 'required',  // 必須
        'check' => 'required',              // 必須
      ]);
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
        $request->session()->regenerateToken();
        return view('shop.thanks', ['hoge' => $data]);
    }
}
