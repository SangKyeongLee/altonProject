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
        <div class="wrap club_bg">
            <header class="header_main">
                <a href="http://lsk931228.dothome.co.kr/altonM/main.php" class="back"><img class="backImg" src="images/back.png"></img></a>
                <a href="#" class="logo LTitle">알톤 스쿨</img></a>
                <a class="edit"></a>
            </header>
            <section class="tabbar">
                <a class="tablinks tab_all tab" onclick="openCity(event, 'all')" id="defaultOpen">전 체</a>
		        <a class="tablinks tab_prd tab" onclick="openCity(event, 'products')">상 식</a>
		        <a class="tablinks tab_buy tab" onclick="openCity(event, 'buy')">부 품</a>
		        <a class="tablinks tab_as tab" onclick="openCity(event, 'online')">관 리</a>
                <!--<a href="#" class="tab_all tab">전체</a>-->
                <!--<a href="#" class="tab_prd tab">제품관련</a>-->
                <!--<a href="#" class="tab_buy tab">구매관련</a>-->
                <!--<a href="#" class="tab_as tab">A/S문의</a>-->
            </section>
            <section class="tip_list tabcontent all" id="all">
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/boopoom1.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 부품]자전거 부품별 명칭 ></p>
                        <p class="tip_sub">자전거는 무려 200여개의 부품으로 설계되어있다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/boopoom2.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 부품]핸들바의 종류와 구분 ></p>
                        <p class="tip_sub">핸들바의 종류와 구분에 대해 알아보자.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/boopoom3.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 부품]로드와 MTB의 안장의 차이 ></p>
                        <p class="tip_sub">본인에게 부적합한 안장으로 장거리 라이딩을 할 경우 자연스럽지 않은 동작과 안장통이 발생하게 된다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/boopoom5.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 부품]자전거 프레임의 이해 ></p>
                        <p class="tip_sub">자전거 프레임의 명칭에 대해 알아보자.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/gwanli1.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 관리]공기주입기와 밸브의 종류 ></p>
                        <p class="tip_sub">본인이 타는 자전거의 밸브 방식과 타이어의 적정 공기압의 수지는 필수이다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/gwanli2.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 관리]적정 압력으로 공기를 주입하는 방법 ></p>
                        <p class="tip_sub">일반적인 라이더의 경우, 최대 공기압에서 약 15% 감하여 공기압을 설정하여 주면 일반적인 라이딩에 문제가 없다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/gwanli3.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 관리]체인세척 및 관리 방법 ></p>
                        <p class="tip_sub">자전거 입문자들이 의외로 중요하게 보아야 하는 부분은 바로 스템이다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/sangsik1.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]자전거 용도에 따른 분류 ></p>
                        <p class="tip_sub">자전거 입문자들이 가장 처음 막막함을 경험하게 되는 부분이 바로 자전거 용도에 따른 구분법이다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/sangsik2.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]소재에 따른 자전거 분류 ></p>
                        <p class="tip_sub">자전거의 소재가 무엇이냐고 물을 때 일반적으로 프레임의 소재를 두고 이야기한다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/sangsik3.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]신장별 프레임 권장사이즈 ></p>
                        <p class="tip_sub">프레임 권장사이즈(신장)를 확인해보세요.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/tip1.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]건강한 레포츠, 자전거 ></p>
                        <p class="tip_sub">자전거를 1년 이상 꾸준히 타면 심장병, 제2형(성인형)당뇨병, 비만 발병 가능성이 약 50% 감소한다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/tip2.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]쫄쫄이를 입는 이유 ></p>
                        <p class="tip_sub">자전거는 에어로 효과가 높은 몸에 붙는 의류를 착용하는 것이다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/tip3.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]헬멧의 중요성 ></p>
                        <p class="tip_sub">자전거는 숙련자나 내리막길의 경우 50km 이상으로 달릴 정도로 빠른 속도를 낼 수 있는 교통수단이다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/tip4.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]자전거도 지하철 탑승이 가능하다. ></p>
                        <p class="tip_sub">제약사항이 있긴 하지만 몇가지 규정과 에티켓만 지켜주면 수도권 지하철에는 자전거 탑승이 가능하다.</p>
                    </div>
                </a>
                
            </section>
            <section class="tip_list tabcontent products" id="products">
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/sangsik1.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]자전거 용도에 따른 분류 ></p>
                        <p class="tip_sub">자전거 입문자들이 가장 처음 막막함을 경험하게 되는 부분이 바로 자전거 용도에 따른 구분법이다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/sangsik2.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]소재에 따른 자전거 분류 ></p>
                        <p class="tip_sub">자전거의 소재가 무엇이냐고 물을 때 일반적으로 프레임의 소재를 두고 이야기한다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/sangsik3.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]신장별 프레임 권장사이즈 ></p>
                        <p class="tip_sub">프레임 권장사이즈(신장)를 확인해보세요.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/tip1.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]건강한 레포츠, 자전거 ></p>
                        <p class="tip_sub">자전거를 1년 이상 꾸준히 타면 심장병, 제2형(성인형)당뇨병, 비만 발병 가능성이 약 50% 감소한다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/tip2.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]쫄쫄이를 입는 이유 ></p>
                        <p class="tip_sub">자전거는 에어로 효과가 높은 몸에 붙는 의류를 착용하는 것이다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/tip3.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]헬멧의 중요성 ></p>
                        <p class="tip_sub">자전거는 숙련자나 내리막길의 경우 50km 이상으로 달릴 정도로 빠른 속도를 낼 수 있는 교통수단이다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/tip4.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 상식]자전거도 지하철 탑승이 가능하다. ></p>
                        <p class="tip_sub">제약사항이 있긴 하지만 몇가지 규정과 에티켓만 지켜주면 수도권 지하철에는 자전거 탑승이 가능하다.</p>
                    </div>
                </a>
            </section>
            <section class="tip_list tabcontent buy" id="buy">
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/boopoom1.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 부품]자전거 부품별 명칭 ></p>
                        <p class="tip_sub">자전거는 무려 200여개의 부품으로 설계되어있다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/boopoom2.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 부품]핸들바의 종류와 구분 ></p>
                        <p class="tip_sub">핸들바의 종류와 구분에 대해 알아보자.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/boopoom3.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 부품]로드와 MTB의 안장의 차이 ></p>
                        <p class="tip_sub">본인에게 부적합한 안장으로 장거리 라이딩을 할 경우 자연스럽지 않은 동작과 안장통이 발생하게 된다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/boopoom5.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 부품]자전거 프레임의 이해 ></p>
                        <p class="tip_sub">자전거 프레임의 명칭에 대해 알아보자.</p>
                    </div>
                </a>
            </section>
            <section class="tip_list tabcontent online" id="online">
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/gwanli1.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 관리]공기주입기와 밸브의 종류 ></p>
                        <p class="tip_sub">본인이 타는 자전거의 밸브 방식과 타이어의 적정 공기압의 수지는 필수이다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/gwanli2.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 관리]적정 압력으로 공기를 주입하는 방법 ></p>
                        <p class="tip_sub">일반적인 라이더의 경우, 최대 공기압에서 약 15% 감하여 공기압을 설정하여 주면 일반적인 라이딩에 문제가 없다.</p>
                    </div>
                </a>
                <a href="#" class="tip_box ">
                    <div class="tip_img">
                        <img src="images/school/gwanli3.jpg"></img>
                    </div>
                    <div class="tip_txt">
                        <p class="tip_title">[자전거 관리]체인세척 및 관리 방법 ></p>
                        <p class="tip_sub">자전거 입문자들이 의외로 중요하게 보아야 하는 부분은 바로 스템이다.</p>
                    </div>
                </a>
            </section>
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
    </body>
</html>