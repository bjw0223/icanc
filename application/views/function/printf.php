<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
           <li>형태 : <span class="blue">int</span> printf(<span class="blue">const char</span> *, ...); --&gt;<span class="blue"> const char</span> * 는 문자열의 시작 주소를 의미</li><br>
           <li>헤더 : stdio.h --&gt; standard input / output 의 약자</li><br>
           <li>사용 방법 : printf("출력양식", 출력대상); --&gt; 출력대상은 생략가능</li><br>
           <li>리턴 값 : 성공적으로 출력한 문자의 개수 (개행문자가 있다면 +1 추가)</li><br>
           <li>출력 양식의 3요소 --&gt; ex) printf("a = %d\n", a);</li>
              <ul>
                  <li class="general_sub">a = : 일반 출력 문자 (그대로 출력 되는 부분)</li>
                  <li class="general_sub">\n : Escape Sequence (기능 문자 - 자신의 고유 기능 수행)</li>
                  <li class="general_sub">%d : 형식 변환 문자 (형식대로 변환하여 출력)</li> 
              </ul><br>
           <li>출력 대상의 4요소</li>
              <ul>
                  <li class="general_sub">변수 : printf("%d", num); --&gt; num 변수 내의 값을 그대로 출력</li>
                  <li class="general_sub">상수 : printf("%d", 100); --&gt; 상수 값을 그대로 출력</li>
                  <li class="general_sub">수식 : printf("%d", num+100); --&gt; 수식의 연산 결과를 출력</li> 
                  <li class="general_sub">함수 리턴 값 : printf("%d", printf("Hello")); --&gt; 함수의 리턴 값 출력</li> 
              </ul><br>
           <li>함수 동작 원리</li>
           <li class="general_sub" id="list">printf() 함수는 출력 대상을 stack 구조(LIFO 방식)의 출력 버퍼에 저장한 후 형식 변환 문자의 형태대로 버퍼에서 꺼내어 출력</li>
           <li class="general_sub maroon" id="list">&lt; printf buffer 의 데이터 입출력 규칙 &gt;</li>
              <ul>
                  <li class="general_sub">printf() 구문에 표기된 출력 대상의 우측 --&gt; 좌측 방향 순서로 printf buffer 에 저장 됨</li>
                  <li class="general_sub">int size 로 입출력 됨(char, short 형은 int 로 자동 형변환 되어 저장 됨) --&gt; Register 사이즈</li>
                  <li class="general_sub">실수형(float, double)형은 double 형으로 자동 형변환 되어 4Byte 씩 나누어 두 번에 걸쳐 입출력 됨</li> 
              </ul><br>
           <li>함수의 변경자</li>
           <img src="<?=base_url()?>asset\lib\img\tutorial\function\printf\1.PNG" width=680px; height=400px; style="margin-bottom:20px"><br>
           <li>함수의 플래그</li>
           <img src="<?=base_url()?>asset\lib\img\tutorial\function\printf\2.PNG" width=680px; height=270px; style="margin-bottom:20px"><br>
           <li>Escape Sequence (확장 문자열 - 기능 문자)의 이해</li>
           <li class="general_sub" id="list">\ (역 슬래시) + 선행 문자 : Escape Sequence 로서 기능으로 출력된다.</li>
           <img src="<?=base_url()?>asset\lib\img\tutorial\function\printf\3.PNG" width=680px; height=350px;>
           <li class="general_sub" id="list">* \b, \r 사용 시 기존 문자를 지우지 않는다.</li>
           <li class="general_sub" id="list">* \t : 8칸 10개 구간</li>
           <img src="<?=base_url()?>asset\lib\img\tutorial\function\printf\4.PNG" width=450px; height=130px;><br>
              <pre class="brush:cpp">
              ex) Escape Sequence 예제 프로그램
              #include &lt;stdio.h&gt;
              #include &lt;conio.h&gt;       // console input / output
              int main()
              {
                  printf("Hello");
                  printf("Hello\t");
                  printf("Hello\n");
                  printf("Korea\r");
                  printf("C\n");
                  printf("King\b\b\b");
                  printf("ong\n");
                  printf("123456781234567812345678\n");
                  printf("1\t123\t12345\t1234567\n");
                  printf("\\, \", \n");
                  return 0;
              }
              </pre><br>
           <img src="<?=base_url()?>asset\lib\img\tutorial\function\printf\5.PNG" width=580px; height=160px;><br>
           <ul>
               <li id="list">1. register size 만큼 입출력(4Byte)</li>
               <li id="list">2. short 형이 int 형으로 확장 되어 들어감</lI>
               <img src="<?=base_url()?>asset\lib\img\tutorial\function\printf\6.PNG" width=580px; height=300px;><br>
           </ul><br>
           <img src="<?=base_url()?>asset\lib\img\tutorial\function\printf\7.PNG" width=330px; height=110px; style="margin-top:40px; margin-bottom:20px"><br>
           <ul>
               <li id="list">참 조 : <span class="red">실 수</span></li>
               <img src="<?=base_url()?>asset\lib\img\tutorial\function\printf\8.PNG" width=580px; height=300px; style="margin-left:150px; margin-top:30px"><br>
           </ul>
           <img src="<?=base_url()?>asset\lib\img\tutorial\function\printf\9.PNG" width=600px; height=260px; style="margin-top:30px"><br>



       </ul>
    </span>
</div>
