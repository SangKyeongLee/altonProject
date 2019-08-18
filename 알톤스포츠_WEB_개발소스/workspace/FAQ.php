<?php
    include_once("header.php");
?>
<!--알톤 로케이션-->
<div class="location">
    <div class="container location_inner">
        <ul>
            <li class="loc1">
            	<a href="#" class="loc1_sub">고객지원
            	<img src="images/under.png" class="stand"></img><img src="images/underOn.png" class="over">
            	</a>
            	<ul class="loc_ul">
            		<li><a href="http://lsk931228.dothome.co.kr/alton/bikeType.php" class="loc1_sub">자전거</a></li>
           			<li><a href="#" class="loc1_sub">회사소개</a></li>
           			<li><a href="http://lsk931228.dothome.co.kr/alton/altonNews.php" class="loc1_sub">홍보센터</a></li>
           			<li><a href="http://lsk931228.dothome.co.kr/alton/store.php" class="loc1_sub">대리점</a></li>
            	</ul>
            </li>
            <li class="loc2">
            	<a href="http://lsk931228.dothome.co.kr/alton/FAQ.php">FAQ</a><img src="images/underOn.png"></img>
            	<ul class="loc_ul FAQ_ul">
            		<li><a href="http://lsk931228.dothome.co.kr/alton/onlineAS.php" class="loc1_sub">A/S문의</a></li>
           			<li><a href="#" class="loc1_sub">알톤스쿨</a></li>
           			<li><a href="#" class="loc1_sub">제품설명서</a></li>
           			<li><a href="#" class="loc1_sub">대량구매</a></li>
           			<li><a href="#" class="loc1_sub">이벤트</a></li>
            	</ul>
            </li>
        </ul>
    </div>
</div>
<!--//알톤 로케이션-->
<!--서브 비주얼-->
<section class="FAQVisual">
</section>
<!--서브 비주얼-->
<!--알톤 서브메뉴-->
<div class="subMenu">
    <div class="container subMenu_inner">
        <div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'all')" id="defaultOpen">전체보기</button>
		  <button class="tablinks" onclick="openCity(event, 'products')">제품관련</button>
		  <button class="tablinks socialTab" onclick="openCity(event, 'buy')">구매관련</button>
		  <button class="tablinks socialTab" onclick="openCity(event, 'online')">온라인A/S</button>
		</div>
        <!--<ul>-->
        <!--    <li class="sub1"><a href="#">전체</a></li>-->
        <!--    <li class="sub2"><a href="#">제품관련</a></li>-->
        <!--    <li class="sub3"><a href="#">구매관련</a></li>-->
        <!--    <li class="sub4"><a href="#">온라인A/S관련</a></li>-->
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
<!--아코디언-->
<div class="container arcBox">
    <div id="all" class="all tabcontent">
        <div class="arcTitle">
            <span class="no dis">No</span>
            <span class="typ dis">구분</span>
            <span class="tle dis">제목</span>
        </div>
        <button class="accordion">
            <span class="no disp">1</span>
            <span class="typ disp">자전거</span>
            <span class="tle disp alignL">전기 자전거의 개념이 이해되지 않습니다.</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>전기자전거는 말그대로 전기 에너지의 힘으로 주행하는 기능이 더해진 자전거입니다. 일반 자전거와
