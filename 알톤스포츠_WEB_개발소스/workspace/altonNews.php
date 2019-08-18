<?php
    include_once("header.php");
?>
<!--알톤 로케이션-->
<div class="location">
    <div class="container location_inner">
        <ul>
            <li class="loc1">
            	<a href="#" class="loc1_sub">홍보센터
            	<img src="images/under.png" class="stand"></img><img src="images/underOn.png" class="over">
            	</a>
            	<ul class="loc_ul">
            		<li><a href="http://lsk931228.dothome.co.kr/alton/bikeType.php" class="loc1_sub">자전거</a></li>
           			<li><a href="#" class="loc1_sub">회사소개</a></li>
           			<li><a href="http://lsk931228.dothome.co.kr/alton/FAQ.php" class="loc1_sub">고객지원</a></li>
           			<li><a href="http://lsk931228.dothome.co.kr/alton/store.php" class="loc1_sub">대리점</a></li>
            	</ul>
            </li>
            <li class="loc2">
            	<a href="#">알톤소식</a><img src="images/underOn.png"></img>
            	<ul class="loc_ul">
            		<li><a href="#" class="loc1_sub">홍보영상</a></li>
           			<li><a href="#" class="loc1_sub">카달로그</a></li>
            	</ul>
            </li>
        </ul>
    </div>
</div>
<!--//알톤 로케이션-->
<!--서브 비주얼-->
<section class="AltonNewsVisual">
</section>
<!--서브 비주얼-->
<!--알톤 서브메뉴-->

<div class="subMenu">
    <div class="container subMenu_inner">
        <div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'allNews')" id="defaultOpen">전체보기</button>
		  <button class="tablinks" onclick="openCity(event, 'company')">회사소식</button>
		  <button class="tablinks socialTab" onclick="openCity(event, 'social')">사회공헌</button>
		</div>
        <!--<ul>-->
        <!--    <li class="sub1"><a href="#">전체보기</a></li>-->
        <!--    <li class="sub2"><a href="#">회사소식</a></li>-->
        <!--    <li class="sub3"><a href="#">사회공헌</a></li>-->
        <!--</ul>-->
        <div class="sub5">
            <form>
                <div class="srh">
                    <input type="text" name="searchText"/>
                    <label class="srh_click">검색</label>
                    <input type="button" value onclick/>    
                </div>
            </form>
        </div>
    </div>
</div>
<!--//알톤 서브메뉴-->
<!--중간 타이틀-->
<div class="container">
    
