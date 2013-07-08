<!DOCTYPE html>
<html>
    <head>

       
        <meta charset="utf-8"/>
        <link href="<?=base_url();?>asset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
        <link href="<?=base_url();?>asset/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">

        <script src="<?=base_url();?>asset/lib/jquery/js/jquery-1.8.3.js"></script>
       <script src="<?=base_url();?>asset/lib/jquery/js/jquery-ui-1.9.2.custom.min.js"></script>
        
        <script src="http://comments.skplanetx.com/script/plugin.js"></script>
        <script>
        $(document).ready(function() {
                var postSelecter = null;
            $('.contents_list').click(function(){
                if(postSelecter){
                postSelecter.removeClass('active').addClass('inactive');
                }
                var path = $(this).attr("data-in");
                postSelecter = $(this).parent();
                $(this).parent().removeClass('inactive').addClass('active');
                $('#description').load("<?=base_url();?>index.php/main/show/"+path);
            });
                
        });
        </script>

        <title></title>
        <script type="text/javascript" src="<?=base_url();?>asset/lib/tinymce/js/tinymce/tinymce.min.js"></script>
    </head>
    <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </a>

                <!-- Be sure to leave the brand out there if you want it shown -->
                <a class="brand" href="/icanc/index.php/main">I CAN C</a>

                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="nav-collapse collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
                    <ul class="nav pull-right">
                        <form class="form-inline" action="/icanc/index.php/auth/authentication">
                            <div>
                                <input type="text" class="input-small" id="email" name="email" placeholder="Email">
                            <input type="password" class="input-small" id="password" name="password" placeholder="Password">
                            <button type="submit" style="margin-top:0px" class="btn">로그인</button>
                            <label class="checkbox">
                                <input type="checkbox" style="margin-top:4px"> <font color="yellow">아이디 저장</font>
                            </label>
                            <a href="/icanc/index.php/auth/register"><font color="white"> 회원가입 </font>  </a>
                        </form>
                    </ui>
                </div>

            </div>
        </div>
    </div>


