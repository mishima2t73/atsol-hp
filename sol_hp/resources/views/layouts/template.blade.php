<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title id = "title">@sol</title>
</head>
<body class="bg-light">
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <a class="navbar-brand" href="#">
            <img src="{{asset('t_head_logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">事業案内 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">会社概要<span class="sr-only">(current)</span></a>
              </li>
            <li class="nav-item active">
            <a class="nav-link" href="#">news<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="#">採用情報<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">お問い合わせ<span class="sr-only">(current)</span></a>
              </li>
          </ul>

        </div>
      </nav>

    @section('content')

    @show
    <footer class="bg-white mt-5">
      <div>
        <div class="row m-2">
          <div class="col m-2 p-2 bg-secondary rounded text-light">TELL</div>
          <div class="col m-2 p-2 bg-secondary rounded text-light">採用情報-Recruit</div>
          <div class="col m-2 p-2 bg-secondary rounded text-light">個人情報保護方針</div>
        </div>
        <div class ="bg-secondary m-3">
          <div class="row m-2 align-items-center">
            <div class="col "><img src="{{asset('t_head_logo.png')}}" alt=""></div>
            <div class="col bg-light m-3 p-2">
              【大阪本社】<br>
              〒542-0061<br>
              大阪市中央区安堂寺町2-1-10／ベルデ谷町2階
              <br>
              T E L　 06-7506-9304<br>
              F A X 　06-7506-9305</div>
            <div class="col bg-light m-3 p-2">
              【東京支社】<br>
                〒113-0033<br>
                東京都文京区本郷3丁目9-11 平原ビル202号室<br>
                T E L 　03-6240-0175<br>
                F A X　 050-3737-1951<br>
            </div>
          </div>
        </div>
        <div class="text-center mb-3 ">
          <a href="#title" class="text-dark border-bottom border-dark rounded p-1">Page Top</a>
        </div>
        
      </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>