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
                $('#reference').hide();
                $('#referenceBody').hide('');
                $('#refSearchDiv').hide('');
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
/*reference Start*/
            $('.reference_btn').click(function(){
                $('#reference').toggle('blind');
                if( $(this).parent().attr('class') == 'active')
                {
                    $(this).parent().attr('class','');
                }
                else
                {
                    $(this).parent().attr('class','active');
                }
            });
            $('#showAllRefBtn').click(function(){
                $('#referenceContents').show('blind');
                $('#referenceBody').hide('blind');
                $('#refSearchDiv').hide('blind');
            });
            $('.refBtn').click(function(){
                var $name = $(this).attr("data-in");
                var $flag = false; 
                $('#referenceContents').hide('blind');
                getReference($name,$flag);   
            })
            $('#refSearchBtn').click(function(){
                var $name= $("#refSearch").val();
                var $flag = true; 
                getReference($name,$flag);   
            })

            function getReference($name,$flag)
            {
                $.ajax({
                    type : "GET",
                    url : "<?=base_url()?>index.php/reference/getReference",
                    contentType : "application/json; charset=utf-8",
                    dataType : "json",
                    data : "name=" + $name + "&flag=" + $flag,
                    error : function() {
                        alert("error");
                    },
                    success : function(data) {
                        if( data['total_rows'] == 0 ){
                            alert("검색결과없당");
                        }
                        else if( data['total_rows']  > 1 )
                        {
                            $('#refSearchDiv').show('blind');
                            $('#referenceContents').hide('blind');
                            $('#referenceBody').hide('blind');
                            var temp="<table class='table'><thead><tr><th>이름</th><th>헤더</th><th>형식</th></tr></thead><tbody>";
                            for( var i = 0 ; i < data['total_rows'] ; i++ )
                            {
                               temp+="<tr><td><a class='refBtn' data-in='" +data['data'][i].name+"'>"+data['data'][i].name+"</a></td><td>" +data['data'][i].header+"</td><td>" +data['data'][i].form+"</td></tr>";
                            }
                            temp+="</tbody></table>";
                            $('#refSearchDiv').html(temp);
                            $('.refBtn').click(function(){
                                var $name = $(this).attr("data-in");
                                var $flag = false; 
                                getReference($name,$flag);   
                                $('#refSearchDiv').hide('blind');
                            })

                        }
                        else
                        {
                            $('#referenceContents').hide('blind');
                            for( var i = 0 ; i < data['total_rows'] ; i++ )
                            {
                                $('#referenceBody').show('blind');
                                $('#referenceCode').html(data['data'][i].code);
                                $('#refName').html(data['data'][i].name);
                                $('#refHeader').html(data['data'][i].header);
                                $('#refForm').html(data['data'][i].form);
                                $('#refParameter').html(data['data'][i].parameter);
                                $('#refReturn').html(data['data'][i].return);
                                $('#refTip').html(data['data'][i].tip);
                                    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                                    lineNumbers: true,
                                    matchBrackets: true,
                                    mode: "text/x-csrc"
                                });
                            }
                        }
                    }
                });
            }

/*reference End*/
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
            SyntaxHighlighter.config.bloggerMode = true;
            SyntaxHighlighter.all();
            //]]>
        /*
            var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                lineNumbers: true,
                matchBrackets: true,
                mode: "text/x-csrc"
            });
*/
     $('.nav-title').click(function(){
        if( $(this).parent().attr('class') == 'active')
        {
            $(this).parent().attr('class','');
        }
        else
        {
            $('.bs-sidebar > ul > li > ul > li').attr('class','');
            $(this).parent().attr('class','active');
        }
    });
    $('.nav-subtitle').click(function(){
        $('.bs-sidebar > ul > li > ul > li').attr('class','');
        $(this).parent().parent().parent().attr('class','active');
        $(this).parent().attr('class','active');
    });
       

        });
        </script>
        <style type="text/css">
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
	}
	.tutorial_main_sub{
           font-size:18px;
	/*   font-weight:bold;*/
	   font-family:"Helvetica Neue, Helvetica, Arial, sans-serif";
	   color:#616060;
	}
	.division{
	   margin-top:40px;
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
	   text-indent:20px;
	   font-size:17px;
	}
	.tutorial_desc .general_sub1_1{
	   text-indent:40px;
	   font-size:17px;
	}
	.tutorial_desc .general_sub1_2{
	   text-indent:60px;
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
	.tutorial_desc .green{
	   color:green;
	}
	.tutorial_desc .purple{
	   color:purple;
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
    

