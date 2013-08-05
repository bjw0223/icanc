<div class="navbar navbar-fixed-top" style="height:60px;padding-top:2px;">
</div>
<div class="container" style="margin-top:50px;">
   <div class="row"> 

        <div class="col-lg-8"> 
        </div>

        <div class="col-lg-4" style="background-color:#eeeeee;padding:15px;border:1px solid #dddddd">
            <form class="navbar-formt" action="<?=base_url()?>index.php/auth/authentication" method="post">
                <fieldset>
                    <legend style="border-bottom-color:white;border-bottom:3px solid white;padding-bottom:3px;">Login</legend>
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
