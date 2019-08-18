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
                <div class="Mwel">
                    <span class="hi">알톤스포츠에 오신 것을 환영합니다.</span>    
                </div>
                <form method="post" action="">
                    <div class="user_id Lbox ">
                        <input type="text" name="user_id" id="user_id" placeholder="이메일"/>
                    </div>
                    <div class="user_pw Lbox">
                        <input type="text" name="user_pw" id="user_pw" placeholder="비밀번호"/>
                    </div>
                    <div class="user_pwok Lbox">
                        <input type="text" name="user_pwok" id="user_pwok" placeholder="비밀번호 확인"/>
                    </div>
                    <div class="user_name Lbox">
                        <input type="text" name="user_name" id="user_name" placeholder="이름"/>
                    </div>
                    <div class="user_birth Lbox">
                        <input type="text" name="user_birth" id="user_birth" placeholder="비밀번호"/>
                    </div>
                </form>
                <p class="agree">계정 생성 시 알톤의<a href="#">개인 정보 취급 방침 및 이용 약관</a>에 동의하게 됩니다.</p>
                <a href="#" class="fin btn ui-btn">완료</a>
                <a href="#" class="cancel btn ui-btn">취소</a>
            </div>
            <div data-role="footer" class="">
            </div>
        </div>
    </body>
</html>
