<style type+"text/css">
    .dropdown-year > li > a {
        padding-left:15px;
    }
</style>

<div id="basicinfomodify" class="container col-lg-9 col-sm-9">
    <div class="row">
        <div class="col-lg-10 col-sm-10 col-offset-1">
           <form id="basicinfomodifyForm" class="form-horizontal" action="<?=base_url()?>index.php/mypage/modifyBasicinfo" method="post">
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
                          <th class="active" width="200px" style="padding-left:20px;">이메일</th>
                          <th>
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <label> <b><?=$email?> </label>
                                </div>
                            </div>
                          </th>
                       </tr>
                       <tr>
                          <td class="active">별명</td>
                          <td>
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <input type="text" id="nickname" name="nickname" value="<?=$nickname?>" onkeyup="checkforNickname()" onfocus=" " onfocusout="checkforNickname()"> 
                                </div>
                                <div class="col-lg-2 col-sm-2"> 
                                </div>
                                <div class="col-lg-6 col-sm-6">
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
                          <td class="active" > 생년월일 </td>
                          <td >
                            <!-- /btn-group -->
                                <div class="row">
                                    <div class="input-group col-lg-2 col-sm-2">
                                        <input type="text" id="year" name="year" style="height:30px; width:60px; text-align:center;" readonly="true">
                                        <div class="input-group-btn class-lg">
                                            <button type="button" class="btn btn-default dropdown-toggle btn-small" data-toggle="dropdown">년 <span class="caret"></span></button>
                                            <ul id="listYear" class="dropdown-menu" style="padding-right:px; margin:0px; height:200px; min-width:1px; width:77px; overflow-x:auto; overflow-y:scroll">
                                                    <li value="2013"> <a tabindex="-1" href="#" data-in="2013">2013</a> </li>
                                                    <li value="2012"> <a tabindex="-1" href="#" data-in="2012">2012</a> </li>
                                                    <li value="2011"> <a tabindex="-1" href="#" data-in="2011">2011</a> </li>
                                                    <li value="2010"> <a tabindex="-1" href="#" data-in="2010">2010</a> </li>
                                                    <li value="2009"> <a tabindex="-1" href="#" data-in="2009">2009</a> </li>
                                                    <li value="2008"> <a tabindex="-1" href="#" data-in="2008">2008</a> </li>
                                                    <li value="2007"> <a tabindex="-1" href="#" data-in="2007">2007</a> </li>
                                                    <li value="2006"> <a tabindex="-1" href="#" data-in="2006">2006</a> </li>
                                                    <li value="2005"> <a tabindex="-1" href="#" data-in="2005">2005</a> </li>
                                                    <li value="2004"> <a tabindex="-1" href="#" data-in="2004">2004</a> </li>
                                                    <li value="2003"> <a tabindex="-1" href="#" data-in="2003">2003</a> </li>
                                                    <li value="2002"> <a tabindex="-1" href="#" data-in="2002">2002</a> </li>
                                                    <li value="2001"> <a tabindex="-1" href="#" data-in="2001">2001</a> </li>
                                                    <li value="2000"> <a tabindex="-1" href="#" data-in="2000">2000</a> </li>
                                                    <li value="1999"> <a tabindex="-1" href="#" data-in="1999">1999</a> </li>
                                                    <li value="1998"> <a tabindex="-1" href="#" data-in="1998">1998</a> </li>
                                                    <li value="1997"> <a tabindex="-1" href="#" data-in="1997">1997</a> </li>
                                                    <li value="1996"> <a tabindex="-1" href="#" data-in="1996">1996</a> </li>
                                                    <li value="1995"> <a tabindex="-1" href="#" data-in="1995">1995</a> </li>
                                                    <li value="1994"> <a tabindex="-1" href="#" data-in="1994">1994</a> </li>
                                                    <li value="1993"> <a tabindex="-1" href="#" data-in="1993">1993</a> </li>
                                                    <li value="1992"> <a tabindex="-1" href="#" data-in="1992">1992</a> </li>
                                                    <li value="1991"> <a tabindex="-1" href="#" data-in="1991">1991</a> </li>
                                                    <li value="1990"> <a tabindex="-1" href="#" data-in="1990">1990</a> </li>
                                                    <li value="1989"> <a tabindex="-1" href="#" data-in="1989">1989</a> </li>
                                                    <li value="1988"> <a tabindex="-1" href="#" data-in="1988">1988</a> </li>
                                                    <li value="1987"> <a tabindex="-1" href="#" data-in="1987">1987</a> </li>
                                                    <li value="1986"> <a tabindex="-1" href="#" data-in="1986">1986</a> </li>
                                                    <li value="1985"> <a tabindex="-1" href="#" data-in="1985">1985</a> </li>
                                                    <li value="1984"> <a tabindex="-1" href="#" data-in="1984">1984</a> </li>
                                                    <li value="1983"> <a tabindex="-1" href="#" data-in="1983">1983</a> </li>
                                                    <li value="1982"> <a tabindex="-1" href="#" data-in="1982">1982</a> </li>
                                                    <li value="1981"> <a tabindex="-1" href="#" data-in="1981">1981</a> </li>
                                                    <li value="1980"> <a tabindex="-1" href="#" data-in="1980">1980</a> </li>
                                                    <li value="1979"> <a tabindex="-1" href="#" data-in="1979">1979</a> </li>
                                                    <li value="1978"> <a tabindex="-1" href="#" data-in="1978">1978</a> </li>
                                                    <li value="1977"> <a tabindex="-1" href="#" data-in="1977">1977</a> </li>
                                                    <li value="1976"> <a tabindex="-1" href="#" data-in="1976">1976</a> </li>
                                                    <li value="1975"> <a tabindex="-1" href="#" data-in="1975">1975</a> </li>
                                                    <li value="1974"> <a tabindex="-1" href="#" data-in="1974">1974</a> </li>
                                                    <li value="1973"> <a tabindex="-1" href="#" data-in="1973">1973</a> </li>
                                                    <li value="1972"> <a tabindex="-1" href="#" data-in="1972">1972</a> </li>
                                                    <li value="1971"> <a tabindex="-1" href="#" data-in="1971">1971</a> </li>
                                                    <li value="1970"> <a tabindex="-1" href="#" data-in="1970">1970</a> </li>
                                                    <li value="1969"> <a tabindex="-1" href="#" data-in="1969">1969</a> </li>
                                                    <li value="1968"> <a tabindex="-1" href="#" data-in="1968">1968</a> </li>
                                                    <li value="1967"> <a tabindex="-1" href="#" data-in="1967">1967</a> </li>
                                                    <li value="1966"> <a tabindex="-1" href="#" data-in="1966">1966</a> </li>
                                                    <li value="1965"> <a tabindex="-1" href="#" data-in="1965">1965</a> </li>
                                                    <li value="1964"> <a tabindex="-1" href="#" data-in="1964">1964</a> </li>
                                                    <li value="1963"> <a tabindex="-1" href="#" data-in="1963">1963</a> </li>
                                                    <li value="1962"> <a tabindex="-1" href="#" data-in="1962">1962</a> </li>
                                                    <li value="1961"> <a tabindex="-1" href="#" data-in="1961">1961</a> </li>
                                                    <li value="1960"> <a tabindex="-1" href="#" data-in="1960">1960</a> </li>
                                                    <li value="1959"> <a tabindex="-1" href="#" data-in="1959">1959</a> </li>
                                                    <li value="1958"> <a tabindex="-1" href="#" data-in="1958">1958</a> </li>
                                                    <li value="1957"> <a tabindex="-1" href="#" data-in="1957">1957</a> </li>
                                                    <li value="1956"> <a tabindex="-1" href="#" data-in="1956">1956</a> </li>
                                                    <li value="1955"> <a tabindex="-1" href="#" data-in="1955">1955</a> </li>
                                                    <li value="1954"> <a tabindex="-1" href="#" data-in="1954">1954</a> </li>
                                                    <li value="1953"> <a tabindex="-1" href="#" data-in="1953">1953</a> </li>
                                                    <li value="1952"> <a tabindex="-1" href="#" data-in="1952">1952</a> </li>
                                                    <li value="1951"> <a tabindex="-1" href="#" data-in="1951">1951</a> </li>
                                                    <li value="1950"> <a tabindex="-1" href="#" data-in="1950">1950</a> </li>
                                                    <li value="1949"> <a tabindex="-1" href="#" data-in="1949">1949</a> </li>
                                                    <li value="1948"> <a tabindex="-1" href="#" data-in="1948">1948</a> </li>
                                                    <li value="1947"> <a tabindex="-1" href="#" data-in="1947">1947</a> </li>
                                                    <li value="1946"> <a tabindex="-1" href="#" data-in="1946">1946</a> </li>
                                                    <li value="1945"> <a tabindex="-1" href="#" data-in="1945">1945</a> </li>
                                                    <li value="1944"> <a tabindex="-1" href="#" data-in="1944">1944</a> </li>
                                                    <li value="1943"> <a tabindex="-1" href="#" data-in="1943">1943</a> </li>
                                                    <li value="1942"> <a tabindex="-1" href="#" data-in="1942">1942</a> </li>
                                                    <li value="1941"> <a tabindex="-1" href="#" data-in="1941">1941</a> </li>
                                                    <li value="1940"> <a tabindex="-1" href="#" data-in="1940">1940</a> </li>
                                                    <li value="1939"> <a tabindex="-1" href="#" data-in="1939">1939</a> </li>
                                                    <li value="1938"> <a tabindex="-1" href="#" data-in="1938">1938</a> </li>
                                                    <li value="1937"> <a tabindex="-1" href="#" data-in="1937">1937</a> </li>
                                                    <li value="1936"> <a tabindex="-1" href="#" data-in="1936">1936</a> </li>
                                                    <li value="1935"> <a tabindex="-1" href="#" data-in="1935">1935</a> </li>
                                                    <li value="1934"> <a tabindex="-1" href="#" data-in="1934">1934</a> </li>
                                                    <li value="1933"> <a tabindex="-1" href="#" data-in="1933">1933</a> </li>
                                                    <li value="1932"> <a tabindex="-1" href="#" data-in="1932">1932</a> </li>
                                                    <li value="1931"> <a tabindex="-1" href="#" data-in="1931">1931</a> </li>
                                                    <li value="1930"> <a tabindex="-1" href="#" data-in="1930">1930</a> </li>
                                                    <li value="1929"> <a tabindex="-1" href="#" data-in="1929">1929</a> </li>
                                                    <li value="1928"> <a tabindex="-1" href="#" data-in="1928">1928</a> </li>
                                                    <li value="1927"> <a tabindex="-1" href="#" data-in="1927">1927</a> </li>
                                                    <li value="1926"> <a tabindex="-1" href="#" data-in="1926">1926</a> </li>
                                                    <li value="1925"> <a tabindex="-1" href="#" data-in="1925">1925</a> </li>
                                                    <li value="1924"> <a tabindex="-1" href="#" data-in="1924">1924</a> </li>
                                                    <li value="1923"> <a tabindex="-1" href="#" data-in="1923">1923</a> </li>
                                                    <li value="1922"> <a tabindex="-1" href="#" data-in="1922">1922</a> </li>
                                                    <li value="1921"> <a tabindex="-1" href="#" data-in="1921">1921</a> </li>
                                                    <li value="1920"> <a tabindex="-1" href="#" data-in="1920">1920</a> </li>
                                                    <li value="1919"> <a tabindex="-1" href="#" data-in="1919">1919</a> </li>
                                                    <li value="1918"> <a tabindex="-1" href="#" data-in="1918">1918</a> </li>
                                                    <li value="1917"> <a tabindex="-1" href="#" data-in="1917">1917</a> </li>
                                                    <li value="1916"> <a tabindex="-1" href="#" data-in="1916">1916</a> </li>
                                                    <li value="1915"> <a tabindex="-1" href="#" data-in="1915">1915</a> </li>
                                                    <li value="1914"> <a tabindex="-1" href="#" data-in="1914">1914</a> </li>
                                                    <li value="1913"> <a tabindex="-1" href="#" data-in="1913">1913</a> </li>
                                                    <li value="1912"> <a tabindex="-1" href="#" data-in="1912">1912</a> </li>
                                                    <li value="1911"> <a tabindex="-1" href="#" data-in="1911">1911</a> </li>
                                                    <li value="1910"> <a tabindex="-1" href="#" data-in="1910">1910</a> </li>
                                                    <li value="1909"> <a tabindex="-1" href="#" data-in="1909">1909</a> </li>
                                                    <li value="1908"> <a tabindex="-1" href="#" data-in="1908">1908</a> </li>
                                                    <li value="1907"> <a tabindex="-1" href="#" data-in="1907">1907</a> </li>
                                                    <li value="1906"> <a tabindex="-1" href="#" data-in="1906">1906</a> </li>
                                                    <li value="1905"> <a tabindex="-1" href="#" data-in="1905">1905</a> </li>
                                                    <li value="1904"> <a tabindex="-1" href="#" data-in="1904">1904</a> </li>
                                                    <li value="1903"> <a tabindex="-1" href="#" data-in="1903">1903</a> </li>
                                                    <li value="1902"> <a tabindex="-1" href="#" data-in="1902">1902</a> </li>
                                                    <li value="1901"> <a tabindex="-1" href="#" data-in="1901">1901</a> </li>
                                                    <li value="1900"> <a tabindex="-1" href="#" data-in="1900">1900</a> </li>
                                                    </ul>
                                        </div><!-- /input-group 년 -->
                                    </div><!-- /input-group-btn 년 -->
                                        
                                        <div class="input-group col-lg-2 col-sm-2">
                                            <input type="text" id="month" name="month" style="height:30px; width:60px; text-align:center;">
                                            <div class="input-group-btn class-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle btn-small" data-toggle="dropdown">월 <span class="caret"></span></button>
                                                <ul id="listMonth" class="dropdown-menu" style="padding-right:px; margin:0px; height:200px; min-width:1px; width:77px; overflow-x:auto; overflow-y:scroll">
                                                <li value="12"> <a tabindex="-1" href="#" data-in="12">12</a> </li>
                                                <li value="11"> <a tabindex="-1" href="#" data-in="11">11</a> </li>
                                                <li value="10"> <a tabindex="-1" href="#" data-in="10">10</a> </li>
                                                <li value="9"> <a tabindex="-1" href="#" data-in="9">9</a> </li>
                                                <li value="8"> <a tabindex="-1" href="#" data-in="8">8</a> </li>
                                                <li value="7"> <a tabindex="-1" href="#" data-in="7">7</a> </li>
                                                <li value="6"> <a tabindex="-1" href="#" data-in="6">6</a> </li>
                                                <li value="5"> <a tabindex="-1" href="#" data-in="5">5</a> </li>
                                                <li value="4"> <a tabindex="-1" href="#" data-in="4">4</a> </li>
                                                <li value="3"> <a tabindex="-1" href="#" data-in="3">3</a> </li>
                                                <li value="2"> <a tabindex="-1" href="#" data-in="2">2</a> </li>
                                                <li value="1"> <a tabindex="-1" href="#" data-in="1">1</a> </li>
                                                </ul> 
                                            </div><!-- /input-group 월 -->
                                        </div><!-- /input-group-btn 월 -->
                                        
                                        <div class="input-group col-lg-2 col-sm-2">
                                            <input type="text" id="day" name="day" style="height:30px; width:60px; text-align:center;" readonly="true">
                                            <div class="input-group-btn class-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle btn-small" data-toggle="dropdown">일 <span class="caret"></span></button>
                                                    <ul id="listDay" class="dropdown-menu" style="padding-right:px; margin:0px; height:200px; min-width:1px; width:77px; overflow-x:auto; overflow-y:scroll">
                                                    <li value="31"> <a tabindex="-1" href="#" data-in="31">31</a> </li>
                                                    <li value="30"> <a tabindex="-1" href="#" data-in="30">30</a> </li>
                                                    <li value="29"> <a tabindex="-1" href="#" data-in="29">29</a> </li>
                                                    <li value="28"> <a tabindex="-1" href="#" data-in="28">28</a> </li>
                                                    <li value="27"> <a tabindex="-1" href="#" data-in="27">27</a> </li>
                                                    <li value="26"> <a tabindex="-1" href="#" data-in="26">26</a> </li>
                                                    <li value="25"> <a tabindex="-1" href="#" data-in="25">25</a> </li>
                                                    <li value="24"> <a tabindex="-1" href="#" data-in="24">24</a> </li>
                                                    <li value="23"> <a tabindex="-1" href="#" data-in="23">23</a> </li>
                                                    <li value="22"> <a tabindex="-1" href="#" data-in="22">22</a> </li>
                                                    <li value="21"> <a tabindex="-1" href="#" data-in="21">21</a> </li>
                                                    <li value="20"> <a tabindex="-1" href="#" data-in="20">20</a> </li>
                                                    <li value="19"> <a tabindex="-1" href="#" data-in="19">19</a> </li>
                                                    <li value="18"> <a tabindex="-1" href="#" data-in="18">18</a> </li>
                                                    <li value="17"> <a tabindex="-1" href="#" data-in="17">17</a> </li>
                                                    <li value="16"> <a tabindex="-1" href="#" data-in="16">16</a> </li>
                                                    <li value="15"> <a tabindex="-1" href="#" data-in="15">15</a> </li>
                                                    <li value="14"> <a tabindex="-1" href="#" data-in="14">14</a> </li>
                                                    <li value="13"> <a tabindex="-1" href="#" data-in="13">13</a> </li>
                                                    <li value="12"> <a tabindex="-1" href="#" data-in="12">12</a> </li>
                                                    <li value="11"> <a tabindex="-1" href="#" data-in="11">11</a> </li>
                                                    <li value="10"> <a tabindex="-1" href="#" data-in="10">10</a> </li>
                                                    <li value="9"> <a tabindex="-1" href="#" data-in="9">9</a> </li>
                                                    <li value="8"> <a tabindex="-1" href="#" data-in="8">8</a> </li>
                                                    <li value="7"> <a tabindex="-1" href="#" data-in="7">7</a> </li>
                                                    <li value="6"> <a tabindex="-1" href="#" data-in="6">6</a> </li>
                                                    <li value="5"> <a tabindex="-1" href="#" data-in="5">5</a> </li>
                                                    <li value="4"> <a tabindex="-1" href="#" data-in="4">4</a> </li>
                                                    <li value="3"> <a tabindex="-1" href="#" data-in="3">3</a> </li>
                                                    <li value="2"> <a tabindex="-1" href="#" data-in="2">2</a> </li>
                                                    <li value="1"> <a tabindex="-1" href="#" data-in="1">1</a> </li>
                                                    </ul>
                                            </div><!-- /input-group 일 -->
                                        </div><!-- /input-group-btn 일 -->
                                        
                                        <div class="col-lg-6 col-sm-6"> </div> <!-- 여백 -->
                                    </div><!-- /.row -->
                              </td>
                           </tr>
                           
                           <tr>
                              <td class="active"> 직업 </td>
                              <td > 
                                <div class="row">
                                    <div class="input-group col-lg-2 col-sm-22">
                                        <input type="text" id="job" name="job" style="height:30px; width:90px; text-align:center;" readonly="true">
                                            <div class="input-group-btn class-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle btn-small" style="width:100px;" data-toggle="dropdown">직업 <span class="caret"></span></button>
                                                <ul id="listJob" class="dropdown-menu" style="padding-right:px; margin:0px; height:200px; min-width:1px; width:100px; overflow-x:auto; overflow-y:scroll">
                                                <li value="0"> <a id="job0" tabindex="-1" href="#">초등학생</a> </li>
                                                <li value="1"> <a id="job1" tabindex="-1" href="#">중학생</a> </li>
                                                <li value="2"> <a id="job2" tabindex="-1" href="#">고등학생</a> </li>
                                                <li value="3"> <a id="job3" tabindex="-1" href="#">대학생</a> </li>
                                                <li value="4"> <a id="job4" tabindex="-1" href="#">대학원생</a> </li>
                                                <li value="5"> <a id="job5" tabindex="-1" href="#">회사원</a> </li>
                                                <li value="6"> <a id="job6" tabindex="-1" href="#">자영업</a> </li>
                                                <li value="7"> <a id="job7" tabindex="-1" href="#">무직</a> </li>
                                                <li value="8"> <a id="job8" tabindex="-1" href="#">기타</a> </li>
                                                </ul> 
                                            </div><!-- /input-group 월 -->
                                    </div><!-- /input-group-btn 월 -->
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

      <!-- 자바스크립트 -->
