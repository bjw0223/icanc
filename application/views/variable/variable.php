<div class="col-lg-9 tutorial_desc">
    <span class="general">
      <ul>
          <li>선언 방법</li>
          <li id="list">[자료형] [변수명];</li>
          <li id="list">ex) int num; char ch; double db;</li><br>
          <li>변수의 형은 상수의 형을 따라가기 때문에 상수에 의해서 변수의 타입이 결정된다.</li><br>
          <li>변수의 값은 상수와 달리 프로그램 실행 중간에 변경이 가능하다.</li><br>
          <li>변수에 값 저장 시(메모리 내)</li>
		  <img src="<?=base_url()?>asset\lib\img\lecture\variable\1.png" width=400px; height=260px;><br><br>
		  <img src="<?=base_url()?>asset\lib\img\lecture\variable\2.png" width=715px; height=280px;><br><br>
		  <li id="list" class="general_sub">* 정수형 대표 : int(4byte), 실수형 대표 : double(8byte)</li>
		  <li id="list" class="general_sub">* 숫자, 문자 상수 : 고정길이 상수, 문자열 상수 : 가변길이 상수</li><br>
          <li>변수와 상수 저장 위치</li>
		  <img src="<?=base_url()?>asset\lib\img\lecture\variable\3.png" width=715px; height=260px style="margin-top:20px"><br><br>
		  <li id="list" class="general_sub">* 상수는 Ro-data 영역에 저장</li>
		  <li id="list" class="general_sub" style="text-indent:17px">상수 = 상수 꼴 형태는 Read only 영역에 있기 때문에 bit copy 불가</li><br>
          <li>예제</li>
<pre class="brush:cpp">
#include &lt;stdio.h&gt;
int main()
{
    int a = 12;
    char str[4] = "sky"
    printf("%d\n", a);
    printf("%s\n", str);
    printf("%s\n", &amp;str[0]);
          .
          .
          .
    return 0;
}
</pre>
		  <img src="<?=base_url()?>asset\lib\img\lecture\variable\4.png" width=360px; height=90px"><br><br>
          <li id="list" class="general_sub">cf. printf(“%s\n”, str[0]);</li>
		     <ul>
		         <li class="general_sub2">변환문자열 %s는 대상을 주소로 인식.</li>
		         <li class="general_sub2">str[0]에 있는 ‘a’의 아스키 코드 값 97을 주소로 인식해서 97번지 값부터 널 값 전까지 읽어온다.</li>
             </ul><br>
	      <li id="list" class="general_sub">cf. printf(“%s\n”, “apple”);</li>
		     <ul>
			     <li class="general_sub2">문자열은 Ro-data 영역에 잡히며 곧 그 문자열의 시작 주소 상수.</li>
			 </ul>



















      </ul>
    </span>
</div>
