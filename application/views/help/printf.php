<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8";/>
<title>printf</title>
<style type="text/css">
body {
line-height:26px;
font-size:18px;
/*background-image:url('/asset/help/bg2.jpg');
<!--background-repeat:repeat-x,repeat-y;-->*/
}
a {
color:#198B11;
font-weight:bold;
}
.sub {
font-size:16px;
color:#0A716C;
}
a:visited {
color:#8747A5;
}
a:hover {
color:blue;
}
a:active {
color:red;
}
@font-face {
font-family:cursive;
}
</style>
<head>
<body>
	<ol>
	<li>형식 : <a>int</a> printf(<a>const char</a> *, ...); -&gt; <a>const char</a> *는 문자열의 시작 주소를 의미</li><br/>
	<li>헤더 : <span style="color:#720F0A; font-weight:bold">stdio.h</span></li><br/>
	<li>사용방법 : printf("출력양식", 출력대상); -&gt; 출력대상은 생략가능</li><br/>
	<li>return 값 : 성공적으로 출력한 문자의 개수(개행문자가 있다면 +1 추가)</li><br/>
	<li>출력 양식의 3요소 -&gt; printf("a=%d\n", a);</li>
		<ol type=A class="sub">
		<li>a = : 일반 출력문자(그대로 출력 되는 부분)</li>
		<li>\n &nbsp;: Escape Sequence(기능문자 - 자신의 고유 기능 수행)</li>
		<li>%d &nbsp;: 형식 변환문자(형식대로 변환하여 출력)</li> 
		</ol><br/>
	<li><font style="font-family:cursive">출력 대상의 4요소</font></li>
		<ol type=A class="sub">
		<li>변수 : printf("%d", num); -&gt; num 변수의 값을 그대로 출력</li>
		<li>상수 : printf("%d", 100); -&gt; 상수 값을 그대로 출력</li>
		<li>수식 : printf("%d", num+100); -&gt; 수식의 연산 결과를 출력</li>
		<li>함수 리턴 값 : printf("%d", printf("Hello")); -&gt; 함수의 리턴 값 출력</li>
		</ol><br/>
	<li>함수 동작 원리</li>
		printf() 함수는 출력 대상을 stack 구조(LIFO 방식)의 출력버퍼에 저장한 후<br/>
                형식 변환문자의 형태대로 버퍼에서 꺼내어 출력한다.<br/><br/>
		<font style="color:#927014;font-weight:bold">* printf buffer의 데이터 입출력 규칙</font><br/>
		<ol type=i class="sub">
		<li>printf</span>() 구문에 표기된 출력 대상의 우측 -&gt; 좌측 방향 순서로 printf buffer 에 저장 됨</li>
		<li><a>int</a> size 로 입출력 됨(<a>char, short</a> 형은 <a>int</a> 로 자동 형변환 되어 저장 됨) -&gt; Register Size</li>
		<li>실수(<a>float, double</a>)형은 <a>double</a> 형으로 자동 형변환 되어 4Byte 씩 나누어 두 번에 걸쳐 입출력 됨</li>
		</ol><br/>

	<li>함수의 변경자</li>
	<table border=2px; cellspacing=2px; style="padding:2px"; cellpadding=10px; borderlapse>
	<tr>
		<th bgcolor="beige">변경자</font></th><th bgcolor="beige">의 &nbsp;&nbsp;&nbsp;미</th>
	</tr>
	<tr>
		<td>10진수</td><td>최소 필드 너비 지정 ex) %5d<br/>출력될 데이터가 지정된 크기에 맞지 않으면 크기 무시</td>
	</tr>
	<tr>
		<td>.10진수</td><td>정밀도 ex) %.2f<br/>%f, %e, %g 에서는 소수 이하 자리수<br/>%s 에서는 프린트 될 최대 문자의 개수<br/>
			            %d 에서는 출력 될 수의 최소 개수<br/>앞의 여유분에 '0' 을 채움</td>
	</tr>
	<tr>
		<td align="center">h</td><td><a>short</a> 형 임을 표시 ex) %hu</td>
	</tr>
	<tr>
		<td align="center">l</td><td><a>long</a> 형 또는 <a>double</a> 형 임을 표시 ex) %ld, %lf</td>
	</tr>
	<tr>
		<td align="center">L</td><td><a>long double</a> 형 임을 표시 ex) %Lf, %10.4Le</td>
	</tr>
	<tr>
		<td align="center">*</td><td>필드의 너비나 정밀도 등을 임의로 지정하고자 할 때 사용<br/>ex) %*d, %*.*f</td>
	</tr>
	</table><br/>

	<li>함수의 플래그(flag)</li> 
	<table border=2px; cellspacing=2px; style="padding:2px"; cellpadding=7px>
	<tr>
		<th bgcolor="beige">플래그</th><th bgcolor="beige">의 &nbsp;&nbsp;&nbsp;미</th>
	</tr>
	<tr>
		<td align="center">-</td><td>항목이 필드의 왼쪽부터 시작하여 프린트 ex) %-20s</td>
	</tr>
	<tr>
		<td align="center">+</td><td>수치 앞에 부호를 붙여 출력 ex) %+6.2f</td>
	</tr>
	<tr>
		<td align="center">공백</td><td>수치가 양의 값이면 공백을, 음의 값이면 - 를 붙인다. ex) % 6.2f</td>
	</tr>
	<tr>
		<td align="center">#</td><td>%o 에 대해서는 8진 접두어 0를, %x 에 대해서는 16진 접두어<br/>
					      0x 를 붙여 출력 ex) %#o, %#x</td>
	</tr>
	<tr>
		<td align="center">0<br/>(Zero)</td><td>수치 값 출력 시 여분 공간을 0 으로 채운다(필드폭과 함께 사용 시)<br/>
                                                         ex) %08d, %08.3f</td>
	</tr>
	</table> 
	</ol>

	<img src="/asset/help/printf/printf_1-1.PNG"; width="550"; Height="150"><br/>
	<ol>
	<li>Register Size 만큼 입출력(4Byte)</li>
	<li><a>short</a> 형이 <a>int</a> 형으로 확장 되어 들어감</li>
	</ol>
	<img src="/asset/help/printf/printf_1-2.PNG"; width="520"; Height="300"; style="padding-left:10px"><br/><br/> 

	<img src="/asset/help/printf/printf_2-1.PNG"; width="300"; Height="110"; style="padding-left:15px"> 
        참 조 : <a id="ref" href="실수url"; style="font-weight:bold">실 수</a><br/>				
	<img src="/asset/help/printf/printf_2-2.PNG"; width="520"; Height="300"; style="padding-left:10px"><br/>	
	<img src="/asset/help/printf/printf_2-3.PNG"; width="550"; Height="110"; style="padding-left:10px"><br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;일단</style> <span style="color:blue; font-weight:bold">2</span>를 빼고 
        <span style="color:red; font-weight:bold">1</span>을 앞에 붙여서 출력한다.<br/><br/>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cf) printf("%d\n", c); 라고 하면 <span style="color:blue; font-weight:bold">2</span>만 나와서 0 이 된다.<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cf) printf("%d%d\n", c); 라고 해도 3이 나오지 않는다.<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(붙여서 출력해 주지 않고 따로 떨어져서 출력하므로)<br/>

</body>



	
