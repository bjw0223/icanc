<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
           <li>if 문</li>
           <li id="list">가장 일반적으로 쓰이는 선택문으로서 else 절과 함께 다양하게 응용이 가능하다.</li>
              <ul>
                  <li class="general_sub">형태 : if (조건식) { 실행 문장 }</li>
<pre class="brush:cpp">
/* 예 제 */
#include &lt;stdio.h&gt;
int main()
{
    int a = 10; b = 10;
    if(a = b)
    {
        printf("%d\n", a);
    }
    return 0;
}
</pre> 
                  <li class="general_sub">조건식이 참이면 실행 문장을 수행하고 거짓이면 무시한다.</li>
                  <li class="general_sub2" id="list">* 조건식의 결과 값은 정수형 결과를 가지는 수식을 사용할 수 있으며 결과 값이 0이면 거짓으로, 이외의 값은 참으로 간주</li>
                  <li class="general_sub">조건식은 반드시 소괄호로 묶는다. --&gt; 컴파일 에러 발생</li>
                  <li class="general_sub">실행 문장이 두 줄 이상이면 중괄호로 묶는다. --&gt; 한 줄이면 생략 가능</li>
                  <li class="general_sub2" id="list">* 실행 문장이 한 줄일 경우 중괄호 생략이 가능하나 가독성과 개발 시 최대한 에러를 방지하기 위해 권장하지 않는다.</li>
                  <li class="general_sub2" id="list">* 실행 문장이 두 줄 이상일 경우 중괄호를 사용하지 않으면 조건식 뒤의 한 문장만 선택문으로 간주된다.</li>
              </ul><br>
           <li>if 문 ~ else 절</li>
              <ul>
                  <li class="general_sub">형태 : if (조건식) { 실행 문장 } else { 실행 문장 }</li>
<pre class="brush:cpp">
/* 예 제 */
#include &lt;stdio.h&gt;
int main()
{
    int a = 10; b = 12;
    if(a = b)
    {
        printf("%d\n", a);
    }
    else
    {
        printf("%d\n", b);
    }
    return 0;
} 
</pre> 
                  <li class="general_sub">조건식이 참이면 조건식 다음의 실행문을 실행하고 거짓이면 else 절의 문장을 실행한다.</li>
                  <li class="general_sub">else 절의 실행 문장도 단문일 경우 중괄호 생략 가능 --&gt; 위와 같은 이유로 권장하지 않는다.</li>
              </ul><br>        
           <li>중첩 if 문 ~ else 절</li>
              <ul>
                  <li class="general_sub">형태 : 상황에 따라 여러 개의 if-else 문을 상-하 관계로 중첩해 쓸 수 있다.</li>
<pre class="brush:cpp">
/* 예 제 */
#include &lt;stdio.h&gt;
int main()
{
    int a = 10; b = 12; c = 8;
    if(a = b)
    {
        if(a = c)
        {
            printf("%d\n", a);
        }
        else
        {
            printf("%d\n", c);
        }
    }
    else
    {
        printf("%d\n", b);
    } 
    return 0;
}
</pre>  
                  <li class="general_sub">if-else 문이 중첩 되었을 때 if 와 else 는 서로 가장 가까운 것끼리 한 쌍을 이룬다.</li>
                  <li class="general_sub">중첩문에서는 실행 문장이 단문이라 할지라도 중괄호를 사용하지 않으면 작성 시 혼동의 우려가 크므로 주의해야 한다.</li>
              </ul><br>
           <li>if ~ else if ~ else 문</li>
              <ul>
                  <li class="general_sub">형태 : if (조건식) { 실행 문장 } else if (조건식) { 실행 문장 } ... else { 실행 문장 }</li>
<pre class="brush:cpp">
/* 예 제 */
#include &lt;stdio.h&gt;
int main()
{
    int a = 10; b = 12;
    if(a &gt; b)
    {
        printf("%d\n", a);
    }
    else if(a &lt; b)
    {
        printf("%d\n", b);
    }
    else
    {
        printf("%s\n", "same");
    }
    return 0;
}
</pre>
                  <li class="general_sub">전체를 하나의 선택문으로 간주한다.</li>
                  <li class="general_sub">여러 개의 조건식 중 만족하는 하나의 조건에 대하여 실행 문장을 수행한다.</li>
                  <li class="general_sub">여러 개의 조건식을 모두 만족하지 않을 경우 else 의 실행 문장을 수행한다.</li> 
              </ul><br>
           <li>switch ~ case 문</li>
              <ul>
                  <li class="general_sub">형태 : switch (정수값) {case 정수값1 : 실행 문장 break; case 정수값2 : 실행 문장 break ... default : 실행 문장 break;}</li>
<pre class="brush:cpp">
/* 예 제 */
#include &lt;stdio.h&gt;
int main()
{
    int a = 5;
    switch (a) {
        case 0 :
            printf("오늘은 일요일입니다\n");
            break;
        case 1 :
            printf("오늘은 월요일입니다\n");
            break;
        case 2 : 
            printf("오늘은 화요일입니다\n");
            break;
        case 3 :
            printf("오늘은 수요일입니다\n");
            break;
        case 4 : 
            printf("오늘은 목요일입니다\n");
            break;
        case 5 :
            printf("오늘은 금요일입니다\n");
            break;
        case 6 :
            printf("오늘은 토요일입니다\n");
            break;
        default :
            printf("정확한 값이 아닙니다\n");
    }
    return 0;
}
</pre>
                  <li class="general_sub">if 문을 사용해도 동일한 구조로 표현이 가능하다.</li>
                  <li class="general_sub">if 문과는 다르게 조건식이 아닌 정수값만을 비교한다.</li>
                  <li class="general_sub">대개 간결하고 이해가 쉬우나 정수값만을 비교한다는 제약사항 때문에 if 문에 비해 표현의 한계가 존재한다.</li>
                  <li class="general_sub">각 실행 문장의 끝에 break; 가 없으면 break; 문을 만날때까지 하위의 모든 문장을 실행한다.</li>
                  <li class="general_sub">모든 값이 일치하지 않을 경우 default 의 문장을 실행한다.</li>
              </ul>
                       

       </ul>
    </span>
</div>
