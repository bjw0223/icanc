<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
           <li>형태 : sizeof(피연산자)</li> 
           <pre class="brush:cpp">
           #include &lt;stdio.h&gt;
           int main()
           {
               int a = 10;
               double b = 3.4;
               char c = 'c';
               char str[10] = "i can c";
               
               printf("%ld\n", sizeof(a));
               printf("%ld\n", sizeof(b));
               printf("%ld\n", sizeof(c));
               printf("%ld\n", sizeof(str));
               printf("%ld\n", sizeof(3));
               
               return 0;
           }
           </pre>
           <ul>
           <li class="general_sub">기본 자료형 외에도 응용 자료형(배열, 포인터, 구조체 등)의 크기를 구할 때도 사용한다.</li>
           <li class="general_sub">변수 외에도 상수나 수식 자체가 피연산자로 쓰일 수 있다.</li>
           <li class="general_sub">사용자의 컴파일러에 따라 결과값이 달라질 수 있다.</li>
           </ul>
       </ul>
    </span>
</div>
