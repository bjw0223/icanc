
<div class="container" style="margin-top:50px;">
    <div class="row-fluid" >
        <div class="span8 offset2">
            <a class="logo" style="font-size:30px;font-weight:bold;" href="<?=base_url();?>index.php/main">I Can C</a><small>for help study</small>
            <span style="font-size:30px;font-weight:bold;">로그인</span>
        </div>
    </div>
    <div class="row-fluid">
        <div class="well span8 offset2" style="margin-top:10px;">
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4 offset2" style="background-color:;">
            <form class="navbar-formt" action="<?=base_url()?>index.php/auth/authentication" method="post">
                <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <td colspan=3 style="border-width:0px"><input class="span12" type="text" id="email" name="email" placeholder="Email"/></td>
                        </tr>
                        <tr>
                            <td colspan=3 style="border-width:0px"><input class="span12" type="password" class="" id="password" name="password" placeholder="Password"/></td>
                        </tr>
                        <tr>
                            <td colspan=2 style="vertical-align:middle;border-width:0px;">
                                <label class="checkbox">
                                    <input type="checkbox"/>아이디 저장
                                </label>
                            </td>
                            <td style="border-width:0px">
                                <input type="submit" class="btn btn-primary span12" value="로그인"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="row-fluid" style="margin-top:100px;">
                <div class="span6 offset1">
                       <a href="#" style="font-weight:bold;color:black;">아이디/ 비밀번호찾기</a>
                </div>
                <div class="span4">
                       <a href="<?=base_url()?>index.php/auth/register" style="font-weight:bold;margin-left:30px;color:black;"> 회원가입</a>
                </div>
            </div>
        </div>
        <div class="span4" style="background-color;">
        </div>
    </div>
</div>


