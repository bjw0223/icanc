<style>
.bs-sidenav {
    margin-top:0px;
}
.signout-title {
    padding-top:10px;
    font-size:17px;
    font-weight:bold;
}
.signout-info {
    padding-top:20px;
}
.signout-btn-div {
    padding-top:20px;
}
.signout-checkbox {
    padding-top:20px;
}
</style>

<div id="signout" class="col-lg-9 col-sm-9">
    <p class="signout-title">회원탈퇴를 신청하기 전에 안내 사항을 꼭 확인해주세요.</p>
    <span class="signout-info">
        <ul>
            <li>사용하고 계신 아이디(<b><?=$email?></b>)는 탈퇴할 경우 복구가 불가능 하기 때문에 신중하게 선택하시기 바랍니다.</li>
            <li>탈퇴 후 회원정보 및 개인형 서비스 이용기록은 모두 삭제됩니다.</li>
            <li>회원정보 및 서비스 이용기록은 모두 삭제되며, 삭제된 데이터는 복구되지 않습니다.</li>
            <li>삭제되는 내용을 확인하시고 필요한 데이터는 미리 백업을 해주세요.</li>
            <li>탈퇴를 원하시면 아래 체크박스에 체크하여 주시기 바랍니다.</li>
        </ul>
    </span>
    <form id="signoutForm" action="<?=base_url()?>index.php/mypage/destroyInfo" method="post">
        <div class="signout-checkbox">
            <label class="checkbox">
                <input type="checkbox" id="agree" name="agree" value="" > 
                <span>위의 내용을 확실히 확인하고 아이디(<b><?=$email?></b>)를 회원 탈퇴 하겠습니다.</span>
            </label>
        </div>
        <div class="signout-btn-div">
            <button type="button" class="btn btn-primary" onclick="checkAgree()" >확인</button>
        </div>
    </form>
</div>



<!-- -->
</div>
</div>
<!-- -->


<script type="text/javascript">

    function checkAgree()
    {
      var $checkResult = $("#agree").is(":checked");
      
      if( $checkResult === true )
      {
          alert("정상적으로 탈퇴 되었습니다");
          $("#signoutForm").submit();
      }
      else
      {
          alert("동의 하셔야 탈퇴가 가능합니다");
      }

    }

</script>
