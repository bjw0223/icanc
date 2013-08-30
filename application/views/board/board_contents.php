<style>
.bs-sidenav {
    margin-top:0px;
}
</style>
<div class="container">
<div class="row"> 

<div id="board_contents" class="col-lg-3" >
<!-- -->
    <div class="bs-sidebar">
       <ul class="nav bs-sidenav"> 
        <li class="<?=$selected == 'faq' ? ' active' : '';?>">
            <a href="<?=base_url()?>index.php/board/blist/faq">
                FAQ 
                <i class="icon-chevron-right pull-right"></i>
            </a>
        </li>
        <li class="<?=$selected == 'qna' ? ' active' : '';?>">
            <a href="<?=base_url()?>index.php/board/blist/qna">
                Q&A 
                <i class="icon-chevron-right pull-right"></i>
            </a>
        </li>
		<li class="<?=$selected == 'free' ? ' active' : '';?>">
            <a href="<?=base_url()?>index.php/board/blist/free">
                Free Board 
                <i class="icon-chevron-right pull-right"></i>
            </a>
        </li>
    </ul>
    </div>

<!-- -->
</div>

