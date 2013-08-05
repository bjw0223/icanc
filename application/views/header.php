<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="<?=base_url();?>asset/lib/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen"> 
        <link href="<?=base_url();?>asset/lib/bootstrap/dist/css/docs.css" rel="stylesheet" media="screen"> 
        <!--<link href="<?=base_url();?>asset/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">-->

        <script src="<?=base_url();?>asset/lib/jquery/js/jquery-1.8.3.js"></script>
        <script src="<?=base_url();?>asset/lib/jquery/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="<?=base_url();?>asset/lib/bootstrap/js/dropdown.js"></script>
        <script src="<?=base_url();?>asset/lib/bootstrap/js/scrollspy.js"></script>
<!-- highlight -->
        <script type="text/javascript" src="<?=base_url();?>asset/lib/syntaxhighlighter/scripts/shCore.js"></script>
        <script type="text/javascript" src="<?=base_url();?>asset/lib/syntaxhighlighter/scripts/shBrushCpp.js"></script>
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/lib/syntaxhighlighter/styles/shCoreDefault.css">
        <!--<script type="text/javascript" src="<?=base_url();?>asset/lib/tinymce/js/tinymce/tinymce.min.js"></script>-->
<!--  codemirror -->
        <script src="<?=base_url();?>asset/lib/codemirror/lib/codemirror.js"></script>
        <link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/lib/codemirror.css">
        <script src="<?=base_url();?>asset/lib/codemirror/mode/javascript/javascript.js"></script>
        <script src="<?=base_url();?>asset/lib/codemirror/addon/edit/matchbrackets.js"></script>
        <script src="<?=base_url();?>asset/lib/codemirror/mode/clike/clike.js"></script>
     <!--   <link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/doc/docs.css"> -->

        <script type="text/javascript">
        $(document).ready(function() {
                $('#referenceBody').hide('');
                var postSelecter = null;
            $('.contents_list').click(function(){
                if(postSelecter){
                postSelecter.removeClass('active').addClass('inactive');
                }
                var path = $(this).attr("data-in");
                postSelecter = $(this).parent();
                $(this).parent().removeClass('inactive').addClass('active');
                $('#description').load("<?=base_url();?>index.php/main/show/"+path);
            });
            $('.reference_btn').click(function(){
                $('#reference').toggle('blind');
            });
            $('#reference').hide();
            $('#function_description > .desc').hide();

            $('#refSearchBtn').click(function(){
                $('#referenceBody').show('blind');
                var fname= $("#refSearch").val();
                $.ajax({
                    type : "GET",
                    url : "reference/show",
                    contentType : "application/json; charset=utf-8",
                    dataType : "json",
                    data : "fname=" + fname,
                    error : function() {
                        alert("error");
                    },
                    success : function(data) {
                        if( data.name != null) {
                        $('#referenceCode').html(data.code);
                        $('#refName').html(data.name);
                        $('#refHeader').html(data.header);
                        $('#refForm').html(data.form);
                        $('#refParameter').html(data.parameter);
                        $('#refReturn').html(data.return);
                        $('#refTip').html(data.tip);
                        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                            lineNumbers: true,
                            matchBrackets: true,
                            mode: "text/x-csrc"
                        });
                        $('#referenceContents').hide('blind');
                        }
                    }
                });
            });

       

            $('.refBtn').click(function(){
                $('#referenceBody').show('blind');
                var fname= $(this).attr("data-in");
                $.ajax({
                    type : "GET",
                    url : "reference/show",
                    contentType : "application/json; charset=utf-8",
                    dataType : "json",
                    data : "fname=" + fname,
                    error : function() {
                        alert("error");
                    },
                    success : function(data) {
                        if( data.name != null) {
                        $('#referenceCode').html(data.code);
                        $('#refName').html(data.name);
                        $('#refHeader').html(data.header);
                        $('#refForm').html(data.form);
                        $('#refParameter').html(data.parameter);
                        $('#refReturn').html(data.return);
                        $('#refTip').html(data.tip);
                        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                            lineNumbers: true,
                            matchBrackets: true,
                            mode: "text/x-csrc"
                        });
                        $('#referenceContents').hide('blind');
                        }
                    }
                });
            });

            $('.reference').click(function(){
                var name= $(this).attr("data-in");
                $('#function_description > .desc').load("<?=base_url()?>index.php/main/reference/"+name);
                $('#function_contents').hide('slide');
                $('#function_description > .desc').show('blind');
            });
            <?php 
                 if($this->session->userdata('is_login') === true )
                 {
            ?>
                    $('#login_div').hide();
                    $('#logout_div').show();
            <?php
                 }
                 else
                 {
            ?>
                    $('#logout_div').hide();
                    $('#login_div').show();
            <?php     
                 }
            ?>
            //<![CDATA[
            SyntaxHighlighter.config.bloggerMode = true;
            SyntaxHighlighter.all();
            //]]>
            //tinymce.init({
            //    selector: "textarea"
            // });
        /*
            var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                lineNumbers: true,
                matchBrackets: true,
                mode: "text/x-csrc"
            });
*/
        // 년 입력
        $("#listYear > li").click(function(){
            $("#year").val(this.value);    
        });
        
        // 월 입력
        $("#listMonth > li").click(function(){
            $("#month").val(this.value);    
        });
        
        // 일 입력
        $("#listDay > li").click(function(){
            $("#day").val(this.value);    
        });
        
        // 직업 입력
        $("#listJob > li").click(function(){

            switch( this.value )
            {
                case 0 : $("#job").val("초등학생");
                         break;
                case 1 : $("#job").val("중학생");
                         break;
                case 2 : $("#job").val("고등학생");
                         break;
                case 3 : $("#job").val("대학생");
                         break;
                case 4 : $("#job").val("대학원생");
                         break;
                case 5 : $("#job").val("회사원");
                         break;
                case 6 : $("#job").val("자영업");
                         break;
                case 7 : $("#job").val("무직");
                         break;
                case 8 : $("#job").val("우여명ㅂㅅ");
                         break;
                case 9 : $("#job").val("기타");
                         break;
            }
        });
        

        });
        </script>
        <style type="text/css">
