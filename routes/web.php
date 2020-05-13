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

Route::get('/', 'Home@Index');
Route::prefix('user')->group(function () {
    Route::any('/reg', 'User@Reg')->middleware('guest');
    Route::any('/login', 'User@Login')->middleware('guest');
    Route::get('/profile', 'User@showProfile');
    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    });
});

Route::prefix('item')->group(function () {
    Route::get('/{nameUrl}/{id}', 'Item@showDetail');
    Route::get('/search', 'Item@Search');
});
Route::prefix('category')->group(function () {
    Route::get('/{nameUrl}/{id}', 'Category@Detail');
});

Route::prefix('api')->group(function () {
    Route::get('get/category/all', function(){
        return response()->json(App\Category::all());
    });
});