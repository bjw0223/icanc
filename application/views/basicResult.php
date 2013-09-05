<!-- editor theme include -->
<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/lesser-dark.css">
<!-- editor theme CLOSE -->

<!-- placeholder -->
<script src="<?=base_url();?>asset/lib/codemirror/addon/display/placeholder.js"></script>


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
    overflow-y:auto;
}
.quiz-middle-footer, .quiz-right-footer{
    border-top: 1px solid #3d3e3e;
    background-color:#232C31;
    height:70px;
    padding-top:16px;
}

.quiz-tap {
    height:50px;
    background-color:#232C31;
    border-top: 1px solid #000000;
    border-right: 1px solid #000000;
    border-bottom: 0px solid #3d3e3e;
    border-left: 1px solid #000000;
    color:white;
    font-size:15px;
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
.quiz-description, .quiz-result {
    background-color:#FFFFFF;
    border-radius:10px;
    border: 1px solid #FFFFFF;
    padding:5px;
}
.quiz-description-desc, .quiz-result-desc{
    background-color:#204420;
    height:100%;
    width:100%;
    color:#ffffff;
    padding: 10px 20px 10px 20px;
    overflow-y:auto;
}
.quiz-description {
    margin-top:10px;
}
.compileBtn, .nextBtn {
    background-color:#08c;
    color:#ffffff;
}
</style>

<style>

    .CodeMirror {
        border: 0px solid #eee;
        width: 100%;
        height: auto;
        font-size : 1.063em;
        font-family : Nanum Gothic;
    }
    
    #codeDiv > .CodeMirror {
        width : 100%;
    /*    height : 580px; */
    }

    #headDiv > .CodeMirror, #tailDiv > #CodeMirror {
        width : 100%;
        overflow-x : hidden;
    }
    
    .CodeMirror-scroll {
        overflow-y: auto;
        overflow-x: hidden;
    }
    
    .CodeMirror-linenumber {
        width:50px;
        text-align:center;
    }
    
    .CodeMirror pre.CodeMirror-placeholder { 
        color: #999; 
    }

</style>

<script type="text/javascript">

