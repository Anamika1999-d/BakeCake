<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','productController@show');
Route::get('/register', function () {
    return view('user/register');
});
Route::post('/save','usercontroller@register');

Route::get('/login', function () {
    return view('user/login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::get('/home','usercontroller@login');

Route::get('/ChocolateCakelist','productController@display1');
Route::get('/Butterscotch-list','productController@display2');
Route::get('/fruitCake-list','productController@display3');
Route::get('/Red-VelvetCake-list','productController@display4');
Route::get('/VanillaCake-list','productController@display5');
Route::get('/Fruit-And-Nut-cake-list','productController@display6');
Route::get('/Black-Forest-list','productController@display7');
Route::get('/indian-desert','productController@display8');

Route::get('/sort','productController@sort');


Route::get('/detail/{id}','productController@view');
Route::get('/search','productController@search');
Route::get('/weight','productController@store');

Route::post('/AddToCart','productController@AddToCart');
Route::get('/cart','productController@cart');
Route::get('remove/{id}','productController@removecart');
Route::get('/order','orderController@order');
Route::post('/order_proceed','orderController@store_order');



Route::get('/MyAccount','orderController@myAccount');
Route::get('/order_list','orderController@order_list');
Route::get('/wishlist','productController@wishlist');
Route::post('/add_to_wishlist','productController@add_to_wishlist');
Route::get('/remove-wishlist/{id}','productController@remove_wishlist');
//adminpage
Route::get('/dashboard','AdminController@dashboard');
Route::get('/products','AdminController@products');
Route::get('/EmployeeDetail','AdminController@detail');
Route::get('/add-employee','AdminController@addemployee');
Route::view('/addProducts','admin/add-products');
Route::post('/product-save','AdminController@store');
Route::get('/chart-graph','AdminController@graph');
Route::get('/notification','AdminController@notification');
Route::get('/orders_made','AdminController@orders_made');
Route::get('/out_for_delivery/{id}','AdminController@out_for_delivery');
Route::get('/delivered/{id}','AdminController@delivered');
