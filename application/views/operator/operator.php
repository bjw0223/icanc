<script>
	var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
	var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
	var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
	var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
	var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
	var editor = CodeMirror.fromTextArea(document.getElementById("code6"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
	var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
	var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
	var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
	var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
	var editor = CodeMirror.fromTextArea(document.getElementById("code11"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
</script>
</script>
</script>
<style>
	.codearea {
	padding:10px 0px 10px 30px;
	}
    .CodeMirror {
        border-top: 1px solid #eee;
        border-bottom: 0px solid #eee;
        height: auto;
        width:100%;
    }
</style>
<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
	       <li>종류 및 우선순위</li>
              <img src="<?=base_url()?>asset\lib\img\lecture\operator\1.PNG" width=600px; height=500px style="margin-bottom:20px"><br>
			  <ul>
	              <li class="general_sub">( ) : 우선순위를 최고로 높이고 싶을 때 사용한다.</li>
		          <li id="list" class="general_sub2">ex) (a + 3) * b;</li>
		          <li class="general_sub">[ ] : 배열 선언문에서 배열 첨자를 사용할 때.</li>
		          <li id="list" class="general_sub2">ex) int a[10];</li>
		          <li class="general_sub">-&gt; : 구조체와 공용체에서 각 멤버를 간접 참조할 때 사용한다.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code">
struct st {
   int b;
   char c;
} st1;
st1.b = 3;
st1.c = ‘A’;
			</textarea>
		</div>
		         <li class="general_sub">-, + : 부호 반전(-를 붙이는 의미가 아니라 현 상태 반전), 부호 유지(현 상태 유지)</li>
	             <li id="list" class="general_sub2">ex) int a; a = +-+-+-+3; a는 –3</li>
                 <li class="general_sub">++, -- : 증감 연산자</li>
	             <li id="list" class="general_sub">변수의 값을 1만큼 증가시키거나 감소시킬 때 사용한다. 사용 시 전위와 후위, 두가지 방법이 존재한다.</li>
				    <ul>
					    <li class="general_sub2">전위 : 변수의 값을 일단 증감시키고 변경된 값으로 연산을 처리한다.</li>
	                    <li class="general_sub2">후위 : 증감시키기 전 값으로 연산을 수행한 후 증감시킨다.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code2">
int a = 3;
int b = 2;
int c, d;
c = ++a;
d = b--;
printf(“%d\n”, c);
printf(“%d\n”, d);
			</textarea>
		</div>
	                    <li id="list" class="red" style="font-size:15px">*** 전위형, 후위형의 물리적 수행과정</li>					
		<div class="codearea">
			<textarea class="code" name="code" id="code3">
int a = 7;
int n;
n = a++;  --&gt; a의 복사본 a’이 대입되고 증가된 a는 남아있다
              (연산자 우선순위 변함 없다)
a++ = 15; --&gt; 복사본 a’이 만들어지고 a는 증가되며 복사본에
              15가 대입된다. 복사본은 상수개념이므로 에러가 발생.
			</textarea>
		</div>
				    </ul>
		         <li class="general_sub">! : true 값을 false 로, false를 true로 바꿔준다.</li>
	             <li id="list" class="general_sub">C언어에서는 0은 거짓을 의미하며 0을 제외한 모든값은 참이다.</li>
	             <li class="general_sub">~ : 비트값을 반전시켜주며 보통 1의 보수 연산자라고 불린다. 0은 1로, 1은 0으로 바꾼다.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code4">
int a = 0, b = 1;
printf(“%d\n”, ~a, ~b);
			</textarea>
		</div>
	             <li class="general_sub">(type) : 형변환 연산자로 강제형변환의 개념. 형변환 시 늘어날 때 복사본이 만들어져 다른 공간에 잡힌다(복사본은 상수 취급)</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code5">
int a = 1;
double b;
b = (double)1*3;
			</textarea>
		</div>
	             <li class="general_sub">sizeof : 자료형의 크기를 구할 때 사용하며 모든 자료형과 상수, 변수의 값을 byte 단위로 구할 수 있다.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code6">
#include &lt;stdio.h&gt;
int main()
{
    int b = 1;
    printf(“%d\n”, (int));
    printf(“%d\n”, (double));
    printf(“%d\n”, (1));
    printf(“%d\n”, (b));
    printf(“%d\n”, (‘A));
    return 0;
}
			</textarea>
		</div>
                 <img src="<?=base_url()?>asset\lib\img\lecture\operator\2.PNG" width=400px; height=130px; style="margin-bottom:20px"><br>
	             <li class="general_sub">&amp; : 주소 연산자</li>
				    <ul>
					    <li class="general_sub2">선언문 : 사용불가.</li>
                        <li class="general_sub2">실행문 : 차원을 내린다.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code7">
int a = 1;
printf(“%p\n”, &amp;a);
			</textarea>
		</div>
                    </ul>
                 <li class="general_sub">* : 포인터 연산자</li>
                    <ul>
					    <li class="general_sub">선언문 : 포인터변수 선언 시 사용, 차원을 올린다.</li>
                        <li class="general_sub">실행문 : 포인터변수가 가리키는 값을 의미한다, 차원을 내린다.</li>
                        <img src="<?=base_url()?>asset\lib\img\lecture\operator\3.PNG" width=550px; height=180px; style="margin-bottom:20px"><br>
                    </ul>
                 <li id="list" class="red" style="font-size:16px">*** 참고사항</li>
                   <img src="<?=base_url()?>asset\lib\img\lecture\operator\4.PNG" width=550px; height=350px; style="margin-bottom:20px"><br>
                   <img src="<?=base_url()?>asset\lib\img\lecture\operator\5.PNG" width=500px; height=220px; style="margin-left:22px; margin-bottom:20px"><br>
			     <li class="general_sub">% : 나머지 연산자</li>
                 <li id="list" class="general_sub2">ex) 10 % 3 = 1 (나머지)</li>
                 <li class="general_sub">&lt;&lt;, &gt;&gt; : shift 연산자로 비트 단위로 이동 시킨다.</li>
                 <li id="list" class="general_sub2">비트를 좌로 이동시킬 때 좌측의 밀려나는 비트는 사라지며 우측에 새로운 비트들은 무조건 0으로 채워진다.<br>비트를 우로 이동 시킬 때 우측의 밀려나는 비트는 사라지며 좌측의 새로운 비트틀은 기존의 자료형이 signed일 때 sign bit의 값으로 채워지며 unsigned일 경우 0으로 채워진다. shift 연산을 사용하여 곱 연산을 하게 되면 직접 곱 연산을 한 것보다 훨씬 빠르다.</li>
                   <img src="<?=base_url()?>asset\lib\img\lecture\operator\6.PNG" width=350px; height=220px; style="margin-bottom:20px"><br>
                 <li class="general_sub">==, != : 등가 연산자로 결과 값은 true or false 이다.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code8">
