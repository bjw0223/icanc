<script>

$(document).ready(function() {
    $('#fopen-btn').click(function() {
        var mode = $('#open-mode').val();
        alert(mode);
        if( mode == 'a' )
        {
            var left = $('.file-text').width()
            $('.pointer-bottom').html('<i class="icon-arrow-up"></i><b class="file-pointer"> fp </b>');
            $('.pointer-bottom').css('padding-left',left - 14 + "px");
        }
        else if( mode == 'w' )
        {
            $('.file-text').html('');
            $('.pointer-top').html('<i class="icon-arrow-down"></i><b class="file-pointer"> fp </b>');
        }
        else if( mode == 'r' )
        {
            var left = $('.file-text').width()
            $('.pointer-bottom').html('<i class="icon-arrow-up"></i><b class="file-pointer"> fp </b>');
            $('.pointer-bottom').css('padding-left',left - 14 + "px");
        }
        else if( mode == 'w+' )
        {
            var left = $('.file-text').width()
            $('.pointer-bottom').html('<i class="icon-arrow-up"></i><b class="file-pointer"> fp </b>');
            $('.pointer-bottom').css('padding-left',left - 14 + "px");
        }
    });
    $('#reset-btn').click(function() {
            $('.file-text').html('abcdefghijklmnopqrstuvwxyz<br>ABCDEFGHIJKLMNOPQRSTUVWXYZ');
            $('.pointer-top').html('');
            $('.pointer-bottom').html('');
            $('#open-mode').val('');
    });
});

</script>

<style>

textarea {
	resize:none;	
	background-color:#eeeeee;
}
.text-title {
	border-top:1px solid black;
	border-left:1px solid black;
	border-right:1px solid black;
	border-bottom:1px solid white;
	padding:5px 20px 5px 20px;
	background-color:white;
}
.text-area {
	border:1px solid black;
	padding:10px;
}
.file-text {
    letter-spacing: 5px;
    padding-left: 4px;
    background-color:red;
}

</style>



<div class="row">
	<div class="col-lg-6">
		<div class="text-title-div">
			<span class="text-title"> A.txt </span>
		</div>
		<div class="text-area">
            <div class="pointer-top">
            </div>
            <span class="file-text">
            abcdefghijklmnopqrstuvwxyz<br>
            ABCDEFGHIJKLMNOPQRSTUVWXYZ
            </span>
            <div class="pointer-bottom">
            </div>
		</div>
    </div>
</div>
<div class="row">
	<div class="col-lg-12">
        FILE *fp;<br>
		fp = fopen("A.txt",<input id="open-mode" type="text">);
	</div>
    <div class="col-lg-12">
        <button type="button" id="fopen-btn" class="btn btn-success">run</button>
        <button type="button" id="reset-btn" class="btn btn-success">reset</button>
    </div>
</div>
