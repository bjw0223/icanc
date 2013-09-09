<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
           <li>숫자</li>
	       <li id="list" class="general_sub">: 정수와 실수의 2종류가 있으며 정수는 8진수, 10진수, 16진수의 3가지 표현 방법이 존재한다.</li>
           <li id="list" class="general_sub">** 10진수는 수의 일반 표현방법.</li>
		      <ul>
	              <li class="general_sub">정수 : 소수점이 없는 숫자</li>
	              <li id="list" class="general_sub">ex) -1, 0, 1, 2, 022(8진수), 0x12(16진수) ...</li>
	              <li class="general_sub">실수 : 소수점이 존재하는 숫자</li>
	              <li id="list" class="general_sub">** 실수는 10진수만 존재한다.</li>
	              <li id="list" class="general_sub">ex) 0.1, 0.456 ...</li>
		      </ul><br>
           <li>문자</li>
		   <li id="list" class="general_sub">: 작은따옴표를 이용하며 C에서는 char형으로 1바이트를 차지한다.</li>
	       <li id="list" class="general_sub">ex) ‘I’, ‘C’ ...</li>
	       <li id="list" class="general_sub">** 실제로 내부에서 문자는 각기 해당하는 ASCII code 값으로 변경되어 저장된다.</li><br>
           <li>문자열</li>
	       <li id="list" class="general_sub">: 큰따옴표를 이용하며 고정크기가 아니므로 ‘\0’(널 문자)를 이용하여 문자열의 끝을 표시한다(없으면 제어불가)</li>
	       <li id="list" class="general_sub">ex) “I CAN C”, “SKY”</li><br>
	       <li>주소</li>
	       <li id="list" class="general_sub">: 각종 시작주소로서 변수, 배열, 함수 등의 시작주소를 말한다.</li>
		   <li id="list" class="general_sub">** 주소상수의 크기는 integer, register 크기와 동일하다.</li><br>
	       <li>매크로</li>
	       <li id="list" class="general_sub">: 매크로 상수를 이용하면 유지보수가 편하고, 처리속도가 빨라진다. 전처리 중 #define으로 정의하는 상수로 중간에 값을 변경할 수는 없다.</li>
	       <li id="list" class="general_sub">ex) #define C 34567;</li>
<pre class="brush:cpp">
#include &lt;stdio.h&gt;
#define C 34567
int main()
{
    printf("%d\n",C);     // C가 34567로 치환된다.
    return 0;
}
</pre>


       </ul>
    </span>    
</div>



















    


       </ul>
    </span>    
</div>
