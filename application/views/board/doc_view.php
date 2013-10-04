<style>
#faq {
    padding:5px;
    border-radius:5px;
    border:1px solid #e3e3e3;
    margin-top:30px;
    margin-bottom:30px;
    color:#716b7a;
}
.title-block {
    padding:10px;
}
.title-block > div {
    padding-left:20px;
    padding-right:20px;
}
.title-block span {
    font-size:18px;
    font-weight:bold;
}
.text-block {
    padding:10px;
}
.text-block > div {
    padding: 10px 20px 10px 20px;
    border-top:1px solid #eeeeee;
    border-bottom:1px solid #eeeeee;
}
.text {
    overflow:auto;
}
</style>
<?php
	$uri_num=$this->uri->total_segments();
	
	$board=$this->uri->segment($uri_num-2);
	$page=$this->uri->segment($uri_num-1);
	$srl=$this->uri->segment($uri_num);
?>

<div id="doc_view" class="col-lg-9 col-sm-9">
        <div class="row">
            <div class="col-lg-12 col-sm-12 title-block">
                <div class="col-lg-9 col-sm-9">
                    <span><?=$data->title?></span>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <p class="pull-right"><?=$data->modified_time?></p>
                </div>
            </div>
        </div>
        <div class="row info-block">
            <div class="col-lg-12 col-sm-12 info-block">
                <div class="col-lg-8 col-sm-8">
                    <p>작성자 : <?=$data->writer?></p>
                </div>
                <div  class="col-lg-2 col-sm-2">
                    <p class="pull-right">조회수 : <?=$data->hits?></p>
                </div>
                <div  class="col-lg-2 col-sm-2">
                    <p class="pull-right">추천수 : <?=$data->goods?></p>
                </div>
            </div>
        </div>
        <div class="row text-block">
            <div class="col-lg-12 col-sm-12 text">
                <?=$data->text?>
            </div> 
        </div>
        <div class="row button-block">
            <div class="col-lg-8 col-sm-8 button-block">
                <a href="<?=base_url();?>index.php/board/good/<?=$board?>/<?=$page?>/<?=$data->srl?>"><button type="button" class="btn btn-info">좋아요 <?=$data->goods?></button></a>
            </div>
            <div class="col-lg-1 col-sm-1">
				<?php
					if(($nick=$this->session->userdata('user_nickname'))==$data->writer){
               			echo "<a href=".base_url()."index.php/board/modifyDoc/".$board."/".$page."/".$data->srl.">".
								"<button class='btn' title='수정'>".
									"<i class='icon-pencil icon-large'></i>".
								"</button>".
							"</a>";
					}
				?>
            </div>
			<div class="col-lg-1 col-sm-1">
				<?php
					if(($nick=$this->session->userdata('user_nickname'))==$data->writer){
						echo "<a href=".base_url()."index.php/board/delDoc/".$board."/".$page."/".$data->srl.">".
								"<button class='btn' title='삭제'>".
									"<i class='icon-trash icon-large'></i>".
								"</button>".
							"</a>";
					}
				?>
            </div>
			<div class="col-lg-1 col-sm-1">
				<form action="<?=base_url();?>index.php/board/replyDoc/<?=$board?>/<?=$page?>/<?=$data->srl?>" method="POST">
					<input type="hidden" name="title" value="<?=$data->title?>">
					<input type="hidden" name="reply_cnt" value="<?=$data->reply_cnt?>">
					<?php 
						//답글에 답글을 달지 못하도록 하는 부분
						if($data->reply_srl==0){
							echo "<button class='btn' title='답글'><i class='icon-reply icon-large'></i></button>";
						}
						
					?>
				</form>
			</div>
			<div class="col-lg-1 col-sm-1">
                <a href="<?=base_url();?>index.php/board/blist/<?=$board?>/<?=$page?>"><button type="button" class="btn" title="목록"><i class="icon-reorder icon-large"></i></button></a>
            </div>

        </div>
        
</div>


<!-- -->
</div>
</div>
<!-- -->
