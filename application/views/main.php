<style>
#main {
    border-top: 1px solid #536166;
    padding-top:60px;
    padding-left:50px;
    padding-right:50px;
}
body{ 
    background-color:#36545F;
}
.icanc-main {
    color:white;
    height:100%
}
.carousel-inner > .item > img {
    width:100%;
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
var windowHeight = $(window).height();
$('.carousel-inner > .item > img').height( windowHeight/100 * 70 ); 
$('.carousel').carousel({
      interval: 2000
      })
});
</script>
<div id="main" class="">
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
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="main-img" src="<?=base_url();?>asset/lib/img/main/practice_quiz_result.JPG" alt="...">
                    <div class="carousel-caption">
                    Quiz 
                    </div>
                </div>
                <div class="item">
                    <img class="main-img" src="<?=base_url();?>asset/lib/img/main/freeCoding.JPG" alt="...">
                    <div class="carousel-caption">
                    FreeCoding
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

