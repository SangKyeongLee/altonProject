<!DOCTYPE html>
<html>
    <head>
        <title>알톤 APP</title>
        <link rel="shortcut icon" href="./logo02.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/MobileReset.css" type="text/css" />
        <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
        <link rel="stylesheet" href="css/appstyle.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery.mobile-1.4.5.js"></script>
    </head>
    <body>
        <div data-role="page">
            <div data-role="header" class="head">
                <h1 class="logo"><img src="images/header_ci.png"></img></h1>
                <span class="close"><img src="images/close.png"></img></span>
            </div>
            <div data-role="main" class="ui-content">
                <div class="wel">
                    <span class="hi">알톤스포츠에 오신 것을 환영합니다.</span>    
                </div>
                <form method="post" action="">
                    <div class="user_id Lbox ">
                        <input type="text" name="user_id" id="user_id" placeholder="이메일"/>
                    </div>
                    <div class="user_pw Lbox">
                        <input type="text" name="user_id" id="user_id" placeholder="비밀번호"/>
                    </div>
                </form>
                <p class="findPw"><a href="#">비밀번호 찾기 ></a></p>
                <p class="agree">로그인 할 경우 <a href="#">개인 정보 취급 방침 및 이용 약관</a>에 동의하게 됩니다.</p>
                <a href="#" class="log btn ui-btn">로그인</a>
                <a href="#" class="fb btn ui-btn">페이스북 로그인</a>
                <a href="http://lsk931228.dothome.co.kr/altonM/login.php" class="mem btn ui-btn">회원가입</a>
            </div>
            <div data-role="footer" class="">
            </div>
        </div>
    </body>
</html>
