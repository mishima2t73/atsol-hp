@extends('layouts.template')

@section('content')
   
   <div class="container w-50">
        <h2 class="mt-3 mb-3">お問い合わせ</h2>
        @if ($name)
            <div style="height:250px">
                <h4 class="mt-5">{{$name}}様 お問い合わせ内容を送信しました。</h3>
                <p >確認メールを送信致しましたのでご確認ください。</p>
            </div>
        @endif
    </div>
    <script src="{{asset('js/contact.js')}}"></script>
@endsection