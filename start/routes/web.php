<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookController;
use App\Models\Category;
use App\Models\Book;
use App\Models\Order;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::group([
//    'prefix' => 'products'
// ], function () {
//    Route::get('/', [ProductController::class, 'index'])->name('products.index');
//    Route::get('/create',[ProductController::class, 'create'])->name('products.create');
//    Route::post('/',[ProductController::class, 'store'])->name('products.store');
//    Route::get('/{id}',[ProductController::class, 'show'])->name('products.show');
//    Route::get('/{id}/edit',[ProductController::class, 'edit'])->name('products.edit');
//    Route::put('/{id}',[ProductController::class, 'update'])->name('products.update');
//    Route::delete('/{id}',[ProductController::class, 'destroy'])->name('products.destroy');
// });

// Route::resource('customers',CustomerController::class);
// Route::resource('books',BookController::class);

// Route::get('hasMany',function(){
//    $category = Category::find(1);//Van Học
//    dd( $category->books->toArray() );
// });

// Route::get('belongsTo',function(){
//    $book = Book::find(1);
//    dd( $book->category->toArray() );
// });

// Route::get('manyToMany',function(){
//    $book = Book::find(1);
//    dd( $book->orders->toArray() );
// });

// Route::get('manyToMany2',function(){
//    $order = Order::find(1);
//    dd( $order->books->toArray() );
// });

// Route::get('hasOne',function(){
//    $category = Category::find(1);//Van Học
//    dd( $category->book->toArray() );
// });

Route::get('test-lang/{locale}',function($locale){
   App::setLocale($locale);
   // echo __('messages.welcome',['name' => 'Thảo Tâm']);
   echo trans_choice('messages.apples', 30);
});