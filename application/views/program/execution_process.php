<div class="col-lg-9 tutorial_desc">

<img src="<?=base_url()?>asset\lib\img\tutorial\program\execution_process\1.PNG" width=650px; Height=400px; style="margin-bottom:20px"><br>

<span class="general">

1. main 함수는 다른 함수들의 기능을 묶어주는 역할 - Start up code는 main 함수만 부른다<br><div style="text-indent:20px">(위치에 상관없다)</div>
2. 함수의 Type = Return 값의 Type<br>
3. main 함수 끝에서 return 하고 Start up code로 돌아간다<br><br>

example program
<pre class="brush:cpp">
#include &lt;stdio.h&gt;
void print_number(int);
int main()
{
    int num;
    num = 1;
    print_number(num);
    num = 3;
    print_number(num);
    return 0;
}
void print_number(int n)
{
    printf("정수값은 %d입니다.\n", n);
    return 0;
}
</pre>

1 line : C 언어 주석문, 프로그램의 이해를 돕기 위한 해설, 컴파일 대상에서 제외<br>
<div class="general_sub1">/* .... */ -&gt; 여러 줄 주석</div>
<p class="general_sub1">// -&gt; 한 줄 주석</p>

2 line : #include &lt;stdio.h&gt; - stdio는 Standard input / output을 의미<br>
<div class="general_sub1">1) &lt;stdio.h&gt;의 h는 header file을 의미하며, <span class="red">표준 입출력 함수</span>의 선언부가 header file 내에 존재 한다는 뜻</div>
<div class="general_sub1">2) #include는 선행처리기 명령(Preprocessor 지시자)이다.</div>
<p class="general_sub1">cf) 문장 뒤에 ;(세미콜론)이 붙으면 컴파일러가, 문장 앞에 #이 붙으면 전처리기가 처리한다.</p>

3 line : void print_number(int);
<div class="general_sub1">1) print_number() 함수의 선언부분으로서 컴파일러에게 함수에 대한 기본 정보를 제공하며 선언부분 미 존재 시</div>
<div class="general_sub1">함수호출부에서 에러 발생 (호출 전에만 선언하면 되므로 위치는 상관없다)</div>
<p class="general_sub1">2) 괄호 안은 함수의 전달인자(Parameter)로서 이 함수의 전달인자 type은 int 형이다.</p>

4 line : int main()
<p class="general_sub1">main 함수의 시작 부분</p>

5 line : {
<div class="general_sub1">1) ( ) : 소괄호, 함수를 나타내기 위해 사용되며 수식의 우선순위를 변경할 때도 사용된다. 소괄호의 우선순위가 최고</div>
<div class="general_sub1">2) &lt; &gt; : 헤더파일을 포함 시 사용(include)</div>
<div class="general_sub1">3) { } : 중괄호, Block의 시작과 끝 표시, 또는 응용 자료형의 데이터 초기화 시 사용된다. ex) int ary[5] = {1,2,3,4,5};</div>
<p class="general_sub1">4) [ ] : 대괄호 : 배열 선언 및 배열 요소 지정에 사용된다. ex) int a[5];</p>

6~7 line : int num;
<div class="general_sub1">1) num 이라는 이름의 int형(정수형) 변수 생성</div>
<div class="general_sub1">2) num = 1; : 생성된 변수 num에 숫자상수 1을 대입한다.</div>
<p class="general_sub1">3) int num = 1; 의 형태처럼 한 줄로 쓸 수 있다.</p>

8, 10 line : print_number(num);
<p class="general_sub1">print_number() 함수의 호출 부분</p>

13~17 line : print_number(int n) {...}
<p class="general_sub1">print_number 함수 정의부</p>

15 line : printf(“정수값은 %d입니다.\n”, n);
<div class="general_sub1">1) printf() 는 표준 출력함수로서 괄호 안에 지정되어 있는 출력 형식대로 화면(모니터)에 출력한다.</div>
<div class="general_sub1">2) %d : 형식변환문자 -&gt; 2진수로 저장이 되어 있기 때문</div>
<p class="general_sub1">3) “\n” : 기능문자 (개행 기능)</p>

11, 16 line : return 문
<div class="general_sub1">1) return 0; -&gt; 함수 수행을 모두 끝내고 리턴 할 때 0 값을 갖고 제어를 되돌려 줌</div>
<div class="general_sub1">2) return; -&gt; 함수 수행을 모두 끝내고 리턴 할 때 리턴 값없이 제어만 돌아 감</div>
<p class="general_sub1">* 돌아오는 값을 받는 OS가 리눅스, 유닉스 등</p>

cf) C 언어 block의 종류<br>
<div class="general_sub1">1) 함수의 block (몸체)</div>
<div class="general_sub1">2) 명령어 block</div>
<div class="general_sub1_1">if (조건식)</div>
<div class="general_sub1_2" style="color:red">{</div>
<div class="general_sub1_2">&nbsp;&nbsp;&nbsp;.....</div>
<div class="general_sub1_2" style="color:red">}</div>
<div class="general_sub1_1">else</div>
<div class="general_sub1_2" style="color:red">{</div>
<div class="general_sub1_2">&nbsp;&nbsp;&nbsp;.....</div>
<div class="general_sub1_2" style="color:red">}</div>
<div class="general_sub1">3) Sub block (이름 없는 block)</div>
<div class="general_sub1_1">{</div>
<div class="general_sub1_2" style="color:red">&nbsp;&nbsp;&nbsp;{</div>
<div class="general_sub1_2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.....</div>
<div class="general_sub1_2" style="color:red">&nbsp;&nbsp;&nbsp;}</div>
<p class="general_sub1_1">}</p>

* 프로그램의 전처리, 컴파일, 링크의 이해 - 맨 위 그림 참조<br>
 
<img src="<?=base_url()?>asset\lib\img\tutorial\program\execution_process\3.png" width=600px; Height=900; style="margin-bottom:20px; margin-left:20px"><br>

1. 시작 : OS -&gt; Start up code -&gt; main() 함수 -&gt; sub() 함수 -&gt; printf() 함수<br>
2. 종료 : 역순<br>
* Start up code<br>
<div class="general_sub1">1) 역할 : 메인함수 호출하기 전 실행하는데 필요한 Memory를 할당</div>
<div class="general_sub1">&nbsp;&nbsp;(buffer, system 변수, system 상수), 해제(memory 관련 정리)</div>
<p class="general_sub1">2) 제공처 : OS -&gt; 윈도우즈에서 만든 실행파일을 리눅스에서 실행 불가한 이유</p>

<img src="<?=base_url()?>asset\lib\img\tutorial\program\execution_process\4.png" width=450px; Height=750; style="margin-bottom:20px; margin-left:20px"><br>


</span>

</div>
