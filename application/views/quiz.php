<style>
.quiz-body-div {
    border-bottom:1px solid #e5e5e5;
    padding-bottom:20px;
    margin-bottom:20px;
}
.quiz-title {
    font-size:22px;
    font-weight:bold;
}
.quiz-description {
    margin:20px 0px 10px 20px;
    font-size:15px;
}
.quiz-box {
    border-radius:10px;
    padding-top:5px;
    padding-left:0px;
    padding-bottom:5px;
    padding-right:0px;
    margin-top:10px;
    background-color:#eeeeee;
}
.quiz-box:hover {
    background-color:#dddddd;

}
.quiz-box-description {
    line-height:38px;
}
.quiz-btn-box {
    line-height:38px;
    text-align:center;
}
.quiz-btn {

}
</style>
<script>
$(document).ready(function() {

    $(".quiz-box").hover(function(){
        target = $(this).children().children('.quiz-btn');
        target.removeClass();     
        target.addClass("btn btn-info btn-lg btn-block quiz-btn");     
        target.html("go tutorial");
    },function(){
        target = $(this).children().children('.quiz-btn');
        data = target.attr('data-in');
        target.removeClass();     
        target.addClass("quiz-btn");     
        target.html(data);
    });

});
</script>

<div id="quiz">
    <div class="container">
<!-- quiz start -->
    <div class="row">
        <div class="quiz-head col-lg-12 col-sm-12">
            <legend>
                <p><h3><strong>C language</strong></h3></p>
            </legend>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-sm-8">
            <div class="row">
                <div class="quiz-body col-lg-12 col-sm-12">
<!--quiz 1 start-->
                    <div class="row quiz-body-div">
                        <div class="col-lg-12 col-sm-12">
                            <p class="quiz-title">1. welcome to C language</p>
                            <p class="quiz-description">discription</p>
                            <div class="row">
                                <div class="col-lg-10 col-sm-10 col-offset-1 quiz-box">
                                    <div class="col-lg-9 col-sm-9 quiz-box-description">
                                       asdfghjklqweruyiozvcxnm,.b 
                                    </div>
                                    <div class="col-lg-3 col-sm-3 quiz-btn-box">
                                        <a href="#" class="quiz-btn" data-in="data-in">data-in</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-sm-10 col-offset-1 quiz-box">
                                    <div class="col-lg-9 col-sm-9 quiz-box-description">
                                       asdfghjklqweruyiozvcxnm,.b 
                                    </div>
                                    <div class="col-lg-3 col-sm-3 quiz-btn-box">
                                        <a href="#" class="quiz-btn" data-in="data-in">data-in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--quiz 1 end-->
<!--quiz 2 start-->
                    <div class="row quiz-body-div">
                        <div class="col-lg-12 col-sm-12">
                            <p class="quiz-title">2. hi eugene</p>
                            <p class="quiz-description">discription</p>
                            <div class="row">
                                <div class="col-lg-10 col-sm-10 col-offset-1 quiz-box">
                                    <div class="col-lg-9 col-sm-9 quiz-box-description">
                                       asdfghjklqweruyiozvcxnm,.b 
                                    </div>
                                    <div class="col-lg-3 col-sm-3 quiz-btn-box">
                                        <a href="#" class="quiz-btn" data-in="data-in">data-in</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-sm-10 col-offset-1 quiz-box">
                                    <div class="col-lg-9 col-sm-9 quiz-box-description">
                                       asdfghjklqweruyiozvcxnm,.b 
                                    </div>
                                    <div class="col-lg-3 col-sm-3 quiz-btn-box">
                                        <a href="#" class="quiz-btn" data-in="data-in">data-in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--quiz 2 end-->
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4">

        </div>
    </div>
    <div class="row">
        <div class="quiz-tail">

        </div>
    </div> 

        <!-- quiz end -->
    </div>
</div>
