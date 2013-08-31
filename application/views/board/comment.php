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
		
		echo "<div class='row'>".
				"<div class='col-lg-9 col-offset-3'>".
					"<div class='row' style='margin:20px 70px 0px 30px;background-color:#eeeeee;'>".
						"<div class='col-lg-7'>".
							$data->writer.
						"</div>".
						"<div class='col-lg-5'>".
							"<p class='pull-right'>".
								$time.
							"</p>".
						"</div>".
					"</div>".
					"<div class='row' style='margin:0px 70px 0px 30px;background-color:#eee0e0;'>".
						"<div class='col-lg-11'>".
							$data->text.
						"</div>".
					"</div>".
				"</div>".
			"</div>";
	}
*/
?>


<?php
	foreach($comments as $data)
	{
    	$time = date("Y-m-d g:i a", strtotime($data->modified_time));

		echo "<div class='row'>".
			"<div class='col-lg-9 col-offset-3'>".
			"<div class='col-lg-11' style='margin:10px 30px 10px 30px;background-color:white;'>".
        		"<div class='row well' style='padding:2px;margin-bottom:0px;background-color:#36545F;'>".
		            "<div class='col-lg-12' style='background-color:white;'>".
		                "<div class='col-lg-8'style='padding:0px 0px 0px 0px;'>".
		                    "<p style='font-size:15px;font-weight:bold;'>".
								$data->writer.
							"</p>".
		                "</div>".
		                "<div class='col-lg-4' style='padding:0px 0px 0px 0px;'>".
		                    "<p class='pull-right'>".
								$data->modified_time.
							"</p>".
		                "</div>".
		            "</div>".
		        "</div>".
		        "<div class='row well' style='padding:2px;margin-bottom:0px;background-color:#36545F;'>".
		            "<div class='col-lg-12' style='min-height:45px;background-color:white;'>".
		                "<div class='col-lg-10' style='padding:10px 0px 0px 10px;'>".
		                    "<p style='font-weight:bold;'>".
								$data->text.
							"</p>".
		                "</div>".
		                "<div class='col-lg-1' style='padding:10px 0px 0px 10px;'>".
		               		"<button class='btn'><i class='icon-pencil icon-large'></i></buttoni>".
						"</div>".
						"<div class='col-lg-1' style='padding:10px 0px 0px 10px;'>".
		                	"<button class='btn'><i class='icon-trash icon-large'></i></button>".
						"</div>".
		            "</div>".
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
