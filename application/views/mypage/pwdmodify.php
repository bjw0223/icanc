<div id="pwmodify" class="container col-lg-9">
    <div class="row">
        <div class="col-lg-10 col-offset-1">
           <form id="basicinfomodifyForm" class="form-horizontal" action="<?=base_url()?>index.php/mypage/modifyBasicinfo" method="post">
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
                                <div class="col-lg-4">
                                    <input type="text" id="nickname" name="nickname" value="<?=$nickname?>" onkeyup="checkforNickname()" onfocus=" " onfocusout="checkforNickname()"> 
                                </div>
                                <div class="col-lg-2"> 
                                </div>
                                <div class="col-lg-6">
                                    <label id="nicknameResult" style="margin-top:2px" value="sdfdsf"> </label>
                                </div>
                             </div>
                          </td>
                       </tr>
                       <tr>
                          <td class="active">변경비밀번호</td>
                          <td>
                            <div class="row">
                                <div class="col-lg-4">
                                    <input type="text" id="nickname" name="nickname" value="<?=$nickname?>" onkeyup="checkforNickname()" onfocus=" " onfocusout="checkforNickname()"> 
                                </div>
                                <div class="col-lg-2"> 
                                </div>
                                <div class="col-lg-6">
                                    <label id="nicknameResult" style="margin-top:2px" value="sdfdsf"> </label>
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
                                <div class="col-lg-4">
                                    <input type="text" id="nickname" name="nickname" value="<?=$nickname?>" onkeyup="checkforNickname()" onfocus=" " onfocusout="checkforNickname()"> 
                                </div>
                                <div class="col-lg-2"> 
                                </div>
                                <div class="col-lg-6">
                                    <label id="nicknameResult" style="margin-top:2px" value="sdfdsf"> </label>
                                </div>
                             </div>
                          </td>
                       </tr>

                    </tbody>
                </table>
                    
                    <div class="row">
                        <div style="text-align:center"> 
                            <input type="button" onclick="basicinfoResult()" class="btn btn-primary" value="변 경"/>
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

