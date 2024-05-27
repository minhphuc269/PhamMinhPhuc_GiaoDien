<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;

Route::get('/',[HomeController::class,'index']); // trang chu
Route::get('/san-pham',[ProductController::class,'index']); // san pham
Route::get('/chi-tiet-san-pham/{slug}',[ProductController::class,'product_detail']); // chi tiet san pham
Route::get('/lien-he',[ContactController::class,'index']); // lien he