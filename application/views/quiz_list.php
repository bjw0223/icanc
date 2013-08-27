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

<script>

$(document).ready( function(){
    
    var $quizDiv = document.getElementById("quizDiv");
    var $data = <?=json_encode($data)?>; // 각 퀴즈에 대한 값과 총개수
    
    // 퀴즈 목록 생성
    $quizDiv.innerHTML = "";
    for(var $i=0; $i<$data['count']; $i++)
    {
        $quizDiv.innerHTML =$quizDiv.innerHTML + 
         "<div class=\"row quiz-body-div\">"+
         "<div class=\"col-lg-10\">"+
         "<a href=\"<?=base_url();?>index.php/quiz/quizTest/"+$data[$i]['id']+"\" class=\"quiz-title\">Quiz "+($i+1)+"</a>"+
         "<p class=\"quiz-description\">"+$data[$i]['question']+"</p>"+
         "</div>"+
         "<div class=\"col-lg-2\">"+
         "not start"+ 
         "</div>"+
         "</div>";
     }       
});
</script>

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
            <div class="row" id="quizDiv">

                <div class="quiz-body col-lg-12">
                <!-- -->
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