int a = 3, b = 2;
if( a == b)
{
    printf(“두 변수의 값이 같다\n”);
}
			</textarea>
		</div>
                 <li class="general_sub">&amp; : bitwise AND</li>
                 <li id="list" class="general_sub2">양쪽의 값이 모두 1이어야만 1이 된다.</li>
                 <li class="general_sub">^ : bitwise Exclusive OR</li>
                 <li id="list" class="general_sub2">양쪽의 값이 모두 같을 때만 0이 된다.</li>
                 <li class="general_sub">| : bitwise OR</li>
                 <li id="list" class="general_sub2">양쪽의 값이 모두 0일 때만 0이 된다.</li>
                 <li class="general_sub">&amp;&amp; : Logical AND</li>
                 <li id="list" class="general_sub2">양쪽이 모두 참이어야만 참이 된다.</li>
                 <li class="general_sub">|| : Logical OR</li>
                 <li id="list" class="general_sub2">한쪽이라도 참이면 결과는 참이 된다.</li>
                 <li id="list" class="red" style="font-size:16px">*** short circuit --&gt; Logical AND 와 Logical OR에서 연산 속도를 빠르게 하기 위한 기법이다.</li>
                    <ul>
					    <li class="general_sub2">Logical AND : 좌측이 거짓이면 우측은 무시한다 --&gt; false</li>
                        <li class="general_sub2">Logical OR : 좌측이 참이면 우측은 무시한다 --&gt; true</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code9">
int a, b = 0, ans;
scanf(“%d”, &amp;a);
ans = a &amp;&amp; b++;
a 값이 True 일 경우 – ans : 0, b : 1
a 값이 Flase 일 경우 – ans : 0, b : 0
			</textarea>
		</div>
                    </ul>
                 <li class="general_sub">?: : 조건 연산자로서 3항연산자이다. 조건식 안에 return 문 불가.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code10">
(조건식) ? (수식 or 값) : (수식 or 값);
int ans = a &gt; b ? ++a : ++b;
			</textarea>
		</div>
                 <li id="list" class="general_sub2">조건식이 참이면 앞의 수식이나 값, 거짓이면 뒤의 수식이나 값을 수행한다.</li>
				 <li class="general_sub">=, +=, *= ... : 대입 연산자, 단축형 연산자</li>
                 <li id="list" class="general_sub2">좌측이 피연산자가 되며 우측의 값만큼 연산을 수행한다.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code11">
a += 3; --&gt; a = a + 3;
a *= 3; --&gt; a = a * 3;
			</textarea>
		</div>

			  </ul>
       </ul>
    </span>    
</div>

