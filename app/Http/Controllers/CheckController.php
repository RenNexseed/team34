<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Create;
use Mail;
use App\Mail\PostSent;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateForm;



class CheckController extends Controller
{
    public function index()
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
        dd(123);
        $data = $request->all();

        return view('shop.thanks', ['hoge' => $data]);
    }
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name' => 'kazuya'], function($message) {
            $message->to(\Auth::user()->email, 'to kazuya')->subject('test');
            $message->to('firsttime.netshopping@gmail.com', 'to kazuya')->subject('test');
            $message->from('firsttime.netshopping@gmail.com', 'kazuya');
        });
    }
}
