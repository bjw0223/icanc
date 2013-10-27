<style>
/*
.bs-sidebar .nav > .active > a, .bs-sidebar .nav > .active:hover > a, .bs-sidebar .nav > .active:focus > a {
font-weight: bold;
color: #36545F;
background-color: transparent;
border-right:0px solid #563d7c;
}
*/
</style>

<script>
$(window).scroll(function(){
    //alert($("#tutorial_contents").css(''));
    if($(document).scrollTop() > 100){
    
        $("#tutorial_contents").css({
            position: 'fixed',
            top:'100px'
        });

    }
    else
    {
        $("#tutorial_contents").css({
            position: '',
            top:'auto'
        });
        

    }
    //$("#tutorial_contents").css({
    //    top: $(document).scrollTop()+ 50 +'px',
    //    left: 'auto'
        //left: ($(window).width() )/2.6 + 'px'
    //});
});
/*
   $(document).ready(function(){
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
*/

</script>
<div class="container bs-docs-container" style="">
<div class="row"> 

<div id="tutorial_contents" class="col-lg-3 col-sm-3" >
    <div class="bs-sidebar well" style="padding:10px;">
       <ul class="nav bs-sidenav"> 
            <li class="active">
                <a class="nav-title" href="#">Lecture</a>
            </li>
<!--
            <li class="">
                <a class="nav-title" href="#">Reference</a>
            </li>  
            <li class="">
                <a class="nav-title"href="#">Quiz</a>
            </li>
            <li class="">
                <a class="nav-title"href="#">Freecoding</a>
            </li>
            <li class="">
                <a class="nav-title"href="#">Board</a>
            </li>
            <li class="">
                <a class="nav-title"href="#">Mypage</a>
            </li>
-->
        </ul>
    </div>
</div>


