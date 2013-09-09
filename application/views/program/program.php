<script>
	var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
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
</style>
<div class="col-lg-9 tutorial_desc">
  <span class="general_sub">
     <ul>
         <img src="<?=base_url();?>asset\lib\img\lecture\program\1.png" width=300px; Height=200px; style="margin-bottom:20px">
         <li>특정한 일을 컴퓨터에게 처리시키게 하기 위하여 <span class="red">처리 방법</span>과 <span class="red">순서</span>를 명령어를 통해 작성하는 것.</li><br>
         <li>컴퓨터가 처리하기 때문에 프로그램은 컴퓨터가 이해할 수 있는 특정 언어로 작성된다.</li><br>
         <li>컴퓨터 프로그램을 작성할 때 사용하는 언어를 ‘프로그래밍 언어’라 한다.</li>
         <li id="list" class="general_sub">&lt;프로그래밍 언어(Programming Language)&gt;</li>
		     <ul>
			     <li class="general_sub">사람이 이해할 수 있는 형태로는 컴퓨터에게 일을 시킬 수 없기 때문에 컴퓨터가 이해할 수 있게 고안된 언어로서 현재 매우 많은 종류의 언어가 존재한다.</li>
                 <li id="list" class="general_sub">ex) C, C++, JAVA, Perl, Ruby, BASIC ...</li>
                 <li class="general_sub">그러나 이 언어들도 컴퓨터가 완벽히 이해할 수 있는 형태가 아니기 때문에 중간에 기계어로 번역해 주어야 한다.</li>
                 <img src="<?=base_url();?>asset\lib\img\lecture\program\2.png" width=700px; Height=290px; style="margin-bottom:20px">
                 <li class="general_sub">우리가 배우고자 하는 프로그래밍 언어는 C언어이며 현재 JAVA와 더불어 가장 많이 쓰이는 언어이다.</li>
                 <img src="<?=base_url();?>asset\lib\img\lecture\program\rank.PNG" width=570px; Height=300px">
				 <li id="list" class="general_sub">** 자세한 순위는 <a href="http://www.tiobe.com/">http://www.tiobe.com/</a>에 가면 확인할 수 있다.</li><br>
		     </ul>
         <li>구성</li>
	     <li id="list" class="general_sub">프로그래밍 언어로 프로그램을 작성할 때 필요한 요소로는 여러 가지가 있지만 가장 기본적인 내용을 보면 다음과 같다.</li>
		     <ul>
			     <li class="general_sub2">상수 : 변하지 않는 값으로서 형태로는 정수, 실수, 문자(열) 등이 있다.</li>
				 <li id="list" class="general_sub2">ex) ‘I’, “CAN”, 1, 2.2 ...</li>
				 <li class="general_sub2">변수 : 상수는 그 자체로 사용하기에는 여러 제약사항이 따르므로 이를 저장할 공간이 필요한데 이것을 변수라 한다. 변수의 형태는 상수의 형태에 의해 결정된다.</li>
				 <li class="general_sub2">연산자 : 연산 시 사용하는 기호로서 총 44개가 존재한다.</li>
				 <li id="list" class="general_sub">ex) +, -, *, /, = ...</li>
				 <li class="general_sub2">예약어 : 프로그램 내에서 특정 기능을 하도록 미리 정의되어 있다.</li>
				 <li id="list" class="general_sub">ex) int, double, for, if, while ...</li>
				 <li class="general_sub2">함수 : 위의 요소들을 이용하여 만든, 특정 기능을 수행하는 작은 프로그램.</li>
                 <img src="<?=base_url();?>asset\lib\img\lecture\program\3.png" width=420px; Height=210px">
		     </ul><br>
         <li>흐름</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code">
		#include <stdio.h>
		int sum(int, int);
		int main()
		{
			int grade1 = 10, grade2 = 20, total = 0;
			total = sum(grade1, grade2);
			printf(“총 성적은 %d점입니다.\n”,total);
			return 0;
		}
		int sum(int a, int b)
		{
			int c = a + b;
			return c;
		}
			</textarea>
		</div>
         <li id="list">1. #include &lt;stdio.h&gt;</li>
            <ul>
			    <li class="general_sub">작성한 소스코드가 실행파일로 만들어지기 위해서는 먼저 컴파일러를 통해 소스코드를 목적파일로 만들고 최종적으로 링크를 거쳐야 한다. 이 과정에서 컴파일러는 목적파일로 소스코드를 바꾸기 전에 특정 파일을 포함시키거나 특정 문장을 변환하는 작업을 수행하는데 이것을 전처리라 한다.</li>
                <li class="general_sub">전처리 명령어는 #으로 시작한다.</li>
                <li class="general_sub">#include 명령어는 &lt; &gt; 나 “ ” 사이의 파일을 포함시키는 역할.</li>
                <li class="general_sub">1번 문장은 표준입출력 헤더파일을 현재 위치에 포함시키라는 뜻이다.</li>
            </ul><br>
         <li id="list" class="purple">cf. #define 명령어는 매크로명을 정의하는 것으로서 반복적으로 쓰이는</li>
	     <li id="list" class="purple" style="text-indent:36px">문장이나 단어를 간편하게 사용할 수 있다.</li>
            <ul>
                <li class="general_sub">형식 : #define 매크로명 문자(열)</li>
	            <li id="list" class="general_sub">ex) #define GOOD “I CAN C”</li>
	            <li class="general_sub">문자열 부분에 수식을 사용하는 경우 컴파일러에 의해 변환 후 다른 연산자와의 우선순위로 인해 예상치 못한 결과가 일어날 수 있으므로 괄호를 사용하는 것이 좋다.</li>
            </ul><br>
         <li id="list">2. int sum(int, int);</li>
            <ul>
			    <li class="general_sub">sum 함수의 선언부로서 컴파일러는 사용자가 정의한 함수의 존재를 미리 알 수 없기 때문에 sum 함수의 존재와 형태를 알려주는 역할을 한다.</li>
	            <li class="general_sub">실제로는 함수 호출 전에만 존재하면 되기 때문에 위치는 상관없다.</li>
	            <li class="general_sub">만약 함수의 정의부가 호출 전에 위치한다면 이때는 선언부가 존재하지 않아도 된다.</li>
	            <li class="general_sub">함수 정의부와 다르게 전달인자(괄호안의 값)의 형태만 필요할 뿐 변수명은 표시하지 않아도 된다.</li><br>
            </ul>
         <li id="list">3. int main()</li>
            <ul>
	            <li class="general_sub">여기서부터 main 함수가 시작된다.</li>
			</ul><br>
         <li id="list">4. {</li>
            <ul>
		        <li class="general_sub">{ } : 중괄호로서 block의 시작과 끝을 표시한다. 이외에도 배열 등의 초기화에 사용된다.</li>
			    <li id="list" class="general_sub">ex) int num[2] = {0,1};</li>
		        <li class="general_sub">&lt; &gt; : 필요한 헤더파일들을 포함하는데 사용된다. 이는 전처리시 수행된다.</li>
			    <li id="list" class="general_sub">ex) #include &lt;stdio.h&gt;</li>
			    <li class="general_sub">( ) : 소괄호로서 우선순위가 가장 높다. 이외에도 함수를 나타내는데 사용한다.</li>
			    <li id="list" class="general_sub">ex) sum();</li>
		        <li class="general_sub">[ ] : 대괄호로서 배열의 첨자를 나타낼 때 사용된다.</li>
			    <li id="list" class="general_sub">ex) int num[10]; num[1] = 1;</li>
            </ul><br>
         <li id="list">5. int grade1 = 10, grade2 = 20, total = 0;</li>
            <ul>
			    <li class="general_sub">변수 선언 및 초기화</li>
			    <li class="general_sub">변수의 선언과 초기화는 따로 할 수도 있다.</li>
			    <li id="list" class="general_sub">ex) int grade1; grade1 = 10;</li>
		        <li class="general_sub">변수의 선언 형식 : [type] [변수명];</li>
            </ul><br>
         <li id="list">6. total = sum(grade1, grade2);</li>
		    <ul>
			    <li class="general_sub">함수의 호출부로서 전달인자로 grade1과 grade2를 넘겨주고 있다.</li>
			    <li class="general_sub">함수의 선언부나 함수의 정의부를 보면 알 수 있듯이 sum 함수의 리턴값은 int형인데 이 값을 사용하기 위해 같은 형 변수인 total에 저장한다.</li>
		    </ul><br>
         <li id="list">7. printf(“총 성적은 %d점입니다.\n”,total);</li>
		    <ul>
			    <li class="general_sub">printf()는 표준출력함수로서 ( )안에 지정되어 있는 양식대로 화면에 출력한다.</li>
			    <li class="general_sub">%d : 형식변환문자로 total 변수의 값을 정해진 형식으로 변환하여 출력한다.</li>
			    <li class="general_sub">\n : 기능문자, 한 줄을 바꿔준다.</li>
		    </ul><br>
         <li id="list">8. return 0;</li>
		    <ul>
		        <li class="general_sub">함수의 끝을 알리는 문장으로 호출함수에게 제어를 넘겨주는 것과 동시에 0값도 같이 넘겨준다.</li>
			    <li class="general_sub">여기서는 main() 함수의 리턴값이므로 이 값은 OS가 받는다(리눅스, 유닉스 등)</li>
		    </ul><br>
         <li id="list">9. }</li>
			<ul>
			    <li class="general_sub">main() 함수의 끝</li>
			</ul><br>
         <li id="list">10 ~ 14 : sum() 함수의 정의부로서 sum() 함수의 전체 형태를 보여준다.</li><br>
	     <li id="list" class="blue">cf. OS -&gt; Start Up Code 호출 -&gt; main() 함수 호출</li>
			<ul>
			    <li class="general_sub">main 함수는 다른 함수들의 기능을 묶어준다. Start Up Code는 main 함수만 부른다(위치에 상관없다)</li>
	            <li class="general_sub">함수의 type = return 값의 type</li>
	            <li class="general_sub">main() 함수 끝에서 return 하고 Start Up code로 돌아간다.</li>
			</ul><br>
	     <li id="list" class="maroon">cf. C 언어 block의 종류</li>
		    <ul>
			    <li class="general_sub">함수의 block (몸체)</li>
	            <li class="general_sub">명령어 block</li>
	            <li id="list" class="general_sub">ex) if (조건식)</li>
                <li id="list" class="general_sub" style="text-indent:36px"><span class="red">{</span> ..... <span class="red">}</span> else <span class="red">{</span> ..... <span class="red">}</span></li>
	            <li class="general_sub">Sub block (이름 없는 block)</li>
	            <li id="list" class="general_sub">ex) int main()</li>
                <li id="list" class="general_sub" style="text-indent:36px">{ <span class="red">{</span> .... <span class="red">}</span> }</li>
		    </ul><br>
         <li>전처리, 컴파일, 링크의 이해</li>
             <img src="<?=base_url();?>asset\lib\img\lecture\program\4.png" width=750px; Height=470px style="margin-top:20px">
             <li id="list" class="general_sub">시작 : OS -&gt; Start up code -&gt; main() 함수 -&gt; sub() 함수 -&gt; printf() 함수</li>
			 <li id="list" class="general_sub">종료 : 역순</li><br>
			 <li id="list" class="general_sub">** Start up code</li>
			    <ul>
				    <li class="general_sub2">역할 : 메인함수 호출하기 전 실행하는데 필요한 Memory를 할당(buffer, system 변수, system 상수), 해제(memory 관련 정리)</li>
	                <li class="general_sub2">제공처 : OS -&gt; 윈도우즈에서 만든 실행파일을 리눅스에서 실행 불가한 이유</li>
			    </ul><br>
         <li>링커의 두 번째 역할 - 분할 컴파일</li>
             <img src="<?=base_url();?>asset\lib\img\lecture\program\5.png" width=450px; Height=300px style="margin-top:20px"><br><br>
         <li>링커의 두 번째 역할 - 통합 컴파일</li>
             <img src="<?=base_url();?>asset\lib\img\lecture\program\6.png" width=450px; Height=250px style="margin-top:20px">
     </ul>
  </span>
</div>





































