@extends('layouts.template')

@section('content')
   
   <div class="container w-50">
    <h2 class="mt-3 mb-3">お問い合わせ</h2>
    <p> 当サイトおよびアットマーク・ソリューションへのお問い合わせは下記のフォームからお願い致します。</p>
    <div class="err-msg-name alert alert-primary d-none"></div>
        <form action=""  class="form-contact" >
            <div class="form-group">
                <label for="">会社名・ご氏名 *必須</label>
                <input type="text" class="validate required form-control" name="name">
            </div>
            <div class="form-group">
                <label for="">住所 *必須</label>
                <input type="text" class="validate required form-control" name="address">
            </div>
            <div class="form-group">
                <label for="">お電話番号</label>
                <input type="text" class="validate form-control" name="tell">
            </div>
            <div class="form-group">
                <label for="">Email *必須</label>
                <input type="text" class="validate required mail form-control" name="email">
            </div>
            <div class="form-group">
                <label for="">件名</label>
                <input type="text" class="validate form-control" name="title">
            </div>
            <div class="form-group">
                <label for="">お問い合わせ内容</label>
                <textarea class="validate required form-control" name="title" row=5></textarea>
            </div>
            <input type="submit"name="confirm" class="btn btn-secondary confirm" value="確認">
        </form>
    </div>
    <script src="{{asset('js/contact.js')}}"></script>
@endsection