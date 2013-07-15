<div class="container" style="margin-top:60px;">
<div class="row-fluid"> 
<div id="contents" class="span3" >
<!-- -->
    <ul class="nav nav-tabs nav-stacked my_contents"> 
        <li class="<?=($selected=="info")?"selected":"";?>">
            <a href="<?=base_url()?>index.php/mypage/info">
                내정보
                <i class="icon-chevron-right pull-right"></i>
            </a>
        </li>
        <li class="<?=($selected=="modification")?"selected":"";?>">
            <a href="<?=base_url()?>index.php/mypage/modification">
                정보수정
                <i class="icon-chevron-right pull-right"></i>
            </a>
        </li>
        <li class="<?=($selected=="showdir")?"selected":"";?>">
            <a href="<?=base_url()?>index.php/mypage/showdir">
                파일관리
                <i class="icon-chevron-right pull-right"></i>
            </a>
        </li>
        <li class="<?=($selected=="invitation")?"selected":"";?>">
            <a href="<?=base_url()?>index.php/mypage/invitation">
                초대장발송
                <i class="icon-chevron-right pull-right"></i>
            </a>
        </li>
        <li class="<?=($selected=="signout")?"selected":"";?>">
            <a href="<?=base_url()?>index.php/mypage/signout">
                회원탈퇴
                <i class="icon-chevron-right pull-right"></i>
            </a>
        </li>
    </ul>

<!-- -->
</div>

