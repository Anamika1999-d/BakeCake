<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\cart;
use App\wishlist;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class productController extends Controller
{
    public function show(){
        $items=product::where([
            ['category','=','Birthday cake']
        ])->get();
        $item1=product::where([
            ['category','=','Wedding cake']
        ])->get();
        $item2=product::where([
            ['category','=','Cup cake']
        ])->get();
        // dd ($item);
        return view('pages/index',compact('items','item1','item2'));
    }
    public function display1()
    {
        $product=product::where('name','LIKE','%'.'chocolate'.'%')->get();
        $count=product::where('name','LIKE','%'.'chocolate'.'%')->count();
        
        return view('pages/list',compact('product','count'));
    }
    public function display2()
    {
        $product=product::where('name','LIKE','%'.'Butterscotch'.'%')->get();
        $count=product::where('name','LIKE','%'.'Butterscotch'.'%')->count();
        return view('pages/list',compact('product','count'));
    }
    public function display3()
    {
        $product=product::where('name','LIKE','%'.'fruit'.'%')->get();
        $count=product::where('name','LIKE','%'.'fruit'.'%')->count();
        return view('pages/list',compact('product','count'));
    }
    public function display4()
    {
        $product=product::where('name','LIKE','%'.'Velvet'.'%')->get();
        $count=product::where('name','LIKE','%'.'Velvet'.'%')->count();
        return view('pages/list',compact('product','count'));
    }
    public function display5()
    {
        $product=product::where('name','LIKE','%'.'vanilla'.'%')->get();
        $count=product::where('name','LIKE','%'.'vanilla'.'%')->count();
        return view('pages/list',compact('product','count'));
    }
    public function display6()
    {
        $product=product::where('name','LIKE','%'.'Nut'.'%')->get();
        $count=product::where('name','LIKE','%'.'Nut'.'%')->count();
        return view('pages/list',compact('product','count'));
    }
    public function display7()
    {
        $product=product::where('name','LIKE','%'.'Black Forest'.'%')->get();
        $count=product::where('name','LIKE','%'.'Black Forest'.'%')->count();
        return view('pages/list',compact('product','count'));
    }
    public function display8()
    {
        $product=product::where('name','LIKE','%'.'desert'.'%')->get();
        $count=product::where('name','LIKE','%'.'desert'.'%')->count();
        return view('pages/list',compact('product','count'));
    }
    public function view($id){
        $product=product::find($id);
        return view('pages/detail',compact('product'));
    }
    public function search(request $req)
    {
        $search=$_GET['search'];
        $items=product::where('name','LIKE','%'.$search.'%')->get();
        return view('pages/search',compact('items'));
    }
    public function AddToCart(request $req){
        
        if($req->session()->has('user')){
            $cart= new cart;
            $cart->User_id=$req->session()->get('user')['id'];
            $cart->Product_id=$req->productID;
            $cart->weight=$req->weight;
            $cart->price=$req->price;
            $cart->message=$req->message;
            $cart->save();
            return back();
        }
        else{
            return redirect('/login');
        }

    }
    Static function cartItem(){
        $userid=Session::get('user')['id'];
        return cart::where('User_id',$userid)->count();
    }
    public function cart(request $req){
        if($req->session()->has('user')){
            $userid=Session::get('user')['id'];
            $item=DB::table('carts')
            ->join('products','carts.Product_id','=','products.id')
            ->where('carts.User_id',$userid)
            ->select('products.*','carts.id as cart_id','carts.*')
            ->get();
            // dd ($item);
            return view('cart_and_order/cart',['item'=>$item]);
        }
        else{
            return redirect('/login');
        }
    }
    function removecart($id){
        cart::destroy($id);
        return back();
    }
    public function add_to_wishlist(request $req){
        $userid=Session::get('user')['id'];
        $item=DB::table('wishlists')
            ->where('wishlists.User_id',$userid)
            ->select('wishlists.Product_id')
            ->get();
        // dd($item);
        if($req->session()->has('user')){

                        $wishlist= new wishlist;
                        $wishlist->User_id=$req->session()->get('user')['id'];
                        $wishlist->Product_id=$req->productID;
                        $wishlist->save();
                        return back()->with('alert', 'Added to Wishlist!');
        }
        else{
            return redirect('/login');
        }
    }
    public function wishlist(request $req){
        if($req->session()->has('user')){
        $userid=Session::get('user')['id'];

            $items=DB::table('wishlists')
            ->join('products','wishlists.Product_id','=','products.id')
            ->where('wishlists.User_id',$userid)
            ->select('wishlists.*','wishlists.id as wishlist_id','products.*')
            ->get();
            return view('pages/wishlist',['items'=>$items]);

        }
        else{
            return redirect('/login');
        }
    }
    public function remove_wishlist($id){
        wishlist::destroy($id);
        return back();
    }

}
