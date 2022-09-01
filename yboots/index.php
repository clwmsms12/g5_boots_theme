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
    .visualpT{font-size:20px;}
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
        <div class="row bg-info">
            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <div class="teacher">
                    <h2 class="visualT mb-4">외국인 선생님 +<br>
                    한국인 선생님이 함께</h2>
                    <p class="visualpT">외국인 선생님과 수업할 때, 한국인 선생님도<br>
                    <span class="text-green">옆에 함께</span>합니다. 더 이상 영어가 두렵지 않습니다.
                    </p>
                </div>
            </div>
            <div class="col-md-7 d-flex bg-info justify-content-center align-items-center">
                <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_04.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');