<style>
.login-block {
    background-color: #FFFFFF;
    border-radius: 16px;
    padding: 30px;
    border: 1px solid #dddddd;
    color:#36545F;
}
.login-legend {
    font-weight:bold;
    border-bottom:3px solid #36545F;
    padding-bottom:3px;
    color:#36545F;
}
body {
    background-color:#36545F;
}
.carousel-inner > .item > img {
    height:330px;
    width:100%;
}
.carousel-inner > .item {
    text-align:center;
padding:10px;
}
</style>
<script>

$(document).ready(function() {

var windowHeight = $(window).height();
$('.carousel').carousel({
      interval: 2000
      })

});

</script>


<div class="container" style="margin-top:110px;">
   <div class="row"> 
        <div class="col-lg-8 col-sm-8"> 
            <div id="carousel-example-generic" class="carousel slide">
          <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="main-img" src="<?=base_url();?>asset/lib/img/main/1.png" alt="...">
                        <div class="carousel-caption">
                            <h2>Reference</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img class="main-img" src="<?=base_url();?>asset/lib/img/main/2.png" alt="...">
                        <div class="carousel-caption">
                            <h2>FreeCoding</h2>
                        </div>
                    </div>
					<div class="item">
                        <img class="main-img" src="<?=base_url();?>asset/lib/img/main/3.png" alt="...">
                        <div class="carousel-caption">
                            <h2>Quiz</h2>
                        </div>
                    </div>
					<div class="item">
                        <img class="main-img" src="<?=base_url();?>asset/lib/img/main/4.png" alt="...">
                        <div class="carousel-caption">
                            <h2>lecture</h2>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 login-block" style="">
            <form class="navbar-formt" action="<?=base_url()?>index.php/auth/authentication" method="post">
                <fieldset>
                    <legend class="login-legend">Login</legend>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                    </div>
                    <div class="form-inline form-group">
                        <button type="submit" class="btn btn-primary">로그인</button>
                        <div class="checkbox">
                            <label class="checkbox">
                                <input type="checkbox"/>아이디 저장
                            </label>
                        </div>
                    </div>
                    <div class="form-inline" style="text-align:center;">
                        <small>
                            <a href="#" style="font-weight:bold;color:#4375DB;">아이디/ 비밀번호찾기</a>
                            <a href="<?=base_url()?>index.php/auth/register" style="font-weight:bold;margin-left:30px;color:#4375DB;"> 회원가입</a>
                        </small>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div> 
