<div id="basicinfomodify" class="col-lg-9">
    <div class="row">
        <div class="col-lg-12">
           <form action="<?=base_url()?>index.php/mypage/basicinfoModify" method="post">
    	        <legend align="center"> 기본정보 변경  </legend>
                <small color="gold"> 회원님의 정보 중 변경된 내용이 있는 경우, 아래에서 수정해주세요. <br/>
                회원정보는 개인정보취급방침에 따라 안전하게 보호되며, 회원님의 명백한 동의 없이 공개 또는 제 3자에게 
                제공되지 않습니다. <br/><br/><br/>
                <table class="table ">
                    <thead> </thead>
                    <tbody>
                       <tr>
                          <th class="active" width="200px" style="padding-left:20px">사용자이름</th>
                          <th > 유진영 </th>
                       </tr>
                       
                       <tr>
                          <td class="active">별명</td>
                          <td >
                             <div class="row">
                                    <div class="col-lg-4">
                                        <input type="text" id="afterNick" name="afterNick" class="form-control input-small" value="<?=$nickname?>" readonly="true">
                                    </div>
                                        <a data-toggle="modal" href="#checkRedundancy" class="btn btn-primary btn-small">별명변경</a>
                             </div>
                                <div style="margin-top:8px">
                                    <small style="color:orange">한글 1~10자, 영문 대소문자 2~20자, 숫자를 사용할 수 있습니다. (혼용가능) <br/>
                                    </small>
                                    <small>
                                           욕설이나 미풍양속에 어긋나는 별명 사용으로 ID이용이 제한될 수 있습니다. 
                                    </small>
                                </div>
                          </td>
                       </tr>
                       
                       <tr>
                          <td class="active" > 이메일 </td>
                          <td > <?=$email?> </td>
                       </tr>
                       
                       <tr>
                          <td class="active" > 나이 </td>
                          <td > 19살 </td>
                       </tr>
                       
                       <tr>
                          <td class="active"> 직업 </td>
                          <td > 무직 </td>
                       </tr>

                    </tbody>
                </table>
                
                <div class="row">
                    <div style="text-align:center"> 
                        <input type="submit" class="btn btn-primary">
                    </div>
                </div>

            <?php echo validation_errors('nickname'); ?> 
           </form>
        
        </div>
    </div>
</div>

<!-- -->
</div>
</div>
<!-- -->
  
  <!-- 별명 중복검사 버튼  Modal -->
  <div class="modal fade" id="checkRedundancy">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">별명 중복 검사</h4>
        </div>
        <div class="modal-body" style="height:70px">
            <div class="row">
                <div class="col-lg-4">
                    <input type="text" id="beforeNick" name="beforeNick" class="form-control input-small" value="<?=$nickname?>">
                </div>
                <div class="col-lg-4">
                    <button type="submit" id="checkNick" class="btn btn-primary btn-small">중복확인</button>
                </div>
            </div>
            <div class="row" style="margin-top:8px">
                <div class="col-lg-8" id="checkNickResult" style="height:1px">
                        
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <div> </div>
          <a href="#" id="info_saveBtn" class="btn btn-success">Save Changed</a>
          <a href="#" id="info_closeBtn" class="btn btn-success">Close</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- 자바스크립트 -->
  <script type="text/javascript">
    $("#info_saveBtn").hide();
    var $flag = false;
    var $checkNickFlag = false;
    
    // 별명 중복 검사
    $("#checkNick").click( function(){
            var $nickname = $("#beforeNick").val();
            // 별명 길이 확인
            var $checkResult = checkNickname($nickname);
            if($checkResult === true)
            {
                $("#checkNickResult").load("<?=base_url()?>index.php/mypage/checkforNickname/"+$nickname);
            }
            else
            {
                $("#checkNickResult").html('<font color="orange">1 ~ 20글자의 별명을 사용하세요</font>');
                $("#info_saveBtn").hide();
                $flag = false;
            }
            $checkNickFlag = true;
    });
    
    // Save 버튼 활성화 후 재확인 후 별명 변경
    $("#info_saveBtn").click( function(){
            $nickname = $("#beforeNick").val();
            
            if( $checkNickFlag === false )
            {
                $("#checkNickResult").html('<font color="bluee">중복 검사를 하지 않았습니다.</font>');
                $checkNickFlag = false;
                $("#info_saveBtn").hide();
            }
            else
            {
                if( $flag === true)
                {
                    if( $("#beforeNick").val() == $nickname )
                    {   
                        //alert($("#beforeNick").val());
                        alert($nickname);
                    }
                    else
                    {
                        $("#checkNickResult").html('<font color="bluee">중복 검사를 하지 않았습니다.</font>');
                        $checkNickFlag = false;
                    }
                }
                else
                {
                    alert(" flage == false");
                }
            }
    });
    
    // close버튼 클릭시
    $("#info_closeBtn").click( function(){
                $("#checkRedundancy").modal('hide');
    });

    function checkNickname($nickname)
    {
        if( $nickname.length >= 1 && $nickname.length <=20)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


  </script>
