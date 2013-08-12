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
</style>

<div class="row well">
    <div class="col-lg-12">
        <div>
            <legend>
               <h3><strong>문제</strong></h3>
               <h4><?=$data->question?></h4>
            </legend>
<?php 
if( $data->code != null)
{
?>
            <textarea id="code"><?=$data->code?></textarea>
<?php
}
if( $data->img_path != null )
{
?>
            <img src="<?=base_url();?><?=$data->img_path?>">
<?php
}
?>
        </div>
        <div>
            <div>
                <h4><strong>(1)</strong> <?=$data->example1?></h4>
            </div>
            <div>
                <h4><strong>(2)</strong> <?=$data->example2?></h4>
            </div>
            <div>
                <h4><strong>(3)</strong> <?=$data->example3?></h4>
            </div>
            <div>
                <h4><strong>(4)</strong> <?=$data->example4?></h4>
            </div>
        </div>
        <div class="row">
            <div class="input-group col-offset-9">
                <input class="inputAnswer<?=$data->srl?> form-control" type="text">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="button" onclick="checkAnswer(<?=$data->answer?>,<?=$data->srl?>)">Go!</button>
                </div>
            </div>        
        </div>
        <div class="explanation explanation<?=$data->srl?>">
            <h4><?=$data->explanation?></h4>
        </div>
    </div>
</div>
