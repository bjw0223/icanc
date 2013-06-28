<head>
<title>Real Number</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
body {
line-height:30px;
font-size:18px;
/*background-image:url('bg4.jpg');
background-repeat:repeat-y;*/
}
a {
color:#198B11;
font-weight:bold;
}
.sub {
font-size:16px;
color:#0A716C;
}
.sub2 {
font-size:15px;
color:#485F07;
}
</style>
</head>
<body>
	<ol>
	<li>컴퓨터의 실수 저장 방식에서는 오차로 인해 'real' 이 아닌 '<a>float</a>'</li><br/>
	<li>종 류 : <a>float, double</a>(대표 type : <a>double</a>)</li><br/>
	<li>저장 방식 : IEEE754 방식</li>
		<ol type=A class="sub">
		<li>단정도 부동소수(32bit - <a>float</a>)<br/>sign-bit : 1bit / 지수부 : 8bit / 가수부(유효숫자부) : 23bit</li>
		<li>배정도 부동소수(64bit - <a>double</a>)<br/>sign-bit : 1bit / 지수부 : 11bit / 가수부(유효숫자부) : 52bit</li>
			<ol type=a class="sub2">
			<li>signed bit : 가수부(유효숫자부)의 sign (양수 : 0, 음수 : 1)</li>
			<li>지수부 저장 방식 : 지수승 + Bias 값<br/>(Bias 값 : 지수부 최대 값 / 2 -&gt; <a>float</a> : 127, <a>double</a> : 1023)</li>
			<li>가수부 저장 방식 : 2진수로 표현된 유효 숫자를 2진수 정규화<br/>&nbsp;&nbsp;(유효 숫자 첫 자리를 2의 0승 자리에 고정) 한 후 소수점 이하
					       유효 숫자만 가수부에 저장</li>
			</ol>
		</ol><br/>

	&lt;예 - 단정도 부동소수&gt;<br/>&nbsp;&nbsp;&nbsp;<a>float</a> fa = 10.0;<br/>
		<ol>
		<li>2진수로 변환 : 1010.0(2)</li>
		<li>2진 정규화 : 1.<span style="color:red; font-weight:bold">0100</span> X 2^<span style="color:blue; font-weight:bold">3</span></li>
			<ol type=A class="sub">
			<li>1.0100의 맨 앞은 1은 저장하지 않는다(항상 1이기 때문에)</li>
			<li>0100을 가수부에 저장(실수형은 맨 앞에서 부터 저장<br/>&nbsp; cf)<a>int</a> a = 10; (정수형은 뒤에서 부터 저장)<br/>
			    <img src="/asset/help/real_number/real_number1.PNG"; width="400"; Height="80"></li>
			<li>Bias 값과 2^3의 지수 값을 더하여 지수부에 저장 : 127 + 3 = 10000010(2)<br/>
                            (단정도 부동소수 방식이므로 Bias 값이 127, 자릿수는 8비트)</li>
			    <img src="/asset/help/real_number/real_number2.PNG"; width="400"; Height="140">
			</ol>
		</ol><br/><br/>

	&lt;예 - 배정도 부동소수&gt;<br/>&nbsp;&nbsp;&nbsp;<a>double</a> da = -7.25;<br/>
		<ol>
		<li>2진수로 변환 : -111.01(2)</li>
		<li>2진 정규화 : -1.<span style="color:red; font-weight:bold">1101</span> X 2^<span style="color:blue; font-weight:bold">2</span></li>
			<ol type=A class="sub">
			<li>-1.1101의 맨 앞 1은 저장하지 않는다(항상 1이기 때문에)</li>
			<li>1101을 가수부에 저장(실수형은 맨 앞에서 부터 저장)</li>
			<li>Bias 값과 2^2의 지수 값을 더하여 지수부에 저장 : 1023 + 2 = 10000000001(2)<br/>
			    &nbsp;(배정도 부동소수 방식이므로 Bias 값이 1023, 자릿수는 11비트)</li>
			    <img src="/asset/help/real_number/real_number3.PNG"; width="400"; Height="140"><br/>
			    <font style="color:#927014; font-weight:bold">*** Underflow 시 값을 매번 버리는 것이 아니라 일부는 올리기도 한다.</font>
			</ol>
		</ol><br/>

	<li>표현 방식</li>
		<ol type=A class="sub">
		<li>소수형 표기의 예 : 12.3, 0.256(일반적인 부동 소수점수 표기 방식)</li>
		<li>지수형 표기의 예 : 1.824E+4(매우 작거나 큰 수의 표기 방식)</li>
		</ol><br/>
	<li>유효 정밀도 : 실수형 자료에만 있는 개념으로 유효 숫자를 몇 자리까지 저장 할 수<br/>
	    있는가를 10진수 기준으로 나타냄<br/>
            <a>float</a> 형 : 7~8 자리 / <a>double</a> 형 : 14 ~ 16 자리</li><br/>
	<li>실수형의 오차</li>
		<ol type=A class="sub">
		<li>유효 정밀도에 의한 오차 -&gt; 가수부의 크기 한계</li>
		<li>2진수 변환 시 순환소수로 변환 되어 발생하는 오차<br/>
                    ex) <a>double</a> da = 6.33; -&gt; 2진수 변환 시 순환소수 발생</li>
		</ol>
	</ol>  
</body>
