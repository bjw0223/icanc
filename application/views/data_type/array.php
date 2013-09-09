<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
           <li>선언방법</li>
		       <ul>
                   <li class="general_sub">배열명과 대괄호([ ]), 대괄호 안에 첨자(subscript, index)를 사용하여 선언한다.</li>
                   <li class="general_sub">첨자는 정수형만 가능하며 변수명이 와서는 안되다.</li>
				      <li id="list" class="general_sub2">ex) int a = 3;
					  <li id="list" class="general_sub2" style="text-indent:36px">char ch[a]; --&gt; (x)</li><br>
                   <li class="general_sub">배열 선언문의 첨자만큼 배열의 방이 잡힌다.</li>
                   <li class="general_sub">선언문 첨자는 1부터 계산한 방의 개수지만 배열의 시작 방번호는 0이다.</li>
				      <li id="list" class="general_sub2">ex) int sub[5] = {1, 2, 3, 4, 5};
                      <li id="list" class="general_sub2">이 때 0~4번 방은 존재하고 5번 방은 물리적으로 존재하나 논리적으로는 존재하지 않는다.</li>

                   <img src="<?=base_url()?>asset\lib\img\lecture\data_type\array\1.PNG" width=540px; height=310px; style="margin-bottom:10px"><br>
               </ul><br>
  	       <li class="red">배열명은 곧 그 배열의 시작 주소 상수</li>
              <li id="list" class="general_sub">ex) int sub[5] = {1, 2, 3, 4, 5}; 일 때,</li>
			  <li id="list" class="general_sub" style="margin-left:36px">printf(“%u\n”, sub); = printf(“%u\n”, &amp;sub);</li><br>
  	       <li id="list" class="blue">&lt;참고사항 – 차원&gt;</li>
		       <ul>
		           <li class="general_sub">C에서는 상수와 변수에 차원이라는 개념이 존재한다.</li>
			       <li class="general_sub">차원은 고정값이 아니며 차원조절연산자에 의해서 변경이 가능하다.</li>
			       <li class="general_sub">Left Value(이하 Lvalue) 와 Right Value(이하 Rvalue) 는 동일한 차원에서만 대입연산이 가능하다.</li>
			       <li class="general_sub">차원은 0부터 시작한다.</li>
                   <img src="<?=base_url()?>asset\lib\img\lecture\data_type\array\2.PNG" width=650px; height=590px><br>
                   <img src="<?=base_url()?>asset\lib\img\lecture\data_type\array\3.PNG" width=560px; height=310px; style="margin-bottom:10px"><br>
                   <img src="<?=base_url()?>asset\lib\img\lecture\data_type\array\4.PNG" width=650px; height=500px; style="margin-left:10px; margin-bottom:10px"><br>
		       </ul><br>
  	       <li>배열의 초기화는 선언문에서만 가능하다.</li>
		       <ul>
			       <li class="general_sub">초기화 시에는 양쪽에 중괄호를 사용하는데 단일 문자열일 경우에는 중괄호 생략 가능하다.</li>
                      <li id="list" class="general_sub">ex) char ch[8] = “I CAN C”</li>
					      <ul>
                              <li id="list" class="maroon" style="font-size:15px">*** 문자열의 경우에는 널 문자를 생각해야 하므로 저장할 문자열보다 하나 더 크게 잡아줘야 한다.</li>
					      </ul>
			   </ul><br>
  	       <li>초기화 시 첨자보다 데이터가 많으면 에러가 발생하며, 적을 경우에는 0(zero)이나 ‘\0’으로 채워진다.</li><br>
           <li>초기화 할 데이터가 존재하면 첨자의 생략이 가능하나 그 외에는 불가하다.</li><br>
           <li>보통 배열안의 모든 값을 0으로 만들기 위해서 int a[3] = { }; 이런 식으로 작성하는 경우가 많지만 항상 0이 되지는 않을 수도 있다.</li><br>
           <li>2차원 배열의 선언 방법</li>
               <li id="list" class="general_sub">ex) char a[5][5];</li>
               <li id="list" class="general_sub" style="margin-left:36px">첫 번째 첨차 : 열(column), 두 번째 첨자 : 행(row)</li><br>
			   <li id="list" class="general_sub">ex) int a[5][5];</li>
			   <li id="list" class="general_sub" style="margin-left:36px">a[0][12] = 2; a[2][2] = 2;</li>
			   <li id="list" class="general_sub" style="margin-left:36px">--&gt; 2차원 배열도 메모리에서는 일자형이기 때문에 가능하다.</li>
               <img src="<?=base_url()?>asset\lib\img\lecture\data_type\array\5.PNG" width=530px; height=190px; style="margin-bottom:10px"><br><br>
           <li>2차원 배열의 초기화</li>
		       <ul>
                   <li class="general_sub">초기화 시에 양쪽의 중괄호 외에도 행의 시작과 끝에 중괄호를 한번 더 써주는데 이것은 생략이 가능하다.</li>
                       <li id="list" class="general_sub">ex) int a[2][2] = {{1,1}, {2,2}};</li>
                       <li id="list" class="general_sub" style="margin-left:34px">int a[2][2] = {1,1,2,2,};</li>
                   <li class="general_sub">문자 배열의 첫 번째 첨자는 행의 수(문자열의 개수), 열의 수를 뜻하는 두 번째 첨자는 가장 긴 문자열 + 1(Null 문자)로 정해준다.</li>
                       <img src="<?=base_url()?>asset\lib\img\lecture\data_type\array\6.PNG" width=350px; height=250px; style="margin-bottom:10px; margin-top:10px"><br><br>
                       <img src="<?=base_url()?>asset\lib\img\lecture\data_type\array\7.PNG" width=550px; height=200px; style="margin-top:10px"><br><br>
                       <img src="<?=base_url()?>asset\lib\img\lecture\data_type\array\8.PNG" width=620px; height=560px; style="margin-top:10px"><br><br>
                       <img src="<?=base_url()?>asset\lib\img\lecture\data_type\array\9.PNG" width=400px; height=230px; style="margin-top:10px"><br><br>
		       </ul>
           <li>2차원 배열의 주소를 받을 때 형식</li>
               <img src="<?=base_url()?>asset\lib\img\lecture\data_type\array\10.PNG" width=550px; height=320px; style="margin-top:10px"><br><br>
           <li>선언문에서 첨자를 둘러싼 대괄호의 수에 따라 차원이 부여된다.</li><br>
           <li>3차원까지 이름이 있다(열, 행, 면)</li><br>
	       <li>첨자가 매우 많이 존재해도 메모리상에 연속적인 기억공간이 할당되는 것은 항상 같다.</li>
           <img src="<?=base_url()?>asset\lib\img\lecture\data_type\array\11.PNG" width=650px; height=350px; style="margin-top:10px"><br><br>
           <li>배열의 첨자가 여러개라도 생략되는 것은 가장 큰 첨자 1개뿐이다.</li>





       </ul>
    </span>    
</div>
