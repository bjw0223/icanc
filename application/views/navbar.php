<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3" style="background-color:;vertical-align:;">
                <a class="navbar-brand logo" href="<?=base_url();?>index.php/main" style="font-size:25px;">I CAN C</a>
            </div>
            <div class="col-lg-6" style="background-color:;">
                <ul class="nav navbar-nav">
                    <li class="<?=$active == 'startIcanc' ? 'active':'';?>"><a href="<?=base_url();?>index.php/start">Start ICANC</a></li>
                    <li class=""><a class="reference_btn">Reference</a></li>
                    <li class="<?=$active == 'tutorial' ? 'active':'';?>"><a href="<?=base_url();?>index.php/tutorial">Tutorial</a></li>
<<<<<<< HEAD
                    <li class="<?=$active == 'freeCoding' ? 'active':'';?>"><a href="<?=base_url();?>index.php/quiz/codingQuiz/1">Free Coding</a></li>
                    <li class="<?=$active == 'board' ? 'active':'';?>"><a href="<?=base_url();?>index.php/board">Board</a></li>
=======
                    <li class="<?=$active == 'freeCoding' ? 'active':'';?>"><a href="<?=base_url();?>index.php/compiler">Free Coding</a></li>
                    <li class="<?=$active == 'board' ? 'active':'';?>"><a href="<?=base_url();?>index.php/board/blist">Board</a></li>
>>>>>>> 68a34c5302544fe00e6f0d3c07b7d56860e46709
                </ul>

            </div>
            <!--login or sign up  button-->
            <div id="login_div" class="col-lg-3">
                <a class="navbar-btn btn btn-default" href="<?=base_url()?>index.php/auth/register">JOIN</a>
                <a class="navbar-btn btn btn-default" href="<?=base_url()?>index.php/auth/login">LOGIN</a>
            </div>
            <!--logout button-->
            <div id="logout_div" class="col-lg-3">
                <a id="welcome" class="navbar-brand" href="<?=base_url()?>index.php/mypage"><?=$this->session->userdata('user_nickname');?>님</b>
                <a class="navbar-btn btn btn-default" href="<?=base_url()?>index.php/mypage">mypage</a>
                <a class="navbar-btn btn btn-default" href="<?=base_url()?>index.php/auth/logout">logout</a>
            </div>
        </div>
    </div>
</div>

