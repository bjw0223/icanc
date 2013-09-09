<div class="col-lg-9 tutorial_desc">
<div class="general">
    <ul>
        <li>사용방법</li>
        <li id="list">[기억클래스] [타입] [변수명];</li>
        <li id="list">ex) extern double db;</li><br>
        <li>종류</li>
        <li id="list">기억클래스는 자동변수(auto), 외부변수(extern), 정적변수(static), 레지스터변수(register)가 있다.</li>
        <img src="<?=base_url()?>asset\lib\img\lecture\storage_class\70.PNG" width=650px; height=250px; style="margin-left:0px"><br>
        <li id="list" class="general_sub">1. 유효범위 : 명령어 block, 함수 block, program, file</li>
		<li id="list" class="general_sub">2. Program &gt; file : 1개의 Program은 여러 개의 file로 이루어질 수 있다.</li>
		<li id="list" class="general_sub">3. (비) 초기화영역 : 최초에 초기화 안 해도 이 영역에 잡힘</li>
		<li id="list" class="general_sub" style="text-indent:30px">cf. 쓰레기 값을 사용하면 error, 쓰레기 값의 주소를 사용하는 것은 ok</li><br>
        <img src="<?=base_url()?>asset\lib\img\lecture\storage_class\1.png" width=600px; height=360px; style="margin-left:0px"><br><br>
        <li>기억클래스는 생략하면 default가 auto이며, block 외부에서는 extern이 된다. 이 때, block 외부에서는 원칙적으로 기억클래스를 생략해야 한다.</li><br>
		<li>지역변수(auto)</li>
		   <ul>
	           <li class="general_sub">함수 내부, block 내부에 선언되는 변수이다.</li>
	           <li class="general_sub">두 경우 모두 stack안에 생성된다.</li>
	           <li class="general_sub">함수가 다를 경우 하나의 함수 내에서 선언된 변수는 다른 함수에서 사용할 수 없는데 이는 stack이 다르기 때문이다.</li>
	           <li class="general_Sub">초기화는 되지 않고 쓰레기 값으로 잡힌다.</li>
<pre class="brush:cpp">
#include &lt;stdio.h&gt;
void print(void);
int main()
{
    auto int a = 1;
    printf(“a = %d\n”, a);
    a = 2;
    printf(“a = %d\n”, a);
    print();
    printf(“a = %d\n”, a);
    {
        a = 3;
        printf(“a = %d\n”, a);
    }
    printf(“a = %d\n”, a);
    return 0;
}
void print(void)
{
    auto int a = 10;
    printf(“a = %d\n”, a);
}
</pre>
		   </ul><br>
		<li>외부변수(extern)</li>
		   <ul>
		       <li class="general_sub">함수 외부(main() 함수 밖에서), block 외부에 선언되는 변수이다.</li>
	           <li class="general_sub">외부변수는 데이터 영역에 생성된다.</li>
	           <li id="list" class="general_sub">** 데이터 영역에는 값이 꾸준하게 유지되는 것들이 대부분 들어간다.</li>
	           <li class="general_sub">프로그램이 끝날 때까지 사용가능하며, 프로그램 전체에서 사용가능하다.</li>
	           <li class="general_sub">초기값은 보통 0으로 채워지나 항상 그런 것은 아니며 컴파일러마다 다르다.</li>
