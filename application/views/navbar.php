<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="row-fluid">
                <div class="span3" style="background-color:;vertical-align:;">
                    <a class="brand logo" href="<?=base_url();?>index.php/main" style="font-size:25px;">I CAN C</a>
                </div>
                <div class="span6" style="background-color:;">
                    <ul class="nav">
                        <li class=""><a class="reference_btn">Reference</a></li>
                        <li class=""><a>Tutorial</a></li>
                        <li class=""><a href="<?=base_url();?>index.php/editer">Free Coding</a></li>
                          <li class="divider-vertical"></li>
                        <li class=""><a href="<?=base_url();?>index.php/board">Board</a></li>
                    </ul>

                </div>
                <!--login or sign up  button-->
                <div id="login_div" class="span3"  style="background-color:;">
                    <span class="pull-right">
                        <a class="btn btn-inverse" href="<?=base_url()?>index.php/auth/register">JOIN</a>
                        <a class="btn btn-inverse" href="<?=base_url()?>index.php/auth/login">LOGIN</a>
                    </span>
                </div>
                <!--logout button-->
                <div id="logout_div" class="span3" style="text-align:right;">
                    <div class="row-fluid">
                        <span style="vertical-align:sub;"> 
                            <b id="welcome"><?=$this->session->userdata('user_nickname');?>님</b>
                        </span>
                        <span>
                          <a class="btn btn-inverse" href="<?=base_url()?>index.php/mypage"><i class="icon-wrench icon-white"></i></a>
                        </span>
                        <span>
                          <a class="btn btn-inverse" href="<?=base_url()?>index.php/auth/logout"><i class="icon-off icon-white"></i></a>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

