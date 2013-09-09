<style>
#modification {
    margin-top:30px;
}
.my-icon {
    padding-left:20px;
    padding-bottom:10px;
    color:#36545F;
}
.my-icon-box {
    padding:20px;
    border:2px solid #eeeeee;
    border-radius:10px;
}
.my-icon-box:hover, .my-icon-box:hover > .my-icon , .my-icon-box:hover > .my-icon-box-desc {
    background-color:#36545F;
    color:white;
          
}
.my-icon-box-title {
    font-size:20px;
    font-weight:bold;
}
.my-icon-box-desc {
    color:#999999;

}
</style>

<script>
$(document).ready(function() {
    $('.my-icon-box').click(function(){
            var mvlocation = $(this).attr('href');
            location.href=mvlocation;
    });

});
</script>

<div id="modification" class="col-lg-9 col-sm-9">
    <div class="row">
        <div class="col-lg-5 col-sm-5">
            <div class="my-icon-box" href="<?=base_url()?>index.php/mypage/basicinfomodify">
                <div class="my-icon">
                    <i class="icon-info icon-4x icon-spin"></i>
                </div>
                <div class="my-icon-box-title">
                    <p>기본정보 수정</P>
                </div>
                <div class="my-icon-box-desc">
                    <p>별명, 생년월일, 직업을 변경할 수 있습니다.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-sm-5 col-offset-1">
            <div class="my-icon-box" href="<?=base_url()?>index.php/mypage/pwdmodify">
                <div class="my-icon">
                    <i class="icon-key icon-4x icon-spin"></i>
                </div>
                <div class="my-icon-box-title">
                    <p>비밀번호 변경</p>
                </div>
                <div class="my-icon-box-desc">
                    <p>개인정보 보호를 위해 비밀번호를 변경하세요.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- -->
</div>
</div>
<!-- -->