</div>
<!--//중간 타이틀-->
<section class="container altonNews">
	
	<div class="allNews tabcontent" id="allNews">
		<h2 class="middleTitle Mcenter">알톤 소식 전체보기</h2>
	    <div class="Mcenter">
	    	<span class="underline"></span>
	    </div>
	    <p class="middleText Mcenter">알톤스포츠의 다양한 소식들을 모아서 볼 수 있습니다.</p>
		<a href="#" class="News01 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/news01.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">이알톤 스페이드,굿디자인 어워드 국가표준원장상 수상</span>
				<span class="Ntxt Nover">[2016굿디자인어워드]에서 '이알톤 스페이드'제품이 우수상(국가표준원장상)을 수상</span>
				<span class="Ndate">2016.12.21</span>
			</div>
		</a>
		<a href="#" class="News02 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/news02.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">2016알톤스포츠 안전한 자전거 문화 형성 공로, 서울시로부터</span>
				<span class="Ntxt Nover">알톤스포츠가 안전한 자전거 문화 형성 인정받아 7월 29일 서울시 표창을 수여받았습니다.</span>
				<span class="Ndate">2016.09.06</span>
			</div>
		</a>
		<a href="#" class="News03 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/news03.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">2016서울시 Share the Road 자전거 퍼레이드 후원을 하였습니다.</span>
				<span class="Ntxt Nover">알톤스포츠가 6월 5일 열린 '서울시, 셰어더로드(Share the Road) 자전거 퍼레이드 2016(이하 자전거 퍼레이드)'에 공식 후원사로 참여하였습니다.</span>
				<span class="Ndate">2016.06.05</span>
			</div>
		</a>
		<a href="#" class="News01 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160601.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">코스닥 - 판교 CEO 간담회</span>
				<span class="Ntxt Nover">2016년 6월 1일, 알톤스포츠 판교 사옥에서 제 3차 코스탁-판교 CEO 간담회가 진행되었습니다.</span>
				<span class="Ndate">2016.06.01</span>
			</div>
		</a>
		<a href="#" class="News02 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160531.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">2016 미소사랑 자선 골프대회, 알톤스포츠, 이녹스 참가</span>
				<span class="Ntxt Nover">2016년 5월 31일, 알톤스포츠는 코스닥협회가 주최하는 '제11회 미소사랑자선골프대회'를 후원하며 '사랑, 나눔'의 가치 실천에 동참했다.</span>
				<span class="Ndate">2016.05.31</span>
			</div>
		</a>
		<a href="#" class="News03 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160528.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">노원아 놀자! 자전거 타고 운동하자!</span>
				<span class="Ntxt Nover">5월 28일, [노원아 놀자! 운동하자!]를 실천하기 위하여 알톤스포츠와 함께 상계동 주민의 건강을 도모하기 위한 안전한 자전거타기 행사</span>
				<span class="Ndate">2016.05.28</span>
			</div>
		</a>
		<a href="#" class="News01 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160526.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">손오공-알톤스포츠 업무제휴 협약 체결</span>
				<span class="Ntxt Nover">자전거 전문기업 (주)알톤스포츠와 완구 전문기업 (주)손오공이 서로의 강점을 결합해 완구, 스포츠 용품 등 다양한 제품을 기획하고 유통하는데 있어 협력하기로 하고 26일 오후 </span>
				<span class="Ndate">2016.05.26</span>
			</div>
		</a>
		<a href="#" class="News02 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160525.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">IOT자전거 시장 활성화를 위한 다자간 업무협약 체결</span>
				<span class="Ntxt Nover">(주)알톤스포츠가 자전거 도난방지와 IoT자전거 시장 활성화를 위한 다자간 업무협약을 체결했다.</span>
				<span class="Ndate">2016.05.25</span>
			</div>
		</a>
		<a href="#" class="News03 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160514.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">알톤스포츠와 함께한 다둥이 마라톤 대회</span>
				<span class="Ntxt Nover">알톤스포츠가 자전거 안전문화 캠페인의 일환으로 지난 14일 서울시청 앞 서울광장에서 열린 '2016 아장아장 다둥이 마라톤 대회'에 참가해 어린이들을 대상으로 안전교육을 펼쳤다.</span>
				<span class="Ndate">2016.05.14</span>
			</div>
		</a>
		<a href="#" class="News01 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160120.png"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">알톤스포츠 전속모델로 배우 박신혜 발탁</span>
				<span class="Ntxt Nover">알톤스포츠는 올해의 슬로건을 '알톤으로 바꾸다'로 정하고 올 2016년 시즌을 함께할 새로운 모델로 배우 박신혜를 전격 박탈했습니다.</span>
				<span class="Ndate">2016.01.20</span>
			</div>
		</a>
		<a href="#" class="News02 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160115.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">2016, alton Family Day 성황리에 개최</span>
				<span class="Ntxt Nover">알톤스포츠가 1월 13일~14일까지 충남 아산 소재 이녹스 폰사에 있는 '알톤 바이크 스튜디어'에서 전국 5백여 우수 대리점과 '2016 알톤 패밀리 데이'를 개최하고</span>
				<span class="Ndate">2016.01.15</span>
			</div>
		</a>
		<a href="#" class="News03 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/151219.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">로드마스터 토치카, 굿디자인 어워드 최우수상 수상</span>
				<span class="Ntxt Nover">산업통상자원부가 주최하고 한국 디자인진흥원이 주관하는 '2015 굿디자인어워드'에서 '로드마스터 토치카' 제품이 최우수상을 수상하고,'</span>
				<span class="Ndate">2015.12.19</span>
			</div>
		</a>
		<a href="#" class="News01 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/151213.png"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">A/S의 새로운 기준, alton Bike Clinic 본격 가동</span>
				<span class="Ntxt Nover">알톤스포츠는 그 동안 불편함이 지적되어오던 본사 중심의 A/S체제를 완전히 개편하고 자전거를 구매한 장소와 관계없이 모든 제품의 사후관리를 철저히 한다고 하였다.</span>
				<span class="Ndate">2015.12.18</span>
			</div>
		</a>
		<a href="#" class="News02 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/151015.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">제 1회 alton Design Award, 최우수상 발표</span>
				<span class="Ntxt Nover">제 1회 알톤 디자인 어워드에서 한국 산업기술대학교 디자인학부 김보원씨가 최우수상을 차지하며 3,000,000만원의 상금이 주어졌습니다.</span>
				<span class="Ndate">2015.10.15</span>
			</div>
		</a>
		<a href="#" class="News03 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/150923.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">alton T77D, 88일만에 북미 대륙횡단 성공.</span>
				<span class="Ntxt Nover">알톤스포츠가 6월 5일 열린 '서울시, 셰어더로드(Share the Road) 자전거 퍼레이드 2016(이하 자전거 퍼레이드)'에 공식 후원사로 참여하였습니다.</span>
				<span class="Ndate">2015.09.23</span>
			</div>
		</a>
		
	</div>
	<div id="company" class="company tabcontent">
		<h2 class="middleTitle Mcenter">회사 소식 모아보기</h2>
	    <div class="Mcenter">
	    	<span class="underline"></span>
	    </div>
	    <p class="middleText Mcenter">알톤스포츠의 회사 소식들을 모아서 볼 수 있습니다.</p>
	    
	    <a href="#" class="News01 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/news01.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">이알톤 스페이드,굿디자인 어워드 국가표준원장상 수상</span>
				<span class="Ntxt Nover">[2016굿디자인어워드]에서 '이알톤 스페이드'제품이 우수상(국가표준원장상)을 수상</span>
				<span class="Ndate">2016.12.21</span>
			</div>
		</a>
		<a href="#" class="News02 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160601.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">코스닥 - 판교 CEO 간담회</span>
				<span class="Ntxt Nover">2016년 6월 1일, 알톤스포츠 판교 사옥에서 제 3차 코스탁-판교 CEO 간담회가 진행되었습니다.</span>
				<span class="Ndate">2016.06.01</span>
			</div>
		</a>
		<a href="#" class="News03 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160525.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">IOT자전거 시장 활성화를 위한 다자간 업무협약 체결</span>
				<span class="Ntxt Nover">(주)알톤스포츠가 자전거 도난방지와 IoT자전거 시장 활성화를 위한 다자간 업무협약을 체결했다.</span>
				<span class="Ndate">2016.05.25</span>
			</div>
		</a>
		<a href="#" class="News01 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160120.png"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">알톤스포츠 전속모델로 배우 박신혜 발탁</span>
				<span class="Ntxt Nover">알톤스포츠는 올해의 슬로건을 '알톤으로 바꾸다'로 정하고 올 2016년 시즌을 함께할 새로운 모델로 배우 박신혜를 전격 박탈했습니다.</span>
				<span class="Ndate">2016.01.20</span>
			</div>
		</a>
	</div>
	<div id="social" class="social tabcontent">
		<h2 class="middleTitle Mcenter">사회 공헌 모아보기</h2>
	    <div class="Mcenter">
	    	<span class="underline"></span>
	    </div>
	    <p class="middleText Mcenter">알톤스포츠의 사회 공헌을 모아서 볼 수 있습니다.</p>
	    <a href="#" class="News01 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/news02.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">2016알톤스포츠 안전한 자전거 문화 형성 공로, 서울시로부터</span>
				<span class="Ntxt Nover">알톤스포츠가 안전한 자전거 문화 형성 인정받아 7월 29일 서울시 표창을 수여받았습니다.</span>
				<span class="Ndate">2016.09.06</span>
			</div>
		</a>
		<a href="#" class="News02 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/news03.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">2016서울시 Share the Road 자전거 퍼레이드 후원을 하였습니다.</span>
				<span class="Ntxt Nover">알톤스포츠가 6월 5일 열린 '서울시, 셰어더로드(Share the Road) 자전거 퍼레이드 2016(이하 자전거 퍼레이드)'에 공식 후원사로 참여하였습니다.</span>
				<span class="Ndate">2016.06.05</span>
			</div>
		</a>
		<a href="#" class="News03 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160528.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">노원아 놀자! 자전거 타고 운동하자!</span>
				<span class="Ntxt Nover">5월 28일, [노원아 놀자! 운동하자!]를 실천하기 위하여 알톤스포츠와 함께 상계동 주민의 건강을 도모하기 위한 안전한 자전거타기 행사</span>
				<span class="Ndate">2016.05.28</span>
			</div>
		</a>
		<a href="#" class="News01 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160514.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">알톤스포츠와 함께한 다둥이 마라톤 대회</span>
				<span class="Ntxt Nover">알톤스포츠가 자전거 안전문화 캠페인의 일환으로 지난 14일 서울시청 앞 서울광장에서 열린 '2016 아장아장 다둥이 마라톤 대회'에 참가해 어린이들을 대상으로 안전교육을 펼쳤다.</span>
				<span class="Ndate">2016.05.14</span>
			</div>
		</a>
		<a href="#" class="News02 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/160115.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">2016, alton Family Day 성황리에 개최</span>
				<span class="Ntxt Nover">알톤스포츠가 1월 13일~14일까지 충남 아산 소재 이녹스 폰사에 있는 '알톤 바이크 스튜디어'에서 전국 5백여 우수 대리점과 '2016 알톤 패밀리 데이'를 개최하고</span>
				<span class="Ndate">2016.01.15</span>
			</div>
		</a>
		<a href="#" class="News03 NBox">
			<div class="NewsImg">
				<div class="NewsBig">
					<img src="images/altonNews/151015.jpg"></img>	
				</div>
			</div>
			<div class="NewsInfo">
				<span class="Ntitle Nover">제 1회 alton Design Award, 최우수상 발표</span>
				<span class="Ntxt Nover">제 1회 알톤 디자인 어워드에서 한국 산업기술대학교 디자인학부 김보원씨가 최우수상을 차지하며 3,000,000만원의 상금이 주어졌습니다.</span>
				<span class="Ndate">2015.10.15</span>
			</div>
		</a>
	</div>
	<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
	
</section>
<!--더 보기-->
<div class="container">
	<button class="moreBtn newsBtn">더 보기 +</button>
</div>
<!--//더 보기-->
<?php
    include_once("foot.php")
?>