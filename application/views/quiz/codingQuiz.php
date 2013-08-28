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
        border-top: 1px solid #eee;
        border-bottom: 0px solid #eee;
        height: auto;
        width:100%;
    }
    
    .CodeMirror-scroll {
        overflow-y: hidden;
        overflow-x: auto;
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
    
    var regExp = /((main|scanf|gets|getchar|getc)\s*\()|(goto\s*\:)/;
    
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
                    url : "<?=base_url()?>index.php/compiler/createCode",
                    data : "code="+$codeStr+"&flag=1",
                    dataType : "json",
                    success : function($result) {
                                var $codeResult= "";
                                for (var $value in $result) 
                                {
                                    $codeResult = $codeResult + $result[$value] + "<br>";
                                }
                                        $("#result").html("컴파일 결과<br/>"+$codeResult+"<br/>");

                            },
                    error : function() {
                                alert("Time Over");
                            }
                    });
        }
    });

}); //ready close 
</script>

<style>
.freeCoding-navbar {
    height:50px;
    background-color:#eeeeee;
    text-align:right;
    line-height:48px;
    padding-right:20px;
    padding-left:20px;
}
.freeCoding {
    margin:0px;
    padding:0px;
}
.freeCoding-editor {
    margin:0px;
    padding:0px;
    overflow-y:auto;
    height:400px;
    background-color:#232c31;
    border-bottom: 1px solid #eee;
}
.freeCoding-contents {
    margin:0px;
    padding:10px;
    overflow-y:auto;
}
.freeCoding-contents > div {
    background-color:;
    height:100%;

}
.freeCoding-result {
    margin:0px;
    padding:15px 15px 15px 15px;
    background-color:black;
    color:white;
    font-weight:bold;
    height:100px;
    overflow-y:auto;
}
.freeCoding-files {
    padding:0px;
    margin:0px;
    font-weight:bold;
}
.freeCoding-files p {
    padding-top:1px;
}
</style>
  
<script>
$(document).ready(function(){
    var windowHeight = $(window).height();
    $('.freeCoding-editor').css('height',(windowHeight - 200) +'px');
    $('.freeCoding-contents').css('height',(windowHeight - 100) +'px');
    $('.freeCoding-saveBtn').click(function(){
            var filename = $('.file-name').val();
            var len = filename.length;
            if( len == 0 )
            {
                alert("파일이름을 입력하세요!");
            }
            else if( len >= 30 )
            {
                alert("파일이름은 30자 이하로 입력하세요!");
            }
    });

function setupContents(){
    $.ajax({
        type : "GET",
        url : "<?=base_url()?>index.php/quiz/showFiles",
        contentType : "application/json; charset=utf-8",
        dataType : "json",
        data :"" ,
        error : function() {
            alert("error");
        },
        success : function(files) {
            var result = '<table class="table"><tbody>';
            for( i in files)
            {
                result += '<tr>' 
                          + '<td>' + '<p class="file">' + files[i] + '</p>' + '</td>'
                          + '<td>' + '<a class="btn btn-success btn-small" data-in="'+ files[i] +'">불러오기</a>' + '</td>'
                          + '<td>' + '<a class="delet-btn btn btn-danger btn-small"  data-in="'+ files[i] +'">삭제</a>' + '</td>'
                          + '</tr>'; 
            }
            result += '</tbody></table>';
            $('.freeCoding-files').html(result);
       }
    });
}
function setupEvents(){
     $('.file').live('click',function(){
         $('.file-name').val($(this).html()); 
     });
     $('.delet-btn').live('click',function(){
          var target = $(this).attr('data-in');
          $.ajax({
            type : "GET",
            url : "<?=base_url()?>index.php/quiz/deletFile",
            contentType : "application/json; charset=utf-8",
            dataType : "json",
            data :"fname="+target ,
            error : function() {
                alert("error");
            },
            success : function() {
                alert('success'); 
                setupContents();
                setupEvents();
            }
        });
     });
}
    setupContents();
    setupEvents();

});
</script>
<div class="freeCoding-navbar row">
<form id="codingQuiz" method="post">
    <div class="col-lg-4">
        <div class="input-group">
            <input type="text" class="file-name form-control" placeholder="파일명" value="">
            <span class="input-group-btn">
                <button class="freeCoding-saveBtn btn btn-info" type="button"> 저 장  </button>
            </span>
        </div>
    </div>
    <div class="col-lg-4">
    </div>
    <div class="col-lg-4">
        <a class="btn btn-warning" id="compile" name="compile">Compile</a>
    </div>
</div>
<div class="freeCoding row">
    <div class="col-lg-4">
        <div class="freeCoding-contents row">
            <div class="col-lg-12 freeCoding-files">
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="freeCoding-editor row">
            <div id="headDiv">
                <textarea class="form-control" id="head" name="head"><?=$mainCodeHead?></textarea>
            </div>

            <div id="codeDiv">
                <textarea class="form-control" id="code" name="code" placeholder="Code goes here"></textarea>
            </div>

            <div id="tailDiv">
                <textarea class="form-control" id="tail" name="tail"><?=$mainCodeTail?></textarea>
            </div>
        </div>
        <div class="freeCoding-result row">
            <div id="result">
            </div>
        </div>
    </div>
</form>
</div>


