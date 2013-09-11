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
    
    var regExp = /((main|gets|getc)\s*\()|(goto\s*\:)/;
    
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
        var $stdin = document.getElementById("stdin").value;
        
        $("#myModal").css('top',($(window).height()/2-70) +"px");
        $("#myModal").modal("show");
        $code.save();

        var $headStr = document.getElementById("head").value;
        var $codeStr = document.getElementById("code").value;
        var $tailStr = document.getElementById("tail").value;
        
        // 반복문, 선택문, goto 문 사용 불가 정규식 판별
        if( ($checkCodeStr = regExp.exec($codeStr)) != null )
        {
            // 사용불가 알림창 표시위한 공백 및 'i', ':' 제거
            $("#myModal").modal("hide");
            $codeStr = $checkCodeStr[0].replace("(","");
            $codeStr = $codeStr.replace(":","");
            $codeStr = $codeStr.replace(/^\s*|\s*$/g,"");
            
            alert($codeStr+"문은 사용할 수 없습니다"); 
        }
        else
        {
            // code textarea 특수문자 처리
            $codeStr = encodeURIComponent($codeStr);
            $stdin = encodeURIComponent($stdin);
            $.ajax({
                    type : "POST",
                    url : "<?=base_url()?>index.php/compiler/createCode",
                    data : "code="+$codeStr+"&flag=1&stdin="+$stdin,
                    dataType : "json",
                    success : function($result) {
                                var $codeResult= "";
                                for (var $value in $result) 
                                {
                                    $codeResult = $codeResult + $result[$value];
                                }
                                        $("#myModal").modal("hide");
                                        $(".quiz-result-desc").html("COMPILE RESULT<br/><br/>"+$codeResult);

                            },
                    error : function() {
                                        $("#myModal").modal("hide");
                                alert("Time Over");
                    }
                    });
        }
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
        
    $('.quiz-result').css('height',$('.quiz-right-desc').height());
    $('.quiz-error').css('left',$('.quiz-middle-bar').offset().left);
    $('.quiz-error').css('bottom',$(window).height() - $('.quiz-middle-footer').offset().top);
    $('.quiz-error').css('min-height',70);
    $('.quiz-error').css('width',$('.quiz-middle-bar').width());
}
</script>

<style>
body {
    overflow-y:hidden;
    padding-top:30px;
}
.my-footer-logo {
    height:30px;
    line-height:30px;
    font-size:20px;
    font-weight:bold;
    text-align:right;
    color:rgb(37, 35, 35);
    background-color:#e6e6e6;
}
.my-footer-logo>a {
    color:rgb(37, 35, 35);
}
.quiz-left-footer {
    height:40px;
}
.quiz-left-bar,.quiz-middle-bar,.quiz-right-bar {
    height:40px;
    background-color:#1F1D1D;
    border-bottom: 1px solid #000000;
    text-align:center;
    font-size: 18px;
    line-height: 40px;
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
            $('.coding-files').html(result);
       }
    });
}
function setupEvents(){
     $('.file').live('click',function(){
         $('.file-name').val($(this).html()); 
     });
     $('.delet-btn').live('click',function(){
          var target = $(this).attr('data-in');
          alert(target);
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
                setupContents();
            }
        });
     });
}
    setupContents();
    setupEvents();

});
</script>

    <div class="modal fade" id="myModal">
        <div class="compile-waiting">
                <i class="icon-spinner icon-spin"></i>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<div class="row">
    <div class="quiz-left col-lg-3 col-sm-3">
        <div class="quiz-left-div row">
            <div class="quiz-left-bar col-lg-12 col-sm-12">
                <p class="quiz-id"></p>
            </div>
            <div class="quiz-left-desc col-lg-12 col-sm-12">
                <div class="coding-files">
                </div>
                <div class="coding-help col-lg-12 col-sm-12">
                    <p><b> 도움말 </b></p>
                    <small>
                        <p><b>stdin은 ','로 각각을 구분합니다.</b></p>
                        <p>ex) a,b,1 - 세개의 char형 a,b,1이 차례대로 stdin으로 입력되어 집니다.</p>
                        <p><b>또한 숫자의 경우 '#'을 붙여줌으로써 구분합니다.</b></p>
                        <p>ex) #1,#2 - 두개의 int형 1,2이 차례대로 stdin으로 입력되어 집니다.</p>
                    </small>
                </div>
                <div class="coding-input col-lg-12 col-sm-12">
                    <p><b> stdin : </b></p>
                    <input type="text" id="stdin" name="stdin" class="form-control"></input>
                </div>
            </div>
            <div class="quiz-left-footer col-lg-12 col-sm-12">
            </div>
        </div>
    </div>
    <div class="quiz-middle col-lg-5 col-sm-5">
        <div class="quiz-middle-div row">
            <div class="quiz-middle-bar col-lg-12 col-sm-12">
                <div class="row">
                    <div class="quiz-tap col-lg-2 col-sm-2">
                        <i class="icon-file-alt icon-large"></i>
                    </div>
                    <div class="quiz-tap-title col-lg-6 col-sm-6">
						Free Coding Editor
                    </div>
                    <div class="col-lg-6 col-sm-6"> 
                    </div>
                </div>
            </div>
            <div class="quiz-middle-desc col-lg-12 col-sm-12">
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
            <div class="quiz-middle-footer col-lg-12 col-sm-12">
                <button class="btn compileBtn" id="compile" name="compile"> Compile + Run </button>
                <button class="btn nextBtn" id="next" name="next"> Next Quiz </button>
            </div>
        </div>
   </div>
    <div class="quiz-right col-lg-4 col-sm-4">
        <div class="quiz-right-div row">
            <div class="quiz-right-bar col-lg-12 col-sm-12">
            </div>
            <div class="quiz-right-desc col-lg-12 col-sm-12">
                <div class="quiz-result">
                   <div class="quiz-result-desc">
                    </div>
                </div>
            </div>
            <div class="quiz-right-footer col-lg-12 col-sm-12">
            </div>
        </div>
    </div>

</div>
<div class="freecoding-footer">
        <div class="col-lg-12  col-sm-12 my-footer-logo">
            <a href="#">Design by icanc</a>
        </div>
</div>
