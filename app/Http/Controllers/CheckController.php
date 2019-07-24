<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\Create;
use Mail;
// use App\Mail\PostSent;
use Illuminate\Support\Facades\Auth;
// use App\http\Requests\CreateForm;

// 購入確認ページのコントローラー（check,confirm,thanks）
class CheckController extends Controller
{
    // 入力フォームの呼び出し
    public function index()
    {
        return view('shop.check');
    }
    // 確認ページの呼び出し
    public function confirm(Request $request)
    {

        $request->validate([
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
    // thanksページの表示、メールの送信
    public function thanks(Request $request)
    {
        $data = $request->all();
        Mail::send(['text' => 'mail'], ['name' => 'kazuya'], function($message) {
            $message->to(\Auth::user()->email, \Auth::user()->name)->subject('おめでとうございます');
            $message->to('firsttime.netshopping@gmail.com')->subject('おめでとうございます');
            $message->from('firsttime.netshopping@gmail.com', 'はじめてのネットショッピング');
        });
        $request->session()->regenerateToken();
        return view('shop.thanks');
    }
}
