@extends('layouts.template')

@section('content')
    <div class="container">
        <h2 class="heading mt-5" data-en="Recruit">採用情報</h2>
        <h4 class="mt-5">アットマークソリューションでは、<br>
            常に前向きな姿勢で取り組む人材を採用し、<br>
            応援しています。
        </h4>
        <div>
            <h5 class="">大卒・院卒</h5>
            <table class="table">
                <tbody>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>募集職種</th>
                        <td><span text-justify>WEBコンサルタント・webシステム開発者・インフラ技術者</span></td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>月給</th>
                        <td> <span>18万 + 資格手当</span> </td>
                    </tr>
                </tbody>
            
            </table>
            <span class="border mb-0"></span>
            <span class="ml-3 mr-2 heading2"> 募集職種：</span>  
            <hr class="border mt-2">

            <span class="border mb-0"></span>
            <span class="ml-3 mr-2 heading2"> 月給：</span>
            <hr class="border mt-2">

            <span class="border mb-0"></span>
            <span class="ml-3 mr-2 heading2"> 応募資格：</span> <span>基本情報技術者、CCNA、LPIC-1、OCJ-P(SJC-P)、OracleMaster
                何れかの取得者が望ましい。
                未取得者は、可能であれば入社前に取得して頂きますが、
                入社後も引き続き、挑戦して頂けます。
                (※受験料は弊社負担です。)
                希望者には、学費無償の勉強会を主宰します。</span> 
            <hr class="border mt-2">

        </div>
    </div>
    <script src="{{asset('js/recruit.js')}}"></script>
@endsection