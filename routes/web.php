<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);


route::get('/view_catagory',[AdminController::class,'view_catagory']);

route::post('/add_catagory',[AdminController::class,'add_catagory']);

route::get('/delete_catagory/{id}',[AdminController::class,
'delete_catagory']);


route::get('/view_product',[AdminController::class,'view_product']);

route::post('/add_product',[AdminController::class,'add_product']);

route::get('/show_product',[AdminController::class,'show_product']);

route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

route::get('/update_product/{id}',[AdminController::class,'update_product']);

route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

route::get('/product_details/{id}',[HomeController::class,'product_details']);

route::post('/add_cart/{id}',[HomeController::class,'add_cart']);

route::get('/show_cart',[HomeController::class,'show_cart']);

route::get('/contact',[HomeController::class,'contact']);
route::post('/contact',[HomeController::class,'contact']);

route::get('/about',[HomeController::class,'about']);

route::get('/shop',[HomeController::class,'shop']);

route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);

route::get('/search',[AdminController::class,'searchdata']);

route::get('/order',[AdminController::class,'order']);

route::get('/cash_order',[HomeController::class,'cash_order']);

route::get('/order_search',[AdminController::class,'orderdata']);

route::get('/product_search',[HomeController::class,'product_search']);



