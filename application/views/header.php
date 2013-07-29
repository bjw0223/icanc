<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="<?=base_url();?>asset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
        <link href="<?=base_url();?>asset/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">

        <script src="<?=base_url();?>asset/lib/jquery/js/jquery-1.8.3.js"></script>
        <script src="<?=base_url();?>asset/lib/jquery/js/jquery-ui-1.9.2.custom.min.js"></script>
        
        <script src="http://comments.skplanetx.com/script/plugin.js"></script>
<!-- highlight -->
        <script type="text/javascript" src="<?=base_url();?>asset/lib/syntaxhighlighter/scripts/shCore.js"></script>
        <script type="text/javascript" src="<?=base_url();?>asset/lib/syntaxhighlighter/scripts/shBrushCpp.js"></script>
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/lib/syntaxhighlighter/styles/shCoreDefault.css">
        <!--<script type="text/javascript" src="<?=base_url();?>asset/lib/tinymce/js/tinymce/tinymce.min.js"></script>-->
<!--  codemirror -->
        <script src="<?=base_url();?>asset/lib/codemirror/lib/codemirror.js"></script>
        <link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/lib/codemirror.css">
        <link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/lesser-dark.css">
        <script src="<?=base_url();?>asset/lib/codemirror/mode/javascript/javascript.js"></script>
        <script src="<?=base_url();?>asset/lib/codemirror/addon/edit/matchbrackets.js"></script>
        <script src="<?=base_url();?>asset/lib/codemirror/mode/clike/clike.js"></script>
<!--   <link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/doc/docs.css"> -->
<!-- font-awesome -->

        <script type="text/javascript">
        $(document).ready(function() {
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
        });
        function formSubmit()
        {
            $('#editor_form').submit();
        }
        </script>
        <style type="text/css">
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
            /*text-shadow:0 0 0 yellow;*/
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
        </style>

        <title></title>
        <script type="text/javascript" src="<?=base_url();?>asset/lib/tinymce/js/tinymce/tinymce.min.js"></script>
    </head>
    <body>
    <!--로그인 실패시의 메세지 --!>
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
    <!-- 로그인 실패시 메시지 끝 --!>
    

