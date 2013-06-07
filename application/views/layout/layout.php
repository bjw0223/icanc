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
        <script type="text/javascript" src="/asset/lib/tinymce/js/tinymce/tinymce.min.js"></script>
                  <script type="text/javascript">

          $(document).ready(function() {
                $('#text').load("/index.php/text/text");
                $('#console').load("/index.php/console/console");
                $('#myTab > li').click(function(){
                   var id = $(this).attr('id');
                   $('.tapDecript').load("/index.php/"+id+"/"+id);

                });
                $('#loginBtn').click(function(){
                    //check id pw
                    //id string + @ + string
                    //pw 7~16 and html check help()class use 
                    var $data = $('#inputId').attr('value');
                    window.alert($data); 
                });
          });
          </script>
    </head>
    <body >
    <div class="navbar" style="font-size:20px;margin-top:50px;">
        <div class="navbar-inner navbar-fixed-top" >
<!-- Button to trigger modal -->
            <a href="#myModal" role="button" class="btn" data-toggle="modal"><span style="color:#898989;">LOGIN</span></a>
            <a class="brand" style="color: #ddd; font-weight: bold;"><span style="color:#898989;">I Can C</span> <small>for help to study C</small>
            </a>
        </div>
    </div>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
<!--        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
        <h3 id="myModalLabel" style="color: #ddd; font-weight: bold;"><span style="color:#898989;">I Can C</span></h3>
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
                </div>
            </div>
        </div>
    </div>
<!--<div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button> 
        <button class="btn btn-primary">회원가입</button>
        <button class="btn btn-primary">로그인</button>
    </div> -->
</div>

<!-- Modal End-->
    <div class="row-fluid">
        <div class="span12" style="background-color:gray">
        <div class="row-fluid">
<!-- head end -->
<!-- body start -->
    <!-- body left up start -->
            <div class="span7" style="background-color:red">

                <div class="row-fluid">
                    <div id="text" class="span12" style="background-color:green">
                    
                    </div>
                </div> 
    <!-- body left up end -->
    <!-- body left down start -->
                <div class="row-fluid">
                    <div id="console" class="span12" style="background-color:yellow">...</div>
                </div> 

            </div>
    <!-- body left down end -->
    <!-- body right start -->

            <div class="span5" style="background-color:white">
            <!-- -->
                <div class="tabbable"> <!-- Only required for left/right tabs -->
                      <ul id="myTab" class="nav nav-tabs">
                          <li id="stackMemory" class="active"><a href="" data-toggle="tab">StackMemory</a></li>
                          <li id="simbolTable" ><a href="" data-toggle="tab">SimbolTable</a></li>
                          <li id="help" ><a href="" data-toggle="tab">Help</a></li>
                      </ul>
                    <div class="tapDecript">
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

    <div class="row-fluid">
        <div class="span12" style="background-color:black">...</div>
    </div>

    <script src="/asset/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>
<!-- footer end -->
