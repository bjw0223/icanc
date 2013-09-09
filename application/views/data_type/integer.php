<script>
	var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
	var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
	var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
		lineNumbers: true,
		matchBrackets: true,
		mode: "text/x-csrc",
		readOnly: true
	});
</script>
<style>
	.codearea {
	padding:10px 0px 10px 20px;
	}
    .CodeMirror {
        border-top: 1px solid #eee;
        border-bottom: 0px solid #eee;
        height: auto;
        width:100%;
    }
</style>
<div class="col-lg-9  col-sm-9 tutorial_desc">
    <span class="general">    
        <ul>
            <li>정수형의 종류는 (unsigned)char, (unsigned)short, (unsigned)int, (unsigned)long이 있으며 이 중 정수형을 대표하는 type은 int형이다.</li>
			  <li id="list">* 실수형의 대표 type은 double형이다.</li><br>
			<li>자료형의 범위(limits.h 헤더 파일에 저장되어 있다)</li>
              <img src="<?=base_url()?>asset\lib\img\tutorial\data_type\integer\11.PNG" width=650px; height=400px;><br>
		<div class="codearea">
			<textarea class="code" name="code" id="code">
	short i;
	for (i = 0; i &gt;= 0; i++)
	{

	}
	이 문장은 끝날 수 있는가?
	-&gt; i 값이 32,767에서 1이 증가하면 –32,768이 되어 정상 종료된다.
			</textarea>
		</div>
			<li>signed와 unsigned의 차이는 무엇인가?</li>
			  <li id="list">signed 형의 자료형은 맨 앞 비트가 sign 비트로서 이 비트가 0이면 양수, 1이면 음수로 판단하는데 쓰인다.</li>
              <img src="<?=base_url()?>asset\lib\img\tutorial\data_type\integer\22.PNG" width=460px; height=90px><br><br>
			<li>음의 정수의 표현 방법</li>
			  <li id="list" class="general_sub">2의 보수 표현</li>
			  <li id="list" class="general_sub2">: 대상 숫자를 2진수로 변환한 후 모든 비트를 반전(0은 1로, 1은 0으로)시키고 그 값에 + 1을 취해준다.</li><br>
	        <li>signed 형과 unsigned 형의 표현</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code2">
	short sh = -32767;
	unsigned short u_sh = sh;
			</textarea>
		</div>
              <img src="<?=base_url()?>asset\lib\img\tutorial\data_type\integer\33.PNG" width=500px; height=130px;><br>
			  <li id="list" class="general_sub">물리적으로 저장되어 있는 형태는 동일하기 때문에 출력 시 형식변환문자에 따라서 동일한 값을 표현할 수 있다. 이럼에도 불구하고 signed형과 unsigned형이 나뉘어져 있는 경우는 <span class="red">연산 시 원래 type대로 가기 때문이다.</span></li><br>
	        <li>형변환</li>
			   <ul>
			       <li class="general_sub">C언어에서는 자동형변환과 강제형변환의 두가지 형변환이 존재한다.</li>
		           <li class="general_sub">강제형변환은 사용자가 직접 (type) 연산자를 사용하여 원하는 형으로 바꿔준다.</li>
		           <li class="general_sub">C에서는 이항 연산 시 Left Value(이하 Lv)와 Right Value(이하 Rv)의 type이 다르면 연산이 불가능하므로 이를 가능하게 하기 위해서 자동형변환이 일어난다.</li>
				   <li class="general_sub">자동형변환 규칙</li>
				      <ul>
					      <li class="general_sub2">CPU에 의해 1회성으로 실행되며 연산이 끝나면 바로 돌아온다.</li>
		                  <li class="general_sub2">작은 타입에서 큰 타입으로 변경된다(값 손실 예방, 메모리의 확장)</li>
	                      <li class="general_sub2">대입연산(=)시에는 무조건 Rv가 Lv 타입으로 변경된다(이 규칙으로 인해서 큰 값이 작아질수도 있다)</li>
	                      <li id="list" class="red" style="font-size:15px">** 메모리 확장 공식</li>
	                      <li id="list" class="general_sub2">signed 자료형의 확장은 부호 비트를 따른다.</li>
	                      <li id="list" class="general_sub2">unsigned 자료형의 확장은 무조건 0으로 확장된다.</li>
				      </ul>
				   <li class="general_sub">응용자료형과 주소는 자동형변환이 불가(강제형변환은 모두 가능)</li>
				   <li class="general_sub">연산 시 존재하지 않는 타입</li>
	                 <li id="list" class="general_sub2">(unsigned) char, (unsigned) short, enum(열거형)</li>
	                 <li id="list" class="general_sub2">위 형들은 연산 시 레지스터 크기에 맞게 형변환된다.</li>
                     <img src="<?=base_url()?>asset\lib\img\tutorial\data_type\integer\44.PNG" width=500px; height=100px;><br><br>
			   </ul>
	        <li>signed 형과 unsigned 형의 연산 시 변화</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code3">
	int main()
	{
		short sh;
		unsigned u_sh;
		int a, b;
		sh = u_sh = -1;
		a = sh * 3;
		b = u_sh * 3;
		return 0;
	}
			</textarea>
		</div>
               <img src="<?=base_url()?>asset\lib\img\tutorial\data_type\integer\55.PNG" width=800px; height=330px;><br><br>
               <img src="<?=base_url()?>asset\lib\img\tutorial\data_type\integer\66.PNG" width=650px; height=490px;><br><br>




        </ul>

    </span>    
</div>
