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
</style>

<footer class="footer py-5">
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
            <h2 class="conT"><a href="#">커뮤니티</a></h2>
            <h2 class="conT"><a href="#">마이클래스</a></h2>
            <h2 class="conT"><a href="#">My Lemon</a></h2>
            <h2 class="conT"><a href="#">고객센터</a></h2>
        </ul>
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