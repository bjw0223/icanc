<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href='http://fonts.googleapis.com/earlyaccess/nanumgothiccoding.css' rel='stylesheet' type='text/css'>
        <link href="<?=base_url();?>asset/lib/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen"> 
        <link href="<?=base_url();?>asset/lib/bootstrap/dist/css/docs.css" rel="stylesheet" media="screen"> 
        <!--<link href="<?=base_url();?>asset/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">-->

        <script src="<?=base_url();?>asset/lib/jquery/js/jquery-1.8.3.js"></script>
        <script src="<?=base_url();?>asset/lib/jquery/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="<?=base_url();?>asset/lib/bootstrap/js/dropdown.js"></script>
        <script src="<?=base_url();?>asset/lib/bootstrap/js/scrollspy.js"></script>
<!-- highlight -->
<!--
        <script type="text/javascript" src="<?=base_url();?>asset/lib/syntaxhighlighter/scripts/shCore.js"></script>
        <script type="text/javascript" src="<?=base_url();?>asset/lib/syntaxhighlighter/scripts/shBrushCpp.js"></script>
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/lib/syntaxhighlighter/styles/shCoreDefault.css">
-->

<!-- tinyMCE -->
        <script type="text/javascript" src="<?=base_url();?>asset/lib/tinymce/js/tinymce/tinymce.min.js"></script>
<!--  codemirror -->
        <script src="<?=base_url();?>asset/lib/codemirror/lib/codemirror.js"></script>
        <link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/lib/codemirror.css">
        <script src="<?=base_url();?>asset/lib/codemirror/mode/javascript/javascript.js"></script>
        <script src="<?=base_url();?>asset/lib/codemirror/addon/edit/matchbrackets.js"></script>
        <script src="<?=base_url();?>asset/lib/codemirror/mode/clike/clike.js"></script>
     <!--   <link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/doc/docs.css"> -->
<!--  fontawesome     -->
        <link href="<?=base_url();?>asset/lib/font-awesome/css/font-awesome.css" rel="stylesheet">

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

            $('.dropdown-toggle').dropdown();
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
            //SyntaxHighlighter.config.bloggerMode = true;
            //SyntaxHighlighter.all();
            //]]>
        /*
            var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                lineNumbers: true,
                matchBrackets: true,
                mode: "text/x-csrc"
            });
*/
     $('.nav-title').click(function(){
         $('.nav-title').parent().attr('class','');
         $('.nav-subtitle').parent().attr('class','');
         $('.nav-subCategory').parent().attr('class','');

         $(this).parent('li').attr('class', 'active');
         var load_href = $(this).attr('load-href');
         $('.tutorial_desc').load(load_href);
         $('.tutorial-title').load(load_href+"/true");
         SyntaxHighlighter.config.bloggerMode = true;
         SyntaxHighlighter.all();
    });
    $('.nav-subtitle').click(function(){
         $('.nav-title').parent().attr('class','');
         $('.nav-subtitle').parent().attr('class','');
         $('.nav-subCategory').parent().attr('class','');

         $(this).parent('li').attr('class','active');
         $(this).parent().parent().parent('li').attr('class','active');
         $(this).parent().parent().parent().parent().parent('li').attr('class','active');
         var load_href = $(this).attr('load-href');
         $('.tutorial_desc').load(load_href);
         $('.tutorial-title').load(load_href+"/true");
         SyntaxHighlighter.config.bloggerMode = true;
         SyntaxHighlighter.all();
    });
    $('.nav-subCategory').click(function(){
         $('.nav-title').parent().attr('class','');
         $('.nav-subtitle').parent().attr('class','');
         $('.nav-subCategory').parent().attr('class','');

         $(this).parent('li').attr('class','active');
         $(this).parent().parent().parent('li').attr('class','active');
            
         var load_href = $(this).attr('load-href');
         $('.lecture_desc').load(load_href);
         $('.lecture-title').load(load_href+"/true");

         SyntaxHighlighter.config.bloggerMode = true;
         SyntaxHighlighter.all();
    });


        });
        </script>
        <style type="text/css">
    ::-webkit-scrollbar {
            width: 11px;
    }
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
        -webkit-border-radius: 8px;
        border-radius: 8px;
    }
    ::-webkit-scrollbar-thumb {
        -webkit-border-radius: 8px;
        border-radius: 8px;
        background: #cccccc; 
        -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.5); 
    }
    ::-webkit-scrollbar-thumb:window-inactive {
        background: #cccccc; 
    }

.bs-sidebar .nav > .active > a, .bs-sidebar .nav > .active:hover > a, .bs-sidebar .nav > .active:focus > a {
font-weight: bold;
color: #36545F;
background-color: transparent;
border-right:0px solid #563d7c;
}
.navbar{
    background-color:#36545F;
}
.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus{
    background-color:#2C3E49;
}
.navbar-btn{
    background-color:#36545F;
    border:0px solid white;
}

.btn-start{
font-size:30px;
color:white;
border:1px solid white;
border-radius:6px;
padding:10px 30px 10px 30px;
}
.btn-start:hover{
background-color:white;
color:#36545F;

}
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
	.tutorial_main{
	     margin-top:40px;
         font-size:40px;
	     color:#36545F;
         font-weight:bold;
	}
	.tutorial_main_sub{
       font-size:18px;
	   font-family:"Helvetica Neue, Helvetica, Arial, sans-serif";
	   color:#36545F;
	}
	.division{
	   margin-top:40px;
	}
 	.tutorial_desc{
  	  /* margin-top:30px;*/
	   line-height:30px;	
	}
	.tutorial_desc .title{
	   font-size:32px;
	   font-weight:bold;
	}
	.tutorial_desc .general{
	   font-size:17px;
	   color:#36545F;
	}
	.tutorial_desc .general_sub{
       font-size:16px;
       color:#36545F;
    }
	.tutorial_desc .general_sub2{
	   font-size:15px;
	   color:"#36545F";
	}
	.tutorial_desc .general_sub3{
	   font-size:14px;
	   color:"#36545F";
	}
	.tutorial_desc .blue{
	   color:blue;
	}
	.tutorial_desc .red{
	   color:red;
	}
	.tutorial_desc .green{
	   color:green;
	}
	.tutorial_desc .purple{
	   color:purple;
	}
	.tutorial_desc .maroon{
	   color:maroon;
	}
       #list{
	    list-style:none;
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
        </style>

        <title></title>
    </head>
    <body style="font-family:Nanum Gothic Coding">
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
    

