<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;


class usercontroller extends Controller
{
    public function login(request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        // dd ($user);
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return redirect('/login')->with('msg','email or password is invalid');
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    
    function register(request $req){
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->phone_no=$req->phone_no;
        $user->address=$req->address;
        $user->state=$req->state;
        $user->city=$req->city;
        $user->pin_no=$req->pin_no;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');

    }
    
    public function myAccount(){
        return view('myaccount');
    }
}
