<style>
.info {
    font-size:38px;
    letter-spacing:30px;
    padding:30px;
}
.info-title {
    padding-left-:20px;
    font-weight:bold;
    background-color:#f5f5f5;
}
</style>
<div id="info" class="col-lg-9">
      <div style="padding-bottom:30px;">
        <small color="gold"><b><br/>
        회원정보는 개인정보취급방침에 따라 안전하게 보호되며, 회원님의 명백한 동의 없이 공개 또는 제 3자에게 
        제공되지 않습니다.
        </b></small>
    </div>
  <div class="row">
        <div class="col-lg-10">
                <table class="table">
                    <thead> </thead>
                    <tbody>
                       <tr>
                          <th class="info-title" width="200px">이메일</th>
                          <th>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label><b><?=$email?></b></label>
                                </div>
                            </div>
                          </th>
                       </tr>
                       <tr>
                          <td class="info-title">별명</td>
                          <td>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label><b><?=$nickname?></b></label>
                                </div>
                                <div class="col-lg-2"> 
                                </div>
                                <div class="col-lg-6">
                                </div>
                             </div>
                          </td>
                       </tr>
                       
                       <tr>
                          <td class="info-title" > 생년월일 </td>
                          <td >
                            <!-- /btn-group -->
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label><b><?=$dateOfBirth?></b></label>
                                    </div>
                                </div><!-- /.row -->
                          </td>
                       </tr>

                       <tr>
                          <td class="info-title"> 직업 </td>
                          <td > 
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label><b><?=$job?></b></label>
                                    </div>
                                </div>
                          </td>
                       </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

<!-- -->
</div>
</div>
<!-- -->
