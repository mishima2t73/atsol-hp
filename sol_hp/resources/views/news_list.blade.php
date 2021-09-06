@extends('layouts.template')
@yield('menu')
@section('content')
<div class="container main-fade" id="fade">
   <h2 class="heading mt-5 mb-5" data-en="News">ニュース</h2>
   <table class="table">
      <tbody>
         <!-- DBからループさせる -->
         @foreach ($news as $item)
         <tr class="m-3">
            <td>{{$item["date"]}}</td>
            <td><a href="{{route("news",['id'=>$item["id"]])}}" class="">{{$item["title"]}}</a></td>
          </tr>   
         @endforeach
      </tbody>
   </table>
</div>
<script src="{{asset('js/recruit.js')}}"></script>
@endsection