$(document).ready(function(){
    
    var forbidRegExp = /((switch|main|scanf|gets|getchar|getc)\s*\()|(goto\s*\:)/g;
    var $codeResult= "";

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

    // Compile Button Click Event
    $("#compile").click( function()
    {
        // CodeMirror에서 code textare로 값 보내기
        $("#myModal").css('top',($(window).height()/2-70) +"px");
        $("#myModal").modal("show");
        $code.save();

        var $codeStr = document.getElementById("code").value;
        var $answerCodeStr = '<?=$answerCode?>';

        // 반복문, 선택문, goto 문등 사용 불가 정규식 판별
        if( ($checkCodeStr = forbidRegExp.exec($codeStr)) != null )
        {
            // 사용불가 알림창 표시위한 공백 및 'i', ':' 제거
            $("#myModal").modal("hide");
            $errorStr = $checkCodeStr[0].replace(/^\s*|\s*$/g,"");
            alert($errorStr+"는 사용할 수 없습니다"); 
        }
        else
        {
            $codeResult = "";

            // code textarea 특수문자 처리
            $codeStr = encodeURIComponent($codeStr+$answerCodeStr);
            $.ajax({
                    type : "POST",
                    url : "<?=base_url()?>index.php/compiler/createCode",
                    data : "code="+$codeStr+"&flag=0",
                    dataType : "json",
                    success : function($result) {
                                if($result == "")
                                {
                                    $codeResult = $codeResult+"<br>";
                                }

                                for (var $value in $result) 
                                {
                                    $codeResult = $codeResult + $result[$value]+"<br>";
                                }
                                    if( $codeResult == ("<?=$answer?><br>") )
                                    {
                                        $("#myModal").modal("hide");
                                        alert("정답입니다");
                                        var $description = "DESCRIPTION<br/><br/><?=$description?>";
                                        $(".quiz-result-desc").html("");
                                        $(".quiz-result-desc").html("COMPILE RESULT<br/><br/>"+$codeResult);
                                        $(".quiz-description").show("blind");
                                        $(".quiz-description-desc").html($description);
                                        $("#next").show("blind");

                                        $.ajax({
                                                type : "POST",
                                                url : "<?=base_url()?>index.php/quiz/updateFinishQuestionNo",
                                                data : "finishQuestionNo=<?=$id?>",
                                                dataType : "json"
                                                });
                                    }
                                    else
                                    {
                                        $(".quiz-description").hide("blind");
                                        $("#myModal").modal("hide");
                                        alert("오답 또는 컴파일 에러입니다\n컴파일 결과창을 확인하세요");
                                        $(".quiz-description-desc").html("");
                                        $(".quiz-result-desc").html("COMPILE RESULT<br/><br/>"+$codeResult);
                                    }

                            },
                   error : function() { 
                                $("#myModal").modal("hide");
                                alert("Time Ove"); 
                           }
                    });
        }
    });

    // 다음 문제로
    $("#next").click( function()
    {
       document.location.href= "<?=base_url()?>index.php/quiz/quizTest/<?=$id+1?>"
    });



}); //ready close 
</script>

<script>
$(document).ready(function() {
    setupLayout(); 
    $(window).resize(function(){
        setupLayout(); 
    });
    $("#next").hide();
});
function setupLayout(){
    var windowHeight = $(window).height();
    $('.quiz-left-desc').css('height', (windowHeight - 140) + 'px' );
    $('.quiz-middle-desc').css('height', (windowHeight - 170) + 'px' );
    $('.quiz-right-desc').css('height', (windowHeight - 170) + 'px' );
    $(".quiz-description").hide();
        
    $('.quiz-result').css('height',$('.quiz-right-desc').height()/2);
    $('.quiz-description').css('height',$('.quiz-right-desc').height()/2 - 10);
    $('.quiz-error').css('left',$('.quiz-middle-bar').offset().left);
    $('.quiz-error').css('bottom',$(window).height() - $('.quiz-middle-footer').offset().top);
    $('.quiz-error').css('min-height',70);
    $('.quiz-error').css('width',$('.quiz-middle-bar').width());
}
</script>
<style>
.quiz-id {
    line-height:50px;
    font-weight:bold;
    font-size:18px;
    padding-left:10px;
    color:#999999;

}
.quiz-left-context {
    padding:5px;
}
.quiz-left-answer {
    padding:5px;
}
.left-title {
    font-size:16px;
    font-weight:bold;
margin:0px;
}
.quiz-left-tip{
    padding:5px;
}
.quiz-left-desc {
    line-height:25px;
    overflow-y:auto;
}
.left-desc {
    padding:5px 10px 5px 10px;
}
.color-silver {
    color:silver;
}
#myModal {
position:absolute;
text-align:center;
}
.compile-waiting {
font-size:100px;
color:#eeeeee;
}
</style>
    <div class="modal fade" id="myModal">
        <div class="compile-waiting">
                <i class="icon-spinner icon-spin"></i>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<div class="row">
    <div class="quiz-left col-lg-3">
        <div class="quiz-left-div row">
            <div class="quiz-left-bar col-lg-12">
                <p class="quiz-id"><?=$category?>(<?=$questionNo?>)</p>
            </div>
            <div class="quiz-left-desc col-lg-12">
                <div class="quiz-left-context">
                    <p class="left-title"><?=$question?></p>
                    <p class="left-desc"><?=$context?></p>
                </div>
                <div class="quiz-left-answer">
                    <p class="left-title">결과값</p>
                    <p class="left-desc"><?=$answer?></p>
                </div>
                <div class="quiz-left-tip">
                    <p class="left-title">힌트</p>
                    <p class="left-desc"><?=$hint?></p>
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
                        <i class="icon-file-alt icon-large"></i> quiz.c
                    </div>
                    <div class="col-lg-8"> 
                    </div>
                </div>
            </div>
            <div class="quiz-middle-desc col-lg-12">
                <div id="headDiv">
                    <textarea class="form-control" id="head" name="head"><?=$mainCodeHead?></textarea>
                </div>

                <div id="codeDiv">
                    <textarea class="form-control" id="code" name="code" placeholder="Code goes here"></textarea>
                </div>
                 
                <div id="tailDiv">
                    <textarea class="form-control" id="tail" name="tail"><?=$answerCode."\n"?><?=$mainCodeTail?></textarea>
                </div>

            </div>
            <div class="quiz-middle-footer col-lg-12">
                <button class="btn compileBtn" id="compile" name="compile"> Compile </button>
                <button class="btn nextBtn" id="next" name="next"> Next Quiz </button>
            </div>
        </div>
   </div>
    <div class="quiz-right col-lg-4">
        <div class="quiz-right-div row">
            <div class="quiz-right-bar col-lg-12">
            </div>
            <div class="quiz-right-desc col-lg-12">
                <div class="quiz-result">
                   <div class="quiz-result-desc">
                    </div>
                </div>
                <div class="quiz-description">
                    <div class="quiz-description-desc">
                    </div>
                </div>
            </div>
            <div class="quiz-right-footer col-lg-12">
            </div>
        </div>
    </div>

</div>
