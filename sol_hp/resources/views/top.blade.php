@extends('layouts.template')

@section('content')

<div class="jumbotron ">
   <div class="container">
      <div id = "images" class="slide">
         <div id = "arrow-left" class="arrow"></div>
         <div id = "arrow-right" class="arrow"></div>
         
      <div class="align-item-center image image1 " id = "image1"><img class="d-block mx-auto " style = "width:60%;"src="{{asset('img/top.jpg')}}" alt=""></div>
      <div class="align-item-center image image2 " id = "image1"><img class="d-block mx-auto" style = "width:60%;"src="{{asset('img/top2.jpg')}}" alt=""></div>
      </div>
   </div>
</div>

<div id="news" class="bg-light">
   <h2 class="mb-1 ml-3 mt-3">NEWS </h2>
   <ul class="list-group-flush ">
      <li class="list-group-item bg-light"><span class=" pr-2 border-right">タイトル</span> サンプル</li>
      <li class="list-group-item bg-light"><span class=" pr-2 border-right">タイトル</span> サンプル</li>
      <li class="list-group-item bg-light"><span class=" pr-2 border-right">タイトル</span> サンプル</li>
   </ul>
</div>
<div class="container bg-white border">
   <h2 class="text-center">Business</h2>
   <div class="row ">
      <div class="col-sm mx-auto"><a href="">
         <img class="d-block mx-auto" style = "width:180px;"src="{{asset('img/icon/phone_iphone_black_24dp.svg')}}" alt=""></a>
         <p class="text-center"> アプリ開発</p>
      </div>
      <div class="col-sm">
         <a href=""><img class="d-block mx-auto" style = "width:180px;" src="{{asset('img/icon/computer_black_24dp.svg')}}" alt=""></a>
         <p class="text-center"> システム開発　webサイト制作</p>
      </div>
      
      <div class="col-sm">
         <a href=""><img class="d-block mx-auto" style = "width:180px;" src="{{asset('img/icon/dns_black_24dp.svg')}}" alt=""></a>
         <p class="text-center"> ネットワーク　サーバー構築</p>
      </div>

   </div>
</div>
<script src="{{asset('js/temp.js')}}"></script>
@endsection
