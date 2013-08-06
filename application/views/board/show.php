<div id="faq" class="col-lg-9" style="margin-top:30px;">
	
<?php
	$data=$list[0];
	echo "<div class='row'><legend> 
			<div class='col-lg-8'><h3>$data->title<h3></div> 
			<div class='col-lg-4'><h4>임시날짜<h4></div> 
		</legend></div>
		<div class='row'><legend>
			<div class='col-lg-8'>$data->writer</div>
			<div class='col-lg-4'>
				조회수 <small>$data->hits</small>  
				추천수 <small>$data->goods</small> 
			</div>
		</legend></div>
		<div class='row'><legend>
			<div class='col-lg-12'><br>$data->text<br></div>
		</legend></div>
		<div class'row'><legend>
			<div class='col-lg-2'>좋아요 $data->goods </div>
			<div class='col-lg-8'></div>
			<div class='col-lg-2'>목록버튼</div>
		</legend></div>";	
?>		

</div>

<!-- -->
</div>
</div>
<!-- -->