비교해 좀 더 무겁다는 단점이 있지만 오히려 전기의 힘으로 일반자전거보다 더욱 적은 힘만으로도 주
행이 가능하도록 설계된 제품군입니다. 특히 오르막길에서 체험하실 경우 발군의 힘을 느끼실수 있습
니다. 알톤의 전기자전거는 전기에너지의 힘만으로 주행이 가능한 모드와, 주행자의 패달링을 돕는 
두가지 모드를 모두 지원하고 있습니다.</span>
            </div>      
        </div>
        
        <button class="accordion">
            <span class="no disp">2</span>
            <span class="typ disp">구매관련</span>
            <span class="tle disp alignL">대리점마다 왜 가격이 상이한가요?</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>판매가격은 판매자가 직접 결정을 하기 때문에, 대리점마다 가격이 일부 상이할 수 있습니다.당사가 공시하는 제품별 권장소비자가격을 기준으로 비교하시면 합리적 구매결정에 도움이 되시리라 생각되며, 같은 제품의 가격이 대리점마다 차이가 난다면 각 대리점의 조립기술 및 a/s능력을 잘 판단하셔서 구매하시는 것이 좋습니다.</span>
            </div>      
        </div>
        <button class="accordion">
            <span class="no disp">3</span>
            <span class="typ disp">구매관련</span>
            <span class="tle disp alignL">자전거 조립은 어떻게 하나요?</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>소비자께서 직접 조립하실 수 있지만, 자전거 조립의 경우 숙련된 기술과 전문적 도구가 필요해서 초보자께서 조립하기엔 어려운 점이 많습니다. 또한 각 부품의 조임 토크 혹은 변속기와 적정한 브레이크 조정등을 하는데 어려움이 있고, 단순히 완성하였다 하더라도 안전상 문제가 생길 수 있습니다. 조립되지 않은 자전거릅 구입하셨더라도, 시중 일반 자전거 대리점에서 합리적인 비용(1~2만원선)에서 서비스가 가능하오니 꼭 전문가의 도움을 받아 조립하시길 바라며, 고객님께서 직접 조립하셨다 하더라도, 대리점에서 확인점검을 받으시기를 권장드립니다.</span>
            </div>      
        </div>
        <button class="accordion">
            <span class="no disp">4</span>
            <span class="typ disp">자전거</span>
            <span class="tle disp alignL">로드, MTB, 하이브리드, 미니벨로 자전거 종류를 이해하지 못하겠습니다.</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>1.로드ROAD는 가볍고 날렵한 디자인으로 포장도로 또는 비교적 고른 노면에서 빠른 속도를 즐기수 있도록 제작된 자전거입니다.최대한의 속도를 내기 위해 큰 기어비를 장착하고 있고, 방향타로 드롭바를 사용하여 공기저항을 최소하하는피팅자세가가능합니다. 또한 MTB나 로드 자전거보다 크고 얇은 휠을 사용하여 마찰을 줄임으로써 레저환경에서 인간의 힘만으로 낼 수 있는 최고의 속도 한계를 만끽하실 수 있습니다.
