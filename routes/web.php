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

Route::get('/', function () {
    return view('index');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/sign-up',function(){
    return view('signup');
});

Route::get('/forget-password',function(){
    return view('forget_password');
});

Route::get('/reset-password',function(){
    return view('reset_password');
});

Route::get('/product/add',function(){
    return view('products.add_product');
});

Route::get('/product/all',function(){
    return view('products.all_products');
});

Route::get('/product/edit',function(){
    return view('products.edit_product');
});

Route::get('/profile',function(){
    return view('profile');
});

Route::get('/income',function(){
    return view('income');
});

Route::get('/verify-account/{token}',function($token){
    return view('verify_account',['token' => $token]);
})->name('verify.account');
