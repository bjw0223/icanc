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

        <title></title>
          <script type="text/javascript">

          $(document).ready(function() {
                $('#myTab > li').click(function(){
                   var id = $(this).attr('id');
                   $('.tapDecript').load("/index.php/"+id+"/"+id);

                });
          });
          </script>

    </head>
    <body >
    <div class="navbar" style="font-size:20px;margin-top:50px;">
        <div class="navbar-inner navbar-fixed-top" >
            <a class="brand" style="color: #ddd; font-weight: bold;"> <span style="color:#898989;">I Can C</span> <small>for help to study C</small>
            </a>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12" style="background-color:gray">
        <div class="row-fluid">
<!-- head end -->
<!-- body start -->
    <!-- body left up start -->
            <div class="span7" style="background-color:red">

                <div class="row-fluid">
                    <div class="span12" style="background-color:green">...</div>
                </div> 
    <!-- body left up end -->
    <!-- body left down start -->
                <div class="row-fluid">
                    <div class="span12" style="background-color:yellow">...</div>
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
