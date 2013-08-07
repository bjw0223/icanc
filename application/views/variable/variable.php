<div class="col-lg-9 tutorial_desc">
    <span class="general">
      <ul>
        <li class="red">프로그램 실행 중에 변경 가능하다.</li><br>
        <li>Left Value (상수 x) = Right Value (변수, 상수 o)</li><br>
        <li>선언 및 초기화 : 프로그램에서 사용될 특정 크기의 기억 공간을 Memoey 내 임의의 위치에 확보하기 위해서는 반드시 기억할 자료의 형과 특정 이름으로 변수를 선언해야 한다. C언어에서 모든 변수는 프로그램 선두에서 반드시 미리 선언되어야 한다.</li>
        <img src="<?=base_url()?>asset\lib\img\tutorial\variable\1.PNG" width=590px; height=160px><br><br>
        <li>C언어의 모든 상수와 변수에는 차원이 부여되어 있다.</li>
          <ul>
            <li class="general_sub2">상수의 2분류</li>
              <ul>
                <li class="general_sub2">일반 상수 : 숫자 상수, 문자 상수, 매크로 상수 일부(#define PI 3.14)</li>
                <li class="general_sub2">주소 상수 : 문자열 상수, 주소 상수, 매크로 상수 일부(#define S "smile")</li>
              </ul>
            <li class="general_sub2">변수의 2분류</li>
              <ul>
                 <li class="general_sub2">일반 변수 : 일반 상수 저장</li>
                 <li class="general_sub2">포인터 변수 : 주소 상수 저장</li>         
                 <img src="<?=base_url()?>asset\lib\img\tutorial\variable\2.PNG" width=650px; height=140px><br><br>
              </ul>
           </ul>
          <li>비트 카피(bit copy)</li>
            <img src="<?=base_url()?>asset\lib\img\tutorial\variable\3.PNG" width=650px; height=180px; style="margin-bottom:20px"><br>
            <img src="<?=base_url()?>asset\lib\img\tutorial\variable\4.PNG" width=700px; height=220px; style="margin-bottom:20px"><br>
            <ul>
              <li class="general_sub2">정수형 대표 : int(4Byte), 실수형 대표 : double(8byte)</li>
              <li class="general_sub2">고정길이 상수(숫자, 문자 상수) / 가변길이 상수(문자열 상수)</li>
            </ul><br>
          <li>상수 저장 위치</li>
            <img src="<?=base_url()?>asset\lib\img\tutorial\variable\5.PNG" width=740px; height=250px; style="margin-bottom:20px"><br>
            <ul>
              <li class="general_sub2">상수는 Ro-data 영역에 저장</li>
              <li class="general_sub2">상수 = 상수 꼴 형태는 Read-Only 영역이므로 bit copy 불가</li>
            </ul><br>
          <li>예 제</li>
            <pre class="brush:cpp">
            #include &lt;stdio.h&gt;
            int main()
            {
               int a = 12;
               char str[10] = "apple";
               printf("%d\n", a);
               printf("%s\n", str);
               printf("%s\n", &amp;str[0]);
               return 0;
            }
            </pre>
            <img src="<?=base_url()?>asset\lib\img\tutorial\variable\6.PNG" width=260px; height=100px; style="margin-bottom:20px; margin-left:30px"><br>
            <ul>
              <li class="general_sub2">printf("%s\n", str[0]); &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:green">//변환문자열 %s는 대상을 주소로 인식</span></li>
               <ul>
                 <li class="general_sub2">str[0]에 있는 'a'의 아스키 코드 값 97을 주소로 인식해서 97번지 값부터 널 값 전까지 읽어온다.</li>
               </ul>
              <li class="general_sub2">printf("%s\n", "apple");</li>
               <ul>
                 <li class="general_sub2">문자열은 Ro-data 영역에 잡히며 곧 그 문자열의 시작 주소 상수</li>
               </ul><br>                  
            </ul>
          <li>Q) printf("%s\n", "apple" + 3);</li>
          <li>Q) printf("%c\n", str[2]);</li>
          <li>Q) printf("%c\n", "apple"[2]);</li>
      
      </ul>
    </span>
</div>
