<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart;
use App\order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ordercontroller extends Controller
{
    public function order(request $req){
        $userid= Session::get('user')['id'];
        $total = DB::table('carts')
        ->join('products', 'carts.product_id','=','products.id')
        ->where('carts.user_id',$userid)
        ->sum('carts.price');
        $item=DB::table('carts')
            ->join('products','carts.Product_id','=','products.id')
            ->where('carts.User_id',$userid)
            ->select('products.*','carts.id as cart_id','carts.*')
            ->get();
        return view('cart_and_order/order',compact('item','total'));
    }
    public function store_order(request $req){
        $userid= Session::get('user')['id'];
        $allcart=cart::where('User_id',$userid)->get();
        foreach($allcart as $cart){
            $order= new order;
            $order->order_date=$order->created_at;
            $order->User_id=$cart['User_id'];
            $order->Product_id=$cart['Product_id'];
            $order->message=$cart['message'];
            $order->weight=$cart['weight'];
            $order->prices=$cart['price'];
            $order->address=$req->address;
            $order->city=$req->city;
            $order->state=$req->state;
            $order->pin_no=$req->pin_no;
            $order->order_no='CAKE'.time().'0T';
            $order->status='pending';
            $order->save();
            cart::where('User_id',$userid)->delete();
        }
        return view('cart_and_order/order_successful');
    }
    public function order_list(){
        $userid= Session::get('user')['id'];

        $item=DB::table('orders')
            ->join('products','orders.Product_id','=','products.id')
            ->where('orders.User_id',$userid)
            ->select('products.*','orders.id as order_id','orders.*')
            ->get();
        return view('cart_and_order/order_list',compact('item'));
    }
}
