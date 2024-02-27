<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SizeController;




Route::get('admin',[AdminController::class ,'index']);
Route::any('auth',[AdminController::class ,'auth']);


Route::group([ 'middleware' => 'admin_auth'], function ()
{
    
    Route::any('dashboard',[AdminController::class ,'dashboard']);
    Route::get('category',[CategoryController::class ,'index']);
    Route::get('manage_category',[CategoryController::class ,'manage_category']); 
    Route::get('edit/{id}',[CategoryController::class ,'manage_category']); 
    Route::post('manage_category_process',[CategoryController::class ,'manage_category_process']) ; 
    Route::get('delete/{id}',[CategoryController::class ,'delete']); 
    Route::get('logout',[AdminController::class ,'logout']);


    Route::get('coupon',[CouponController::class ,'index']);
    Route::get('manage_coupon',[CouponController::class ,'manage_coupon']); 
    Route::get('coupon/{id}',[CouponController::class ,'manage_coupon']); 
    Route::post('manage_coupon_process',[CouponController::class ,'manage_coupon_process']) ; 
    Route::get('coupon/{id}',[CouponController::class ,'delete']); 


    Route::get('size',[SizeController::class ,'index']);
    Route::get('manage_size',[SizeController::class ,'manage_size']); 
    Route::get('size/{id}',[SizeController::class ,'manage_size']); 
    Route::post('manage_size_process',[SizeController::class ,'manage_size_process']) ; 
    Route::get('size/{id}',[SizeController::class ,'delete']); 
    
});