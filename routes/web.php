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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::group(['prefix'=>'properties'], function(){
    Route::get('/for-rent', [App\Http\Controllers\HomeController::class, 'rent'])->name('for-rent');
    Route::get('/for-sale', [App\Http\Controllers\HomeController::class, 'sale'])->name('for-sale');
    Route::get('/explore/{details}', [App\Http\Controllers\HomeController::class, 'property'])->name('details');
});

Auth::routes();
Route::group(['prefix'=>'admin'], function(){
   Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
});
