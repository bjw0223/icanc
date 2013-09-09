<script>

$(document).ready(function() {
    
    // login, join, logout click
    $("#logout_div > div , #login_div > div").click(function() {
        var mvlocation = $(this).attr('href');
        if(mvlocation)
        {
            location.href = $(this).attr('href');
        }
    });

    // navbar click 비로그인시 사용 불가
    $(".my-nav-tap > div").click(function() {
        var mvlocation = $(this).attr('href');
        if(mvlocation && ("<?=$this->session->userdata('is_login')?>"==true))
        {
            location.href = $(this).attr('href');
        }
        else
        {
            alert("로그인이 필요한 서비스 입니다");
            document.location.href = "<?=base_url()?>index.php/auth/login";
        }
    });
}); // document.ready close

</script>

<style>
.my-navbar {
    height:30px;
    background-color:#e6e6e6;
    position:fixed;
    width:100%;
    top:0px;
    z-index:9999;
}
.my-nav-logo
{
    height:30px;
    line-height:30px;
    font-size:20px;
    font-weight:bold;
    text-align:center;
}
.my-nav-logo > a {
    color:rgb(37, 35, 35);
}
.my-nav-logo > a:hover {
    text-decoration:none;
    color:gold;
}
.my-navbar .my-nav-tap > div, #logout_div > div,#login_div > div {
    height:30px;    
    text-align:center;
    font-size:15px;
    font-weight:bold;
    line-height:30px;
    color:white;
}
.my-navbar .my-nav-tap > div:hover, #logout_div > div:hover, #login_div > div:hover {
    border-radius:10px;
/*    background-color:#26444F;*/
    color:gold;
    cursor:pointer;
}

.my-navbar .my-nav-tap > div >a, #logout_div > div > a,#login_div > div > a{
    color:white;
}
.my-navbar .my-nav-tap > div >a:hover , #logout_div > div > a:hover, #login_div > div > a:hover{
    text-decoration:none;
}
#logout_div .name:hover  {
    background-color:#36545F;
    padding-top:0px;
}
#logout_div .name > a:hover  {
    color:gold;
}
.my-navbar .my-nav-tap .active {
    background-color:#26444F;
}
</style>

<div class="my-navbar">
    <div class="row">
        <div class="col-lg-2 my-nav-logo">
            <a href="<?=base_url();?>index.php/main">I CAN C</a>
        </div>
        <div class="col-lg-7 my-nav-tap">
<?php
    if($this->session->userdata('is_login') == 'true')
    {
?>
<!--
            <div class="col-lg-2 <?=$active == 'startIcanc' ? 'active':'';?>" href="<?=base_url();?>index.php/start">Start ICANC</div>
            <div class="col-lg-2 reference_btn" href="#">Reference <i class='icon-chevron-up icon-small'></i></div>
            <div class="col-lg-2 <?=$active == 'lecture' ? 'active':'';?>" href="<?=base_url();?>index.php/lecture">Lecture</div>
            <div class="col-lg-2 <?=$active == 'quiz' ? 'active':'';?>" href="<?=base_url();?>index.php/quiz">Quiz</div>
            <div class="col-lg-2 <?=$active == 'freeCoding' ? 'active':'';?>" href="<?=base_url();?>index.php/quiz/freeCoding">Free Coding</div>
            <div class="col-lg-2 <?=$active == 'board' ? 'active':'';?>" href="<?=base_url();?>index.php/board/blist">Board</div>
-->
<?php
    }
?>
        </div>


        <div id="login_div" class="col-lg-3" style="text-align:right;">
            <!--login or sign up  button-->
<!--
            <div class="col-lg-3 col-offset-6" href="<?=base_url()?>index.php/auth/register">JOIN</div>
            <div class="col-lg-3" href="<?=base_url()?>index.php/auth/login">LOGIN</div>
-->
        </div>
        <!--logout button-->
        <div id="logout_div" class="col-lg-3" style="text-align:right;">
<!--
            <div class="col-lg-6 name" style="text-align:right;"><a id="welcome" href="<?=base_url()?>index.php/mypage"><small>Lv.<?=$this->session->userdata('user_level')?></small> <?=$this->session->userdata('user_nickname');?>님</a></div>
            <div class="col-lg-3" href="<?=base_url()?>index.php/mypage/checkPwd">MYPAGE</div>
            <div class="col-lg-3" href="<?=base_url()?>index.php/auth/logout">LOGOUT</div>
-->
        </div>
    </div>
</div>

