<style>
</style>
<?php
	$uri_num=$this->uri->total_segments();
	
	$board=$this->uri->segment($uri_num-2);
	$page=$this->uri->segment($uri_num-1);
	$srl=$this->uri->segment($uri_num);
?>

<?php
/*
	foreach($comments as $data)
	{
	
    	$time = date("Y-m-d g:i a", strtotime($data->modified_time));
		
		echo "<div class='row'>
				"<div class='col-lg-9 col-offset-3'>
					"<div class='row' style='margin:20px 70px 0px 30px;background-color:#eeeeee;'>
						"<div class='col-lg-7'>
							$data->writer.
						"</div>
						"<div class='col-lg-5'>
							"<p class='pull-right'>
								$time.
							"</p>
						"</div>
					"</div>
					"<div class='row' style='margin:0px 70px 0px 30px;background-color:#eee0e0;'>
						"<div class='col-lg-11'>
							$data->text.
						"</div>
					</div>
				</div>
			</div>;
	}
*/
?>
<style>
.comment {
    margin-top:3px;
}
.comment-title {
    font-size:14px;
}
.comment-title > .btn {
    border-radius:15px;
    background-color:inherit;
}
.comment-title > .btn:hover {
    color:blue;
}
.comment-text {
    font-size:13px;
    overflow:auto;
	word-break:break-all;
}
.comment-editor-block {
    margin-top:20px;
}
.comment-editor {
    width:100%;
    resize:none;
    overflow:auto;
}
.comment-btn {
    height:80px;
}
.no-margin {
    padding-left:0px;
    padding-right:0px;
}
</style>


<?php
	foreach($comments as $data)
	{
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-9 col-offset-3 comment">
                <div>
                    <span class="comment-title">
                        <i class="icon-user"></i><b> <?=$data->writer?> </b><?=$data->modified_time?>
                        <button class='btn btn-small' title="수정"><i class='icon-pencil'></i></button>
						<form action="<?=base_url();?>index.php/board/delComment/<?=$board?>/<?=$page?>/<?=$srl?>/<?=$data->srl?>" method="POST">
							<input type='hidden' name='writer' value=<?=$data->writer?>>
                        	<button type='submit' class='btn btn-small' title="삭제"><i class='icon-trash'></i></button>
						</form>
                    </span>
                </div>
                <div class="comment-text">
                    <?=$data->text?>
                </div>
            </div>
        </div>
    </div>
<?php
	}
?>


<div class="container">
    <div class="row comment-editor-block">
        <form action=<?=base_url();?>index.php/board/addComment/<?=$board?>/<?=$page?>/<?=$srl?> method="POST">
            <div class="col-lg-8 col-sm-8 col-offset-3 no-margin">
                <div class="col-lg-12 col-sm-12">
                    <textarea class="comment-editor form-control" name="text" style="height:80px"></textarea>
                </div>
            </div>
            <div class="col-lg-1 col-sm-1 no-margin">
                <button type="submit" class="btn btn-primary comment-btn">댓글등록</button>
            </div>
        </form>
    </div>
</div>
