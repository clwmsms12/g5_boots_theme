<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

    <? include_once(G5_THEME_PATH."/skin/nav/mysubmenu.php") ?>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<style>
    .footer{background: #3e3e46;}
    .fMenubar>.conT{width: 100%;}
    .fMenubar>li>a{color:#fff;}
    .fMenubar>li>.sMenu{margin-top: 15px;}
    .fMenubar>li>.sMenu>li{margin-bottom:10px;}
    .fMenubar>li>.sMenu>li>a{color:#acacb0;font-size:14px}

    .footer2{background: #232328;}
    .fMenu>li{color:#acacb0;}
    .fMenu>li>a{color:#fff;font-size:17px}
    .fIcon img{width: 40px;height: 40px;}
    .footLine{border-bottom:1px solid #acacb0;}

    .footer2 p{color:#acacb0;}
    .bold{font-weight:bold;font-size:15px}
</style>

<footer class="footer py-4">
    <div class="container">
        <ul class="fMenubar d-flex justify-content-between">
            <li class="conT">
                <a href="#" class="pb-3">YBM Lemon 스토리</a>
                <ul class="sMenu">
                    <li class="conpT"><a href="#">상담신청</a></li>
                </ul>
            </li>
            <li class="conT">
                <a href="#" class="pb-3">수강신청</a>
                <ul class="sMenu">
                    <li class="conpT"><a href="#">수강신청</a></li>
                    <li class="conpT"><a href="#">무료체험</a></li>
                    <li class="conpT"><a href="#">레벨테스트</a></li>
                    <li class="conpT"><a href="#">무료체험&레벨테스트 신청확인</a></li>
                </ul>
            </li>
            <li class="conT">
                <a href="#" class="pb-3">커뮤니티</a>
                <ul class="sMenu">
                    <li class="conpT"><a href="#">Gallery</a></li>
                    <li class="conpT"><a href="#">Lemon Seed Mall</a></li>
                    <li class="conpT"><a href="#">이벤트</a></li>
                </ul>
            </li>
            <li class="conT">
                <a href="#" class="pb-3">마이클래스</a>
                <ul class="sMenu">
                    <li class="conpT"><a href="#">Calendar</a></li>
                    <li class="conpT"><a href="#">숙제 제출 및 확인</a></li>
                    <li class="conpT"><a href="#">Lemon Seed</a></li>
                    <li class="conpT"><a href="#">수강현황</a></li>
                    <li class="conpT"><a href="#">정회원 공지사항</a></li>
                </ul>
            </li>
            <li class="conT">
                <a href="#" class="pb-3">My Lemon</a>
                <ul class="sMenu">
                    <li class="conpT"><a href="#">수강신청 내역</a></li>
                    <li class="conpT"><a href="#">포인트몰 구매내역</a></li>
                    <li class="conpT"><a href="#">학부모정보</a></li>
                    <li class="conpT"><a href="#">학습자정보</a></li>
                    <li class="conpT"><a href="#">1:1답변확인</a></li>
                    <li class="conpT"><a href="#">학습장애답변확인</a></li>
                    <li class="conpT"><a href="#">상담신청내역</a></li>
                </ul>
            </li>
            <li class="conT">
                <a href="#" class="pb-3">고객센터</a>
                <ul class="sMenu">
                    <li class="conpT"><a href="#">공지사항</a></li>
                    <li class="conpT"><a href="#">FAQ</a></li>
                    <li class="conpT"><a href="#">1:1상담</a></li>
                    <li class="conpT"><a href="#">학습장애신고</a></li>
                </ul>
            </li>
        </ul>
    </div>
</footer>

<footer class="footer2">
    <div class="footLine">
        <div class="container">
            <div class="fTop py-2 d-flex justify-content-between">
                <ul class="fMenu d-flex align-items-center gap-3">
                    <li class="conT"><a href="#">로그인</a></li>
                    <li>|</li>
                    <li class="conT"><a href="#">이용약관</a></li>
                    <li>|</li>
                    <li class="conT"><a href="#">개인정보처리방침</a></li>
                    <li>|</li>
                    <li class="conT"><a href="#">영상정보처리기기 운영관리방침</a></li>
                </ul>
                <ul class="fIconwrap d-flex gap-2">
                    <li class="fIcon"><img src="<? echo G5_THEME_IMG_URL ?>/naver_blog2.png" alt=""></li>
                    <li class="fIcon"><img src="<? echo G5_THEME_IMG_URL ?>/Instagram_Glyph_Gradient_RGB.png" alt=""></li>
                    <li class="fIcon"><img src="<? echo G5_THEME_IMG_URL ?>/youtube_social_icon_red.png" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="fBottom d-flex align-items-center gap-2 mb-4">
            <p class="bold">사업자등록번호</p>
            <p>101-81-92326</p>
            <p class="bold">대표이사</p>
            <p>홍길동</p>
        </div>
        <div class="fBottom d-flex align-items-center gap-3 mb-4">
            <p class="bold">통신판매신고번호</p>
            <p>제 01-985호</p>
            <p class="bold">TEL</p>
            <p>1670-7978</p>
            <p class="bold">FAX</p>
            <p>02-2260-4410</p>
            <p class="bold">E-mail</p>
            <p>ybmky@ybm.co.kr</p>
        </div>
        <div class="fBottom d-flex align-items-center gap-3 mb-4">
            <p class="bold">서울특별시 종로구 창경굴로 112-7(주)YBM교육</p>
        </div>
        <div class="fBottom d-flex align-items-center gap-3">
            <p>Copyrightⓒ(주)YBM교육. All rights reserved.</p>
        </div>
    </div>
</footer>


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");