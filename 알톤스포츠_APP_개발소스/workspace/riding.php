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
                <a href="#" class="edit">편집</a>
            </header>
            <section class="main_recording">
                <div class="ride_value flex_value">
                    <div class="riding_tit marLeft30">
                        <span><img src="images/loc_org.png" alt="">라이딩 거리</span>
                    </div>
                    <div class="riding_value marLeft30">
                        <span class="big_value_text">00.0</span>
                        <span class="small_value_text">km</span>
                    </div>
                </div>
                <div class="time_value flex_value">
                    <div class="timer_tit">
                        <span><img src="images/timer_org.png" alt="">라이딩 시간</span>
                    </div>
                    <div class="riding_value">
                        <span class="big_value_text">00:00:00</span>
                    </div>
                </div>
            </section>
            <div class="scrollEx">
                <section class="riding_map">
                    
                </section>
                <section class="sub_riding">
                    <div class="cals_value flex_value padTop30">
                        <div class="riding_tit marLeft30">
                            <span><img src="images/burn.png" alt="">소모한 칼로리</span>
                        </div>
                        <div class="riding_value marLeft30">
                            <span class="big_value_text">00.0</span>
                            <span class="small_value_text">cals</span>
                        </div>
                    </div>
                    <div class="speed_value flex_value padTop30">
                        <div class="riding_tit marLeft30">
                            <span><img src="images/speed.png" alt="">평균 속도</span>
                        </div>
                        <div class="riding_value marLeft30">
                            <span class="big_value_text">00.0</span>
                            <span class="small_value_text">km/h</span>
                        </div>
                    </div>
                </section>
            </div>
            
            <a href="#" class="ride_start">라이딩 시작</a>
        </div>
    </body>
</html>