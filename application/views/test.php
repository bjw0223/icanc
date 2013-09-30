<script>
$(document).ready(function() {
	$('.run-fseek').click(function() {
		var $offset = $('.offset').val();
		var $whence = $('.whence').val();
        var $cur_whence = $('.fseek-string').attr('whence');
		runfseek($offset,$whence,$cur_whence);
	});
	function runfseek($offset,$whence,$cur_whence)
	{
		var $string = "abcdefghijklmnopqrstuvwxyz";
		var $pointer = "";
	    if($whence == "SEEK_SET")
		{
            if( $offset < 0 )
            {
                alert("범위를 벗어났습니다.");
                $pointer+="!";
            }
            else if( $offset > 25 )
            {
                alert("범위를 벗어났습니다.");
                $pointer+="!";
            }
            else
            {
                for(var i = 0 ; i < $offset; i++ )
                {
                    $pointer+="&nbsp";
                }
                $pointer+="!";
                $('.fseek-string').attr('whence',parseInt($offset));
            }
		}
        else if($whence == "SEEK_CUR")
        {
            if( parseInt($offset) + parseInt($cur_whence) < 0 )
            {
                alert("범위를 벗어났습니다.");
                $pointer+="!";
            }
            else if( parseInt($offset) + parseInt($cur_whence) > 25 )
            {
                alert("범위를 벗어났습니다.");
                $pointer+="!";
            }
            else
            {
                for(var i = 0 ; i < parseInt($offset) + parseInt($cur_whence); i++ )
                {
                    $pointer+="&nbsp";
                }
                $pointer+="!";
                $('.fseek-string').attr('whence',parseInt($offset) + parseInt($cur_whence))
            }
        }
        else if($whence == "SEEK_END")
        {
            if( parseInt($offset) > 0 )
            {
                alert("범위를 벗어났습니다.");
                $pointer+="!";
            }
            else if(parseInt($offset)  > 25 )
            {
                alert("범위를 벗어났습니다.");
                $pointer+="!";
            }
            else
            {
                for(var i = 0 ; i < 25 +parseInt($offset); i++ )
                {
                    $pointer+="&nbsp";
                }
                $pointer+="!";
                $('.fseek-string').attr('whence',25+parseInt($offset));
            }
        }
        else
        {
           alert("SEEK_SET,SEEK_CUR,SEEK_END를 입력하세요");
            $pointer+="!";
        }

		$('.fseek-string').html($string+"<br>"+$pointer);
	}
});
</script>


<div class="row">
	<div class="col-lg-12 fseek-string" whence="0">
		abcdefghijklmnopqrstuvwxyz<br>
        !
	</div>
	<div class="col-lg-12">
	fseek(fp,<input class="offset" type="text">,<input class="whence" type="text">);
	</div>	
	<div class="col-lg-12">
		<a class="btn btn-default run-fseek">실행</a>
	</div>
</div>
