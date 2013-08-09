<div class="col-lg-9 tutorial_desc">
<span class="general">    
     <ul>
	 <li>컴퓨터의 실수 저장 방식은 오차로 인해 'real' 이 아닌 'float'</li><br>
	 <li>종류 : float, double (대표 type : double)</li><br>
	 <li>저장 방식 : IEEE754 방식</li>
	     <ul>
		 <li class="general_sub2">단정도 부동소수(32bit - float)</li>
		 <li class="general_sub2 purple" id="list">sign-bit : 1bit &nbsp;/&nbsp; 지수부 : 8bit &nbsp;/&nbsp; 가수부(유효숫자부) : 23bit</li>
		 <li class="general_sub2" id="list">ex) float fa = 10.0</li>
		    <ol>
			<li class="general_sub2">2진수로 변환 : 1010.0(2)</li>
			<li class="general_sub2">2진 정규화 : 1.<span class="red">0100</span> x 2^<span class="blue">3</span></li>
			<li class="general_sub2" id="list">1) 1.0100의 맨 앞의 1은 저장하지 않는다(항상 1이기 때문에)</li>
			<li class="general_sub2" id="list">2) 0100을 가수부에 저장(실수형은 맨 앞에서부터 저장)</li>
			<img src="<?=base_url()?>asset\lib\img\tutorial\data_type\integer\1.PNG" width=450px; height=95px; style="margin-top:10px; margin-left:20px; margin-bottom:20px"><br>
			<li class="general_sub2" id="list">3) Bias 값과 2^3의 지수값을 더하여 지수부에 저장 : 127 + 3 --&gt; 10000010(2)<br><span style="margin-left:20px">(단정도 부동소수 방식이므로 Bias 값이 127, 자릿수는 8비트)</span></li>
			<img src="<?=base_url()?>asset\lib\img\tutorial\data_type\integer\2.PNG" width=480px; height=140px; style="margin-left:20px; margin-bottom:20px"><br>
		    </ol>
		 <li class="general_sub2">배정도 부동소수(64bit - double)</li>
		 <li class="general_sub2 purple" id="list">sign-bit : 1bit &nbsp;/&nbsp; 지수부 : 11bit &nbsp;/&nbsp; 가수부(유효숫자부) : 52bit</li>
		    <ul>
			<li class="general_sub2">signed bit : 가수부(유효숫자부)의 sign (양수 : 0, 음수 : 1)</li>
			<li class="general_sub2">지수부 저장방식 : 지수승 + Bias 값 (Bias 값 : 지수부 최대 값 / 2 --&gt; float : 127, double : 1023)</li>
			<li class="general_sub2">가수부 저장방식 : 2진수로 표현된 유효숫자를 2진수 정규화 (유효숫자 첫 자리를 2의 0승 자리에 고정)한 후<br>소수점 이하 유효숫자만 가수부에 저장</li>
			<li class="general_sub2" id="list">ex) double da = -7.25</li>
			   <ol>
			       <li class="general_sub2">2진수로 변환 : -111.01(2)</li>
			       <li class="general_sub2">2진 정규화 : -1.<span class="red">1101</span> x 2^<span class="blue">2</span></li>
			       <li class="general_sub2" id="list">1) -1.1101의 맨 앞의 1은 저장하지 않는다(항상 1이기 때문에)</li>
			       <li class="general_sub2" id="list">2) 1101을 가수부에 저장(실수형은 맨 앞에서부터 저장)</li>
			       <li class="general_sub2" id="list">3) Bias 값과 2^2의 지수값을 더하여 지수부에 저장 : 1023 + 2 --&gt; 10000000001(2)<br><span style="margin-left:20px">(배정도 부동소수 방식이므로 Bias 값이 1023, 자릿수는 11비트)</span></li>
			       <img src="<?=base_url()?>asset\lib\img\tutorial\data_type\integer\3.PNG" width=480px; height=140px; style="margin-left:20px; margin-bottom:30px"><br>
			   </ol>
		    </ul>
	     </ul>
	 <li>표현 방식</li>
	    <ul>
                <li class="general_sub2">소수형 표기의 예 : 12.3, 0.256 (일반적인 부동소수점 표기 방식)</li>
                <li class="general_sub2">지수형 표기의 예 : 1.824E+4 (매우 작거나 큰 수의 표기 방식)</li>
            </ul><br>
         <li>유효 정밀도 : 실수 자료형에만 있는 개념으로 유효숫자를 몇 자리까지 저장할 수 있는지를 10진수 기준으로 나타냄</li>
            <ul>
                <li class="general_sub2">float 형 : 7~8 자리 &nbsp;/&nbsp; double 형 : 14~16 자리</li>
            </ul><br>
         <li>실수형의 오차</li>
            <ul>
                <li class="general_sub2">유효 정밀도에 의한 오차 --&gt; 가수부의 크기 한계</li>
                <li class="general_sub2">2진수 변환 시 순환소수로 변환되어 발생하는 오차</li>
                <li class="general_sub2" id="list">ex) double da = 6.33; --&gt; 2진수 변환 시 순환소수 발생</li>
            </ul><br>
     </ul>


</span>
</div>

