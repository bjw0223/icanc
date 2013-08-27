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
        target.html("go quiz");
    },function(){
        target = $(this).children().children('.quiz-btn');
        data = target.attr('data-in');
        target.removeClass();     
        target.addClass("quiz-btn");     
        target.html(data);
    });
     
    var $categoryDiv = document.getElementById("categoryDiv");
    var $data = <?=json_encode($data)?>; // 각 퀴즈에 대한 값과 총개수
    
    // 퀴즈 목록 생성
    $categoryDiv.innerHTML = "";
    for(var $i=0; $i<$data['count']; $i++)
    {
        $categoryDiv.innerHTML =$categoryDiv.innerHTML + 
            '<div class=\"row quiz-body-div\">'+
            '<div class=\"col-lg-12\">'+
            '<p class=\"quiz-title\">'+$data[$i]['category']+'</p>'+
            '<p class=\"quiz-description">temp quiz description</p>'+
            '<div class=\"row\">'+
            '<div class=\"col-lg-10 col-offset-1 quiz-box\">'+
            '<div class=\"col-lg-9 quiz-box-description\">'+
            'temp quiz view'+ 
            '</div>'+
            '<div class=\"col-lg-3 quiz-btn-box\">'+
            '<a href=\"<?=base_url();?>index.php/quiz/title/'+$data[$i]['category']+'\" class=\"quiz-btn\" data-in=\"data-in\">data-in</a>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>';
     }       

});
</script>

<div id="quiz">
    <div class="container">
<!-- quiz start -->
    <div class="row">
        <div class="quiz-head col-lg-12">
            <legend>
                <p><h3><strong>C language</strong></h3></p>
            </legend>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="quiz-body col-lg-12" id="categoryDiv">
                <!-- -->
               </div>
            </div>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
    <div class="row">
        <div class="quiz-tail">

        </div>
    </div> 

        <!-- quiz end -->
    </div>
</div>
