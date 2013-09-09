<div class="col-lg-9 col-sm-9 tutorial_desc">
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
              </ul><br>
           <li>반복문 제어</li>
              <li id="list">1. break 문</li>
              <ul>
                  <pre class="brush:cpp">
                  예 제
                  #include &lt;stdio.h&gt;
                  int main()
                  { 
                      int i;
                      for(i=0; i&lt;10; i++)
                      {
                          printf("%d\n", i);
                          if(i == 8)
                          {
                              break;  
                          }
                      }
                      return 0;
                  }
                  </pre>
                  <li class="general_sub">조건식의 결과에 상관 없이 반복문을 빠져 나갈 때 사용한다.</li>
                  <li class="general_sub">여러 개의 반복문이 중첩 되어 있을 때 가장 가까운 반복문 블록 하나를 탈출한다.</li>
                  <li class="general_sub2" id="list">* if 구문 안에서 사용했을 경우 if 문의 블록을 탈출하는 것이 아닌 가까운 반복문을 탈출한다.</li>
              </ul><br>
              <li id="list">2. continue 문</li>
              <ul>
                  <pre class="brush:cpp">
                  예 제
                  #include &lt;stdio.h&gt;
                  int main()
                  { 
                      int i;
                      for(i=0; i&lt;10; i++)
                      {
                          printf("%d\n", i);
                          if(i == 8)
                          {
                              coninue;  
                          }
                      }
                      return 0;
                  }
                  </pre>
                  <li class="general_sub">반복문에서 남은 부분을 실행하지 않고 반복문의 조건식을 검사하는 부분으로 이동시킨다.</li>
                  <li class="general_sub">특정 부분을 수행하지 않고 넘길 때 사용한다.</li>
                  <li class="general_sub">switch 문에서는 사용하지 않는다.</li>
              </ul><br>
              <li id="list">3. goto 문</li>
              <ul>
                  <li class="general_sub">goto 문을 사용하지 않고도 개발이 가능하다는 것이 밝혀졌기 때문에 절대 쓰지 않는다.</li>
              </ul><br>
              <li id="list">4. return 문</li>
              <ul>
                  <li class="general_sub">함수의 실행 결과를 호출한 함수에게 전달하고 제어를 넘긴다.</li>
                  <li class="general_sub">return; 처럼 사용하면 특정한 값의 전달 없이 제어만 넘긴다.</li>
                  <li class="general_sub">함수 실행 중 강제로 종료하기 위해서도 사용한다.</li>
              </ul>