2.MTBMTB는 일반 자전거와 달리 광폭 타이어를 장착하여 비포장도로 주행에 특화되어 설계된 자전거입니다. 불규칙한 도로에서 조향성을 극대화 할수있도록 일자형 핸들과 유압식 브레이크, 그리고 충격에 강한 완충장치를 장착하고 있는 특징을 가지고 있습니다.MTB는 1970년대 부터 개발되기 시작한 것으로 알려져 있으며, 국내에서는 알톤의 대표브랜드 중 하나인 코렉스가 시발점이 되어본격적인 보급이 이루어지게 되었습니다.
3.하이브리드하이브리드는빠른속도와 안정적이고 편안한 승차감을 동시에 원하는 라이더들의 욕구를 충족시키기 위해 개발된 자전거입니다.산악자전거(MTB)와 로드바이크를 조합한 형태로 산악용 보다 매우 얇은 바퀴를 지니고 있고, 안정적인 주행을 위해조향장치로 통상 FLAT BAR(일자바)를 장착하고 있습니다. 튼튼하면서도 안정적이고 빠른 주행이 가능한 특징 때문에출퇴근을 위한 용도와 가벼운 하이킹을 위한 용도로 유저들에게 전폭적인 지지를 받고 있는 자전거입니다.
4.폴딩/ 미니벨로미니벨로는 영어단어인 Mini 바퀴를 지칭하는 프랑스어인 Velo가 합쳐진 합성으로작은 바퀴와 작은 차체로 쉽게 휴대할 수 있도록 설계된 자전거입니다.이동이 간편하고유니크하고 캐쥬얼한 디자인으로 격식과 복장을 갖추지 않아도 쉽게 즐길 수 있도록 디자인되어도심에서 즐기는데 최적화되어 있습니다.특히 알톤의미니벨로라인업중에는 차량과대중교통등에서휴대성이 극대화 될 수 있도록 접이식으로 제작된폴딩형 제품들도 큰 사랑을 받고 있습니다.
5.픽시픽시는Fixed-Gear Bicycle의 준말로, 단 한개로 고정된 기어가 장착되어 심플함을 추구함과 동시에최고의 스타일을 연출하는 자전거입니다.패달을 앞으로 밟으면 앞으로 가고, 뒤로 밟으면 뒤로 가며, 정확히 라이더가패달을 밟는만큼 나아가는 순수함을 지니고 있습니다.다만 브레이크가 없다는 특징이 있어, 자전거를 처음 접하는 사람들에게는 다소 어려운 측면이 있으나알톤은숙련자를 위한 픽시부터입문자를 위해 보조브레이크를 장착한 자전거까지 다양한 라인업이 준비되어 있습니다</span>
            </div>      
        </div>
        <button class="accordion">
            <span class="no disp">5</span>
            <span class="typ disp">자전거</span>
            <span class="tle disp alignL">자전거 입문자입니다. 제원표를 이해하지 못하겠습니다.</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>당사 홈페이지 각 제품페이지별로기재된 제원표 상단에 ‘제원표 이해하기’링크가 있습니다. 해당 링크를 누르시면 전체 제원표에 대한 설명이 출력되며, 제원을보다 쉽게 이해하실 수 있습니다.</span>
            </div>      
        </div>
        <button class="accordion">
            <span class="no disp">6</span>
            <span class="typ disp">A/S문의</span>
            <span class="tle disp alignL">제품 A/S는 어떻게 받아야하나요?</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>1. 전국 111개 A.B.C 지점을 통한 신속한 서비스(당사 홈페이지 대리점 찾기 메뉴에서 위치검색가능) (추천)
2.고객 지원 및 기술지원팀으로 연락 혹은 구입한 대리점을 통한 서비스 요청
3.홈페이지를 상담하기 메뉴를 통한 A/S 상담신청(상세한 증상과 사진등을 첨부해주시면 고객님께 필요한 조치를 안내드리겠습니다.)</span>
            </div>      
        </div>
        <button class="accordion">
            <span class="no disp">7</span>
            <span class="typ disp">구매관련</span>
            <span class="tle disp alignL">자전거 부품을 구할려면 어떻게 해야 합니까?</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>알톤스포츠 대리점과 알톤스포츠 고객센터를 통해 문의를 주시면
신속하고 친절하게 답변드리겠습니다.</span>
            </div>      
        </div>
    </div>
    <div id="products" class="products tabcontent">
        <div class="arcTitle">
            <span class="no dis">No</span>
            <span class="typ dis">구분</span>
            <span class="tle dis">제목</span>
        </div>
        <button class="accordion">
            <span class="no disp">1</span>
            <span class="typ disp">자전거</span>
            <span class="tle disp alignL">전기 자전거의 개념이 이해되지 않습니다.</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>전기자전거는 말그대로 전기 에너지의 힘으로 주행하는 기능이 더해진 자전거입니다. 일반 자전거와
비교해 좀 더 무겁다는 단점이 있지만 오히려 전기의 힘으로 일반자전거보다 더욱 적은 힘만으로도 주
행이 가능하도록 설계된 제품군입니다. 특히 오르막길에서 체험하실 경우 발군의 힘을 느끼실수 있습
니다. 알톤의 전기자전거는 전기에너지의 힘만으로 주행이 가능한 모드와, 주행자의 패달링을 돕는 
두가지 모드를 모두 지원하고 있습니다.</span>
            </div>      
        </div> 
        <button class="accordion">
            <span class="no disp">4</span>
            <span class="typ disp">자전거</span>
            <span class="tle disp alignL">로드, MTB, 하이브리드, 미니벨로 자전거 종류를 이해하지 못하겠습니다.</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>1.로드ROAD는 가볍고 날렵한 디자인으로 포장도로 또는 비교적 고른 노면에서 빠른 속도를 즐기수 있도록 제작된 자전거입니다.최대한의 속도를 내기 위해 큰 기어비를 장착하고 있고, 방향타로 드롭바를 사용하여 공기저항을 최소하하는피팅자세가가능합니다. 또한 MTB나 로드 자전거보다 크고 얇은 휠을 사용하여 마찰을 줄임으로써 레저환경에서 인간의 힘만으로 낼 수 있는 최고의 속도 한계를 만끽하실 수 있습니다.