<pre style="margin-bottom:30px" class="brush:cpp">
#include &lt;stdio.h&gt;
void func(void);
int ex_a;
int main()
{
    int a = 1;
    printf(“a = %d\n”, a);
    printf(“ex_a = %d\n”, ex_a);
    return 0;
}
void func(void)
{
    int a = 3;
    ex_a = 11;
}
</pre>
	           <li class="general_sub">대부분의 프로그램은 단일 파일이 아닌 복수의 파일로 이루어져 있다. extern 변수는 프로그램 전체에서 사용할 수 있으므로 여러 개의 소스 파일에서 하나의 extern 변수를 공유할 수 있는데 하나의 파일에서만 정의하고 나머지 파일들에서는 선언만 해주면 된다.</li>
			   <li id="list" class="general_sub">** 나머지 파일에서 선언하는 이유 : 컴파일 시 컴파일러는 extern 변수의 존재여부를 모르기 때문에 알려주는 용도로 사용한다.</li>
               <img src="<?=base_url()?>asset\lib\img\lecture\storage_class\2.png" width=550px; height=320px; style="margin-left:0px"><br>
               <img src="<?=base_url()?>asset\lib\img\lecture\storage_class\3.png" width=490px; height=200px; style="margin-left:30px"><br><br>
               <li id="list" class="general_sub2">* 메인이 여러 개이면 링크 에러 발생</li>
			   <li id="list" class="general_sub2" style="text-indent:16px">(같은 함수가 여러 개이면 링크 시 링크 에러 발생)</li>
			   <li id="list" class="general_sub2">* 메인 함수 없거나 메인 함수 이름이 틀려도 컴파일은 가능</li>
			   <li id="list" class="general_sub2" style="text-indent:16px">-&gt; 링크 에러 발생</li><br>
			   <li id="list" class="general_sub2">cf. 컴파일러</li>
			      <ul>
			          <li class="general_sub2">통합(구 방식) : object file 무조건 1개(한 개의 소스 파일 오류 시 다함께 다시 컴파일 해야 한다)</li>
					  <li class="general_sub2">분할(신 방식) : object file 이 소스 파일 갯수 만큼</li>
                  </ul><br>
		       <li id="list" class="general_sub2">cf. 이 경우, a.c의 선언부가 정의부가 된다.
			   <li id="list" class="general_sub2" style="text-indent:36px">(다른 곳도 초기화 해 주면 정의부 중복 되서 error)</li>
               <img src="<?=base_url()?>asset\lib\img\lecture\storage_class\4.png" width=490px; height=100px; style="margin-left:35px"><br><br>
		   </ul>
		<li>정적변수(static)</li>
		    <ul>
                <li class="general_sub">지역변수 + 정적변수의 특징을 가지는 변수로 함수 내부, block 내부에 선언되지만 프로그램이 끝날 때까지 사라지지 않고 값을 저장한다.</li>
	            <li class="general_sub">데이터 영역에 저장된다.</li>
	            <li class="general_sub">자동으로 0으로 초기화되지만 <span class="red">맨 처음 한번만 초기화</span>된다.</li>
<pre class="brush:cpp">
#include &lt;stdio.h&gt;
int func(void);
int main()
{
    int ret = 0, i;
    for(i = 0; i &lt; 10; i++)
    {
        printf(“sta = %d\n”, ret = func());
    }
    return 0;
}
int func(void)
{
    static sta = 0;
    sta += 1;           &lt;--- 내부 static 변수(최초 한번만 실행)
    return sta;              대신 값을 기억하고 호출 시 이어서 출력
}
</pre>
	            <li id="list" class="red" style="font-size:15px">* main 블럭 안에서 sta는 직접 쓸 수 없다(램에는 있으나 접근 불가)</li><br>
                <li class="general_sub">여러 소스 파일로 이루어져 있을 때</li>
                <img src="<?=base_url()?>asset\lib\img\lecture\storage_class\5.png" width=570px; height=200px; style="margin-left:0px"><br><br>
		    </ul>
		<li>레지스터변수(register)</li>
	        <ul>
		        <li class="general_sub">지금까지 다른 변수들은 RAM에 저장되었지만 레지스터변수는 CPU내 레지스터에 저장된다.</li>
	            <li class="general_sub">동시에 잡을 수 있는 개수 제한이 있다(2 ~ 3개)</li>
	            <li id="list" class="general_sub2">: 초과 시 이후는 auto로 잡힌다(크기 초과한 변수도 강제 auto로)</li>
	            <li class="general_sub">CPU register에 공간이 없다면 auto로 잡힌다.</li>
	            <li id="list" class="general_sub2">: CPU내의 레지스터는 주소가 아닌 이름으로 구분한다.<br>
	            <li class="general_sub">연산 작업의 효율을 높일 수 있다.</li>
	            <li class="general_sub">사용가능한 형은 char, short, 근거리 포인터형이다.</li>
	            <li id="list" class="general_sub2">: 예전 프로그램과의 호환을 위해서 2byte 이하로 제한한다.</li>
	            <li class="general_sub">메모리가 아닌 레지스터이므로 속도를 보완할 수 있었지만 현재는 거의 사용하지 않는다.</li>
                <img src="<?=base_url()?>asset\lib\img\lecture\storage_class\6.png" width=550px; height=130px; style="margin-top:10px"><br><br>
	        </ul>






	















    </ul>
</div>
</div>


