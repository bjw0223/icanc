<style>
.quiz-left-bar {
height:50px;
border-bottom:1 solid black;
background-color:silver;
}
.quiz-left-footer {
   
}
.quiz-middle-bar, .quiz-right-bar {
height:50px;
}
.quiz-middle-footer, .quiz-right-footer{
height:70px;
background-color:silver;
}
</style>
<script>
$(document).ready(function() {
    var windowHeight =  $(window).height() - $('.quiz-left-div').offset().top;

    $('.quiz-left-div').css('height', windowHeight );
    $('.quiz-middle').css('height', windowHeight );
    $('.quiz-right').css('height', windowHeight );

    $('.quiz-left-footer').css('position', 'relative' );
    $('.quiz-left-footer').css('top', windowHeight );
});
</script>
<div class="row">
    <div class="quiz-left col-lg-3">
        <div class="quiz-left-div row">
            <div class="quiz-left-bar col-lg-12">
                navbar
            </div>
            <div class="quiz-left-desc col-lg-12">
                quiz 
            </div>
            <div class="quiz-left-tip col-lg-12">
                tip
            </div>
            <div class="quiz-left-footer col-lg-12">
                button
            </div>
        </div>
    </div>
    <div class="quiz-middle co-lg-5">
        <div class="quiz-middle-div row">
            <div class="quiz-middle-bar">
                navber
            </div>
            <div class="quiz-middle-desc">
                coding
            </div>
            <div class="quiz-middle-footer">
                button
            </div>
        </div>
    </div>
    <div class="quiz-right col-lg-4">
        <div class="quiz-right-div row">
            <div class="quiz-right-bar">
                navber
            </div>
            <div class="quiz-right-desc">
                etc
            </div>
            <div class="quiz-right-footer">
                footer
            </div>
        </div>
    </div>

<div>
