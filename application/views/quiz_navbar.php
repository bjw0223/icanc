<script>
    $(document).ready(function(){

    });
</script>
<style>
.my-navbar {
    height:50px;
    background-color:#36545F;
    position:fixed;
    width:100%;
    top:0px;
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
    color:yellow;
    text-shadow:white 0px 0px 15px; 
    font-size:35px;
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
}
.my-navbar .my-nav-tap > div:hover, #logout_div > div:hover, #login_div > div:hover {
    padding-top:10px;
    border-radius:10px;
    background-color:#26444F;
}

.my-navbar .my-nav-tap > div >a, #logout_div > div > a,#login_div > div > a{
    color:white;
}
.my-navbar .my-nav-tap > div >a:hover , #logout_div > div > a:hover, #login_div > div > a:hover{
    text-decoration:none;
}
.my-navbar .my-nav-tap .active {
    background-color:red;
}
</style>

<div class="my-navbar">
    <div class="row">
        <div class="col-lg-2 my-nav-logo">
            <a href="<?=base_url();?>index.php/main">I CAN C</a>
        </div>
        <div class="col-lg-7 my-nav-tap">
            <div class="col-lg-2 <?=$active == 'startIcanc' ? 'active':'';?>"><a href="<?=base_url();?>index.php/start">Start ICANC</a></div>
            <div class="col-lg-2 active"><a class="reference_btn">Reference</a></div>
            <div class="col-lg-2 <?=$active == 'tutorial' ? 'active':'';?>"><a href="<?=base_url();?>index.php/tutorial">Tutorial</a></div>
            <div class="col-lg-2 <?=$active == 'freeCoding' ? 'active':'';?>"><a href="<?=base_url();?>index.php/quiz">Quiz</a></div>
            <div class="col-lg-2 <?=$active == 'freeCoding' ? 'active':'';?>"><a href="<?=base_url();?>index.php/quiz/codingQuiz/1">Free Coding</a></div>
            <div class="col-lg-2 <?=$active == 'board' ? 'active':'';?>"><a href="<?=base_url();?>index.php/board/blist">Board</a></div>
        </div>


            <!--login or sign up  button-->
            <div id="login_div" class="col-lg-3" style="text-align:right;">
                <div class="col-lg-6"></div>
                <div class="col-lg-3"><a class="navbar-btn btn btn-default" href="<?=base_url()?>index.php/auth/register">JOIN</a></div>
                <div class="col-lg-3"><a class="navbar-btn btn btn-default" href="<?=base_url()?>index.php/auth/login">LOGIN</a></div>
            </div>
            <!--logout button-->
            <div id="logout_div" class="col-lg-3" style="text-align:right;">
                <div class="col-lg-6" style="text-align:right;"><a id="welcome" href="<?=base_url()?>index.php/mypage"><?=$this->session->userdata('user_nickname');?>님</a></div>
                <div class="col-lg-3"><a href="<?=base_url()?>index.php/mypage">mypage</a></div>
                <div class="col-lg-3"><a href="<?=base_url()?>index.php/auth/logout">logout</a></div>
            </div>



    </div>
<div>
<div class="col-lg-3 my-nav-auth">
            <div class="row">
                <div class="col-lg-4 col-offset-4">로그인</div>
                <div class="col-lg-4">회원가입</div>
            </div>
        </div>

