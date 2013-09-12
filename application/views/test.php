<script>
$(document).ready(function() {
	$('.run-fseek').click(function() {
		var $offset = $('.offset').val();
		var $whence = $('.whence').val();
		runfseek($offset,$whence);
	});
	function runfseek($offset,$whence)
	{
		var $string = "abcdefg";
		var $pointer = "";
	    if($whence == "SEEK_SET")
		{
			for(var i = 0 ; i < $offset; i++ )
			{
				$pointer+="&nbsp";
			}
			$pointer+="!";
		}
		$('.fseek-string').html($string+"<br>"+$pointer);
	}
});
</script>


<div class="row">
	<div class="col-lg-12 fseek-string">
		abcd
	</div>
	<div class="col-lg-12">
	fseek(fp,<input class="offset" type="text">,<input class="whence" type="text">);
	</div>	
	<div class="col-lg-12">
		<a class="btn btn-default run-fseek">실행</a>
	</div>
</div>