2.MTBMTB는 일반 자전거와 달리 광폭 타이어를 장착하여 비포장도로 주행에 특화되어 설계된 자전거입니다. 불규칙한 도로에서 조향성을 극대화 할수있도록 일자형 핸들과 유압식 브레이크, 그리고 충격에 강한 완충장치를 장착하고 있는 특징을 가지고 있습니다.MTB는 1970년대 부터 개발되기 시작한 것으로 알려져 있으며, 국내에서는 알톤의 대표브랜드 중 하나인 코렉스가 시발점이 되어본격적인 보급이 이루어지게 되었습니다.
3.하이브리드하이브리드는빠른속도와 안정적이고 편안한 승차감을 동시에 원하는 라이더들의 욕구를 충족시키기 위해 개발된 자전거입니다.산악자전거(MTB)와 로드바이크를 조합한 형태로 산악용 보다 매우 얇은 바퀴를 지니고 있고, 안정적인 주행을 위해조향장치로 통상 FLAT BAR(일자바)를 장착하고 있습니다. 튼튼하면서도 안정적이고 빠른 주행이 가능한 특징 때문에출퇴근을 위한 용도와 가벼운 하이킹을 위한 용도로 유저들에게 전폭적인 지지를 받고 있는 자전거입니다.
4.폴딩/ 미니벨로미니벨로는 영어단어인 Mini 바퀴를 지칭하는 프랑스어인 Velo가 합쳐진 합성으로작은 바퀴와 작은 차체로 쉽게 휴대할 수 있도록 설계된 자전거입니다.이동이 간편하고유니크하고 캐쥬얼한 디자인으로 격식과 복장을 갖추지 않아도 쉽게 즐길 수 있도록 디자인되어도심에서 즐기는데 최적화되어 있습니다.특히 알톤의미니벨로라인업중에는 차량과대중교통등에서휴대성이 극대화 될 수 있도록 접이식으로 제작된폴딩형 제품들도 큰 사랑을 받고 있습니다.
5.픽시픽시는Fixed-Gear Bicycle의 준말로, 단 한개로 고정된 기어가 장착되어 심플함을 추구함과 동시에최고의 스타일을 연출하는 자전거입니다.패달을 앞으로 밟으면 앞으로 가고, 뒤로 밟으면 뒤로 가며, 정확히 라이더가패달을 밟는만큼 나아가는 순수함을 지니고 있습니다.다만 브레이크가 없다는 특징이 있어, 자전거를 처음 접하는 사람들에게는 다소 어려운 측면이 있으나알톤은숙련자를 위한 픽시부터입문자를 위해 보조브레이크를 장착한 자전거까지 다양한 라인업이 준비되어 있습니다</span>
            </div>      
        </div>
        <button class="accordion">
            <span class="no disp">5</span>
            <span class="typ disp">자전거</span>
            <span class="tle disp alignL">자전거 입문자입니다. 제원표를 이해하지 못하겠습니다.</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>당사 홈페이지 각 제품페이지별로기재된 제원표 상단에 ‘제원표 이해하기’링크가 있습니다. 해당 링크를 누르시면 전체 제원표에 대한 설명이 출력되며, 제원을보다 쉽게 이해하실 수 있습니다.</span>
            </div>      
        </div>
    </div>
    <div id="buy" class="buy tabcontent">
        <div class="arcTitle">
            <span class="no dis">No</span>
            <span class="typ dis">구분</span>
            <span class="tle dis">제목</span>
        </div>
        <button class="accordion">
            <span class="no disp">2</span>
            <span class="typ disp">구매관련</span>
            <span class="tle disp alignL">대리점마다 왜 가격이 상이한가요?</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>판매가격은 판매자가 직접 결정을 하기 때문에, 대리점마다 가격이 일부 상이할 수 있습니다.당사가 공시하는 제품별 권장소비자가격을 기준으로 비교하시면 합리적 구매결정에 도움이 되시리라 생각되며, 같은 제품의 가격이 대리점마다 차이가 난다면 각 대리점의 조립기술 및 a/s능력을 잘 판단하셔서 구매하시는 것이 좋습니다.</span>
            </div>      
        </div>
        <button class="accordion">
            <span class="no disp">3</span>
            <span class="typ disp">구매관련</span>
            <span class="tle disp alignL">자전거 조립은 어떻게 하나요?</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>소비자께서 직접 조립하실 수 있지만, 자전거 조립의 경우 숙련된 기술과 전문적 도구가 필요해서 초보자께서 조립하기엔 어려운 점이 많습니다. 또한 각 부품의 조임 토크 혹은 변속기와 적정한 브레이크 조정등을 하는데 어려움이 있고, 단순히 완성하였다 하더라도 안전상 문제가 생길 수 있습니다. 조립되지 않은 자전거릅 구입하셨더라도, 시중 일반 자전거 대리점에서 합리적인 비용(1~2만원선)에서 서비스가 가능하오니 꼭 전문가의 도움을 받아 조립하시길 바라며, 고객님께서 직접 조립하셨다 하더라도, 대리점에서 확인점검을 받으시기를 권장드립니다.</span>
            </div>      
        </div>
        <button class="accordion">
            <span class="no disp">7</span>
            <span class="typ disp">구매관련</span>
            <span class="tle disp alignL">자전거 부품을 구할려면 어떻게 해야 합니까?</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>알톤스포츠 대리점과 알톤스포츠 고객센터를 통해 문의를 주시면
