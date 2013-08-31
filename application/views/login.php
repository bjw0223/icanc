<style>
.login-block {
    background-color: #FFFFFF;
    border-radius: 16px;
    padding: 30px;
    border: 1px solid #dddddd;
    color:#36545F;
}
.login-legend {
    font-weight:bold;
    border-bottom:3px solid #36545F;
    padding-bottom:3px;
    color:#36545F;
}
body {
    background-color:#36545F;
}

</style>


<div class="container" style="margin-top:110px;">
   <div class="row"> 
        <div class="col-lg-8"> 
        </div>

        <div class="col-lg-4 login-block" style="">
            <form class="navbar-formt" action="<?=base_url()?>index.php/auth/authentication" method="post">
                <fieldset>
                    <legend class="login-legend">Login</legend>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                    </div>
                    <div class="form-inline form-group">
                        <button type="submit" class="btn btn-primary">로그인</button>
                        <div class="checkbox">
                            <label class="checkbox">
                                <input type="checkbox"/>아이디 저장
                            </label>
                        </div>
                    </div>
                    <div class="form-inline" style="text-align:center;">
                        <small>
                            <a href="#" style="font-weight:bold;color:#4375DB;">아이디/ 비밀번호찾기</a>
                            <a href="<?=base_url()?>index.php/auth/register" style="font-weight:bold;margin-left:30px;color:#4375DB;"> 회원가입</a>
                        </small>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div> 
