<!DOCTYPE html>
<html>
<head>
	<title>알톤 스포츠</title>
    <link rel="shortcut icon" href="./logo02.ico">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script>
	  $(document).ready(function(){
	    $('.bxslider').bxSlider({
		  auto: true,
		  //autoControls: true,
		  controls:false,
		  stopAutoOnClick: false,
		  pager: true,
		  slideWidth: 1920
		});
		$('.Brand_Bx').bxSlider({
		  //autoControls: true,
		  controls:true,
		  pager:false,
		  minSlides:4,
		  slideMargin:20,
		  moveSlides:1,
		  maxSlides:4,
		  slideWidth: 1200
		});
	  });
	  
		
	</script>
</head>
<body>
<!--header-->
<header class="navi">
	<div class="subNavi">
		<div class="container">
			<ul class="aaa">
				<li class="subtxt"><a href="#">INFIZA</a></li>
				<li class="subtxt"><a href="#">APP</a></li>
				<li class="subcen"><a href="#">고객센터</a></li>
			</ul>
		</div>
	</div>
	<div class="container main">
		<h1 class="logo"><a href="http://lsk931228.dothome.co.kr/alton/index.php"><img src="images/logo.png"></a></h1>

		<ul class="mainMenu">
			<li>
				<a href="http://lsk931228.dothome.co.kr/alton/bikeType.php">자전거</a>
				<ul class="Mainsub sub_1">
					<li><a href="http://lsk931228.dothome.co.kr/alton/bikeType.php" class="innerMenu">브랜드별</a></li>
					<li><a href="http://lsk931228.dothome.co.kr/alton/bikeType.php" class="innerMenu">타입별</a></li>
				</ul>
			</li>
			<li>
				<a href="#">회사소개</a>
				<ul class="Mainsub sub_2">
					<li><a href="#" class="innerMenu">회사소개</a></li>
					<li><a href="#" class="innerMenu">비전 핵심 가치</a></li>
					<li><a href="#" class="innerMenu">CI/BI</a></li>
					<li><a href="#" class="innerMenu">연혁</a></li>
					<li><a href="#" class="innerMenu">CEO인사말</a></li>
					<li><a href="#" class="innerMenu">투자정보</a></li>
					<li><a href="#" class="innerMenu">인재채용</a></li>
				</ul>
			</li>
			<li>
				<a href="http://lsk931228.dothome.co.kr/alton/FAQ.php">고객지원</a>
				<ul class="Mainsub sub_3">
					<li><a href="http://lsk931228.dothome.co.kr/alton/onlineAS.php" class="innerMenu">A/S문의</a></li>
					<li><a href="http://lsk931228.dothome.co.kr/alton/FAQ.php" class="innerMenu">자주 묻는 질문</a></li>
					<li><a href="#" class="innerMenu">알톤 스쿨</a></li>
					<li><a href="#" class="innerMenu">제품설명서</a></li>
					<li><a href="#" class="innerMenu">이벤트</a></li>
					<li><a href="#" class="innerMenu">대량 구매</a></li>
				</ul>
			</li>
			<li>
				<a href="http://lsk931228.dothome.co.kr/alton/store.php">대리점</a>
				<ul class="Mainsub sub_4">
					<li><a href="#" class="innerMenu">ALTON BIKE CLINIC</a></li>
					<li><a href="http://lsk931228.dothome.co.kr/alton/store.php" class="innerMenu">대리점 찾기</a></li>
					<li><a href="#" class="innerMenu">알톤 패밀리</a></li>
				</ul>
			</li>
			<li>
				<a href="http://lsk931228.dothome.co.kr/alton/altonNews.php">홍보센터</a>
				<ul class="Mainsub sub_5">
					<li><a href="http://lsk931228.dothome.co.kr/alton/altonNews.php" class="innerMenu">알톤소식</a></li>
					<li><a href="#" class="innerMenu">홍보영상</a></li>
					<li><a href="#" class="innerMenu">카달로그</a></li>
				</ul>
			</li>
		</ul>
	</div>
</header>
<!--//header-->