신속하고 친절하게 답변드리겠습니다.</span>
            </div>      
        </div>
    </div>
    <div id="online" class="online tabcontent">
        <div class="arcTitle">
            <span class="no dis">No</span>
            <span class="typ dis">구분</span>
            <span class="tle dis">제목</span>
        </div>
        <button class="accordion">
            <span class="no disp">6</span>
            <span class="typ disp">A/S문의</span>
            <span class="tle disp alignL">제품 A/S는 어떻게 받아야하나요?</span>
        </button>
        <div class="panel">
            <div class="panel_inner">
                <span>1. 전국 111개 A.B.C 지점을 통한 신속한 서비스(당사 홈페이지 대리점 찾기 메뉴에서 위치검색가능) (추천)
2.고객 지원 및 기술지원팀으로 연락 혹은 구입한 대리점을 통한 서비스 요청
3.홈페이지를 상담하기 메뉴를 통한 A/S 상담신청(상세한 증상과 사진등을 첨부해주시면 고객님께 필요한 조치를 안내드리겠습니다.)</span>
            </div>      
        </div>
    </div>
    
</div>
<!--//아코디언-->
<!--온라인 A/S 바로가기-->
<div class="container">
    <div class="moveAS">
        <div class="moveAS_inner">
            <p>콜센터 (031) 859 – 0100  /상담시간 am 09:00 ~ pm 05:00</p>
            <p>상담업무내용 A/S 및 수리 안내 A,B,C 서비스 안내 제품하자 및 결함 등</p>
            <p class="p3">원하시는 답변을 찾지 못하였거나 더 궁금한 사항이 있으시면[온라인 A/S문의]를 통해 1:1 상담을 받을 수 있습니다. 빠르고 친절하게 답변해 드리겠습니다.</p>    
            <a href="#">온라인A/S문의 바로가기</a>
        </div>
    </div>
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
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>
<!--//온라인 A/S 바로가기-->
<?php
	include_once("foot.php");
?>