<style>
.title{
    text-transform: uppercase;
    font-size:40px;
    font-weight:bold;
    margin-bottom:40px;
    margin-top: 40px;
    color: #36545F;
    margin-left:20px;
}
.bs-sidenav {
    margin-top:0px;
}
</style>

<script>
$(window).scroll(function(){
    var $width = $(".bs-sidebar").css('width');
    var refHeight = $('#referenceDev').height();
    var docScrollTop = $(document).scrollTop();

    if(docScrollTop > 160 + refHeight)
    {
        $(".bs-sidebar").css({
            position: 'fixed',
            top: 80 + 'px',
            width: $width
        });
    }
    else if(docScrollTop <= 170 + refHeight)
    {
        $(".bs-sidebar").css({
            position: 'relative',
            top:'auto'
        });
    }
});
</script>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="title">
            <?=$selected?>
            </div>
        </div>
    </div>
</div>
<div class="well"></div>

<div class="container bs-docs-container" style="maring:0px">
<div class="row"> 

<div id="tutorial_contents" class="col-lg-3 col-sm-3" >
    <div class="bs-sidebar" style="padding:10px;">

       <ul class="nav bs-sidenav"> 
            <li class="<?=$selected=='tutorial'?'active':''?>">
                <a class="nav-title" href="<?=base_url();?>index.php/start/overview/tutorial">Tutorial</a>
            </li>
            <li class="<?=$selected=='freecoding'?'active':''?>">
                <a class="nav-title" href="<?=base_url();?>index.php/start/overview/freecoding">Free Coding</a>
            </li>  
            <li class="<?=$selected=='reference'?'active':''?>">
                <a class="nav-title" href="<?=base_url();?>index.php/start/overview/reference">Reference</a>
            </li>
            <li class="<?=$selected=='quiz'?'active':''?>">
                <a class="nav-title" href="<?=base_url();?>index.php/start/overview/quiz">Quiz</a>
            </li>
        </ul>

    </div>
</div>


