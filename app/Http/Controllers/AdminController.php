<?php

namespace App\Http\Controllers;
use App\product;
use App\order;
use App\cart;
use App\other_detail;
use Illuminate\Http\Request;
use App\Charts\SampleChart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Charts;
use Carbon;

class AdminController extends Controller
{
    public function dashboard(){
        $mytime = Carbon\Carbon::now()->format('Y-m-d');
        $month = Carbon\Carbon::now()->format('F');
        

        $orders = DB::table('orders')
        ->where('orders.delivery_date','=',$mytime)
        ->where('orders.status','=','delivered')
        ->count();
        $sum = DB::table('orders')
        ->where('orders.delivery_date','=',$mytime)
        ->where('orders.status','=','delivered')
        ->selectRaw('sum(orders.prices) as RS')
        ->get();
        $month_orders = DB::table('orders')
        ->where('orders.month','=',$month)
        ->where('orders.status','=','delivered')
        ->count();

        $today_orders = DB::table('orders')
        ->where('orders.delivery_date','=',$mytime)
        ->selectRaw('sum(orders.prices) as RS')
        ->get();

        $max= product::max('sales');
        $max_name=DB::table('products')
        ->where('products.sales','=',$max)
        ->select('products.name')
        ->get();
        return view('admin/dashboard',compact('mytime','orders','month','month_orders','sum','today_orders','max_name'));
    }
    public function products(){
        $show=product::all();
        $total = DB::table('products')->count();
        $choco = DB::table('products')
        ->where('products.category','Chocolate Cake')
        ->count();
        $fruit = DB::table('products')
        ->where('products.category','Fruit Cake')
        ->count();
        $Fruit_and_nut = DB::table('products')
        ->where('products.category','Fruit and Nut Cake')
        ->count();
        $DF = DB::table('products')
        ->where('products.category','Black Forest Cake')
        ->count();
        $vanilla = DB::table('products')
        ->where('products.category','Vanilla Cake')
        ->count();
        $Buttterscotch = DB::table('products')
        ->where('products.category','Butterscotch Cake')
        ->count();
        $Red_velvet = DB::table('products')
        ->where('products.category','Red velvet Cake')
        ->count();

        return view('admin/products', compact('total','show','choco','fruit','Fruit_and_nut','Red_velvet','DF','vanilla','Buttterscotch'));
    }
    public function detail(){
        return view('admin/employeeDetail');
    }
    public function addemployee(){
        return view('admin/add-employee');
    }
    public function store(request $req){
        $store=new product;
        $store->name=$req->name;
        $store->Category=$req->Category;
        $store->detail=$req->detail;
        $store->Qunatity=$req->Qunatity;
        $store->priceForhalfkg=$req->priceForhalfkg;
        $store->priceFor1kg=$req->priceFor1kg;
        $store->priceFor1halfkg=$req->priceFor1halfkg;
        $store->priceFor2kg=$req->priceFor2kg;
        // dd ($req->pic1);
        if($req->hasfile('pic1')){
            //get filename with extention
            $filenameWIthExt=$req->file('pic1')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWIthExt, PATHINFO_FILENAME);
            //get just extention
            $ext = $req->file('pic1')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$ext;
            //upload the img
            $path= $req->file('pic1')->storeAs('public/pic1', $filenametostore);
        }
        else{
            $filenametostore = 'noimage.jpg';
        }
        $store->pic1 =$filenametostore;
        if($req->hasfile('pic2')){
            //get filename with extention
            $filenameWIthExt=$req->file('pic2')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWIthExt, PATHINFO_FILENAME);
            //get just extention
            $ext = $req->file('pic2')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$ext;
            //upload the img
            $path= $req->file('pic2')->storeAs('public/pic2', $filenametostore);
        }
        else{
            $filenametostore = 'noimage.jpg';
        }
        $store->pic2 =$filenametostore;
        if($req->hasfile('pic3')){
            //get filename with extention
            $filenameWIthExt=$req->file('pic3')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWIthExt, PATHINFO_FILENAME);
            //get just extention
            $ext = $req->file('pic3')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$ext;
            //upload the img
            $path= $req->file('pic3')->storeAs('public/pic3', $filenametostore);
        }
        else{
            $filenametostore = 'noimage.jpg';
        }
        $store->pic3 =$filenametostore;
        $store->save();
        return back();
    }
    
    public function notification(){
        $orders = DB::table('orders')
        ->join('products', 'orders.product_id','=','products.id')
        ->where('orders.status','pending')
        ->select('products.*','orders.id as order_id','orders.*')
        ->get();
        return view('admin/notification',compact('orders'));

    }
    public function out_for_delivery(request $req , $id){
        $orders= order::find($id);
        $orders->status="out for delivery";
        $orders->save();
        return back();


    }
    public function orders_made(){
        $orders = DB::table('orders')
        ->join('products', 'orders.product_id','=','products.id')
        ->where('orders.status','out for delivery')
        ->select('products.*','orders.id as order_id','orders.*')
        ->get();
        return view('admin/orders',compact('orders'));

    }
    public function delivered(request $req , $id){
        $orders= order::find($id);
        $orders->status="delivered";
        $orders->delivery_date=$orders->updated_at;
        $orders->month=date("F",strtotime($orders->updated_at));
        $orders->save();
        return back();
    }
    public function graph(){
        

        $orders = DB::table('orders')
        ->groupBy('orders.delivery_date')
        ->selectRaw('sum(orders.prices) as price,count(*) as total, orders.delivery_date')
        ->where('orders.status','delivered')
        ->get();
        foreach($orders as $order){
            $date[]=$order->delivery_date;
            $price[]=$order->price;
            $no_of_orders[]=$order->total;
        }
        $orders1 = DB::table('orders')
        ->groupBy('orders.month')
        ->selectRaw('count(*) as total, orders.month')
        ->where('orders.status','delivered')
        ->get();
        foreach($orders1 as $order){
            $delivery_date[]=$order->month;
            $total[]=$order->total;
        }
        // dd($total);

    	return view('admin/graph',compact('date','price','no_of_orders','delivery_date','total'));
    }
}
