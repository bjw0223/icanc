<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
         <li>숫자 상수 : 정수형 상수(10진수, 8진수, 16진수) 와 실수형 상수</li>
 	   <span class="red">문자(열) 안에서는 접두어가 \x, \ 이며 숫자 안에서는 0x, 0</span><br>
           <ol>
             <li class="general_sub2">정수 상수 : 0, 3, 123, -53, 012, 0x2B (8진수, 10진수, 16진수 사용)</li>
             <li class="general_sub2">실수 상수 : 12.5, 0.12325E2 ... (10진수만 사용)</li>
             <img src="<?=base_url()?>asset\lib\img\tutorial\constant\1.PNG" width=440px; height=80px;><br>
           </ol><br>
         <li>문자 상수 : 단일인용부호를 이용해서 표현하며, 메모리에 한 Byte 크기로 할당</li>
           <ul>
             <li class="general_sub2" id="list">ex) ‘3’, ‘A’, ‘\n’, ‘ ’ ... ---&gt; ‘ ’는 ASCII code가 32인 스페이스 문자</li>
             <li class="general_sub2" id="list">cf) 3 = 메모리에 2진수 3 저장, ‘3’ = 메모리에 2진수 51 저장</li>
           </ul><br>
         <li>문자열 상수 : 이중인용부호를 이용해서 표현하며, 문자열의 끝 표시인 ‘\0’(NULL 문자)로 종료하는 데이터</li>
           <ul>
             <img src="<?=base_url()?>asset\lib\img\tutorial\constant\2.PNG" width=350px; height=40px; style="margin-bottom:20px; margin-left:100; float:right"><br>
             <li class="general_sub2" id="list">ex) “3”, “ABC”, “A B”, “Hello World” ...</li>
           </ul><br>
         <li>매크로 상수 : 전처리기에 의해 처리되는 #define 명령문에 의해서 지정되는 상수로서 매크로 상수는 치환할 문자열로 치환되어 컴파일 된다.</li>
           <ul>
             <li class="general_sub2">유지보수가 편하다.</li>
             <li class="general_sub2">처리 속도가 빠르다.</li>
             <li class="general_sub2">중간에 값을 바꿀 수 없다.</li>
             <li class="general_sub2" id="list">ex) #define PI 3.14</li>
             <img src="<?=base_url()?>asset\lib\img\tutorial\constant\3.PNG" width=400px; height=210px; style="margin-left:25px"><br>
           </ul><br>
         <li>주소 상수 : 변수의 시작주소, 배열의 시작주소, 배열원소의 시작주소, 함수의 시작주소</li>
           <ul>
             <li class="general_sub2">주소 상수는 integer, register 크기와 같다.</li>
           </ul><br>


    


       </ul>
    </span>    
</div>
