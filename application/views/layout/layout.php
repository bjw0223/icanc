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
        
        <script src="http://comments.skplanetx.com/script/plugin.js"></script>
        <script src="/asset/js/checkForm.js"></script>

        <title></title>
        <script type="text/javascript" src="/asset/lib/tinymce/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">

          $(document).ready(function() {
                  var footer = $('#footer').offset().top; 
                  var bRight = $('#body_right').offset().top; 
                  var rightHeight = footer-bRight; 
                  $('#body_right').height(rightHeight);
                  $('#body_left').height(rightHeight);
                  $('#text').height(rightHeight*2/3);
                  $('#console').height(rightHeight*1/3);

                  $(window).resize(function(){
                      var footer = $('#footer').offset().top; 
                      var bRight = $('#body_right').offset().top; 
                      var rightHeight = footer-bRight; 
                      $('#body_right').height(rightHeight);
                      $('#body_left').height(rightHeight);
                      $('#text').height(rightHeight*1/3);
                      $('#console').height(rightHeight*1/3);
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

                $('#open_btn').click(function() {
                    $('#openbody').load("/index.php/file/file/openfile"); 
                });
                $('#save_btn').click(function() {
                    $('#savebody').load("/index.php/file/file/savefile"); 
                });
                $('#compileBtn').click(function() {
                        /*
                   var data = tinyMCE.activeEditor.getDoc().body.innerHTML; 
                   data = data.replace(/<p>/g,"");
                   data = data.replace(/&nbsp;/g,"");
                   data = data.replace(/ /g,    "_");//1    
                   data = data.replace(/<\/p>/g,"__");//2
                   data = data.replace(/&gt;/g, "-_-");//3
                   data = data.replace(/&lt;/g, "-__-");//4
                   data = data.replace(/\(/g,   "-___-");//5
                   data = data.replace(/\)/g,   "-____-");//6
                   data = data.replace(/#/g,    "-_____-");//7
                   data = data.replace(/\{/g,   "-______-");//8
                   data = data.replace(/\}/g,   "-_______-");//9
 
                   $('#deleted').load("/index.php/file/file/tempupload?data="+data); 
*/
                   $('#console').load("/index.php/exec");
                });
                $('#runBtn').click(function() {
                    $('#savebody').load("/index.php/file/file/savefile"); 
                });
      <?php
    if( $this->session->userdata('is_login'))
{
?>
    
                $('#login_Btn').hide();
                $('#file_Btn').show();
                $('#compileBtn').show();
                $('#runBtn').show();
<?php
}
else
{
?>
                $('#logoutBtn').hide();
                $('#file_Btn').hide();
                $('#compileBtn').hide();
                $('#runBtn').hide();

<?php
}
?>
          $('#logoutBtn').click(function() {
                    $('#login_Btn').show();
                    $('#logoutBtn').hide();
                    $('#file_Btn').hide();
                    $('#compileBtn').hide();
                    $('#runBtn').hide();
                });
});
         </script>
    </head>
    <body >
    <div class="navbar" style="font-size:20px;margin-top:50px;">
        <div class="navbar-inner navbar-fixed-top" >
<!-- Button to trigger modal -->
            <a id="login_Btn" href="#myModal" role="button" class="btn" data-toggle="modal"><span style="color:#898989;">LOGIN</span></a>
            <div class="btn-group">
            <a id="file_Btn" class="btn dropdown-toggle" data-toggle="dropdown" href="#" style="color:#898989;">
            FILE
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
            <!-- dropdown menu links -->
            <li><a href="#openModal" role="button" data-toggle="modal" id="open_btn"><i class="icon-folder-open"></i> Open</a></li>
            <li><a href="#saveModal" rele="button" data-toggle="modal" id="save_btn"><i class="icon-folder-close"></i> Save</a></li>
            </ul>
            </div>
            <a id="compileBtn" href="" role="button" class="btn" data-toggle="modal"><span style="color:#898989;"> COMPILE</span></a>
            <a id="runBtn" href="#" role="button" class="btn" data-toggle="modal"><span style="color:#898989;"> RUN</span></a>
            <a id="logoutBtn" href="/index.php/member/auth/logout/" role="button" class="btn" data-toggle="modal"><i class="icon-off"></i><span style="color:#898989;"> LOGOUT</span></a>
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
            <form class="form-horizontal" action="/index.php/member/auth/authentication" method="post">
                        <input type="text" id="email" name="email" placeholder="아이디" style="width:90%;height:30px;">
                        <input type="password" id="password" name="password" placeholder="비밀번호" style="width:90%;height:30px;">
                       
			</div>
                        
            <!--Body content-->
		
			<div class="span4" >
                        <button id="loginBtn" type="submit" class="btn" style="width:100%;height:90px;color:#898989;">
				<span style="font-size:20px;font-weight:bold;">로그인</span>
			</button>
                        </div>
		 </form>
                    </div>
                  <div style="margin-top:2px" >
                    	<a href="/index.php/member/auth/register" id="register" type="text" style="font-weight:bold;color:#898989;">
				회원가입</a>
		   	<a href="/index.php/member/auth/register" id="register" type="text" style="margin-left:10px;font-weight:bold;color:#898989;">
				아이디/비밀번호 찾기</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal End-->

<!-- Modal -->
<div id="openModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:800px;height:500px;left:550px">

    <div class="modal-header" style="margin-top:5px;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <span style="margin-left:25px;color:#898989;font-weight:bold;font-size:30px;">Open File</span>
    </div>
    <div id="openbody" class="modal-body" >
    </div>
    <div id="openfooter"class="modal-footer" >
    </div>
</div>

<!-- Modal End-->

<!-- Modal -->
<div id="saveModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:800px;height:500px;left:550px">

    <div class="modal-header" style="margin-top:5px;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <span style="margin-left:25px;color:#898989;font-weight:bold;font-size:30px;">Save File</span>
    </div>
    <div id="savebody" class="modal-body" >
    </div>
    <div id=""class="modal-footer" >
        <div class="input-prepend input-append">
            <span class="add-on">파일명</span>
            <input id="file_name" class="span2" id="appendedPrependedInput" type="text">
            <span class="add-on">.C</span>
            <button id="saveFileBtn" class="btn" type="button">SAVE</button>
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
                    <div id="console" class="span12" style="background-color:yellow"></div>
                </div> 

            </div>
    <!-- body left down end -->
    <!-- body right start -->

            <div id="body_right" class="span5" style="height:600px;border-left-style:solid;border-left-color:#ddd;border-left-width:1px;background-color:white">
            <!-- -->
                <div class="tabbable"> <!-- Only required for left/right tabs -->
                      <ul id="myTab" class="nav nav-tabs">
                          <li id="stackMemory" class="active"><a href="" data-toggle="tab" style="color:#898989;font-weight:bold;" >STACK MEMORY</a></li>
                          <li id="simbolTable" ><a href="" data-toggle="tab"  style="color:#898989;font-weight:bold;">SIMBOL TABLE</a></li>
                          <li id="help" ><a href="" data-toggle="tab"  style="color:#898989;font-weight:bold;">HELP</a></li>
                      </ul>
                    <div class="tapDecript" style="height:450px;overflow-y:auto;" >
                    </div>
                </div>
                <div id="comment_plugin" style="height:180px;position:static;overflow-y:auto;">
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
