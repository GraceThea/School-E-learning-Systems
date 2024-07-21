<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutUs',function(){
    return view ('aboutUs');
})->name('ba'); 

Route::get('/testimonials',function(){
    return view ('testimonials');
})->name('la');

Route::get('/login',function(){
    return view ('login');
})->name('log');

Route::get('/regist',function(){
    return view ('registration');
})->name('registration');



