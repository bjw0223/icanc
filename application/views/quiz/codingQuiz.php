<!-- editor theme include -->
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
<!-- editor theme CLOSE -->

<!-- placeholder -->
<script src="<?=base_url();?>asset/lib/codemirror/addon/display/placeholder.js"></script>

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
    
    .CodeMirror pre.CodeMirror-placeholder { 
        color: #999; 
    }
</style>

<script type="text/javascript">

$(document).ready(function(){
    
    // head textarea option
    var $head = CodeMirror.fromTextArea(document.getElementById("head"), {
                mode: "text/x-csrc",
                theme: "lesser-dark",
                matchBrackets: true,
                lineNumbers: true,
                viewportMargin: 10,
                readOnly : true,
            });
    
    // code textarea option
    var $code = CodeMirror.fromTextArea(document.getElementById("code"), {
                mode: "text/x-csrc",
                theme: "lesser-dark",
                matchBrackets: true,
                smartIndent : true,
                lineNumbers: true,
                firstLineNumber : $head.lineCount()+1,
                viewportMargin: 10,
                tabSize : 4,
            });
    
    // tail textarea option
    var $tail = CodeMirror.fromTextArea(document.getElementById("tail"), {
                mode: "text/x-csrc",
                theme: "lesser-dark",
                matchBrackets: true,
                lineNumbers: true,
                firstLineNumber : $head.lineCount()+$code.lineCount()+1,
                viewportMargin: 10,
                readOnly : true,
            }); 
    
    // tail의 line number 실시간 변경
    $code.on("change", function($code, change) {   
                $tail.setOption("firstLineNumber", $head.lineCount()+$code.lineCount()+1); 
            });

    // compile button click Event
    $("#compile").click( function()
    {
        // CodeMirror에서 code textare로 값 보내기
        $code.save();
        var $headStr = document.getElementById("head").value;
        var $codeStr = document.getElementById("code").value;
        var $tailStr = document.getElementById("tail").value;
        
        // code textarea 특수문자 처리
        $codeStr = encodeURIComponent($codeStr);
        $.ajax({

                type : "POST",
                url : "<?=base_url()?>index.php/compiler/compile",
                data : "head="+$headStr+"&code="+$codeStr+"&tail="+$tailStr,
                dataType : "json",
                success : function($result) {
                            var $codeResult= "";
                            for (var $value in $result) 
                            {
                                $codeResult = $codeResult + $result[$value] + "<br>";
                            }
                                $("#description").html($codeResult);
                        }
                });
    });

}); //ready close 
</script>

<form id"codingQuiz" method="post">
    <div id="questionDiv">
        <legend style="text-align:center"> <?=$question?> </legend>
    </div>

    <div id="answerDiv">
        <h3> <span class="label label-success">결과 : <?=$answer?></span> </h3>
    </div>
    <br/>

    <div id="headDiv">
        <textarea class="form-control" id="head" name="head"><?=$head?></textarea>
    </div>

    <div id="codeDiv">
        <textarea class="form-control" id="code" name="code" placeholder="Code goes here"></textarea>
    </div>

    <div id="tailDiv">
        <textarea class="form-control" id="tail" name="tail"><?=$tail?></textarea>
    </div>

    <div>
        <input type="button" class="form-control btn-warning" id="compile" name="compile" value="Compile"> </input>
    </div>
    
    <div id="description">
    </div>
</form>
    
