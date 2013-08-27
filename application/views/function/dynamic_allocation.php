<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
           <li>프로그램 작성 중에 미리 예상되는 크기의 메모리를 결정하는 것을 정적 메모리 할당이라 하며 실행 중에 유동적으로 할당하는 방법을 동적 메모리 할당이라 한다.</li><br>
           <li>malloc 함수</li>
		      <ul>
			      <li class="general_sub">원형 : void *malloc(unsigned int);</li>
				  <li class="general_sub">stdlib.h 헤더파일에 함수가 선언되어 있다.</li>
				  <li class="general_sub">함수의 전달인자는 원하는 크기의 바이트 수로서 항상 양수이므로 unsigned int형이다.</li>
				  <li class="general_sub">함수는 호출된 후 전달인자로 받은 바이트 크기만큼 연속된 기억공간을 확보한 후에 그 시작 주소값을 리턴해 준다.</li>
				  <li class="general_sub">리턴값은 어떤 용도로 사용될지 알 수 없으므로 void형 포인터로 리턴하는데 이를 상황에 맞게 형변환 해주어야 한다.</li>
<pre style="margin-top:20px" class="brush:cpp">
int *ip;
ip = (int *)malloc(4);
</pre>		
			          <li id="list" class="general_sub2">malloc 함수를 호출 해 원하는 바이트 수(여기서는 4)를 넘겨주면 크기에 맞는 기억공간을 할당하고 void 형 포인터로 시작 주소를 리턴 하는데 그 값을 미리 선언한 포인터변수 ip 에 저장한다(선언한 포인터변수가 가리키는 값과 형변환한 형태가 같아야 한다)</li>
              </ul><br>
           <li>calloc 함수</li>
		      <ul>
			      <li class="general_sub">원형 : void *calloc(unsigned int);</li>
				  <li class="general_sub">stdlib.h 헤더파일에 함수가 선언되어 있다.</li>
				  <li class="general_sub">전달인자는 첫 번째는 개수이며 두 번째는 할당 받고자 하는 기억공간의 크기이다.</li>
				  <li class="general_sub">함수는 호출된 후 전달인자로 받은 바이트 크기 x 개수 만큼 연속된 기억공간을 확보한 후 그 시작 주소값을 리턴해 준다.</li>
				  <li class="general_sub">리턴값은 어떤 용도로 사용될지 알 수 없으므로 void형 포인터로 리턴하는데 이를 상황에 맞게 형변환 해주어야 한다.</li>
				  <li class="general_sub">할당 받은 기억공간을 모두 0으로 초기화 해 준다.</li>
<pre style="margin-top:20px" class="brush:cpp">
double *ap;
int i;
ap = (double *)calloc(5, sizeof(double));
for(i=0; i&lt;5; i++)
{
    printf("%lf\n",ap[i]);
}
</pre>		
              </ul><br>
           <li>realloc 함수</li>
		      <ul>
			      <li class="general_sub">원형 : void *realloc(void *, unsigned int);</li>
				  <li class="general_sub">stdlib.h 헤더파일에 함수가 선언되어 있다.</li>
				  <li class="general_sub">동적으로 할당받은 기억공간의 크기를 조절한다.</li>
				  <li class="general_sub">전달인자의 첫 번째는 이미 할당 받은 기억공간의 포인터이며 두 번째는 새로 할당 받고자 하는 기억공간의 크기이다.</li>
				  <li class="general_sub">리턴값은 어떤 용도로 사용될지 알 수 없으므로 void형 포인터로 리턴하는데 이를 상황에 맞게 형변환 해주어야 한다.</li>
				  <li class="general_sub">새로 할당받은 위치는 이미 할당받은 기억공간의 위치와 같으며 새로 할당받은 기억공간이 기존보다 작다면 기존의 데이터는 잘려나간다.</li>
