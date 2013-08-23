<style>
.board-title {
    padding-top:30px;
    font-size: 40px;
    color: #36545F;
    font-weight: bold;
    text-transform: uppercase;
}
</style>
<div class="container">
	<div class="row">	
		<div class="col-lg-12 board-title">
		<?php
			if($board=='faq'){
				echo 'FAQ';
			}else if($board=='qna'){
				echo 'Q&A';
			}
		?>
		</div>
	</div>
</div>
<div class="well row division"></div>
