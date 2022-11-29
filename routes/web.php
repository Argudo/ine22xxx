<?php

namespace App\Http\Controllers;
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

Route::get('/', [ProductController::class, 'welcome'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/product/{product}',
[ProductController::class, 'show'])->name('product.show');

Route::get('/addToCart/{product}', 'App\Http\Controllers\ProductController@addToCart')->name('cart.add');
Route::get('/cart', 'App\Http\Controllers\CartController@Show')->name('cart.show');
Route::get('/cart/{operation}/{product}', 'App\Http\Controllers\CartController@operate')->name('cart.operate');

Route::get('/logout', 'App\Http\Controllers\UserController@Logout')->name('user.logout');
Route::get('/user', 'App\Http\Controllers\UserController@Edit')->name('user.edit');
Route::patch('/user/update', 'App\Http\Controllers\UserController@Update')->name('user.update');
Route::patch('/product/{product}', 'App\Http\Controllers\ProductController@Update')->name('product.update')->middleware('role.editor');
Route::get('/product/edit/{product}', 'App\Http\Controllers\ProductController@Edit')->name('product.edit')->middleware('role.editor');