<pre style="margin-top:20px" class="brush:cpp">
새로 만들어야 합니다 ^^ (빵긋)
double *ap;
int i;
ap = (double *)calloc(5, sizeof(double));
for(i=0; i&lt;5; i++)
{
    printf("%lf\n",ap[i]);
}
</pre>		
              </ul><br>
           <li>동적 할당 후 메모리의 반납</li>
		      <ul>
			      <li class="general_sub">프로그램이 실행될 때 메모리의 일정한 영역을 사용하게 되는데 이는 다시 세부 영역으로 나눠지게 된다. 이것을 ‘기억클래스’ 라고 한다.</li>
				  <li class="general_sub">자동변수의 경우는 스택에 저장되어 함수가 리턴되면 자동으로 기억공간이 회수되는 반면 힙에 저장되는 동적 할당의 경우는 사용자가 직접 기억공간을 반환해야 한다.</li>
                  <li class="general_sub">하나의 프로그램이 끝나면 운영체제에 의해 동적 할당된 기억공간도 반환되므로 메인 함수가 끝날 때는 굳이 필요 없지만 그 외 다른 경우는 직접 반환을 꼭 해주어야 한다.</li>
		          <li class="general_sub">동적 할당 된 기억공간의 반환은 함수를 호출하여 수행한다.</li>
		          <li class="general_sub">원형 : void free (void *);</li>
                  <li class="general_sub">함수는 전달인자로 반환될 기억공간의 포인터를 받는데 void 포인터형인 이유는 형에 상관없이 모두 반환되어야 하기 때문이다.</li>
<pre class="brush:cpp">
/* 예 제 */
void func ()
{
    int a = 10;
    int *ip;
    ip = (int *)malloc(sizeof(int));
    *ip = 20;
    printf(“%d\n”, a + *ip);
    free(ip);
}
</pre>
		      </ul><br>
           <li>동적 할당 시 메모리의 확인</li>
		      <ul>
			      <li class="general_sub">동적 할당 함수는 힙 영역에 원하는 크기의 메모리가 존재하지 않으면 0번지의 포인터를 리턴하게 되는데 이 포인터를 널 포인터라 한다.</li>
				  <li class="general_sub">널 포인터(null pointer)는 포인터의 특수한 경우이며 참조할 수 없는 포인터이다.</li>
				  <li class="general_sub">메모리가 부족하지 않더라도 원하는 크기의 연속적인 기억공간이 없다면 널 포인터를 리턴한다.</li>
				  <li class="general_sub">동적 할당 함수를 호출할 때는 항상 리턴값을 검사하여 널 포인터인지 확인하는 부분이 필요하다.</li>
<pre class="brush:cpp">
/* 예 제 */
ip = (int *)malloc(sizeof(int));
if (ip==0) 
{
    printf(“메모리가 부족합니다.\n”);
}
else 
{
    *ip = 10;
    printf(“%d\n”, *ip);
}
</pre>
		      </ul><br>
           <li>동적 할당 기억공간의 활용</li>
		      <ul>
			      <li class="general_sub">동적 할당 시 리턴값은 할당된 기억공간의 시작 주소 포인터이므로 포인터변수에 저장하여 배열명으로 사용하면 배열과 같이 사용할 수 있다.</li>
<pre class="brush:cpp">
/* 예 제 */
int *ip;
ip = (int *)malloc(20);
</pre>
				  <img src="#">
				  <li class="general_sub">문자열을 입력 받을 때는 사전에 정확한 길이를 알 수 없으므로 우선 충분한 크기의 문자배열에 문자열을 입력 받은 후 그 길이만큼 동적 할당을 받아서 입력 받은 문자열을 복사한다.</li>
<pre class="brush:cpp">
/* 예 제 */
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
#include &lt;stdlib.h&gt;
int main()
{
    char temp[80];
    char *str[3];
    int i;
    for(i=0;i&lt;3;i++)
    {
        printf(“문자열을 입력하세요 : ”);
        gets(temp);
        str[i] = (char *)malloc(strlen(temp)+1);
        strcpy(str[i], temp);
    }
    for(i=0; i&lt;3; I++)
    {
        printf(“%s\n”,str[i]);
    }
    for(i=0;i&lt;3;i++)
    {
        free(str[i]);
    }
    return 0;
}
</pre>
                  <li id="list" class="general_sub">1) strlen 함수는 널 문자를 제외하고 길이를 계산하기 때문에 +1 을 해준다.</li>
                  <li id="list" class="general_sub">2) 가변배열을 함수로 출력할 때는 매개변수가 이중포인터이다.</li>
		      </ul>
