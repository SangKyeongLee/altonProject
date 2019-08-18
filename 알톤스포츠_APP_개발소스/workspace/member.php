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
            <header class="header">
                <a class="back"></a>
                <a href="http://lsk931228.dothome.co.kr/altonM/login.php" class="logo"><img class="logoImg" src="images/header_ci.png"></img></a>
                <a href="http://lsk931228.dothome.co.kr/altonM/login.php" class="close"><img class="closeImg" src="images/close.png"></img></a>
            </header>
            <div class="loginCon">
                <span class="hello">알톤스포츠에 오신 것을 환영합니다.</span>
                <form class="boxx" method="post" action="">
                    <div class="user_id Lbox ">
                        <input type="text" name="user_id" id="user_id" placeholder="이메일"/>
                    </div>
                    <div class="user_pw Lbox">
                        <input type="text" name="user_pw" id="user_pw" placeholder="비밀번호"/>
                    </div>
                    <div class="user_repw Lbox">
                        <input type="text" name="user_repw" id="user_repw" placeholder="비밀번호 확인"/>
                    </div>
                    <div class="user_name Lbox">
                        <input type="text" name="user_name" id="user_name" placeholder="이름"/>
                    </div>
                    <div class="user_birth Lbox">
                        <input type="text" name="user_birth" id="user_birth" placeholder="생년월일"/>
                    </div>
                </form>
                <p class="agree">계정 생성 시 <a href="#">개인 정보 취급 방침 및 이용 약관</a>에 동의하게 됩니다.</p>
                <div class="finish btn01">
                    <a class="finisha btn01" href="http://lsk931228.dothome.co.kr/altonM/login.php">완료</a>    
                </div>
                <div class="cancel btn01">
                    <a class="cancela btn01" href="http://lsk931228.dothome.co.kr/altonM/login.php">취소</a>    
                </div>
            </div>
            
        </div>
    </body>
</html>