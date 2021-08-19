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
Route::get('atmarksol.jptest/', function () {
    return view('welcome');
});
//業務実績 i
Route::get('atmarksol.jptest/business',function(){
    return view('business');
});
//採用情報 m
Route::get('atmarksol.jptest/recruit',function(){
    return view('recruit');
});
//会社概要 i
Route::get('atmarksol.jptest/company',function(){
    return view('company');
});
//お問い合わせ m
Route::get('atmarksol.jptest/contact',function(){
    return view('contact');
});
//news i
Route::get('atmarksol.jptest/news',function(){
    return view('news');
});
