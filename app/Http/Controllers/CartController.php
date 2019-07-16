<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        $carts = Cart::with('product','user')->where("user_id", $user->id)->get();

        return view('shop.cart', ['carts' => $carts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // $carts = new Cart();
        // $orders = Order::all();
        // foreach($carts as $cart){
        // $cart->product_id = $orders->product_id;
        // $cart->amount = $orders->amount;
        
        

       $orders = Order::all();
       $count = count($orders);
       $data = [];

       foreach($orders as $order){
            $data[] = [
                'amount' => $order->amount,
                'product_id' => $order->product_id,
                'user_id' => $order->user_id
            ];
           // for ($i=0; $i < $count; $i++) {
                //$data[] = $d;
            
         // ['amount' => $order->amount,
         // 'product_id' => $order->product_id]
            // };
        };
         // var_dump($data);
         // exit;


        // $cart->save();
        $cli = DB::table('carts')->insert($data);

        DB::table('orders')->delete();
         
        return view('shop.check');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
