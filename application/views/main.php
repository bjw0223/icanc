<style>
#main {
    border-top: 1px solid #536166;
}
/*
.navbar{
    background-color:#36545F;
}
.navbar-btn{
    background-color:#36545F;
    border:0px solid white;
}

.btn-start{
font-size:30px;
color:white;
border:1px solid white;
border-radius:6px;
padding:10px 30px 10px 30px;
}
.btn-start:hover{
background-color:white;
color:#36545F;

}
*/
body{ 
    background-color:#36545F;
}
.icanc-main {
    color:white;
    padding-top:80px;
}
.carousel-inner > .item > img {
    width:100%;
    height:400px;
}
.item { 
    text-align:center;
    padding-top:10px;
    padding-bottom:10px;
}
.carousel-inner{
    background-color: rgba(0, 0, 0, 0.1);
}
</style>
<script>
$(document).ready(function() {

$('.carousel').carousel({
      interval: 2000
      })
});
</script>
<div id="main" class="container">
    <div class="row icanc-main">
        <div class="col-lg-5">
            <p style="font-size:20px;"> reference </p>
            <p style="font-size:20px;"> tutorial </p>
            <p style="font-size:20px;"> quiz </p>
            <p style="font-size:20px;"> freecoding </p>
        </div>

        <div id="carousel-example-generic" class="carousel slide col-lg-7">
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
                    <img class="main-img" src="<?=base_url();?>asset/lib/img/1.jpg" alt="...">
                    <div class="carousel-caption">
                    수지1
                    </div>
                </div>
                <div class="item">
                    <img class="main-img" src="<?=base_url();?>asset/lib/img/2.jpg" alt="...">
                    <div class="carousel-caption">
                    수지2
                    </div>
                </div>
                <div class="item">
                    <img class="main-img" src="<?=base_url();?>asset/lib/img/3.jpg" alt="...">
                    <div class="carousel-caption">
                    수지3
                    </div>
                </div>
                <div class="item">
                    <img  class="main-img"src="<?=base_url();?>asset/lib/img/4.jpg" alt="...">
                    <div class="carousel-caption">
                    수지8
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
</div>

