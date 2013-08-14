<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
           <li>while 문</li>
              <ul>
                  <li class="general_sub">형태 : while (조건식) { 실행 문장 }</li>
                  <pre class="brush:cpp">
                  예 제
                  #include &lt;stdio.h&gt;
                  int main()
                  { 
                      int i = 10;
                      while(i)
                      {
                          printf("%d\n", i);
                          i--;
                      }
                      return 0;
                  }
                   </pre>
                  <li class="general_sub">명확한 반복횟수가 정해져 있지 않을 경우 사용한다.</li>
                  <li class="general_sub">조건식을 먼저 검사하여 참이면 반복을 수행한다.</li>
                  <li class="general_sub">조건식이 항상 참이 될 경우 무한루프가 발생하기 때문에 주의해야 한다.</li>
              </ul><br>
           <li>do ~ while 문</li>
              <ul>
                  <li class="general_sub">형태 : do { 실행 문장 } while (조건식);</li>
                  <pre class="brush:cpp">
                  예 제
                  #include &lt;stdio.h&gt;
                  int main()
                  { 
                      int i = 10;
                      do 
                      {
                          printf("%d\n", i);
                          i--;
                      }while(i&gt;0);
                      return 0;
                  }
                   </pre>
                  <li class="general_sub">무조건 한 번 수행하고 조건식을 검사한다.</li>
                  <li class="general_sub">조건식이 항상 참이 될 경우 무한루프가 발생하기 때문에 주의해야 한다.</li>
                  <li class="general_sub">조건식 끝에 세미콜론이 붙는다.</li>
              </ul><br>
           <li>for 문</li>
              <ul>
                  <li class="general_sub">형태 : for (초기식; 조건식; 증감식;) { 실행 문장 }</li>
                  <pre class="brush:cpp">
                  예 제
                  #include &lt;stdio.h&gt;
                  int main()
                  { 
                      int i;
                      for(i=0; i&lt;10; i++)
                      {
                          printf("%d\n", i);
                      }
                      return 0;
                  }
                  </pre>
                  <li class="general_sub">정해진 횟수를 반복할 때 사용한다.</li>
                  <li class="general_sub">다른 반복문과 마찬가지로 증감식이 제대로 주어지지 않아 항상 조건식이 참이 되는 경우 무한루프가 발생한다.</li>
                  <li class="general_sub">while 문으로도 동일한 표현이 가능하다.</li>
                  <li class="general_sub">문장이 실행된 뒤 증감식을 거친 후 조건식과 비교하게 된다.</li>
                  <li class="general_sub">초기식, 조건식, 증감식은 생략할 수 있다. 모두 생략하는 경우도 무한루프가 발생한다.</li>
                  <li class="general_sub">쉼표 연산자(,)를 사용하여 초기식과, 증감식에 두 개 이상의 변수를 사용할 수 있다.</li>
                  <li class="general_sub">while 문과 for 문은 속도가 동일하다.</li>
              </ul><br>
           <li>다중 반복문</li>
              <ul>
                  <pre class="brush:cpp">
                  예 제
                  #include &lt;stdio.h&gt;
                  int main()
                  { 
                      int i, j;
                      for(i=0; i&lt;10; i++)
                      {
                          for(j=0; j&lt;3; j++)
                          {
                              printf("%d\n", j);
                          }
                          printf("%d\n", i);
                      }
                      return 0;
                  }
                  </pre>
                  <li class="general_sub">여러 반복문이 중첩 되어 있는 형태이다.</li>
                  <li class="general_sub">예제와는 다르게 여러 다른 형태의 반복문을 중첩하여 사용할 수 있다.</li>
              </ul>

       </ul>
    </span>    
</div>
