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
</style>

<div id="quiz">
    <div class="container">
<!-- quiz start -->
    <div class="row">
        <div class="quiz-head col-lg-12">
            <legend>
                <p><h3><strong>welcome to c language</strong></h3></p>
                <span>bla~ bla ~ bla <span>
            </legend>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="quiz-body col-lg-12">
<!--quiz 1 start-->
                    <div class="row quiz-body-div">
                        <div class="col-lg-10">
                            <a href="<?=base_url();?>index.php/quiz/quizTest/1" class="quiz-title">1. welcome to C language</a>
                            <p class="quiz-description">discription</p>
                        </div>
                        <div class="col-lg-2">
                            not start 
                        </div>
                    </div>
<!--quiz 1 end-->
                </div>
            </div>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
    <div class="row">
        <div class="quiz-tail">
            <a href="<?=base_url();?>index.php/quiz" class="btn btn-default">back to contents</a>
        </div>
    </div> 

        <!-- quiz end -->
    </div>
</div>
