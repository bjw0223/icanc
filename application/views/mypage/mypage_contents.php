<style>
.mypage-main {
    font-size: 40px;
    color: #36545F;
    font-weight: bold;
    text-transform: uppercase;
}
.my-sidenav {
    background-color:none;
}
.my-sidebar {
    background-color:none;
}
</style>
<div class="container" style="margin-top:40px;">
    <div class="col-lg-12">
        <div class="mypage-main"><?=$selected?></div>
    </div>
</div>
<div class="well row division"></div>

<div class="container" style="margin-top:">
<div class="row"> 
<div id="mypage_contents" class="col-lg-3" >
<!-- -->
    <div class="bs-sidebar my-sidebar" style="padding:0px 10px 0px 10px;">
        <ul class="nav bs-sidenav my-sidenav"> 
            <li class="active">
                <a href="<?=base_url();?>index.php/mypage/info">
                    내정보
                </a>
            </li>
            <li class="active">
                <a href="<?=base_url();?>index.php/mypage/modification">
                    정보수정
                </a>
            </li>
            <li class="active">
                <a href="<?=base_url();?>index.php/mypage/showdir">
                    파일관리
                </a>
            </li>
            <li class="active">
                <a href="<?=base_url();?>index.php/mypage/signout">
                    회원탈퇴
                </a>
                    </li>
        </ul>
    </div>

<!-- -->
</div>

