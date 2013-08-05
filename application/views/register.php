
<div id="register" class="container">
    <div class="row">
        <div class="col-lg-10 col-offset-1">
           <form class="form-horizontal" action="<?=base_url()?>index.php/auth/register" method="post">
    	        <legend align="center"><h1> 회 원 가 입 </h1></legend>
                <small color="gold"> 회원님의 정보 중 변경된 내용이 있는 경우, 아래에서 수정해주세요. <br/>
                회원정보는 개인정보취급방침에 따라 안전하게 보호되며, 회원님의 명백한 동의 없이 공개 또는 제 3자에게 
                제공되지 않습니다. <br/><br/><br/>
                </small>
                <table class="table">
                    <thead> </thead>
                    <tbody>
                       <tr>
                          <th class="active" width="200px" style="padding-left:20px">이메일</th>
                          <th><input type="text" id="email" name="email" class="span11 offset1" value="<?php echo set_value('email'); ?>" placeholder="Email"></th>
                       </tr>
                       <tr>
                          <td class="active">별명</td>
                          <td>
                             <div class="row">
                                    <div class="col-lg-3">
                                        <input type="text" id="nickname" name="nickname" onkeyup="checkforNickname()" onfocus=" " class="span12" placeholder="Nickname"> 
                                    </div>
                                    <div class="col-lg-4">
                                    <label id="checkResult" style="margin-top:2px"> </label>
                                    </div>
                             </div>
                                <div style="margin-top:8px">
                                    <small style="color:orange">특수문자를 제외한 한글, 영문 대소문자 2~20자, 숫자를 사용할 수 있습니다. (혼용가능) <br/>
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
                          <td class="active" > 생년월일 </td>
                          <td >
                            <div class="row">
                                <div class="col-lg-3">
                                    <input type="text" id="birth" name="birth" class="span12" placeholder="Birthday"> 
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning" id="year" name="year">YEAR</button>
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                            <li><a tabindex="-1" href="">2013</a></li> <li><a tabindex="-1" href="#">2012</a></li> <li><a tabindex="-1" href="#">2011</a></li>
                                            <li><a tabindex="-1" href="#">2010</a></li> <li><a tabindex="-1" href="#">2009</a></li> <li><a tabindex="-1" href="#">2008</a></li>
                                            <li><a tabindex="-1" href="#">2007</a></li> <li><a tabindex="-1" href="#">2006</a></li> <li><a tabindex="-1" href="#">2005</a></li>
                                            <li><a tabindex="-1" href="#">2004</a></li> <li><a tabindex="-1" href="#">2003</a></li> <li><a tabindex="-1" href="#">2002</a></li>
                                            <li><a tabindex="-1" href="#">2001</a></li> <li><a tabindex="-1" href="#">2000</a></li> <li><a tabindex="-1" href="#">1999</a></li>
                                            <li><a tabindex="-1" href="#">1998</a></li> <li><a tabindex="-1" href="#">1997</a></li> <li><a tabindex="-1" href="#">1996</a></li>
                                            <li><a tabindex="-1" href="#">1995</a></li> <li><a tabindex="-1" href="#">1994</a></li> <li><a tabindex="-1" href="#">1993</a></li>
                                            <li><a tabindex="-1" href="#">1992</a></li> <li><a tabindex="-1" href="#">1991</a></li> <li><a tabindex="-1" href="#">1990</a></li>
                                            <li><a tabindex="-1" href="#">1989</a></li> <li><a tabindex="-1" href="#">1988</a></li> <li><a tabindex="-1" href="#">1987</a></li>
                                            <li><a tabindex="-1" href="#">1986</a></li> <li><a tabindex="-1" href="#">1985</a></li> <li><a tabindex="-1" href="#">1984</a></li>
                                            <li><a tabindex="-1" href="#">1983</a></li> <li><a tabindex="-1" href="#">1982</a></li> <li><a tabindex="-1" href="#">1981</a></li>
                                            <li><a tabindex="-1" href="#">1980</a></li> <li><a tabindex="-1" href="#">1979</a></li> <li><a tabindex="-1" href="#">1978</a></li>
                                            <li><a tabindex="-1" href="#">1977</a></li> <li><a tabindex="-1" href="#">1976</a></li> <li><a tabindex="-1" href="#">1975</a></li>
                                            <li><a tabindex="-1" href="#">1974</a></li> <li><a tabindex="-1" href="#">1973</a></li> <li><a tabindex="-1" href="#">1972</a></li>
                                            <li><a tabindex="-1" href="#">1971</a></li> <li><a tabindex="-1" href="#">1970</a></li> <li><a tabindex="-1" href="#">1969</a></li>
                                            <li><a tabindex="-1" href="#">1968</a></li> <li><a tabindex="-1" href="#">1967</a></li> <li><a tabindex="-1" href="#">1966</a></li>
                                            <li><a tabindex="-1" href="#">1965</a></li> <li><a tabindex="-1" href="#">1964</a></li> <li><a tabindex="-1" href="#">1963</a></li>
                                            <li><a tabindex="-1" href="#">1962</a></li> <li><a tabindex="-1" href="#">1961</a></li> <li><a tabindex="-1" href="#">1960</a></li>
                                            <li><a tabindex="-1" href="#">1959</a></li> <li><a tabindex="-1" href="#">1958</a></li> <li><a tabindex="-1" href="#">1957</a></li>
                                            <li><a tabindex="-1" href="#">1956</a></li> <li><a tabindex="-1" href="#">1955</a></li> <li><a tabindex="-1" href="#">1954</a></li>
                                            <li><a tabindex="-1" href="#">1953</a></li> <li><a tabindex="-1" href="#">1952</a></li> <li><a tabindex="-1" href="#">1951</a></li>
                                            <li><a tabindex="-1" href="#">1950</a></li> <li><a tabindex="-1" href="#">1949</a></li> <li><a tabindex="-1" href="#">1948</a></li>
                                            <li><a tabindex="-1" href="#">1947</a></li> <li><a tabindex="-1" href="#">1946</a></li> <li><a tabindex="-1" href="#">1945</a></li>
                                            <li><a tabindex="-1" href="#">1944</a></li> <li><a tabindex="-1" href="#">1943</a></li> <li><a tabindex="-1" href="#">1942</a></li>
                                            <li><a tabindex="-1" href="#">1941</a></li> <li><a tabindex="-1" href="#">1940</a></li> <li><a tabindex="-1" href="#">1939</a></li>
                                            <li><a tabindex="-1" href="#">1938</a></li> <li><a tabindex="-1" href="#">1937</a></li> <li><a tabindex="-1" href="#">1936</a></li>
                                            <li><a tabindex="-1" href="#">1935</a></li> <li><a tabindex="-1" href="#">1934</a></li> <li><a tabindex="-1" href="#">1933</a></li>
                                            <li><a tabindex="-1" href="#">1932</a></li> <li><a tabindex="-1" href="#">1931</a></li> <li><a tabindex="-1" href="#">1930</a></li>
                                            <li><a tabindex="-1" href="#">1929</a></li> <li><a tabindex="-1" href="#">1928</a></li> <li><a tabindex="-1" href="#">1927</a></li>
                                            <li><a tabindex="-1" href="#">1926</a></li> <li><a tabindex="-1" href="#">1925</a></li> <li><a tabindex="-1" href="#">1924</a></li>
                                            <li><a tabindex="-1" href="#">1923</a></li> <li><a tabindex="-1" href="#">1922</a></li> <li><a tabindex="-1" href="#">1921</a></li>
                                            <li><a tabindex="-1" href="#">1920</a></li> <li><a tabindex="-1" href="#">1919</a></li> <li><a tabindex="-1" href="#">1918</a></li>
                                            <li><a tabindex="-1" href="#">1917</a></li> <li><a tabindex="-1" href="#">1916</a></li> <li><a tabindex="-1" href="#">1915</a></li>                           
                                            <li><a tabindex="-1" href="#">1914</a></li> <li><a tabindex="-1" href="#">1913</a></li> <li><a tabindex="-1" href="#">1912</a></li>                                
                                            <li><a tabindex="-1" href="#">1911</a></li> <li><a tabindex="-1" href="#">1910</a></li> <li><a tabindex="-1" href="#">1909</a></li>                         
                                            <li><a tabindex="-1" href="#">1908</a></li> <li><a tabindex="-1" href="#">1907</a></li> <li><a tabindex="-1" href="#">1906</a></li>
                                            <li><a tabindex="-1" href="#">1905</a></li> <li><a tabindex="-1" href="#">1904</a></li> <li><a tabindex="-1" href="#">1903</a></li>                                  
                                            <li><a tabindex="-1" href="#">1902</a></li> <li><a tabindex="-1" href="#">1901</a></li> <li><a tabindex="-1" href="#">1900</a></li>                      
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                <div style="margin-top:8px">
                                    <small style="color:purple">8자리 숫자만 가능합니다.<font style="color:black"> 예) 1951년06월25일 => 19510625 </font> <br/>
                                </small>
                          </td>
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

  <!-- 자바스크립트 -->
<script type="text/javascript">

  // 별명 중복 확인 함수
  function checkforNickname()
  {
        var regExp = /[ \{\}\[\]\/?.,;:|\)*~`!^\-_+┼<>@\#$%&\'\"\\\(\=]/gi;//정규식 구문
        var obj = document.getElementsByName("nickname")[0]
       
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
                            $("#checkResult").html('<font color="#2233b">공백은 사용할 수 없습니다.</font>');
                        }
                        else
                        {
                            $("#checkResult").load("<?=base_url()?>index.php/mypage/checkforNickname/"+obj.value);
                        }
                }
        }
        else
        {
            $("#checkResult").html('<font color="#2233b">1 ~ 20 글자의 별명만 사용 가능 합니다.</font>');
        }
  }
$('.dropdown-toggle').dropdown();  
$('#a').scrollspy(100);
</script>
