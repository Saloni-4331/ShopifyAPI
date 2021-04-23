<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products',[ProductController::class,'index'])->name('products');
Route::post('products',[ProductController::class,'store'])->name('products.store');
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('products.destroy');
Route::put('/products/{id}',[ProductController::class,'update'])->name('products.update');

Route::get('customers',[CustomerController::class,'index'])->name('customers');
Route::post('customers',[CustomerController::class,'store'])->name('customers.store');
Route::delete('/customers/{id}',[CustomerController::class,'destroy'])->name('customers.destroy');
Route::put('/customers/{id}',[CustomerController::class,'update'])->name('customers.update');

Route::get('orders',[OrderController::class,'index'])->name('orders');
Route::post('orders',[OrderController::class,'store'])->name('orders.store');
Route::delete('/orders/{id}',[OrderController::class,'destroy'])->name('orders.destroy');
Route::put('/orders/{id}',[OrderController::class,'update'])->name('orders.update');
