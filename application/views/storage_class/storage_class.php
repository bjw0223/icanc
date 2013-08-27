<div class="col-lg-9 tutorial_desc">
<div class="general">
    <ul>
	<li>기억클래스 지정</li>
	    <ul>
		<li class="general_sub2"><span class="blue">[Storage class]</span> Type 변수명; &nbsp;&nbsp;&nbsp;---&gt; ex) <span class="blue">auto</span> int num;</li>
                <li class="general_sub2">[Storage class] 생략 시 bloack 내에서는 auto, block 밖에서는 extern 으로 인식</li>
		<li class="general_sub2" id="list">* 기억클래스의 default 는 auto 이며, block 밖에서는 원래 쓰지 않는다</li>
		<li class="general_sub2" id="list" style="margin-left:15px">(꼭 생략해야 한다)</li>
            </ul><br>
	<li>실행파일과 메모리 영역</li>
	    <ul>
		<li class="general_sub2">C 언어로 작성한 실행파일이 Memory(RAM) 내에서 실행될 때에는 Code 영역에 실행파일이 올라가고, Data 영역에 프로그램 내에서 선언된 변수나 동적메모리 할당된 기억공간이 잡히게 된다.</li>
            </ul>
                <img src="<?=base_url()?>asset\lib\img\tutorial\storage_class\1.PNG" width=600px; height=300px; style="margin-top:10px; margin-left:40px"><br><br>
	<li>기억클래스 표</li>
            <img src="<?=base_url()?>asset\lib\img\tutorial\storage_class\2.PNG" width=670px; height=300px; style="margin-bottom:10px"><br>
	       <ul>
	           <li class="general_sub2">유효범위 : 명령어 block, 함수 block, Program, File</li>
                   <li class="general_sub2">Program &gt; File : 1개의 Program 은 여러 개의 File 로 이루어질 수 있다.</li>
		   <li class="general_sub2">(비) 초기화 영역 : 최초에 초기화 안해도 이 영역에 잡힌다.</li>
		   <li class="general_sub2" id="list">cf) 쓰레기 값을 사용하면 error, 쓰레기 값의 주소를 사용하는 것은 가능하다.</li>
               </ul><br>
	<li>auto 기억클래스</li>
	    <ul>
		<li class="general_sub2">auto 변수 값의 출력</li>
<pre class="brush:cpp">
#include &lt;stdio.h&gt;
int main()
{
    auto int a = 1;
    printf("a = %d\n", a);
    {
        a = 2;
        printf("a = %d\n", a);
        {
            a += 1;
            printf("a = %d\n", a);
        }
        printf("a = %d\n", a);
    }
    printf("a = %d\n", a);
    return 0;
}
</pre>
		<li class="general_sub2">형식 매개변수의 기억클래스는?</li>
		   <pre class="brush:cpp">
#include &lt;stdio.h&gt;
void workover(int);
int reset(int);
int main()
{
    auto int a = 5;
    reset(a / 2);        printf("%d\n", a);
    reset(a /= 2);       printf("%d\n", a);
    a = reset(a / 2);    printf("%d\n", a);
    workover(a);         printf("%d\n", a);
    return 0;
}
void workover(int a)   
{
    a = ( (a * a) / (2 * a) + 4) * (a % a);
    printf("%d\n", a);
}
    int reset(int a)
{
    a = (a &lt; 2) ? 5 : 0;
    return (a);           
}
</pre>
	                 <ul>
	                     <li class="general_sub2">13 line : 이 부분도 block 내로 간주</li>
                             <li class="general_sub2">21 line : a 가 free 되면 register 에 실려 전달된다(register 크기 만큼 넘어가면 리턴 속도도 느려진다)</li>
		             <li class="general_sub2" id="list">* 형식 매개변수의 기억클래스를 생략하면 무조건 auto</li>
                         </ul> 
            </ul><br>
	<li>extern 기억클래스</li>
	    <ul>
		<li class="general_sub2">auto 와 extern 기억클래스 변수로 구성된 프로그램의 실행 흐름</li>
