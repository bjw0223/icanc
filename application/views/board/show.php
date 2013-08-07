<style>

</style>
<div id="faq" class="col-lg-9" style="margin-top:30px;background-color:#eeeeee;">

<?php
	$data=$list[0];
?>		
        <div class="row" style="padding:5px;">
            <div class="col-lg-12" style="min-height:50px;background-color:white;">
                <p class="col-lg-10" style="font-size:28px;font-weight:bold;"><?=$data->title?></p>
                <p class="col-lg-2 pull-right"><?//=$data->modified_time?>임시</p>
            </div>
        </div>
        <div class="row" style="padding:5px;">
            <div class="col-lg-12" style="min-height:35px;background-color:white;">
                <p class="col-lg-8">작성자 : <?=$data->writer?></p>
                <p class="col-lg-2">조회수 : <?=$data->hits?></p>
                <p class="col-lg-2">추천수 : <?=$data->goods?></p>
            </div>
        </div>
        <div class="row" style="padding:5px;">
            <div class="col-lg-12" style="overflow:auto;min-height:350px;background-color:white;">
                <?=$data->text?>
            </div> 
        </div>
        <div class="row" style="padding-top:5px;padding-bottom:5px;">
            <div class="col-lg-11">
                <button type="button" class="btn btn-info">좋아요 <?=$data->goods?></button>
            </div>
            <div class="col-lg-1">
                <button type="button" class="btn"><i class="icon-reorder icon-large"></i></button>
            </div>
        </div>
        
</div>


<!-- -->
</div>
</div>
<!-- -->
