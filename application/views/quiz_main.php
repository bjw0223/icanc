
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

<div id="quizMain" class="col-lg-9">
    <div class="row">
        <div class="col-lg-5">
            <div class="my-icon-box" href="<?=base_url()?>index.php/quiz/categoryList">
                <div class="my-icon">
                    <i class="icon-btc icon-4x icon-spin"></i>
                </div>
                <div class="my-icon-box-title">
                    <p>기본문제 정복하기</P>
                </div>
                <div class="my-icon-box-desc">
                    <p>카테고리별로 정해진 문제를 해결합니다.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-offset-1">
            <div class="my-icon-box" href="<?=base_url()?>index.php/quiz/practiceQuizList">
                <div class="my-icon">
                    <i class="icon-pinterest icon-4x icon-spin"></i>
                </div>
                <div class="my-icon-box-title">
                    <p>실전문제 정복하기</p>
                </div>
                <div class="my-icon-box-desc">
                    <p>스스로 알고리즘을 생각하여 문제를 해결합니다.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- -->
</div>
</div>
<!-- -->
