<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
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

Route::group([
    'prefix' => 'products'
 ],function(){
 
    Route::get('/index',[ProductController::class,'index'])->name('products.index');
    Route::get('/create',[ProductController::class,'create'])->name('products.create')->middleware('checkage');
    Route::get('/{id}',[ProductController::class,'show'])->name('products.show');
    Route::post('/store',[ProductController::class,'store'])->name('products.store');
    Route::get('/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
    Route::put('/{id}',[ProductController::class,'update'])->name('products.update');
    Route::delete('/{id}',[ProductController::class,'destroy'])->name('products.destroy');


    // Route::get('/edit/{id}',function($id){
    //     echo $id;
    // })->name('products.edit');
    
    // Route::put('/update/{id}',function($id,Request $request){
    //     echo $id;
    // })->name('products.update');
    
    // Route::delete('/destroy/{id}',function($id){
    //     echo $id;
    // })->name('products.destroy'); 
 
 });
 Route::resource('customers',CustomerController::class);


