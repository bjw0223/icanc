<style>
</style>
<?php
	$uri_num=$this->uri->total_segments();
	
	$board=$this->uri->segment($uri_num-2);
	$page=$this->uri->segment($uri_num-1);
	$srl=$this->uri->segment($uri_num);
?>

<?php
	foreach($comments as $data)
	{
	
        $time = date("Y-m-d g:i a", strtotime($data->modified_time));
		
		echo "<div class='row'>".
				"<div class='col-lg-7 col-offset-4'>".
					"<div class='row' style='margin:0px 0px 0px 0px;background-color:#eeeeee;'>".
						"<div class='col-lg-3'>".
							$data->writer.
						"</div>".
						"<div class='col-lg-3'>".
						"</div>".
						"<div class='col-lg-3'>".
							$time.
						"</div>".
						"<div class='col-lg-3'>".
						"</div>".
					"</div>".
					"<div class='row' style='margin:0px 0px 0px 0px;background-color:#eee0e0;'>".
						"<div class='col-lg-11'>".
							$data->text.
						"</div>".
					"</div>".
				"</div>".
			"</div>";
	}
?>


<form action="<?=base_url();?>index.php/board/addComment/<?=$board?>/<?=$page?>/<?=$srl?>" method="POST">
<div class="row">
	<div class="col-lg-6 col-offset-4">
		<div class="col-lg-12">
			<textarea name="text" class="form-control" rows="3"></textarea>
		</div>
	</div>
	<div class="col-lg-2">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
</form>
<div class="well row division"></div>
