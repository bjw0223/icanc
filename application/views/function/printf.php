 <div class="col-lg-9 col-sm-9 tutorial_desc">
    <span class="general">    
       <ul>
           <li>형식 : int printf(const char *format, ...);</li>
		   <li id="list">: const char *format 는 문자열의 시작 주소를 의미</li>
	       <li id="list">printf(“양식”, “대상”);</li><br>
	       <li>두 번째 전달인자 없이 사용하는 경우도 있다.</li>
	       <li id="list">ex) printf(“I CAN C\n”);</li><br>
	       <li>첫 번째 전달인자인 ‘양식’은 총 3가지 요소로 구성되어 있다.</li>
	       <li id="list">: 일반 문자, 특수 문자, 형식변환문자</li>
		      <ul>
			      <li class="general_sub">일반 문자는 기본적으로 출력하고자 하는 부분이다.</li>
	              <li class="general_sub">특수 문자는 기능문자라고 하며 자신의 고유기능을 수행한다.</li>
                  <img src="<?=base_url()?>asset\lib\img\lecture\function\printf\1.PNG" width=600px; height=340px"><br>
	              <li id="list" class="general_sub">* \b, \r 사용 시 기존 문자를 지우지 않는다.</li>
				  <li id="list" class="general_sub">* \t : 8칸 10개 구간</li>
                  <img src="<?=base_url()?>asset\lib\img\lecture\function\printf\2.PNG" width=450px; height=125px style="margin-top:10px; margin-bottom:20px"><br><br>
                  <li class="general_sub">형식변환문자</li>
                  <img src="<?=base_url()?>asset\lib\img\lecture\function\printf\3.PNG" width=560px; height=490px style="margin-top:0px"><br><br>
                  <li id="list" class="general_sub">cf. 변경자 : 형식변환문자와 같이 쓰인다.</li>
                  <img src="<?=base_url()?>asset\lib\img\lecture\function\printf\4.PNG" width=560px; height=380px style="margin-top:0px"><br><br>
                  <li id="list" class="general_sub">cf. 플래그(flag) : 형식변환문자와 같이 쓰인다.</li>
                  <img src="<?=base_url()?>asset\lib\img\lecture\function\printf\5.PNG" width=560px; height=250px style="margin-top:0px"><br><br>
			  </ul><br>
	       <li>printf() 함수의 동작 원리</li>
		      <ul>
			      <li class="general_sub">stack 구조(LIFO방식 : last in first out(후입선출))의 버퍼에 저장하고 출력시는 형식변환문자에 맞게 바꾸어 버퍼에서 꺼낸다.</li>
		          <li class="general_sub">버퍼에 저장되는 순서는 ( )안에 표시되어 있는 출력대상의 순서가 아니라 <span class="red">맨 우측에서 좌측 방향</span>으로 저장된다.</li>
		          <li class="general_sub">int형의 크기로 입출력이 수행된다(char와 short형은 int로 자동형변환된다)</li>
	              <li id="list" class="general_sub">: 현재 Register 사이즈</li>
	              <li class="general_sub">실수형(float, double)은 double형으로 자동형변환되어 4Byte씩 나누어 두 번에 걸쳐 입출력이 된다.</li>
              </ul><br>
	       <li>example 1</li>
           <img src="<?=base_url()?>asset\lib\img\lecture\function\printf\6.PNG" width=450px; height=100px style="margin-top:0px"><br>
	       <li id="list">1. register size만큼 입출력(4byte)</li>
	       <li id="list">2. short형이 int형으로 확장되어 들어감</li>
           <img src="<?=base_url()?>asset\lib\img\lecture\function\printf\7.PNG" width=450px; height=230px style="margin-left:100px"><br><br>
	       <li>example 2</li>
           <img src="<?=base_url()?>asset\lib\img\lecture\function\printf\8.PNG" width=280px; height=70px style="margin-top:0px"><br>
	       <li id="list" class="maroon" style="font-size:15px">참조 : 실수</li>
           <img src="<?=base_url()?>asset\lib\img\lecture\function\printf\9.PNG" width=450px; height=230px style="margin-left:100px"><br>
           <img src="<?=base_url()?>asset\lib\img\lecture\function\printf\10.PNG" width=650px; height=120px style="margin-top:20px"><br>
		   <li id="list">일단 <span class="blue">2</span>를 빼고 <span class="red">1</span>을 앞에 붙여서 출력한다.</li><br>
           <li id="list">cf. printf(“%d\n”, c); 라고 하면 <span class="blue">2</span>만 나와서 0이 된다.</li>
		   <li id="list">cf. printf(“%d%d\n”, c); 라도 해도 3이 나오지 않는다.</li>
		   <li id="list" style="text-indent:36px">(붙여서 출력해 주지 않고 따로 떨어져서 출력하므로)</li>





       </ul>
    </span>    
 </div>




