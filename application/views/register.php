
<div class="container" style="margin-top:50px;">
    <div class="row-fluid" >
        <div class="span8 offset2">
            <a class="logo" style="font-size:30px;font-weight:bold;" href="<?=base_url();?>index.php/main">I Can C</a><small>for help study</small>
            <span style="font-size:30px;font-weight:bold;">회원가입</span>
        </div>
    </div>
    <div class="row-fluid">
        <div class="well span8 offset2" style="margin-top:10px;">
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4 offset2"></div>
        <div class="span4">
           <form class="form-horizontal" action="<?=base_url()?>index.php/auth/register" method="post">
           <table class="table table-condensed">
               <tbody>
                   <tr>
                       <td style="border-width:0px;"><b class="offset1">이메일</b></td>
                   </tr>
                   <tr>
                       <td style="border-width:0px;"><input type="text" id="email" name="email" class="span11 offset1" value="<?php echo set_value('email'); ?>" placeholder="Email"></td>
                   </tr>
                   <tr>
                       <td style="border-width:0px;"><b class="offset1">닉네임</b></td>
                   </tr>
                   <tr>
                       <td style="border-width:0px;"><input type="text" id="nickname" name="nickname" class="span11 offset1" value="<?php echo set_value('nickname'); ?>" placeholder="Nickname"></td>
                   </tr>
                   <tr>
                       <td style="border-width:0px;"><b class="offset1">비밀번호</b></td>
                   </tr>
                   <tr>
                       <td style="border-width:0px;"><input type="password" id="password" name="password" class="span11 offset1" value="<?php echo set_value('password'); ?>" placeholder="Password"></td>
                   </tr>
                   <tr>
                       <td style="border-width:0px;"><b class="offset1">비밀번호 확인</b></td>
                   </tr>
                   <tr>
                       <td style="border-width:0px;"><input type="password" id="re_password" name="re_password" class="span11 offset1" value="<?php echo set_value('re_password'); ?>" placeholder="Password Check"></td>
                   </tr>
               </tbody>
           </table> 
            <div class="pull-right">
                <input type="submit" class="btn btn-primary" value=" 회 원 가 입 "/>
            </div>
            
            </form> 
            <?php echo validation_errors(); ?> 
        </div>
    </div>
</div>
