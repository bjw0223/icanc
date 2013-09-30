<script>
$(document).ready(function(){
        $('.explanation').hide();
<?php
if( $data->code != null)
{
?>

 var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/x-csrc",
            readOnly: true
        });
<?php
}
?>

        
});
function checkAnswer(answer,srl)
{
    var inputAnswer= $('.inputAnswer'+srl).val();
    if( answer == inputAnswer)
    {
        alert("정답");
        $('.explanation<?=$data->srl?>').show();
    }else{
        alert("오답");
    }

}
</script>


<style>
.CodeMirror {
    border: 1px solid #eee;
    height: auto;
}
.CodeMirror-scroll {
    overflow-y: hidden;
    overflow-x: auto;
}
.objectiveQuiz {
    border:1px solid black;
    padding:5px;
}
.answer-btn {
    background-color:#971953;
}
</style>


<div class="row objectiveQuiz" quizNo="1">
    <div class="quiz-text col-lg-12 col-sm-12">
        <?=$data->question?>
    </div>
    <div class="quiz-code col-lg-12 col-sm-12">
<?php
if( $data->code != NULL )
{
?>
        <textarea id='code'><?=$data->code?></textarea>
<?php
}
?>
    </div>
    <div class="quiz-img col-lg-12 col-sm-12">
<?php
if( $data->img_path != NULL )
{
?>
    <img src="<?=base_url().'/'.$data->img_path?>">
<?php
}
?>
    </div>
    <div class="quiz-objective col-lg-12 col-sm-12">
        <p class="example">(1)<?=$data->example1?></p>
        <p class="example">(2)<?=$data->example2?></p>
        <p class="example">(3)<?=$data->example3?></p>
        <p class="example">(4)<?=$data->example4?></p>
    </div>
    <div class="quiz-check col-lg-12 col-sm-12">
        <div class="input-group">
            <input class="inputAnswer<?=$data->srl?> form-control" type="text">
            <div class="input-group-btn">
                <button class="btn btn-default" type="button" onclick="checkAnswer(<?=$data->answer?>,<?=$data->srl?>)">정답확인</button>
            </div>
        </div>
    </div>
    <div class="explanation explanation<?=$data->srl?>  col-lg-12 col-sm-12">
        <?=$data->explanation?>
    </div>
</div>
