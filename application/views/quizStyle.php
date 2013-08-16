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
.quiz-result {
background-color:black;
position:absolute;
border-radius:15px;
border: 1px solid #eeeeee;
padding:10px;
}
.quiz-result-desc{
background-color:#292727;
height:100%;
width:100%;
     color:#ffffff;
}
.compileBtn {
background-color:#08c;
color:#ffffff;
}

</style>

<style>

    .CodeMirror {
        border: 0px solid #eee;
        width: 100%;
        height: auto;
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
    
    var regExp = /((for|while|do|switch|main|scanf|gets|getchar|getc)\s*\()|(goto\s*\:)/;
    
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
        
        // 반복문, 선택문, goto 문 사용 불가 정규식 판별
        if( ($checkCodeStr = regExp.exec($codeStr)) != null )
        {
            // 사용불가 알림창 표시위한 공백 및 'i', ':' 제거
            $codeStr = $checkCodeStr[0].replace("(","");
            $codeStr = $codeStr.replace(":","");
            $codeStr = $codeStr.replace(/^\s*|\s*$/g,"");
            
            alert($codeStr+"문은 사용할 수 없습니다"); 
        }
        else
        {
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
                                    if( $codeResult == ("<?=$answer?>"+"<br>") )
                                    {
                                        alert("정답입니다");
                                        var $description = "설명<br/><?=$description?>";
                                        $("description").html($description);
                                        $(".quiz-result-desc").html(+$codeResult+"<br/>");
                                    }
                                    else
                                    {
                                        alert("오답 또는 컴파일 에러입니다\n컴파일 결과창을 확인하세요");
                                        $("#description").html("");
                                        $(".quiz-result-desc").html($codeResult);
                                    }

                            }
                    });
        }
    });

}); //ready close 
</script>

<script>
$(document).ready(function() {
    var windowHeight =  $(window).height() - $('.quiz-right-footer').offset().top - 50 ;
    $('.quiz-left-desc').css('height', windowHeight + 30 );
    $('.quiz-middle-desc').css('height', windowHeight );
    $('.quiz-right-desc').css('height', windowHeight );
    
    var target = $('.quiz-right-bar');
    $('.quiz-result').css('top',target.offset().top + 30  );
    $('.quiz-result').css('left',target.offset().left - 80 );
    $('.quiz-result').css('height',$(window).height()/5*2);
    $('.quiz-result').css('width',target.width());
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
                <div id="headDiv">
                    <textarea class="form-control" id="head" name="head"><?=$head?></textarea>
                </div>

                <div id="codeDiv">
                    <textarea class="form-control" id="code" name="code" placeholder="Code goes here"></textarea>
                </div>

                <div id="tailDiv">
                    <textarea class="form-control" id="tail" name="tail"><?=$tail?></textarea>
                </div>

            </div>
            <div class="quiz-middle-footer col-lg-12">
                <button class="btn compileBtn" id="compile" name="compile"> Compile </button>
            </div>
        </div>
    </div>
    <div class="quiz-right col-lg-4">
        <div class="quiz-right-div row">
            <div class="quiz-right-bar col-lg-12">
            </div>
            <div class="quiz-right-desc col-lg-12">
            </div>
            <div class="quiz-right-footer col-lg-12">
            </div>
        </div>
    </div>

<div>

<div class="quiz-result">
    <div class="quiz-result-desc" style="padding:20px;">
    </div>
</div>
