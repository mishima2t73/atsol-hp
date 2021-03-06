@extends('layouts.template')

@section('content')

<div class="container main-fade" id="fade">
   <h2 class="heading mt-5 mb-5" data-en="News">ニュース</h2>
   <table class="table">
      <tbody>
         <!-- DBからループさせる -->
          <tr class="m-3">
            <td><h3>{{$news["title"]}}</h3></td>
          </tr>
          <tr><td>{{$news["title"]}}</td></tr>
          <tr><td><p>{{$news["content"]}}</p></td></tr>
      </tbody>
   </table>
</div>
<script src="{{asset('js/recruit.js')}}"></script>
@endsection