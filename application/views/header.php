<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="<?=base_url();?>asset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
        <link href="<?=base_url();?>asset/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">

        <script src="<?=base_url();?>asset/lib/jquery/js/jquery-1.8.3.js"></script>
        <script src="<?=base_url();?>asset/lib/jquery/js/jquery-ui-1.9.2.custom.min.js"></script>
        
        <script src="http://comments.skplanetx.com/script/plugin.js"></script>
        <script>
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
                
        });
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
        </style>

        <title></title>
        <script type="text/javascript" src="<?=base_url();?>asset/lib/tinymce/js/tinymce/tinymce.min.js"></script>
    </head>
    <body>
    

