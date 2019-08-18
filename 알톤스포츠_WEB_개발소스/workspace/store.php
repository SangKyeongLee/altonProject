<?php
    include_once("header.php");
?>
<!--알톤 로케이션-->
<div class="location">
    <div class="container location_inner">
        <ul>
            <li class="loc1">
            	<a href="#" class="loc1_sub">대리점
            	<img src="images/under.png" class="stand"></img><img src="images/underOn.png" class="over">
            	</a>
            	<ul class="loc_ul">
            		<li><a href="http://lsk931228.dothome.co.kr/alton/bikeType.php" class="loc1_sub">자전거</a></li>
           			<li><a href="#" class="loc1_sub">회사소개</a></li>
           			<li><a href="http://lsk931228.dothome.co.kr/alton/FAQ.php" class="loc1_sub">고객지원</a></li>
           			<li><a href="http://lsk931228.dothome.co.kr/alton/altonNews.php" class="loc1_sub">홍보센터</a></li>
            	</ul>
            </li>
            <li class="loc2">
            	<a href="#">대리점 찾기</a><img src="images/underOn.png"></img>
            	<ul class="loc_ul">
            		<li><a href="#" class="loc1_sub">ABC</a></li>
           			<li><a href="#" class="loc1_sub">알톤패밀리</a></li>
            	</ul>
            </li>
        </ul>
    </div>