#referenceCode .CodeMirror{
    height:500px;
}
        body {
            overflow-x:hidden;
        }
    #reference{
        background-color:#4c4c4c;
    }
    #referenceContents{
        background-color:#555555;
    }
    .referenceDesc{
        margin-top:10px;
        padding-right:50px;
    }
    .referenceDescbg{
        padding:10px;
    }
    .referenceDescDiv{
        background-color:gray;
    }
 	.tutorial_desc{
	margin-top:30px;
	line-height:30px;	
	}
	.tutorial_desc .title{
	   font-size:32px;
	   font-weight:bold;
	}
	.tutorial_desc .subTitle{
	   font-size:24px;
	}
	.tutorial_desc .general > li{
	   font-size:18px;
	}
	.tutorial_desc .general{
	   font-size:18px;
	}
	.tutorial_desc .general_sub1{
	   text-indent:30px;
	   font-size:17px;
	}
	.tutorial_desc .general_sub2{
	   font-size:16px;
	   color:"#989898";
	}
	.tutorial_desc .blue{
	   color:blue;
	}
	.tutorial_desc .red{
	   color:red;
	}
       #basicinfomodify .active {
            padding-left:20px;
            font-weight:bold;
       }
       #register .active {
            padding-left:20px;
            font-weight:bold;
       }



       #reference .bs-sidenav {
           text-shadow:none;
           background-color:gray;
           line-height:1px;
           margin-left:40px;
           margin-top:10px;
           margin-bottom:10px;
           margin-right:5px;
       }
       #reference .bs-sidenav > li > a {
           color:white;
           font-weight:bold;
           margin-left:10px;
       }
       #reference .bs-sidenav > li > a:hover {
           font-size:15px;
       }


/*
       #reference{
            font-weight:bold;
            margin-top:40px;
            padding-top:10px;
            padding-bottom:0px;
            padding-left:8px;
            background-color:#303030;
        }
        #reference .span2{
            color:#CCCCCC;
        }
        .reference{
            color:#CCCCCC;
            line-height:0px;
            font-size:9px;
        }
        #reference div li a:hover{
            background-color:inherit;
            font-size:13px;
            color:yellow;
        }
        #reference h5{
            color:#FFFFFF;
        }
        td{
            border-width:0px;
        }
        table{
            border-width:0px;
        }   
        .logo:hover{
            color:yellow;
            text-shadow:0 -1px 0 yellow;
        }
        #logout_div b{
            color:#FFFFFF;
            margin-right:20px;
        }
    
        .my_contents li.selected{
            background-color:rgba(10,55,240,.75);
        }
        .my_contents li.selected :hover{
            background-color:rgba(10,55,240,.75);
        }
        .my_contents li.selected a{
            color:white;
        }
        .my_sidebar{
            margin-top: 30px;
            margin-bottom: 30px;
            padding-top:    10px;
            padding-bottom: 10px;
            text-shadow: 0 1px 0 #fff;
            background-color: #f7f5fa;
            border-radius: 5px;
        }
        .my_sidebar .nav > li > a {
            display: block;
            color: #716b7a;
            padding: 5px 20px;
        }
        .my-sidebar .nav > li > a:hover,
        .my-sidebar .nav > li > a:focus {
            text-decoration: none;
            background-color: #e5e3e9;
            border-right: 1px solid #dbd8e0;
        }
        .my-sidebar .nav > .active > a,
        .my-sidebar .nav > .active:hover > a,
        .my-sidebar .nav > .active:focus > a {
            font-weight: bold;
            color: #563d7c;
            background-color: transparent;
            border-right: 1px solid #563d7c;
        }

        .my-sidebar .nav .nav {
            display: none;
            margin-bottom: 8px;
        }
        .my-sidebar .nav > .active > ul {
            display: block;
        }
        .my-sidebar .nav .nav > li > a {
            padding-top:    3px;
            padding-bottom: 3px;
            padding-left: 30px;
            font-size: 90%;
        }
*/
        </style>

        <title></title>
        <script type="text/javascript" src="<?=base_url();?>asset/lib/tinymce/js/tinymce/tinymce.min.js"></script>
    </head>
    <body>
    <!--세션 플래시의 메세지 --!>
    <?php
        if( $this->session->flashdata('message'))
        {
?>

    <script>
        alert('<?=$this->session->flashdata('message')?>');
    </script>
<?php
        }
    ?>
    <!-- 세션 플래시 메시지 끝 --!>
    

