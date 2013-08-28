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
    height:50px;
    background-color:#36545F;
    position:fixed;
    width:100%;
    top:0px;
    z-index:9999;
}
.my-nav-logo
{
    height:50px;
    line-height:50px;
    font-size:30px;
    font-weight:bold;
    text-align:center;
}
.my-nav-logo > a {
    color:white;
}
.my-nav-logo > a:hover {
    text-decoration:none;
    color:gold;
}
.my-nav-auth
{
    height:50px;
    line-height:46px;
}
.my-nav-auth > div > div {
    height:50px;
    line-height:50px;
    font-size:18px;
    border-left:1px solid #222222;
    text-align:center;
    color:white;
}
.my-nav-auth > div > div:hover {
    background-color:white;
    color:black;
    font-weight:bold;
}
.my-navbar .my-nav-tap > div, #logout_div > div,#login_div > div {
    height:50px;    
    text-align:center;
    font-size:15px;
    font-weight:bold;
    line-height:50px;
    color:white;
}
.my-navbar .my-nav-tap > div:hover, #logout_div > div:hover, #login_div > div:hover {
    border-radius:10px;
/*    background-color:#26444F;*/
    color:gold;
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
            <div class="col-lg-2 <?=$active == 'startIcanc' ? 'active':'';?>" href="<?=base_url();?>index.php/start">Start ICANC</div>
            <div class="col-lg-2 reference_btn" href="#">Reference</div>
            <div class="col-lg-2 <?=$active == 'tutorial' ? 'active':'';?>" href="<?=base_url();?>index.php/tutorial">Tutorial</div>
            <div class="col-lg-2 <?=$active == 'quiz' ? 'active':'';?>" href="<?=base_url();?>index.php/quiz">Quiz</div>
            <div class="col-lg-2 <?=$active == 'freeCoding' ? 'active':'';?>" href="<?=base_url();?>index.php/quiz/freeCoding">Free Coding</div>
            <div class="col-lg-2 <?=$active == 'board' ? 'active':'';?>" href="<?=base_url();?>index.php/board/blist">Board</div>
        </div>


        <div id="login_div" class="col-lg-3" style="text-align:right;">
            <!--login or sign up  button-->
            <div class="col-lg-3 col-offset-6" href="<?=base_url()?>index.php/auth/register">JOIN</div>
            <div class="col-lg-3" href="<?=base_url()?>index.php/auth/login">LOGIN</div>
        </div>
        <!--logout button-->
        <div id="logout_div" class="col-lg-3" style="text-align:right;">
            <div class="col-lg-6 name" style="text-align:right;"><a id="welcome" href="<?=base_url()?>index.php/mypage"><?=$this->session->userdata('user_nickname');?>님</a></div>
            <div class="col-lg-3" href="<?=base_url()?>index.php/mypage">mypage</div>
            <div class="col-lg-3" href="<?=base_url()?>index.php/auth/logout">logout</div>
        </div>
    </div>
</div>

