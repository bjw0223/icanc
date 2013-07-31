<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3" style="background-color:;vertical-align:;">
                <a class="navbar-brand logo" href="<?=base_url();?>index.php/main" style="font-size:25px;">I CAN C</a>
            </div>
            <div class="col-lg-6" style="background-color:;">
                <ul class="nav navbar-nav">
                    <li class=""><a class="reference_btn">Reference</a></li>
                    <li class=""><a href="<?=base_url();?>index.php/tutorial">Tutorial</a></li>
                    <li class=""><a href="<?=base_url();?>index.php/compiler">Free Coding</a></li>
                    <li class=""><a href="<?=base_url();?>index.php/board">Board</a></li>
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
                <a class="navbar-btn btn btn-default" href="<?=base_url()?>index.php/mypage"><i class="icon-wrench icon-white"></i>mypage</a>
                <a class="navbar-btn btn btn-default" href="<?=base_url()?>index.php/auth/logout"><i class="icon-off icon-white"></i>logout</a>
            </div>
        </div>
    </div>
</div>

