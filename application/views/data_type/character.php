<div class="col-lg-9 tutorial_desc">
    <span class="general">    
        <ul>
            <li>char형으로 1byte의 기억공간을 갖는다.</li><br>
			<li>문자상수는 숫자와는 다르게 표현시 작은 따옴표(‘ ’)가 붙는다.</li><br>
            <li>물리적으로 문자는 각 문자에 대한 해당 값이 정해져 있는데 이것을 ASCII code 값이라 한다.</li><br>
            <li>실제 저장시에는 이 ASCII code 값을 이진수로 변환하여 저장한다.</li><br>
            <li>사용자의 입장에서 논리적으로 문자는 ‘연산’을 할 수 없지만 프로그램에서는 ASCII code 값의 숫자로 변환되기 때문에 연산이 가능하다.</li>
<pre class="brush:cpp">
#include &lt;stdio.h&gt;
int main()
{
    char ch = ‘a’;
    printf(“ch변수에 저장된 문자 : %c\n”, ch);
    printf(“ch변수에 저장된 문자의 ASCII code 값 : %d\n”, ch);
    return 0;
}
</pre>































        </ul>
    </span>    
</div>
