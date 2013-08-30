
<div id="checkPwd" class="container col-lg-9">
    <div class="row">
        <div class="col-lg-10 col-offset-1">
           <form id="checkPwdForm" class="form-horizontal" action="<?=base_url()?>index.php/mypage" method="post">
                <div style="padding-bottom:30px;">
                    <small color="gold"> 회원님의 정보 중 변경된 내용이 있는 경우, 아래에서 수정해주세요. <br/>
                    회원정보는 개인정보취급방침에 따라 안전하게 보호되며, 회원님의 명백한 동의 없이 공개 또는 제 3자에게 
                    제공되지 않습니다.
                    </small>
                </div>
                <table class="table">
                    <thead> </thead>
                    <tbody>
                       <tr>
                          <td class="active">아이디</td>
                          <td>
                            <div class="row">
                                <div class="col-lg-3">
                                    <input type="text" id="email" name="email" value="" style="width:120px"> 
                                </div>
                                <div class="col-lg-1"> 
                                </div>
                                <div class="col-lg-8">
                                </div>
                             </div>
                          </td>
                       </tr>
                       <tr>
                          <td class="active">기존비밀번호</td>
                          <td>
                            <div class="row">
                                <div class="col-lg-3">
                                    <input type="password" id="password" name="password" value="" style="width:120px"> 
                                </div>
                                <div class="col-lg-1"> 
                                </div>
                                <div class="col-lg-8">
                                </div>
                             </div>
                          </td>
                       </tr>
                    </tbody>
                </table>
                    <button type="submit" class="btn btn-default" id="submit" name="submit">확인</button>
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
    

</script>
