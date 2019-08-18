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
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mobile-1.4.5.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" >
            $(function() {
              setTimeout(hideSplash, 2500);
            });
            
            function hideSplash() {
              $.mobile.changePage("#home", "fade");
            }
        </script>
        <script>
    	  $(document).ready(function(){
    	    $('.bxslider').bxSlider({
    		  auto: false,
    		  //autoControls: true,
    		  controls:false,
    		  stopAutoOnClick: false,
    		  pager: true,
    		  slideWidth: 720
    		});
    	  });
	  
		
	    </script>
    </head>
    <body>
        <div data-role="page" data-theme="b" id="splash"> 
            <div class="splash">
                <img src="images/splash02.jpg" alt="splash" />
            </div>
        </div>
        <div id="home">
            <div class="wrap">
            	<div class="guide bxslider">
            	    <div><img class="guide01" src="images/guide/guide01.jpg"></img></div>
			        <div><img class="guide01" src="images/guide/altonguide2.jpg"></img></div>
            	    <div><img class="guide01" src="images/guide/altonguide3.jpg"></img></div>
            	    <div><img class="guide01" src="images/guide/altonguide4.jpg"></img></div>
            	</div>
            	<div class="start">
            	    <a class="login" href="http://lsk931228.dothome.co.kr/altonM/login.php">로그인</a>
            	    <a class="member" href="http://lsk931228.dothome.co.kr/altonM/member.php">회원가입</a>
            	</div>
            </div>
        </div>
        
    </body>
</html>