<pre class="brush:cpp">
#include &lt;stdio.h&gt;
int ex;
int main()
{
    int a = 1;
        .
        .
    sub(a);
        .
        .
}
void sub(int n)   
{
    double da;
        .
        .
}
</pre>
	                 <ol>    
                             <li class="general_sub2">ex 변수가 Memory 에 할당됨</li>
                             <li class="general_sub2">main() 시작 &amp; a 변수가 Memory 에 할당됨</li>
		             <li class="general_sub2">sub() 시작 &amp; n, da 변수가 Memory 에 할당됨</li>
		             <li class="general_sub2">sub() 종료 &amp; n, da 변수가 free</li>
		             <li class="general_sub2">main() 종료 &amp; a 변수가 free</li>
		             <li class="general_sub2">ex 변수가 free</li>
		             <li class="general_sub2" id="list">* 2 line : extern 으로 자동 초기화</li>
		             <li class="general_sub2" id="list">* 5, 12, 14 line : auto (형식 매개변수 a 는 auto)</li>
		             <li class="general_sub2 red" id="list">* sub 안에서 a 는 사용 불가 --&gt; auto 끼리는 블록 scope 엄격</li>
				 <ul>
					 <li class="general_sub2" id="list">ex) 전역변수와 지역변수의 차이</li>
<pre class="brush:cpp">
#include &lt;stdio.h&gt;
void sum;
int temp;
int main()
{
    auto int a = 10;
    sum();
    printf("temp = %d\n", temp);
    printf("a = %d\n", a);
    return 0;
}
void sum()
{
    temp += 100;
    /* printf("a = %d\n", a); */
}
</pre>
			 </ul>
				 </ol><br>   
					 <li class="general_sub2">extern 변수의 선언과 정의의 차이</li>
					 <li class="general_sub2" id="list">하나의 프로그램이 여러 개의 소스 파일로 이루어져 있을 때 각 소스 파일에서 extern 변수를 사용하려면 <span class="blue">하나의 파일에서 정의하고 나머지 파일에서는 선언</span><span class="red">(분할 컴파일러에 의해 컴파일 되므로 선언이 없으면 모른다)</span>해 주어야 한다.</li>
			   <ul>
				   <li class="general_sub2">extern 변수의 정의</li>
                       <li class="general_sub2" id="list">1) 실제 Memory block 이 할당됨</li>
                       <li class="general_sub2" id="list">2) 초기화 가능</li>
                       <li class="general_sub2" id="list">3) 전체 프로그램 내에서 딱 1회만 정의함</li>
                       <li class="general_sub2" id="list">4) block 밖에서 int a; 와 같은 형태로 정의</li>
                       <li class="general_sub2">extern 변수의 선언</li>
                       <li class="general_sub2" id="list">1) compiler 에게 extern 변수에 대한 정보를 줌</li>
                       <li class="general_sub2" id="list">2) 초기화 불가능</li>
                       <li class="general_sub2 red" id="list">3) 여러 번 선언 가능(쓰기 전에는 위치 상관 없으며 block 안에서 선언 시</li>
					   <li class="general_sub2 red" id="list" style="margin-left:15px">유효 범위는 그 block 안)</li>
                       <li class="general_sub2" id="list">4) extern int a; 와 같은 형태로 선언</li>
                       <li class="general_sub2">extern 배열은 정의부의 첨자 생략이 불가능하나 선언부는 첨자 생략 가능</li>
                   </ul><br>
		<li class="general_sub2" id="list">ex) 하나의 프로그램이 여러 개의 소스로 이루어져 있는 경우</li>
                   <img src="<?=base_url()?>asset\lib\img\tutorial\storage_class\4.png" width=680px; height=690px; style="margin-left:30px; margin-bottom:20px"><br>
		<li class="general_sub2" id="list">cf) 컴파일러</li>
                   <ol> 
                       <li class="general_sub2">통합(구 방식) : object 파일 무조건 1개(한 개의 소스 파일 오류 시 다 함께 다시 컴파일 해야 한다)</li>
                       <li class="general_sub2">분할(신 방식) : object 파일이 소스 파일 갯수 만큼</li>
                   </ol><br>
		<li class="general_sub2" id="list">cf) 이 경우 a.cpp 의 선언부가 정의부가 된다</li>
		<li class="general_sub2" id="list" style="margin-left:27px">(다른 곳도 초기화 해 주면 정의부 중복 되어 error)</li>
                   <img src="<?=base_url()?>asset\lib\img\tutorial\storage_class\5.PNG" width=600px; height=100px; style="margin-left:25px"><br><br>
	    </ul>
	<li>static 기억클래스</li>
	    <ul>
		<li class="general_sub2">auto 와 extern, static 변수로 구성된 프로그램의 실행 흐름</li>