</div>
<!--//알톤 로케이션-->
<!--서브 비주얼-->
<section class="storeVisual">
</section>
<!--서브 비주얼-->
<!--알톤 서브메뉴-->
<div class="subMenu">
    <div class="container subMenu_inner">
        <ul class="Scheckbox">
            <li><input type="checkbox" name="elec"/>전기자전거 취급점</li>
            <li><input type="checkbox" name="abc"/>ALTON BIKE CLINIC</li>
        </ul>
        
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
<!--대리점 찾기-->
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=ogTjSGspkvQvOwtTXNMF&submodules=geocoder"></script>
<div class="container storeSection">
    <div id="naver_map" style="width:800px;height:600px;" class="naver_map"></div>
      
      <script>      
         var HOME_PATH = window.HOME_PATH || '.';
         var position = new naver.maps.LatLng(37.4006889,127.10911869999995); // 서원대 야외음악당 위치
         //var position = new naver.maps.LatLng(36.624290, 127.482984); // 서원대 행정관 위치
   
         var map = new naver.maps.Map('naver_map', {    // 네이버 Map 생성
              // scaleControl: false, 
              // logoControl: false,
              // mapDataControl: true, 로고 표시 여부
              zoomControl: true, //줌 컨트롤의 표시 여부
              zoomControlOptions: { //줌 컨트롤 위치
                  position: naver.maps.Position.TOP_LEFT
              },              
              minZoom: 1, //지도의 최소 줌 레벨
             center: position, // 지도 위치 설정
             zoom: 12, // 지도 축적  
             mapTypeControl: true, // 타입선택
             mapTypeControlOptions: { // 타입 위치 
                  position: naver.maps.Position.TOP_RIGHT
              },          
         });
         
         var marker = new naver.maps.Marker({ // Marker 위치 지정
             position: position,
             map: map,
             icon: {
                 url: HOME_PATH +'/img/example/ico_pin.jpg', //50, 68 크기의 원본 이미지
                 size: new naver.maps.Size(25, 34),
                 scaledSize: new naver.maps.Size(25, 34),
                 origin: new naver.maps.Point(0, 0),
                 anchor: new naver.maps.Point(12, 34)
             }
         });   
         
         var map = new naver.maps.Map('naver_map', mapOptions);
      </script>
    <!--<div class="map stfl">-->
        
    <!--</div>-->
    <div class="storelist stfl">
        <a href="#" class="store stbox">
            <div class="stTxt">
                <p class="stName">알톤스포츠 본사</p>
                <p class="staddr">경기도 성남시 분당구 판교역로 221 투썬월드 빌딩 12층</p>
                <p class="stphone">031-727-9100</p>
            </div>
            <div class="stType">
                <div class="fix">
                    <img src="images/store/fix_off.png"></img>    
                </div>
                <div class="elec">
                    <img src="images/store/elec_off.png"></img>    
                </div>
            </div>
        </a>
        <a href="#" class="store stbox">
            <div class="stTxt">
                <p class="stName">느티로점</p>
                <p class="staddr">경기도 성남시 분당구 느티로77번길 6-8(정자동)분당MTB민성상사</p>
                <p class="stphone">031-714-3002</p>
            </div>
            <div class="stType">
                <div class="fix">
                    <img src="images/store/fix.png"></img>    
                </div>
                <div class="elec">
                    <img src="images/store/elec.png"></img>    
                </div>
            </div>
        </a>
        <a href="#"  class="store stbox">
            <div class="stTxt">
                <p class="stName">산성대로점</p>
                <p class="staddr">경기도 성남시 수정구 산성대로 189(수산타원) 성남바이크</p>
                <p class="stphone">031-721-2986</p>
            </div>
            <div class="stType">
                <div class="fix">
                    <img src="images/store/fix.png"></img>    
                </div>
                <div class="elec">
                    <img src="images/store/elec.png"></img>    
                </div>
            </div>
        </a>
        <a href="#"  class="store stbox">
            <div class="stTxt">
                <p class="stName">능평로점</p>
                <p class="staddr">경기도 광주시 오포읍 능평로 116-11 생활속의 자전거</p>
                <p class="stphone">010-3207-8911</p>
            </div>
            <div class="stType">
                <div class="fix">
                    <img src="images/store/fix_off.png"></img>    
                </div>
                <div class="elec">
                    <img src="images/store/elec.png"></img>    
                </div>
            </div>
        </a>
        <a href="#"  class="store stbox">
            <div class="stTxt">
                <p class="stName">죽전역점</p>
                <p class="staddr">경기도 용인시 수지구 풍덕천로 160번길 19-17(풍덕천동)305.두바퀴상사 경기 용인시 수지구 풍덕천동 69-63</p>
                <p class="stphone">010-4071-4971</p>
            </div>
            <div class="stType">
                <div class="fix">
                    <img src="images/store/fix.png"></img>    
                </div>
                <div class="elec">
                    <img src="images/store/elec.png"></img>    
                </div>
            </div>
        </a>
        <a href="#"  class="store stbox">
            <div class="stTxt">
                <p class="stName">산운로점</p>
                <p class="staddr">경기도 성남시 분당구 산운로160번길 16-3(운중동)101호(운중동) 위키 바이크</p>
                <p class="stphone">031-623-9336</p>
            </div>
            <div class="stType">
                <div class="fix">
                    <img src="images/store/fix_off.png"></img>    
                </div>
                <div class="elec">
                    <img src="images/store/elec.png"></img>    
                </div>
            </div>
        </a>
        <a href="#"  class="store stbox">
            <div class="stTxt">
                <p class="stName">내정로점</p>
                <p class="staddr">경기도 성남시 분당구 내정로 166번길 7-6(코끼리상가) 경신BIKE</p>
                <p class="stphone">031-718-3091</p>
            </div>
            <div class="stType">
                <div class="fix">
                    <img src="images/store/fix_off.png"></img>    
                </div>
                <div class="elec">
                    <img src="images/store/elec_off.png"></img>    
                </div>
            </div>
        </a>
        <a href="#"  class="store stbox">
            <div class="stTxt">
                <p class="stName">용구대로점</p>
                <p class="staddr">경기도 용인시 기흥구 용구대로2469번길 29하이텐</p>
                <p class="stphone">031-8005-8400</p>
            </div>
            <div class="stType">
                <div class="fix">
                    <img src="images/store/fix_off.png"></img>    
                </div>
                <div class="elec">
                    <img src="images/store/elec_off.png"></img>    
                </div>
            </div>
        </a>
        <a href="#"  class="store stbox">
            <div class="stTxt">
                <p class="stName">탄천상로점</p>
                <p class="staddr">경기도 용인시 수지구 탄천상로 19 102(죽전동,중앙프라자) 현자전거</p>
                <p class="stphone">010-5440-0631</p>
            </div>
            <div class="stType">
                <div class="fix">
                    <img src="images/store/fix_off.png"></img>    
                </div>
                <div class="elec">
                    <img src="images/store/elec_off.png"></img>    
                </div>
            </div>
        </a>
        <a href="#"  class="store stbox">
            <div class="stTxt">
                <p class="stName">양현로점</p>
                <p class="staddr">경기도 성남시 분당구 양현로 539(매화마을 근린상가) 카리스자전거</p>
                <p class="stphone">010-4013-9045</p>
            </div>
            <div class="stType">
                <div class="fix">
                    <img src="images/store/fix_off.png"></img>    
                </div>
                <div class="elec">
                    <img src="images/store/elec_off.png"></img>    
                </div>
            </div>
        </a>
        <a href="#"  class="store stbox">
            <div class="stTxt">
                <p class="stName">송이로점</p>
                <p class="staddr">서울특별시 송파구 송이로 37가길 25 페럴캣 바이시클</p>
                <p class="stphone">010-4818-4842</p>
            </div>
            <div class="stType">
                <div class="fix">
                    <img src="images/store/fix.png"></img>    
                </div>
                <div class="elec">
                    <img src="images/store/elec.png"></img>    
                </div>
            </div>
        </a>
        
    </div>
</div>
<!--//대리점 찾기-->
<?php
	include_once("foot.php");
?>