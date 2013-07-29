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
                        <li class=""><a href="<?=base_url();?>index.php/tutorial">Tutorial</a></li>
                        <li class=""><a href="<?=base_url();?>index.php/editer">Free Coding</a></li>
                          <li class="divider-vertical"></li>
                        <li class=""><a href="<?=base_url();?>index.php/board">Board</a></li>
                    </ul>

                </div>
                <!--login or sign up  button-->
                <div id="login_div" class="span3"  style="background-color:;">
                    <span class="pull-right">
                        <a class="btn" href="<?=base_url();?>index.php/auth/register" ><img src="<?=base_url();?>asset/lib/glyphicons/png/glyphicons_006_user_add.png"/></a>
                        <a class="btn" href="<?=base_url();?>index.php/auth/login"><img style="height:22px;"src="<?=base_url();?>asset/lib/glyphicons/png/glyphicons_044_keys.png"/></a>
                    </span>
                </div>
                <!--logout button-->
                <div id="logout_div" class="span3" style="text-align:right;">
                    <div class="row-fluid">
                        <span style="vertical-align:sub;"> 
                            <b id="welcome"><?=$this->session->userdata('user_nickname');?>님</b>
                        </span>
                        <span>
                          <a class="btn" href="<?=base_url()?>index.php/mypage"><img style="height:22px;"src="<?=base_url();?>asset/lib/glyphicons/png/glyphicons_280_settings.png"/></a>
                        </span>
                        <span>
                          <a class="btn" href="<?=base_url()?>index.php/auth/logout"><img style="height:22px;"src="<?=base_url();?>asset/lib/glyphicons/png/"/></a>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

