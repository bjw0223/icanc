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
    padding-top:45px;
}
.quiz-box-description {
    line-height:38px;
}
.quiz-btn-box {
    text-align:right;

}
.quiz-box:hover {
    padding-top:0px;
    font-size:35px;
}
.quiz-btn {
    height:60px;
    width:60px;
    border-radius:30px;
}
.quiz-btn:hover {
    text-decoration:none;
}
</style>
<script>

$(document).ready(function() {
        
    var $categoryDiv = document.getElementById("categoryDiv");
    var $data = <?=json_encode($data)?>; // 각 퀴즈에 대한 값과 총개수
    
    // 퀴즈 목록 생성
    $categoryDiv.innerHTML = "";
    for(var $i=0; $i<$data['count']; $i++)
    {
        if($data[$i]['numInCategory'] == undefined)
        {
            $data[$i]['numInCategory'] = 0;
        }
        $categoryDiv.innerHTML =$categoryDiv.innerHTML + 
            '<div class="row quiz-body-div">'+
                '<div class="col-lg-8">'+
                    '<p class="quiz-title">'+$data[$i]['category']+'<small>('+$data[$i]['categoryEng']+')</small>'+'</p>'+
                    '<p class="quiz-description">'+$data[$i]['categoryDescription']+'</p>'+
                '</div>'+
                '<div class="col-lg-4">'+
                    '<div class="col-lg-12 quiz-box">'+
                        '<div class="col-lg-6 quiz-box-description">'+
                        '</div>'+
                        '<div class="col-lg-6 quiz-btn-box">'+
                            '<a href="<?=base_url();?>index.php/quiz/basicQuizList/'+$data[$i]['id']+
                                '" class="quiz-btn" data-in="총 '+$data[$i]['numInCategory']+'문제">'+
                                '총 '+$data[$i]['numInCategory']+'문제</a>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';
     }       
   $(".quiz-box").hover( function(){
        target = $(this).children().children('.quiz-btn').html("<i class='icon-gamepad icon-2x'></i>");
    },function(){
        target = $(this).children().children('.quiz-btn');
        data = target.attr('data-in');
        target.html(data);
    });
     



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
