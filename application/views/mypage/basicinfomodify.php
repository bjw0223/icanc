<div id="basicinfomodify" class="col-lg-9">
    <div class="row">
        <div class="col-lg-12">
           <form action="<?=base_url()?>index.php/mypage/basicinfoModify" method="post">
    	        <legend align="center"> 기본정보 변경  </legend>
                <small color="gold"> 회원님의 정보 중 변경된 내용이 있는 경우, 아래에서 수정해주세요. <br/>
                회원정보는 개인정보취급방침에 따라 안전하게 보호되며, 회원님의 명백한 동의 없이 공개 또는 제 3자에게 
                제공되지 않습니다. <br/><br/><br/>
                </small>
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
                                        <input type="text" id="nickname" name="nickname" onkeyup="checkforNickname()" onfocus=" " class="form-control input-small" value="<?=$nickname?>">
                                    </div>
                                    <div class="col-lg-8">
                                    <label id="checkResult" style="margin-top:6px"> </label>
                                    </div>
                             </div>
                                <div style="margin-top:8px">
                                    <small style="color:orange">특수문자를 제외한 한글,영문 대소문자 1~20자, 숫자를 사용할 수 있습니다. (혼용가능) <br/>
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
                          <td class="active" > 생년월일 </td>
                          <td > 1987.02.26 </td>
                       </tr>
                       
                       <tr>
                          <td class="active"> 직업 </td>
                          <td > 무직 </td>
                       </tr>

                    </tbody>
                </table>
                
                <div class="row">
                    <div style="text-align:center"> 
                        <button type="submit" class="btn btn-primary">Change</button>
                    </div>
                </div>

           </form>
        
        </div>
    </div>
</div>

<!-- -->
</div>
</div>
<!-- -->
  
  <!-- 자바스크립트 -->
  <script type="text/javascript">

  // 별명 중복 확인 함수
  function checkforNickname()
  {
        var regExp = /[ \{\}\[\]\/?.,;:|\)*~`!^\-_+┼<>@\#$%&\'\"\\\(\=]/gi;//정규식 구문
        var obj = document.getElementsByName("nickname")[0]
        var $nickname = "<?=$nickname?>";
       
        if( obj.value.length >= 0 && obj.value.length <= 20 ) // 별명 길이 검사
        {
            if( $nickname == obj.value)
            {
                $("#checkResult").html('<font color="black">기존의 별명과 동일합니다.</font>');
            }
            else
            {
                if (regExp.test(obj.value)) 
                {
                    obj.value = obj.value.replace(regExp,"");//특수문자를 지우는 구문
                }
                else
                {
                        if( obj.value == "")
                        {
                            $("#checkResult").html('<font color="#2233b">공백은 사용할 수 없습니다.</font>');
                        }
                        else
                        {
                            $("#checkResult").load("<?=base_url()?>index.php/mypage/checkforNickname/"+obj.value);
                        }
                }
            }
        }
        else
        {
            $("#checkResult").html('<font color="#2233b">1 ~ 20 글자의 별명만 사용 가능 합니다.</font>');
        }
  }


  </script>
