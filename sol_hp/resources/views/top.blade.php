@extends('layouts.template')

@section('content')
<div class="main-fade" id="fade">
   <div class="jumbotron"style="">
      <div class="container">
         <div id = "images" class="slide">
            <div id = "arrow-left" class="arrow"></div>
            <div id = "arrow-right" class="arrow"></div>
            <p class="head-text p-4"><span class="h2">次世代形成</span><br>
               幸せな社会創りに貢献するため絶えず革新し、次世代を造る<br>
               知的生産社会に寄与する企業となる。
            </p>
         <div class="align-item-center image image1 " id = "image1"><img class="d-block mx-auto" src="{{asset('img/top2.jpg')}}" alt=""></div>
         <div class="align-item-center image image2 " id = "image2"><img class="d-block mx-auto" src="{{asset('img/topd.jpg')}}" alt=""></div>
         </div>
      </div>
   </div>

   <div id="news" class="bg-light">
      <h2 class="mb-1 ml-3 mt-3">NEWS</h2>
      <ul class="list-group-flush ">
         <li class="list-group-item bg-white"><span class=" pr-2 border-right"><a href="{{route("news",['id'=>$pick["id"]])}}" class="">{{$pick["title"]}}</a></span></li>
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
   <script src="js/temp.js"></script>
      </div>
   </div>
</div>
<script src="{{asset('js/recruit.js')}}"></script>
@endsection