<script type="text/javascript">

    // dropdown 활성화
    $('.dropdown-toggle').dropdown();  

    // 직업, 생년월일 값 초기화
    $(document).ready( function() {
        
        $("#job").val( $("#listJob > li").children("#job"+"<?=$job?>").html() );
        
        var $rawDate = "<?=$dateOfBirth?>"; 
        var $dateOfBirth = $rawDate.split('.');
        $("#year").val($dateOfBirth[0]);
        $("#month").val($dateOfBirth[1]);
        $("#day").val($dateOfBirth[2]);
        checkforNickname();
    });
        // 년 입력
        $("#listYear > li").click(function(){
            $("#year").val(this.value);    
        });
        // 월 입력
        $("#listMonth > li").click(function(){
            $("#month").val(this.value);    
        });
        // 일 입력
        $("#listDay > li").click(function(){
            $("#day").val(this.value);    
        });
        // 직업 입력
        $("#listJob > li").click(function(){
            $("#job").val( $( this ).children().html() );
        });
    
    // 별명 중복 확인 함수
    function checkforNickname()
    {
        var regExp = /[ \{\}\[\]\/?.,;:|\)*~`!^\-_+┼<>@\#$%&\'\"\\\(\=]/gi;//정규식 구문
        var obj = document.getElementsByName("nickname")[0];
        var $nickname = "<?=$nickname?>";

        if( obj.value.length >= 0 && obj.value.length <= 20 ) // 별명 길이 검사
        {
            if (regExp.test(obj.value)) 
            {
                obj.value = obj.value.replace(regExp,"");//특수문자를 지우는 구문
            }
            else
            {
                if( obj.value == "")
                {
                    $("#nicknameResult").html('<font color="#2233b">Nickname을 입력하세요</font>');
                    $("#nicknameResult").val("false");
                }
                else
                {
                    if( obj.value == $nickname )
                    {
                        $("#nicknameResult").html('<font color="#2233b"></font>');
                        $("#nicknameResult").val("true");
                    } 
                    else
                    {
                        $.ajax({
                                type : "POST",
                                url : "<?=base_url()?>index.php/mypage/checkInfo",
                                data : "object="+obj.value+"&target=nickname",
                                dataType : "json",
                                success : function(flag) {
                                        if( flag.value == "true")
                                        {   
                                            $("#nicknameResult").html('<font color="#2233b">사용 가능한 별명 입니다</font>');
                                            $("#nicknameResult").val("true");
                                        }
                                        else if (flag.value == "false")
                                        {
                                            $("#nicknameResult").html('<font color="#2233b">중복된 별명 입니다</font>');
                                            $("#nicknameResult").val("false");
                                        }
                                }
                        });

                    }
                }
            }
        }
        else
        {
            $("#nicknameResult").html('<font color="#2233b">1 ~ 20 글자의 별명만 사용 가능 합니다</font>');
        }
    }

    // submit
    function basicinfoResult()
    {
        var $result = $("#nicknameResult").val();
        
        if( $result == "true")
        {
            $("#basicinfomodifyForm").submit();
            alert("정상적으로 변경 되었습니다");
        }
        else
        {
            alert("다시 확인해");
        }
    }
</script>
