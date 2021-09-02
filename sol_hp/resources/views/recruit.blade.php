@extends('layouts.template')

@section('content')
    <div class="container main-fade" id="fade">
        <h2 class="heading mt-5" data-en="Recruit">採用情報</h2>
        <h4 class="mt-5 mb-3">アットマークソリューションでは、
            常に前向きな姿勢で取り組む人材を採用し、応援しています。
        </h4>
        <div>

            <h5 class="">未経験</h5>
            <table class="table">
                <tbody>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>募集職種</th>
                        <td><span text-justify>WEBコンサルタント・webシステム開発者・インフラ技術者</span></td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>月給</th>
                        <td> 大学卒・院卒・専門卒・高卒：18万 + 資格手当　<br> 
                            会社直結塾卒:20~25万
                        
                        </td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>応募資格</th>
                        <td style="width: 900px;"> 基本情報技術者、CCNA、LPIC-1、OCJ-P(SJC-P)、OracleMaster
                            何らかの取得者が望ましい。
                            未取得者は、可能であれば入社前に取得して頂きますが、
                            入社後も引き続き、挑戦して頂けます。
                            (※受験料は弊社負担です。)
                            希望者には、学費無償の勉強会を主宰します。 </td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>勤務地</th>
                        <td> 大阪本社 <br>東京支社 </td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>勤務時間</th>
                        <td> 9:00 ~ 18:00(休憩1時間) </td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>待遇・福利厚生</th>
                        <td> 待遇：昇給年1回、成果給2回（1月・8月）、通勤手当（原則として月額3万円まで）
                            <br> 制度：社会保険完備（健康、厚生年金、雇用、労災）、健康診断受信無料、インフルエンザワクチン接種料金支給 </td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>休日・休暇</th>
                        <td> <span>週休2日制（土・日）、祝日、年次有給休暇、夏期休暇、年末年始休暇（12月29日～1月3日）</span> </td>
                    </tr>
                </tbody>
            
            </table>
            <h5 class="">経験者</h5>
            <table class="table">
                <tbody>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>募集職種</th>
                        <td><span text-justify>WEBコンサルタント・webシステム開発者・インフラ技術者</span></td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>月給</th>
                        <td>20~45万 + 資格手当</td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>応募資格</th>
                        <td style="width: 900px;"> 基本情報技術者、CCNA、LPIC-1、OCJ-P(SJC-P)、OracleMaster
                            何らかの取得者が望ましい。
                            未取得者は、可能であれば入社前に取得して頂きますが、
                            入社後も引き続き、挑戦して頂けます。
                            (※受験料は弊社負担です。)
                            希望者には、学費無償の勉強会を主宰します。 </td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>勤務地</th>
                        <td> 大阪本社 <br>東京支社 </td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>勤務時間</th>
                        <td> 9:00 ~ 18:00 (休憩1時間)</td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>待遇・福利厚生</th>
                        <td> 待遇：昇給年1回、成果給2回（1月・8月）、通勤手当（原則として月額3万円まで）
                           <br> 制度：社会保険完備（健康、厚生年金、雇用、労災）、健康診断受信無料、インフルエンザワクチン接種料金支給 </td>
                    </tr>
                    <tr>
                        <th><span class="border mb-0 mr-3"></span>休日・休暇</th>
                        <td> <span>週休2日制（土・日）、祝日、年次有給休暇、夏期休暇、年末年始休暇（12月29日～1月3日）</span> </td>
                    </tr>
                </tbody>
            
            </table>
        </div>
    </div>
    <script src="{{asset('js/recruit.js')}}"></script>
@endsection