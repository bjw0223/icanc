<div id="signout" class="col-lg-9">

<h2><font color="#7bb002">회원탈퇴를 신청하기 전에 안내 사항을 꼭 확인해주세요.</font></h2> <br>
사용하고 계신 아이디(<?=$email?>)는 탈퇴할 경우 복구가 불가능 하기 때문에 신중하게 선택하시기 바랍니다.<br>
탈퇴 후 회원정보 및 개인형 서비스 이용기록은 모두 삭제됩니다.<br>
회원정보 및 서비스 이용기록은 모두 삭제되며, 삭제된 데이터는 복구되지 않습니다.<br>
삭제되는 내용을 확인하시고 필요한 데이터는 미리 백업을 해주세요.<br>
탈퇴를 원하시면 아래 체크박스에 체크하여 주시기 바랍니다.<br>
<br>
<br>

<form id="signoutForm" action="<?=base_url()?>index.php/mypage/destroyInfo" method="post">
        <label class="checkbox">
            <input type="checkbox" id="agree" name="agree" value="" > 
            <span class="label label-info">위의 내용을 확실히 확인하고 아이디(<font color="gold"><?=$email?></font>)를 회원 탈퇴 하겠습니다.</span>
        </label>
        <button type="button" class="btn btn-large btn-primary" onclick="checkAgree()" >확인</button>
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
