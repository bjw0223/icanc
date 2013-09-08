<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
	       <li>기본 형태</li>
		      <li id="list" class="general_sub">int scanf(const char *format, ...);</li>
		      <li id="list" class="general_sub">scanf(“양식”, 저장할 공간의 주소);</li><br>
		   <li>리턴값은 성공적으로 입력받은 데이터의 개수이며 실패 시 –1을 리턴한다.</li><br>
		   <li>첫 번째 전달인자인 양식에는 형식변환문자가 들어간다.</li>
           <img src="<?=base_url()?>asset\lib\img\lecture\function\scanf\1.PNG" width=630px; height=555px;><br><br>
		   <li>변경자 - 형식변환문자와 같이 쓰여 추가 옵션을 지정할 수 있다.</li>
           <img src="<?=base_url()?>asset\lib\img\lecture\function\scanf\2.PNG" width=630px; height=290px;><br><br>
           <li>res = scanf(“%d %d %d”, &amp;a, &amp;b, &amp;c);</li>
		      <li id="list" class="general_sub">return 값 -&gt; 성공 : 성공적으로 입력받은 data 개수, 실패 : -1(EOF 값)</li>
			  <li id="list" class="general_sub">* EOF 입력 : ctrl + z</li>
              <li id="list" class="general_sub">여기서 res 가 취할 수 있는 값은 (-1, 0, 1, 2, 3) 5가지</li><br> 
              <li id="list" class="general_sub">scanf()의 입력버퍼는 stdin으로 Start Up Code 가 잡아준다.</li>
              <li id="list" class="general_sub">1. 큐 구조</li>
	          <li id="list" class="general_sub">2. 비어 있을 때 커서 내놓고 대기</li>
              <img src="<?=base_url()?>asset\lib\img\lecture\function\scanf\3.PNG" width=300px; height=70px style="margin-left:25px; margin-top:10px"><br><br>

       </ul>
    </span>    
</div>
