<!DOCTYPE html>
<html>
    <head>
        <title>알톤 APP</title>
        <link rel="shortcut icon" href="./logo02.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/MobileReset.css" type="text/css" />
        <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
        <link rel="stylesheet" href="css/app.css">
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mobile-1.4.5.js"></script>
    </head>
    <body>
        <div class="wrap">
            <header class="header_main">
                <a href="http://lsk931228.dothome.co.kr/altonM/main.php" class="back"><img class="backImg" src="images/back.png"></img></a>
                <a href="http://lsk931228.dothome.co.kr/altonM/main.php" class="logo"><img class="logoImg" src="images/header_ci.png"></img></a>
                <a href="#" class="allday">전체</a>
            </header>
            <section class="record_today">
                <div class="today_value flex_value">
                    <div class="record_Ex">
                        <span>그동안의 운동량을 확인해보세요.<br>얼마나 달라졌는지 직접 느껴보실 수 있습니다.</span>
                    </div>
                    <div class="today_riding">
                        <span class="today_value_text">오늘</span>
                        <span class="bigToday_value_text">12.28</span>
                        <span class="today_value_text">km</span>
                    </div>
                </div>
            </section>
            <div class="scrollEx">
                <section class="record_graph">
                    <p>주간운동량</p>
                    <img src="images/record/record_graph.png"></img>
                </section>
                <section class="sub_riding">
                    <div class="cals_value flex_value padTop30">
                        <div class="distance_tit marLeft30">
                            <span><img src="images/graph_gry.png" alt="">누적 거리</span>
                        </div>
                        <div class="riding_value marLeft30">
                            <span class="big_value_text">121.0</span>
                            <span class="small_value_text">km</span>
                        </div>
                    </div>
                    <div class="speed_value flex_value padTop30">
                        <div class="timer_tit marLeft30">
                            <span><img src="images/timer_gry.png" alt="">누적 시간</span>
                        </div>
                        <div class="riding_value marLeft30">
                            <span class="big_value_text">03:20:52</span>
                        </div>
                    </div>
                </section>
                <section class="sub_riding">
                    <div class="cals_value flex_value padTop30">
                        <div class="distanceAvg_tit marLeft30">
                            <span><img src="images/loc_gry.png" alt="">평균 거리</span>
                        </div>
                        <div class="riding_value marLeft30">
                            <span class="big_value_text">12.1</span>
                            <span class="small_value_text">km</span>
                        </div>
                    </div>
                    <div class="speed_value flex_value padTop30">
                        <div class="cals_tit marLeft30">
                            <span><img src="images/burn.png" alt="">평균 소모 칼로리</span>
                        </div>
                        <div class="riding_value marLeft30">
                            <span class="big_value_text">320</span>
                            <span class="small_value_text">cals</span>
                        </div>
                    </div>
                </section>
            </div>
            
            <a href="http://lsk931228.dothome.co.kr/altonM/riding.php" class="ride_start">라이딩 시작</a>
        </div>
    </body>
</html>