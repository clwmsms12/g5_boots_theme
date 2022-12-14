<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<style>
    .mView{
        width: 100%;padding-top: 36%;_background: red;
        position: relative;overflow: hidden;
        }
    .mView video{position: absolute;width: 100%;left: 50%;top: 50%; transform:translate(-50%,-50%)}
</style>
<div class="mView">
    <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay="" muted="" draggable="true"></video>
</div>

<style>
    .visualT{font-size:40px;font-weight: bold;line-height: 60px;}
    .visualpT{font-size:20px;z-index: 800px;}
    .visualMove{left: 80%;width: 35%;top: 50%;transform: translate(-80%,-50%);}
    .visualBG{
        background-image: url(https://ybmlemon.com/img/web/HOME/main/main_visual_bg02.png);
    }

    .classBook{position: absolute;left: 10%;top: 50%;transform: translate(-10%,-50%)}
    .text-green{color: #00a371;font-weight: bold;}
    .dat{right: 0;bottom: 0;}

    .item01{top: -60px;right: 50px;}
    .item02{right: 0;bottom: 0;}
    .item03{width: 180px;left: 0;bottom: 0;}

    .onlineIP{position: absolute;bottom: -120px;}

    .conitem{
        border-radius:20px;
        width: 100%; gap:10px;
        display: flex;align-items:center;justify-content:space-evenly;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 25px 0px;z-index: 20;position: relative;
    }
    .contenter:hover .conitem{background-color: #008062;}
    .contenter{position: relative;}
    .contenter:hover .conText{
        opacity: 1;
        top:80px;
        transition: 0.3s;z-index: 15;
    }
    .conText{
        width: 306px;
        padding: 25px 25px;
        border-radius:20px;
        background-color: #00a371;
        top: 10px;opacity: 0;
        position: absolute;
    }
    .icon{
        width: 32px;height: 32px;
        background-repeat: no-repeat;
        background-position: 0 0;
    }
    .contenter:hover .icon{background-position: 0 -32px;}
    .conT{font-size:20px;font-weight:bold;}
    .conpT{font-size:15px;font-weight:400;color:#333}


    .cont{background: skyblue;}
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6 p-4">
            <?php
                // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                echo latest('theme/basic', 'notice', 5, 23);		// 최소설치시 자동생성되는 갤러리게시판
            ?>
        </div>
        <div class="col-md-6 p-4">
            <?php
                // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                echo latest('theme/basic', 'notice', 5, 23);		// 최소설치시 자동생성되는 갤러리게시판
            ?>
        </div>
    </div>
</div>


<style>
    .prev,.next{cursor: pointer;}
    img.prev,img.next{position: absolute;top: 50%;transform:translateY(-50%)}
    img.prev{left: -50px;}
    img.next{right: -50px;}
    .slickslide1 .sItem{
        padding: 10px;opacity: 0.5;transition:0.3s;transform:scale(0.8)
    }
    .slickslide1 .sItem.slick-center{opacity: 1;transform:scale(1)}
</style>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6 position-relative d-flex justify-content-center align-items-center">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01.png" alt="" class="img-fluid">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item01.png" alt="" class="img-fluid position-absolute item01">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item02.png" alt="" class="img-fluid position-absolute item02">
            <div class="ani position-absolute item03">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_ani.gif" alt="" class="img-fluid rounded-5 shadow-lg">
            <img src="<? echo G5_THEME_IMG_URL ?>/green_speech.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h2 class="visualT mb-4">YBM 레몬만의<br>전용뷰어로 수업</h2>
            <p class="visualpT">화상 회의실 같은 딱딱한 뷰어가 아닙니다.<br>
            YBM교육이 개발한 <span class="text-green">화상수업 전용 뷰어</span>입니다.</p>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="position-relative">
        <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_bg01.png" alt="" class="img-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="classBook">
                    <h2 class="visualT">화상수업을 위해 개발된<br>e-Classbook</h2>
                    <p class="visualpT">오프라인 교재를 그대로 올려서 수업하지 않습니다.<br>
                    온라인 수업에 맞춰 개발된 <span class="text-green">온라인 전용 e-Classbook</span>입니다.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_02.png" alt="" class="visualMove position-absolute img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center position-relative">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_03.png" alt="" class="img-fluid">
            <img src="<? echo G5_THEME_IMG_URL ?>/img_6.png" alt="" class="dat position-absolute img-fluid">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h2 class="visualT mb-4">지루할 틈이 없는 수업 진행</h2>
            <p class="visualpT"><span class="text-green">온라인 교구와 액티비티</span>로 흥미있는 수업이 진행됩니다.<br>
            선생님과 함께 직접 수업에 참여합니다.</p>
        </div>
    </div>
</div>

<div class="container rounded-5" style="background:#cef5f5;">
    <div class="py-5" style="background:url(https://ybmlemon.com/img/web/HOME/main/main_visual_bg02.png);height:500px;">
        <div class="row position-relative">
            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <div class="teacher">
                    <h2 class="visualT mb-4">외국인 선생님 +<br>
                    한국인 선생님이 함께</h2>
                    <p class="visualpT">외국인 선생님과 수업할 때, 한국인 선생님도<br>
                    <span class="text-green">옆에 함께</span>합니다. 더 이상 영어가 두렵지 않습니다.
                    </p>
                </div>
                <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_char.png" alt="" class="onlineIP">
            </div>
            <div class="col-md-7 d-flex justify-content-center align-items-center">
                <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_04.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_05.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h2 class="visualT mb-4 ms-5">
                Main Class 자신감 <span class="text-green">UP</span><br>
                예습도 <span><img src="<? echo G5_THEME_IMG_URL ?>/online.png" alt="" class="img-fluid"></span> 복습도 <span><img src="<? echo G5_THEME_IMG_URL ?>/online.png" alt="" class="img-fluid"></span><br>
                특별한 학습시스템
            </h2>
            <p class="visualpT ms-5">
                본 수업 전/후 예복습 시스템과 숙제로 효과적인 확인학습을<br>
                진햅합니다. 혼자서도 척척! 자기주도 학습이 가능합니다.
            </p>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <h2 class="visualT mb-4">YBM 레몬만의 밀착 학습관리</h2>
            <p class="visualpT mb-5">체계적인 관리를 통해 우리 아이의 학습효과를 극대화 합니다.</p>
            <img src="<? echo G5_THEME_IMG_URL ?>/graph.png" alt="" class="img-fluid mb-5">
        </div>
        <div class="col-md-3">
            <div class="contenter">
                <div class="conitem">
                    <div class="icon report"></div>
                    <div class="text">
                        <h2 class="conT mb-1">학습 결과 보고서</h2>
                        <p class="conpT">Daily Class Report</p>
                    </div>
                </div>
                <div class="conText">
                    <p class="conpT text-white">학습자의 학업 점수와 학슴내용을 요약한 보고서를 발송합니다.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="contenter">
                <div class="conitem">
                    <div class="icon test"></div>
                    <div class="text">
                        <h2 class="conT mb-1">성취도 테스트</h2>
                        <p class="conpT">Achievement Test</p>
                    </div>
                </div>
                <div class="conText">
                    <p class="conpT text-white">3개월에 한번씩 학습자의 성취도를 평가하여 피드백을 제공합니다.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="contenter">
                <div class="conitem">
                    <div class="icon solution"></div>
                    <div class="text">
                        <h2 class="conT mb-1">화상솔루션</h2>
                        <p class="conpT">Online Learning Solutions</p>
                    </div>
                </div>
                <div class="conText">
                    <p class="conpT text-white">YBM에서 직접 개발한 화상솔루션과 교안으로 수업을 진행합니다.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="contenter">
                <div class="conitem">
                    <div class="icon homework"></div>
                    <div class="text">
                        <h2 class="conT mb-1">온 오프라인 숙제관리</h2>
                        <p class="conpT">Homework</p>
                    </div>
                </div>
                <div class="conText">
                    <p class="conpT text-white">수업 후 온라인 오프라인 숙제를 진행하여 학습 효과를 높입니다.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
                <div class="contenter">
                    <div class="conitem">
                        <div class="icon report"></div>
                        <div class="text">
                            <h2 class="conT mb-1">학습 결과 보고서</h2>
                            <p class="conpT">Daily Class Report</p>
                        </div>
                    </div>
                    <div class="conText">
                        <p class="conpT text-white">학습자의 학업 점수와 학슴내용을 요약한 보고서를 발송합니다.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contenter">
                    <div class="conitem">
                        <div class="icon test"></div>
                        <div class="text">
                            <h2 class="conT mb-1">성취도 테스트</h2>
                            <p class="conpT">Achievement Test</p>
                        </div>
                    </div>
                    <div class="conText">
                        <p class="conpT text-white">3개월에 한번씩 학습자의 성취도를 평가하여 피드백을 제공합니다.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contenter">
                    <div class="conitem">
                        <div class="icon solution"></div>
                        <div class="text">
                            <h2 class="conT mb-1">화상솔루션</h2>
                            <p class="conpT">Online Learning Solutions</p>
                        </div>
                    </div>
                    <div class="conText">
                        <p class="conpT text-white">YBM에서 직접 개발한 화상솔루션과 교안으로 수업을 진행합니다.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contenter">
                    <div class="conitem">
                        <div class="icon homework"></div>
                        <div class="text">
                            <h2 class="conT mb-1">온 오프라인 숙제관리</h2>
                            <p class="conpT">Homework</p>
                        </div>
                    </div>
                    <div class="conText">
                        <p class="conpT text-white">수업 후 온라인 오프라인 숙제를 진행하여 학습 효과를 높입니다.</p>
                    </div>
                </div>
            </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container position-relative py-5">
<h2 class="visualT mb-2 text-center">갤러리</h2>
    <img src="<? echo G5_THEME_IMG_URL ?>/slide_arrow_left.png" alt="" class="prev d-none d-md-block">
    <div class="slickslide1">
        <div class="sItem">
            <img src="<? echo G5_THEME_IMG_URL ?>/kanu2_L2S13.png" alt="" class="img-fluid mb-5">
            <h2 class="conT mb-4">Project | Speakink<br>Level 2 Day-13</h2>
            <p class="conpT">2022.07.28</p>
        </div>
        <div class="sItem">
            <img src="<? echo G5_THEME_IMG_URL ?>/lemon1_L4S13_1.png" alt="" class="img-fluid mb-5">
            <h2 class="conT mb-4">Project | Speakink<br>Level 4 Day-13</h2>
            <p class="conpT">2022.07.07</p>
        </div>
        <div class="sItem">
            <img src="<? echo G5_THEME_IMG_URL ?>/mole2_L3S26.png" alt="" class="img-fluid mb-5">
            <h2 class="conT mb-4">Project || Speakink<br>Level 3 Day-26</h2>
            <p class="conpT">2022.07.13</p>
        </div>
        <div class="sItem">
            <img src="<? echo G5_THEME_IMG_URL ?>/std1_L3S39.png" alt="" class="img-fluid mb-5">
            <h2 class="conT mb-4">Project ||| Speakink<br>Level 3 Day-39</h2>
            <p class="conpT">2022.04.21</p>
        </div>
        <div class="sItem">
            <img src="<? echo G5_THEME_IMG_URL ?>/lemon1_L4S44_1.png" alt="" class="img-fluid mb-5">
            <h2 class="conT mb-4">Project V| Speakink<br>Level 4 Day-44</h2>
            <p class="conpT">2022.05.20</p>
        </div>
        <div class="sItem">
            <img src="<? echo G5_THEME_IMG_URL ?>/lemon02_L1S48.png" alt="" class="img-fluid mb-5">
            <h2 class="conT mb-4">Project V| Speakink<br>Level 1 Day-48</h2>
            <p class="conpT">2022.05.24</p>
        </div>
        <div class="sItem">
            <img src="<? echo G5_THEME_IMG_URL ?>/tora0708a_L3S13.png" alt="" class="img-fluid mb-5">
            <h2 class="conT mb-4">Project | Speakink<br>Level 3 Day-13</h2>
            <p class="conpT">2022.05.27</p>
        </div>
    </div>
    <img src="<? echo G5_THEME_IMG_URL ?>/slide_arrow_right.png" alt="" class="next d-none d-md-block">
</div>

<div class="hugi py-5">
    <div class="container">
    <h2 class="visualT mb-5 text-center">체험 수업 후기</h2>
        <div class="row">
            <div class="col-md-4 carder">
                <img class="img-fluid cardImg" src="<? echo G5_THEME_IMG_URL ?>/main_review01.png" alt="">
                <div class="card-body">
                    <h2 class="conT text-center py-3">저희 아이에게 딱 맞는 수업 <span><img src="<? echo G5_THEME_IMG_URL ?>/main_review_icon01.png" alt=""></span></h2>
                    <p class="conpT py-4">아이 친구네와 함께 체험 수업을 신청했는데,너무 재미있어 합니다. 수업이 끝난 후 또 하고 싶다고 해서 정규 수업 등록을 고민하고 있어요~~ 선생님께서 아이의 수준에 맞춰 수업을 진행해주시고 재미있게 이끌어 주셔서 저희 아이에게 아주 딱 맞는 수업이었습니다^^</p>
                </div>
            </div>
            <div class="col-md-4 carder">
                <img class="img-fluid cardImg" src="<? echo G5_THEME_IMG_URL ?>/main_review02.png" alt="">
                <div class="card-body">
                    <h2 class="conT text-center py-3">레몬 추천합니다!!! :) <span><img src="<? echo G5_THEME_IMG_URL ?>/main_review_icon02.png" alt=""></span></h2>
                    <p class="conpT py-4">저희 아이는 온라인 수업을 자주 듣곤 하는데, 생각했 던 일반 화상 수업과 달리 기능이 너무 다양하고 정교 해서 정말 놀랐어요~!! 수업 내용도 흥미로웠고, 강사 분들의 실력도 믿음직스러웠습니다. 만족해요~~ 레몬 추천합니다!!! :)</p>
                </div>
            </div>
            <div class="col-md-4 carder">
                <img class="img-fluid cardImg" src="<? echo G5_THEME_IMG_URL ?>/main_review03.png" alt="">
                <div class="card-body">
                    <h2 class="conT text-center py-3">영어가 좋아졌대요.</h2>
                    <p class="conpT py-4">영어 수업도 처음이고 온라인 수업도 처음인 저희 아이가 체험 수업을 듣고 영어가 좋아졌대요. 선생님들도 좋고, 수업 내내 너무 재밌었다고 합니다~ 걱정 했는데 아이가 이렇게 좋아할 줄은 몰랐습니다. 레몬 감사해요^-^</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.slickslide1').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    nextArrow:$('.next'),
    prevArrow:$('.prev'),
    responsive: [
        {
        breakpoint: 768,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        }
        {
        breakpoint: 480,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        }
    ]
    });


    $('.slickslide1').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    nextArrow:$('.next'),
    prevArrow:$('.prev'),
    responsive: [
        {
        breakpoint: 768,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        }
    ]
    });
</script>
<?php
include_once(G5_THEME_PATH.'/tail.php');