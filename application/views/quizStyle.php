<style>
body {
    overflow-y:hidden;
}
.quiz-left-bar {
height:50px;
background-color:#E6E6E6;
border-bottom: 1px solid rgba(0,0,0,0.15);
}
.quiz-left-footer {
height:40px;
border-top: 1px solid rgba(0,0,0,0.15);
}
.quiz-middle-bar,.quiz-right-bar {
height:50px;
background-color:#1F1D1D;
border-bottom: 1px solid #000000;
text-align:center;
font-size: 13px;
line-height: 50px;
color: #646464;
font-weight:bold;
text-transform: uppercase;
}
.quiz-middle-desc, .quiz-right-desc{
background-color:#232C31;
}
.quiz-middle-footer, .quiz-right-footer{
border-top: 1px solid #3d3e3e;
background-color:#232C31;
height:70px;
}

.quiz-tap {
height:50px;
background-color:#232C31;
border-top: 1px solid #000000;
border-right: 1px solid #000000;
border-bottom: 0px solid #3d3e3e;
border-left: 1px solid #000000;
color:white;
font-weight:bold;
text-transform: none;

}
.quiz-left-question {
text-align:center;
height:40px;

font-size: 13px;
line-height: 35px;
color: #646464;
}
.quiz-left-question:hover {
background-color:#0099FF;
border:1px solid #0052FF; 
}
</style>
<script>
$(document).ready(function() {
    var windowHeight =  $(window).height() - $('.quiz-middle-footer').offset().top - 50 ;
    $('.quiz-left-desc').css('height', windowHeight + 30 );
    $('.quiz-middle-desc').css('height', windowHeight );
    $('.quiz-right-desc').css('height', windowHeight );
});
</script>
<div class="row">
    <div class="quiz-left col-lg-3">
        <div class="quiz-left-div row">
            <div class="quiz-left-bar col-lg-12">
                navbar
            </div>
            <div class="quiz-left-desc col-lg-12">
                <div class="quiz-left-tip col-lg-12">
                quiz 
                tip
                </div>
            </div>
            <div class="quiz-left-footer col-lg-12">
                <div class="row">
                    <div class="quiz-left-question col-lg-12">
                        질문하기
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="quiz-middle col-lg-5">
        <div class="quiz-middle-div row">
            <div class="quiz-middle-bar col-lg-12">
                <div class="row">
                    <div class="quiz-tap-title col-lg-2">
                        files :
                    </div>
                    <div class="quiz-tap col-lg-2" style="">
                        quiz-name
                    </div>
                </div>
            </div>
            <div class="quiz-middle-desc col-lg-12">
                coding
            </div>
            <div class="quiz-middle-footer col-lg-12">
                button
            </div>
        </div>
    </div>
    <div class="quiz-right col-lg-4">
        <div class="quiz-right-div row">
            <div class="quiz-right-bar col-lg-12">
                navber
            </div>
            <div class="quiz-right-desc col-lg-12">
                etc
            </div>
            <div class="quiz-right-footer col-lg-12">
                footer
            </div>
        </div>
    </div>

<div>