<pre class="brush:cpp">
#include &lt;stdio.h&gt;
int ex;
static long st;
int main()
{
    int a = 2;
        .
        .
    sub(a);
        .
        .
}
void sub(int n)   
{
    static char ch;
    double da;
        .
        .
}
</pre>
	                 <ol>    
                             <li class="general_sub2">ex, st, ch 변수가 Memory 에 할당됨</li>
                             <li class="general_sub2">main() 시작 &amp; a 변수가 Memory 에 할당됨</li>
		             <li class="general_sub2">sub() 시작 &amp; n, da 변수가 Memory 에 할당됨</li>
		             <li class="general_sub2">sub() 종료 &amp; n, da 변수가 free</li>
		             <li class="general_sub2">main() 종료 &amp; a 변수가 free</li>
		             <li class="general_sub2">ex, st, ch 변수가 free</li>
		             <li class="general_sub2" id="list">* 2 line : extern 으로 자동 0 초기화</li>
		             <li class="general_sub2" id="list">* 3 line : 외부 static 변수</li>
		             <li class="general_sub2" id="list">* 6, 16 line : a, da 는 auto</li>
		             <li class="general_sub2" id="list">* 13 line : 형식 매개변수 n 은 auto</li>
		             <li class="general_sub2" id="list">* 15 line : 내부 static 변수</li>
		             <li class="general_sub2 red" id="list">* main 블록 안에서 ch 는 쓸 수 없다(RAM 에는 있으나 접근 불가)</li>
				 <ul>
							 <li class="general_sub2" id="list" style="margin-top:10px">ex) auto 변수와 내부 static 변수의 차이</li>
<pre class="brush:cpp">
#include &lt;stdio.h&gt;
void sub;
int main()
{
    int i;
    for(i = 0; i &gt; 3; i++)
    {
        sub();
        printf("main i = %d\n", i);
    }
}
void sub()
{
    static int i = 1;
    auto int k = 3;
    printf("sub i = %d \t k = %d \t", i++, k++)
}
</pre>
								<li class="general_sub2 red" id="list" style="margin-left:20px">14 line : 한 번 잡히고 나면 다시 수행 하지 않는다. 대신 값을 기억하고 sub() 호출 시 이어서 출력</li>
				 </ul>
	                 </ol><br>   
		<li class="general_sub2">여러 개의 소스로 나뉘어져 있는 경우</li>
                   <img src="<?=base_url()?>asset\lib\img\tutorial\storage_class\7.PNG" width=650px; height=220px; style="margin-left:0px"><br><br>
	    </ul>
	<li>register 기억클래스</li>
            <ul>
	        <li class="general_sub2">레지스터 변수 --&gt; <span class="red">연산 작업의 효율성을 높이기 위해</span></li>
	        <li class="general_sub2">CPU 내의 register 를 변수로 사용, 연산속도를 높이기 위해 사용</li>
	        <li class="general_sub2">사용 가능한 형은 short, char, 근거리 포인터 형이다</li>
<pre class="brush:cpp">
#include &lt;stdio.h&gt;
int main()
{
    register short i;
    long sum = 0;
    for(I = 0; I &gt; 20000; I++)
    {
        sum += i;
    }
    printf("1부터 20000까지의 합은 %ld입니다.\n", sum);
    return 0;
}
</pre>
	        <li class="general_sub2">1~2 line : 구 프로그램과의 호환을 위해 2B 이하로 제한</li>
                <img src="<?=base_url()?>asset\lib\img\tutorial\storage_class\8.PNG" width=550px; height=130px; style="margin-left:90px"><br>
	        <li class="general_sub2">동시에 잡을 수 있는 갯수 제한이 있다(2~3개)</li>
	        <li class="general_sub2" id="list">- 초과 시 이후는 auto 로 잡힌다(크기 초과한 변수도 강제 auto 로)</li>
	        <li class="general_sub2">CPU register 에 공간이 없다면 auto 로 잡힌다</li>
	        <li class="general_sub2" id="list">- CPU 내의 register 는 주소가 아닌 이름으로 구분</li>
            </ul>
    </ul>


</div>
</div>
