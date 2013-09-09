<div class="col-lg-9 tutorial_desc">
	<span class="general">    
       <ul>
           <li>종류는 float와 double형이 존재하며 double형이 대표 타입이다.</li>
		      <ul>
			      <li class="general_sub">실수는 오차가 존재하며 오차를 줄이기 위해서는 표현 범위를 늘리면 된다.</li>
                  <li class="general_sub">그러나 표현 범위는 한계가 있는데 형마다 다르다. 이를 유효정밀도라 한다.</li>
                  <li id="list" class="general_sub">** float : 7~8자리 / double : 14~16자리</li><br>
                  <li id="list" class="general_sub">cf. 실수형의 오차는 크게 두가지에 의해 발생된다.</li>
                     <ul>
                         <li class="general_sub2">유효정밀도 -&gt; 가수부의 크기 한계(범위를 계속 늘릴 수 없다)</li>
	                     <li class="general_sub2">2진수 변환 시 순환소수로 변환되어 발생하는 오차</li>
	                     <li id="list" class="general_sub2">ex) double db = 2.33 -&gt; 2진수 변환 시 순환소수 발생</li>
                     </ul>
		      </ul><br>
	       <li>표현방식은 고정 소수점 방식과 부동 소수점 방식의 2가지가 있다.</li>
		      <ul>
	             <li class="general_sub">고정 소수점 방식 : 일반적인 방식</li>
	             <li id="list" class="general_sub">ex) 2.456, 12.345 ...</li>
	             <li class="general_sub">부동 소수점 방식 : 값이 매우 작거나 아주 큰 수를 표현할 때 사용</li>
	             <li id="list" class="general_sub">ex) 1.222 x 10^3 ...</li><br>
		      </ul>
	      <li>저장은 IEEE754 방식을 따른다.</li>
	      <li id="list" class="general_sub" style="margin-bottom:20px">: IEEE754 형식은 sign / 지수(exponent) / 가수(Mantissa) 의 3부분</li>
          <li id="list" class="general_sub">단정도 부동소수(float)와 배정도 부동소수(double)</li>
          <img src="<?=base_url()?>asset\lib\img\lecture\data_type\real_number\1.png" width=400px; height=230px; style="margin-left:0px"><br>
             <ul>
                 <li class="general_sub2">sign 비트는 양수일 때 0, 음수일 때 1로 표시</li>
                 <li class="general_sub2">지수에 저장되는 값은 (지수 + Bias 값)이다.</li>
                 <li id="list" class="general_sub2">: Bias 값 : float는 127, double은 1023이다.</li>
                 <li class="general_sub2">2진수로 표현된 값을 2진수 정규화한 후 소수점 이하 부분만 가수에 저장한다.</li>
             </ul><br>
	      <li>단정도 부동소수</li>
          <li id="list">float fa = 10.0;</li>
		     <ol>
                 <li class="general_sub">2진수로 변환 : 1010.0(2)</li>
	             <li class="general_sub">2진 정규화 : 1.<span class="red">0100</span> x 2^<span class="blue">3</span></li>
	             <li id="list" class="general_sub2">1. 1.0100의 맨 앞 1은 저장하지 않는다(항상 1이기 때문에)</li>
	             <li id="list" class="general_sub2">2. 0100을 가수부에 저장(실수형은 맨 앞에서부터 저장)</li>
	             <li id="list" class="general_sub2" style="text-indent:36px">cf. int a = 10; (정수형은 뒤에서부터 저장)</li>
                 <img src="<?=base_url()?>asset\lib\img\lecture\data_type\real_number\222.png" width=400px; height=130px; style="margin-left:20px; margin-bottom:20px"><br>
                 <li id="list" class="general_sub2">3. Bias 값과 2^3의 지수값을 더하여 지수부에 저장</li>
	             <li id="list" class="general_sub2" style="text-indent:26px">: 127 + 3 -&gt; 10000010(2)</li>
	             <li id="list" class="general_sub2" style="text-indent:26px">(단정도 부동소수 방식이므로 Bias 값이 127, 자릿수는 8비트)</li>
                 <img src="<?=base_url()?>asset\lib\img\lecture\data_type\real_number\333.png" width=520px; height=180px; style="margin-left:20px; margin-bottom:40px"><br>
		     </ol>
	      <li>배정도 부동소수</li>
	      <li id="list">double da = -7.25;</li>
		     <ol>
				 <li class="general_sub2">2진수로 변환 : -111.01(2)</li>
	             <li class="general_sub2">2진 정규화 : -1.<span class="red">1101</span> x 2^<span class="blue">2</span></li>
	             <li id="list" class="general_sub2">1. -1.1101의 맨 앞 1은 저장하지 않는다(항상 1이기 때문에)</li>
	             <li id="list" class="general_sub2">2. 1101을 가수부에 저장(실수형은 맨 앞에서부터 저장)</li>
	             <li id="list" class="general_sub2">3. Bias 값과 2^2의 지수값을 더하여 지수부에 저장</li>
	             <li id="list" class="general_sub2" style="text-indent:26px">: 1023 + 2 -&gt; 10000000001(2)</li>
	             <li id="list" class="general_sub2" style="text-indent:26px">(배정도 부동소수 방식이므로 Bias 값이 1023, 자릿수는 11비트)</li>
                 <img src="<?=base_url()?>asset\lib\img\lecture\data_type\real_number\3.png" width=600px; height=220px; style="margin-left:20px; margin-bottom:20px"><br>














       </ul>
	</span>
</div>

