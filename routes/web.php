<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::view('/login','login');
Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get('search',[ProductController::class,'search']);
Route::post('add_to_cart',[ProductController::class,'addToCart']);
Route::get('/cartlist',[ProductController::class,'CartList']);
Route::get('/RemoveItem/{id}',[ProductController::class,'RemoveProduct']);
Route::get('/ordernow',[ProductController::class,'OrderNow']);
Route::post('/orderplace',[ProductController::class,'OrderPlace']);
Route::get('/orderlist',[ProductController::class,'orderList']);


