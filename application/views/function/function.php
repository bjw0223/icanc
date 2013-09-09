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
	       <li>각각의 함수는 독립적이다.</li><br>
		   <li>자주 쓰이는 부분을 함수로 만들어 필요시 호출하여 사용한다.</li><br>
		   <li>구조적 프로그래밍을 가능하게 하는 기본 원리이다.</li><br>
		   <li>유지보수가 용이하다.</li><br>
		   <li>임베디드에서는 속도 문제로 함수를 사용하지 않는다.</li><br>
		   <li>한가지 함수에는 한가지 기능이 있는 것이 이상적이므로 코드가 쓸데없이 길어지지 않도록 주의한다.<br>(길어지면 대개 여러 기능이 포함되어 있을 수 있다)</li><br>
	       <li>반드시 호출 해야만 실행이 가능하며 끝에서 항상 return을 한다.</li><br>
	       <li>분류</li>
	          <ul>
			      <li class="general_sub">System Library Function : 일반 사용자들이 많이 사용하는 함수들을 미리 정의한 것인데 대개 컴파일러 제조사에서 제공한다.</li>
	              <li id="list" class="blue" style="font-size:16px">www.winapi.co.kr 에서 C레퍼런스 메뉴를 클릭 --&gt; 460여개의 함수 정보</li>
	              <li class="general_sub">User Define Function : 제공되는 함수 이외에 사용자가 직접 만들어<br>사용하는 함수</li>
			  </ul><br>
	       <li>형식</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code">
	type 함수명 (전달인자)
	{
		변수 선언 및 수행 문장;
		return (값 or 수식);
	}
			</textarea>
		</div>
	          <ul>
			      <li class="general_sub">맨 첫부분의 type은 함수의 리턴값의 type으로서 해당 함수의 type을 의미한다.</li>
                  <li class="general_sub">함수명은 변수명을 만드는 규칙만 지키면 자유로우나 대개 해당 함수의 기능을 예측할 수 있는 이름을 권장한다.</li>
                  <li class="general_sub">전달인자는 함수가 호출될 때 넘어오는 데이터의 형과 변수명을 선언하는 부분인다.</li>
                  <li class="general_sub">블록({ })내에 함수의 기능을 정의한다.</li>
                  <li class="general_sub">함수 선언부를 블록안에서 선언할 경우에는 지역변수와 같은 효과를 지닌다.</li>
		      </ul><br>
           <li>선언부, 호출부, 정의부</li>
		      <ul>
			      <li class="general_sub">선언부 : 함수에 대한 기본 정보를 컴파일러에게 알려주는 부분으로 main() 함수 앞에 정의부가 위치 했을 경우에 생략이 가능하다. 또한 사용자가 함수 호출시 잘못 사용하는 경우에 교정 역할을 해준다.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code2">
	char sum(int);
	int main()
	{
		sum(3.3);         --&gt; 이때 int 형으로 변환되어 날아간다.
		return 0;
	}
	void sum(int a)
	{
		printf(“%d\n”, a+3);
	}
			</textarea>
		</div>
                  <li class="general_sub">호출부 : 함수를 실제 사용할 때 쓰이며 여러 번 반복 호출이 가능하다. 호출부에서는 type을 표시하지 않는다.</li>
                  <li class="general_sub">정의부 : 기능을 기술한 부분으로 시스템 라이브러리 함수는 이 부분이 필요없으나 사용자 정의 함수는 모든 부분이 필요하다.</li>
                  <img src="<?=base_url()?>asset\lib\img\tutorial\function\1.PNG" width=440px; height=430px; style="margin-top:20px"><br>
                  <img src="<?=base_url()?>asset\lib\img\tutorial\function\2.PNG" width=630px; height=390px;><br>
		      </ul><br>
           <li>return 의 역할</li>
		      <ul>
			      <li class="general_sub">호출함수로 제어를 돌려준다.</li>
				  <li class="general_sub">return 값을 이용하여 호출함수로 그 값을 넘겨준다(동시에 넘길 수 있는 값은 오직 1개 뿐)</li>
                  <li class="general_sub">return 이 없어도 함수를 닫는 부분의 중괄호가 그 역할을 대신하며 이 때는 어떤 값 없이 제어만 돌려준다.</li>
                  <li class="general_sub">전달인자는 보통 4개까지 가능한데 이 전달인자와 return 값은 레지스터에 실려 날아간다.</li>
                  <li id="list" class="red" style="font-size:16px">*** 레지스터는 4byte 이므로 전달인자가 double 형일 경우 차라리 주소값(4byte)을 보내는 것이 좋다.</li><br>
                  <li id="list" class="purple" style="font-size:16px">cf. return 3.5</li>
				     <ul>
					     <li class="purple" style="font-size:15px">return(3.5) --&gt; 괄호를 안쓰려면 최소 한 칸 띄워야 한다.</li>
						 <li class="purple" style="font-size:15px">return 3.5, 7.5; --&gt; 뒤에 7.5는 버려진다.</li>
                         <li class="purple" style="font-size:15px">return (3.5, 7.5); --&gt; ,가 가장 낮은 우선순위 연산자이므로 뒤에 값을 남기기 때문에 7.5가 리턴된다.</li>
                     </ul>
		      </ul><br>
           <li>매개변수</li>
		      <ul>
			      <li class="general_sub">종류</li>
				     <ul>
                         <li class="general_sub2">실 매개변수 : 함수 호출시 실제로 넘겨주는 변수</li>
                         <li class="general_sub2">형식 매개변수 : 호출된 함수 쪽에서 받는 변수</li>
                     </ul>
			      <li class="general_sub">특징</li>
                     <ul>
					     <li class="general_sub2">호출한 함수에서 넘겨주는 실 매개변수의 개수와 전달받는 쪽 함수의 형식 매개변수의 개수는 같아야 한다.</li>
                         <li class="general_sub2">실 매개변수와 형식 매개변수의 type은 같아야 하는데 다른 경우에는 형식매개변수의 형으로 자동형변환되어 넘어온다.</li>
                         <li class="general_sub2">실 매개변수와 형식 매개변수의 이름은 서로 상관이 없기 때문에 일치해도 상관이 없다. --&gt; 실제로 다른 기억 공간에 잡힌다.</li>
                     </ul>
                  <li class="general_sub">전달방법</li>
                     <ul>
					     <li class="general_sub2">Call by Value : 직접 값을 전달하는 방식으로 실 매개변수의 값을 레지스터로 복사하여 넘긴다. 실 매개변수의 값은 임의로 변경되지 않는다.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code3">
	#include &lt;stdio.h&gt;
	int main()
	{
		int a = 1;
		int b = 2;
		sum(a, b);
		return 0;
	}
	void sum(int a, int b)
	{
		printf(“%d\n”, a+b);
	}
			</textarea>
		</div>
					     <li class="general_sub2">Call by Pointer : 값이 아닌 주소를 전달하는 방식으로 실제 주소가 넘어가기 때문에 호출된 함수 내부에서의 값 변경이 실제로 영향을 미친다.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code4">
	#include &lt;stdio.h&gt;
	int main()
	{
		int a = 1;
		int b = 2;
		sum(&amp;a, &amp;b);
		return 0;
	}
	void sum(int *a, int *b)
	{
		int c = *a;
		int d = *b
		printf(“%d\n”, c + d);
	}
			</textarea>
		</div>
                     </ul>
		      </ul><br>
           <li>재귀호출함수</li>
              <ul>
			      <li class="general_sub">자신을 호출하는 함수로서 호출될 때마다 실제로 메모리에 올라간다.</li>
                  <li class="general_sub">재귀호출은 자신을 계속 호출하기 때문에 어느 시점에서는 탈출할 수 있게 해야 한다. --&gt; <span class="blue">Stack Overflow 로 실제로 무한으로 계속되지는 않는다.</span></li>
              </ul><br>
           <li>함수 내부 메모리 개념도</li>
		   <li id="list">void sjm(), void bjw() 라는 함수가 존재할 때.</li>
          <img src="<?=base_url()?>asset\lib\img\tutorial\function\3.PNG" width=700px; height=420px;><br>
		   
       <ul>
    <span class="general">    
<div class="col-lg-9 tutorial_desc">

