<?php

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
//トップ m
Route::get('/', function () {
    return view('top');
})->name('top') ;
//業務実績 i
Route::get('/business',function(){
    return view('business');
})->name('business');
//採用情報 m
Route::get('/recruit',function(){
    return view('recruit');
})->name('recruit');
//会社概要 i
Route::get('/company',function(){
    return view('company');
})->name('company');
//お問い合わせ m
Route::get('/contact',function(){
    return view('contact');
})->name('contact');
//お問い合わせ 送信後
Route::get('/contact/confirm',function(){
    return view('confirm');
})->name('confirm');

//news i
Route::get('/news',function(){
    return view('news');
})->name('news');
