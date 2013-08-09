
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/ambiance.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/blackboard.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/cobalt.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/eclipse.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/elegant.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/erlang-dark.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/lesser-dark.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/midnight.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/monokai.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/neat.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/night.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/rubyblue.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/solarized.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/twilight.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/xq-dark.css">
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/xq-light.css">

<style type="text/css">
    .CodeMirror {
        border: 1px solid #eee;
        width: 100%;
        height: auto;
    }
    .CodeMirror-scroll {
        overflow-y: hidden;
        overflow-x: auto;
    }
    .CodeMirror-linenumber {
        width:30px;
        text-align:center;
    }
</style>

<script type="text/javascript">
$(document).ready(function(){
    var $head = CodeMirror.fromTextArea(document.getElementById("head"), {
                matchBrackets: true,
                viewportMargin: 10,
                mode: "text/x-csrc",
                readOnly : true,
                lineNumbers: true,
                theme: "solarized",
            });
    
    var $code = CodeMirror.fromTextArea(document.getElementById("code"), {
                lineNumbers: true,
                firstLineNumber : $head.lineCount()+1,
                viewportMargin: 10,
                matchBrackets: true,
                mode: "text/x-csrc",
                theme: "solarized",
            });
    
    var $tail = CodeMirror.fromTextArea(document.getElementById("tail"), {
                lineNumbers: true,
                firstLineNumber : $head.lineCount()+$code.lineCount()+1,
                viewportMargin: 10,
                matchBrackets: true,
                mode: "text/x-csrc",
                theme: "solarized",
            }); 
    
    // tail의 line number 실시간 변경
    $code.on("change", function($code, change) {   
                $tail.setOption("firstLineNumber", $head.lineCount()+$code.lineCount()+1); 
            });
    
}); //ready close 
</script>


<div id="questionDiv">
<legend> <?=$question?> </legend>
</div>

<div id="answerDiv">
<font color="bule"> <?=$answer?> </font>
</div>
<br/>

<div id="headDiv"> 헤드
    <textarea class="form-control" id="head" name="head"><?=$head?></textarea>
</div>

<div id="codeDiv">
    <textarea class="form-control" id="code" name="code">    </textarea>
</div>

<div id="tailDiv">
    <textarea class="form-control" id="tail" name="tail"><?=$tail?></textarea>
</div>


