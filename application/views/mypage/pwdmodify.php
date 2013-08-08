<div id="pwmodify" class="container col-lg-9">
    <div class="row">
        <div class="col-lg-10 col-offset-1">
           <form id="pwdmodifyForm" class="form-horizontal" action="<?=base_url()?>index.php/mypage/modifypwd" method="post">
    	        <legend align="center"><h1> 비 밀 번 호 변 경 </h1></legend>
                <small color="gold"> 회원님의 정보 중 변경된 내용이 있는 경우, 아래에서 수정해주세요. <br/>
                회원정보는 개인정보취급방침에 따라 안전하게 보호되며, 회원님의 명백한 동의 없이 공개 또는 제 3자에게 
                제공되지 않습니다. <br/><br/><br/>
                </small>
                <table class="table">
                    <thead> </thead>
                    <tbody>
                       <tr>
                          <td class="active">기존비밀번호</td>
                          <td>
                            <div class="row">
                                <div class="col-lg-3">
                                    <input type="password" id="raw_password" name="raw_password" value="" style="width:120px" onkeyup="verifyRawPassword()"> 
                                </div>
                                <div class="col-lg-1"> 
                                </div>
                                <div class="col-lg-8">
                                    <label id="raw_passwordResult" style="margin-top:2px" value=""> </label>
                                </div>
                             </div>
                          </td>
                       </tr>
                       <tr>
                          <td class="active">변경비밀번호</td>
                          <td>
                            <div class="row">
                                <div class="col-lg-2">
                                    <input type="password" id="password" name="password" value="" style="width:120px" onfocusout="checkforPassword()" disabled="ture"> 
                                </div>
                                <div class="col-lg-2"> 
                                </div>
                                <div class="col-lg-8">
                                    <label id="passwordResult" style="margin-top:2px width:120px" value=""> </label>
                                </div>
                             </div>
                                <div style="margin-top:8px">
                                    <small style="color:orange"><b>특수문자를 제외한 한글, 영문자 2~20자, 숫자를 사용할 수 있습니다. (혼용가능)</b> <br/>
                                    </small>
                                    <small>
                                           <b>욕설이나 미풍양속에 어긋나는 별명 사용으로 ID이용이 제한될 수 있습니다.</b> 
                                    </small>
                                </div>
                          </td>
                       </tr>
                       <tr>
                          <td class="active">변경비밀번호확인</td>
                          <td>
                            <div class="row">
                                <div class="col-lg-3">
                                    <input type="password" id="re_password" name="re_password" value="" style="width:120px" onfocusout="checkforRepassword()" disabled="true"> 
                                </div>
                                <div class="col-lg-1"> 
                                </div>
                                <div class="col-lg-8">
                                    <label id="re_passwordResult" style="margin-top:2px" value=""> </label>
                                </div>
                             </div>
                          </td>
                       </tr>

                    </tbody>
                </table>
                    
                    <div class="row">
                        <div style="text-align:center"> 
                            <input type="button" onclick="pwdResult()" class="btn btn-primary" value="변 경"/>
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
    
    function verifyRawPassword()
    {
        var obj = document.getElementsByName("raw_password")[0];
        $.ajax({
                 type : "POST",
                 url : "<?=base_url()?>index.php/mypage/checkInfo",
                 data : "object="+obj.value+"&target=password",
                 dataType : "json",
                 success : function(flag) {
                                    if( flag.value == "true")
                                    {   
                                        $("#raw_passwordResult").html('<font color="#2233b">일치하지 않습니다.</font>');
                                        $("#raw_passwordResult").val("false");
                                        $("#password").attr("disabled",true);
                                        $("#re_password").attr("disabled",true);
                                    }
                                    else if (flag.value == "false")
                                    {
                                        $("#raw_passwordResult").html('<font color="#2233b">일치 합니다.</font>');
                                        $("#raw_passwordResult").val("true");
                                        $("#password").attr("disabled",false);
                                        $("#re_password").attr("disabled",false);
                                    }
                           }
                });
    }

   function checkforPassword()
   {
            var regExp = /[^a-zA-Z0-9]/;
            var obj = document.getElementsByName("password")[0];
            if( obj.value.length == "")
            {
                $("#passwordResult").html('<font color="#2233b">Password을 입력하세요</font>');
                $("#passwordResult").val("false");
            }
            else if( obj.value.length >= 7 && obj.value.length <= 15 ) // 비밀번호 길이 검사
            {
                if( regExp.test(obj.value) )
                {
                    $("#passwordResult").html('<font color="green">올바르지 않은 형식 입니다</font>');
                    $("#passwordResult").val("false");
                    $("#password").val("");
                }
                else
                {
                    $("#passwordResult").html('<font color="green">올바른 형식의 비밀번호 입니다</font>');
                    $("#passwordResult").val("true");
                }
            }
            else
            {
                $("#passwordResult").html('<font color="green">올바르지 않은 형식 입니다</font>');
                $("#re_passwordResult").val("false");
                $("#password").val("");
            }
    }

      function checkforRepassword()
      {
            var regExp = /[^a-zA-Z0-9]/;
            var obj = document.getElementsByName("password")[0];
            var reObj = document.getElementsByName("re_password")[0];
            
            if( obj.value == reObj.value)
            {
                if( reObj.value.length >= 7 && reObj.value.length <= 15 ) // 비밀번호 길이 검사
                {
                    if( regExp.test(reObj.value) )
                    {
                        $("#re_passwordResult").html('<font color="green">올바르지 않은 형식 입니다</font>');
                        $("#re_passwordResult").val("false");
                        $("#re_password").val("");
                    }
                
                    else
                    {
                        $("#re_passwordResult").html('<font color="green">비밀번호가 일치 합니다</font>');
                        $("#re_passwordResult").val("true");
                    }
                }
                else
                {
                    $("#re_passwordResult").html('<font color="green">Password를 입력하세요</font>');
                    $("#re_passwordResult").val("false");
                    $("#re_password").val("");
                }
            }
            else
            {
                $("#re_passwordResult").html('<font color="green">비밀번호가 일치 하지 않습니다</font>');
                $("#re_passwordResult").val("false");
                $("#re_password").val("");
            }
      }  
    
    // submit
    function pwdResult()
    {
        var $raw_password = $("#raw_passwordResult").val(); 
        var $password = $("#passwordResult").val(); 
        var $re_password = $("#re_passwordResult").val(); 
        
        if( $raw_password == "true" && $password == "true" && $re_password == "true" )
        {
            $("#pwdmodifyForm").submit();
            alert("정상적으로 변경 되었습니다");
        }
        else
        {
            alert("다시 확인해");
        }
            
    }

</script>
