<!-- head start -->
<!DOCTYPE html>
<html>
    <head>

       
        <meta charset="utf-8"/>
<!--    <meta name="viewport" content="width=divice=width, initial-scale=1.0">  -->   
        <link href="/asset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
        <link href="/asset/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">

        <script src="/asset/lib/jquery/js/jquery-1.8.3.js"></script>
        <script src="/asset/lib/jquery/js/jquery-ui-1.9.2.custom.min.js"></script>
        
        <script src="/asset/js/checkForm.js"></script>

        <title></title>
<!--        <script type="text/javascript" src="/asset/lib/tinymce/js/tinymce/tinymce.min.js"></script> -->
        <script type="text/javascript">

          $(document).ready(function() {
                  var footer = $('#footer').offset().top; 
                  var bRight = $('#body_right').offset().top; 
                  var rightHeight = footer-bRight; 
                  $('#body_right').height(rightHeight);
                  $('#body_left').height(rightHeight);
                  $('#text').height(rightHeight/2);
                  $('#console').height(rightHeight/2);

                  $(window).resize(function(){
                      var footer = $('#footer').offset().top; 
                      var bRight = $('#body_right').offset().top; 
                      var rightHeight = footer-bRight; 
                      $('#body_right').height(rightHeight);
                      $('#body_left').height(rightHeight);
                      $('#text').height(rightHeight/2);
                      $('#console').height(rightHeight/2);
                  });

                $('#text').load("/index.php/text/text");
                $('#console').load("/index.php/console/console");
                $('#myTab > li').click(function(){
                   var id = $(this).attr('id');
                   //$('.tapDecript').load("/index.php/"+id+"/"+id);
                   if( id == "help" )
                   {
                        $('.tapDecript').load("/index.php/help/help/helpList");
                   }

                });
                $('#loginBtn').click(function(){
                    //check id pw
                    //id string + @ + string
                    //pw 7~16 and html check help()class use 
                    var $data = $('#inputId').attr('value');
                    window.alert($data); 
                });
                $('#open_btn').click(function() {
                    window.alert("open");
                });
                $('#save_btn').click(function() {
                    window.alert("save");
                });
          });
          </script>
    </head>
    <body >
    <div class="navbar" style="font-size:20px;margin-top:50px;">
        <div class="navbar-inner navbar-fixed-top" >
<!-- Button to trigger modal -->
            <a href="#myModal" role="button" class="btn" data-toggle="modal"><span style="color:#898989;">LOGIN</span></a>
            <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#" style="color:#898989;">
            FILE
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
            <!-- dropdown menu links -->
            <li><a id="open_btn"><i class="icon-folder-open"></i> Open</a></li>
            <li><a id="save_btn"><i class="icon-folder-close"></i> Save</a></li>
            </ul>
            </div>
            <a href="#" role="button" class="btn" data-toggle="modal"><i class="icon-off"></i><span style="color:#898989;"> LOGOUT</span></a>
            <a class="brand" style="color: #ddd; font-weight: bold;"><span style="color:#898989;">I Can C</span> <small>for help to study C</small>
            </a>
        </div>
    </div>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header" style="margin-top:10px">
<!--        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
            <a class="brand" style="font-size:30px;color: #ddd; font-weight: bold;"><span style="margin-left:25px;color:#898989;">I Can C</span> <small>for help to study C</small>
            </a>
    </div>
    <div class="modal-body">

        <div class="control-group">
            <div class="controls">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span8">
            <!--Sidebar content-->
                        <input type="text" id="inputId" placeholder="아이디" style="width:90%;height:30px;">
                        <input type="password" id="inputPassword" placeholder="비밀번호" style="width:90%;height:30px;">
                        </div>
                        <div class="span4" >
            <!--Body content-->
                        <button id="loginBtn" type="submit" class="btn" style="width:100%;height:90px;color:#898989;"><span style="font-size:20px;font-weight:bold;">로그인</span></button>
                        </div>
                    </div>
                    <div style="margin-top:5px" >
                    <a style="color: #898989; font-weight: bold;">회원가입</a><a style="margin-left:30px;color:#898989;font-weight:bold;">아이디/비밀번호찾기</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal End-->
    <div class="row-fluid">
        <div class="span12" >
        <div class="row-fluid">
<!-- head end -->
<!-- body start -->
    <!-- body left up start -->
            <div id="body_left" class="span7" style="background-color:red">

                <div class="row-fluid">
                    <div id="text" "span12" style="background-color:green"> 
                    
                    </div>
                </div> 
    <!-- body left up end -->
    <!-- body left down start -->
                <div id="body_left_down" class="row-fluid">
                    <div id="console" class="span12" style="background-color:yellow">...</div>
                </div> 

            </div>
    <!-- body left down end -->
    <!-- body right start -->

            <div id="body_right" class="span5" style="border-left-style:solid;border-left-color:#ddd;border-left-width:1px;background-color:white">
            <!-- -->
                <div class="tabbable"> <!-- Only required for left/right tabs -->
                      <ul id="myTab" class="nav nav-tabs">
                          <li id="stackMemory" class="active"><a href="" data-toggle="tab" style="color:#898989;font-weight:bold;" >STACK MEMORY</a></li>
                          <li id="simbolTable" ><a href="" data-toggle="tab"  style="color:#898989;font-weight:bold;">SIMBOL TABLE</a></li>
                          <li id="help" ><a href="" data-toggle="tab"  style="color:#898989;font-weight:bold;">HELP</a></li>
                      </ul>
                    <div class="tapDecript" >
                    </div>
                </div>
            </div>
            <!-- -->
            </div>
    <!-- body right end -->
<!-- body end -->
<!-- footer start -->
        </div>
        </div>
    </div>

    <div  class="row-fluid navbar">
        <div id="footer" class="sapn12 navbar-inner navbar-fixed-bottom"  >
<!-- Button to trigger modal -->
            <a class="brand" style="color: #ddd; font-weight: bold;"><span style="color:#ddd;">SINCE 2013</span></a>
        </div>
    </div>

    <script src="/asset/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>
<!-- footer end -->
