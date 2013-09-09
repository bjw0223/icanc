<style>

</style>
<div id="faq" class="col-lg-9 col-sm-9" style="margin:30px 0px 50px 0px;background-color:#eeeeee;">
        <div class="row well" style="padding:8px;margin-bottom:0px;">
            <div class="col-lg-12 col-sm-12" style="min-height:60px;background-color:white;">
                <div style="padding:10px 0px 0px 5px;">
                    <span class="col-lg-9 col-sm-9" style="font-size:28px;font-weight:bold;"><?=$data->title?></span>
                </div>
                <div style="padding:12px 10px 0px 0px;">
                    <p class="pull-right" style="font-weight:bold;"><?=$data->modified_time?></p>
                </div>
            </div>
        </div>
        <div class="row well" style="padding:8px;margin-bottom:0px;">
            <div class="col-lg-12 col-sm-12" style="min-height:35px;background-color:white;">
                <div class="col-lg-8 col-sm-8" style="padding:10px 0px 0px 20px;">
                    <p style="font-weight:bold;">작성자 : <?=$data->writer?></p>
                </div>
                <div  class="col-lg-2 col-sm-2" style="padding:10px 10px 0px 0px;">
                    <p class="pull-right" style="font-weight:bold;">조회수 : <?=$data->hits?></p>
                </div>
                <div  class="col-lg-2 col-sm-2" style="padding:10px 10px 0px 0px;">
                    <p class="pull-right" style="font-weight:bold;">추천수 : <?=$data->goods?></p>
                </div>
            </div>
        </div>
        <div class="row well" style="padding:8px;margin-bottom:0px;">
            <div class="col-lg-12 col-sm-12" style="padding:20px 30px 20px 30px;overflow:auto;min-height:350px;background-color:white;">
                <?=$data->text?>
            </div> 
        </div>
        <div class="row well" style="padding:8px;margin-bottom:0px;">
            <div class="col-lg-9 col-sm-9">
               	<button type="button" class="btn btn-info">좋아요 <?=$data->goods?></button>
            </div>
	 		<div class="col-lg-1 col-sm-1">
                <button type="button" class="btn"><i class="icon-pencil icon-large"></i></button>
            </div>
			<div class="col-lg-1 col-sm-1">
                <button type="button" class="btn"><i class="icon-trash icon-large"></i></button>
            <div class="col-lg-1 col-sm-1">
                <button type="button" class="btn"><i class="icon-reorder icon-large"></i></button>
            </div>
        </div>
        
</div>


<!-- -->
</div>
</div>
<!-- -->
