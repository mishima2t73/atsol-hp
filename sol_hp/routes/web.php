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
Route::post('/contact/confirm','HpController@confirm',function(){
    return view('confirm');
})->name('confirm');

//news i
Route::get('/newslist',function(){
    $url = public_path() . '/json/news.json';
    $json = file_get_contents($url);
    $json = mb_convert_encoding($json,'UTF8','ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $array = json_decode($json,true);
    //$pick = $array[0]["title"];
    $news = collect($array);
    return view('news_list',compact("news"));
})->name('news_list');

Route::get('/news/{id}',function($id){
    $url = public_path() . '/json/news.json';
    $json = file_get_contents($url);
    $json = mb_convert_encoding($json,'UTF8','ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $array = json_decode($json,true);
    $news_list = collect($array);
    
    foreach($news_list as $news){
        if ($news["id"] == $id){
            $news["content"] = nl2br($news["content"]);
            return  view('news',compact("news"));
        }
    }
    dd($news);
    $news= null;
    return view('news',compact("news"));
})->name('news');
