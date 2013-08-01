<div id="register" class="container">
    <div class="row">
        <div class="col-lg-10 col-offset-1">
           <form class="form-horizontal" action="<?=base_url()?>index.php/auth/register" method="post">
    	        <legend align="center"><h1> 회 원 가 입 </h1></legend>
                <small color="gold"> 회원님의 정보 중 변경된 내용이 있는 경우, 아래에서 수정해주세요. <br/>
                회원정보는 개인정보취급방침에 따라 안전하게 보호되며, 회원님의 명백한 동의 없이 공개 또는 제 3자에게 
                제공되지 않습니다. <br/><br/><br/>
                </small>
                <table class="table ">
                    <thead> </thead>
                    <tbody>
                       <tr>
                          <th class="active" width="200px" style="padding-left:20px">이메일</th>
                          <th><input type="text" id="email" name="email" class="span11 offset1" value="<?php echo set_value('email'); ?>" placeholder="Email"></th>
                       </tr>
                       <tr>
                          <td class="active">별명</td>
                          <td >
                             <div class="row">
                                <form class="form-inline">
                                    <div class="col-lg-4">
                                        <input type="text" id="nickname" name="nickname" class="span11 offset1" value="<?php echo set_value('nickname'); ?>" placeholder="Nickname"> 
                                    </div>
                                        <button type="submit" class="btn btn-primary btn-small">중복</button>
                                </form>
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
                          <td class="active" >비밀번호</td>
                          <td ><input type="password" id="password" name="password" class="span11 offset1" value="<?php echo set_value('password'); ?>" placeholder="Password"></td>
                       </tr>
                       <tr>
                          <td class="active" >비밀번호확인</td>
                          <td ><input type="password" id="re_password" name="re_password" class="span11 offset1" value="<?php echo set_value('re_password'); ?>" placeholder="Password Check"></td>
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
                        <input type="submit" class="btn btn-primary" value=" 회 원 가 입 "/>
                    </div>
                </div>

           </form>
            <?php echo validation_errors('email'); ?> 
        
        </div>
    </div>
</div>

<!-- -->
</div>
</div>
<!-- -->
