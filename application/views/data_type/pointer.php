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
	padding:10px 0px 10px 30px;
	}
    .CodeMirror {
        border-top: 1px solid #eee;
        border-bottom: 0px solid #eee;
        height: auto;
        width:100%;
    }
</style>
<div class="col-lg-9 col-sm-9 tutorial_desc">
    <span class="general">    
        <ul>
			<img src="<?=base_url()?>asset\lib\img\lecture\data_type\pointer\1.PNG" width=600px; height=150px; style="margin-left:-30px; margin-bottom:20px"><br>
		    <li>자료형에 따라 크기는 다르지만 모든 값은 메모리의 연속적인 기억공간에 할당된다.</li><br>
			<li>할당된 기억공간 중 맨 첫 번째 기억공간의 주소값을 가지고 전체 기억공간의 값을 조작할 수 있다.</li><br>
			<li>일반 변수는 주소추출 연산자(&amp;)를 사용하면 해당 변수의 주소값을 구할 수 있다.</li>
     			<li id="list" class="general_sub">ex) int a = 3;</li>
     			<li id="list" class="general_sub" style="text-indent:40px">printf(“%p\n”, &amp;a);</li><br>
			<li>포인터는 주소상수기 때문에 하나의 ‘상수’ 개념이다. 때문에 처음 변수를 사용했던 이유와 같이 그 자체로 사용하지 않고 변수라는 공간에 담아 사용한다. 이를 포인터변수라 한다.</li><br>
			<li>포인터변수와 포인터변수안에 담기는 주소값이 가리키는 형태는 같아야 한다.</li><br>
			<li>포인터변수와 포인터의 선언형식</li>
                <li id="list" class="general_sub">[type] [*][변수명];</li>
			    <li id="list" class="general_sub">int a = 3;</li>
			    <li id="list" class="general_sub">int *p = &a;</li>
			    <img src="<?=base_url()?>asset\lib\img\lecture\data_type\pointer\2.PNG" width=370px; height=90px; style="margin-bottom:40px"><br>
			<li>참조연산자(*)는 선언문에서 사용할 때와 실행문에서 사용할 때 뜻이 다르다.</li>
				<li id="list" class="general_sub">int *p = &a; -&gt; 선언문, 이 때는 포인터변수 p 자체의 공간을 의미한다.</li>
				<li id="list" class="general_sub">*p = 3; -&gt; 실행문, 이 때는 포인터변수가 가리키는 기억공간을 의미한다.</li><br>
			<li>포인터변수의 크기는 부호없는 4byte 정수형이다.</li>
			     <ul>
			      	<li class="general_sub">부호가 없는 까닭은 주소이기 때문이다.</li>
		     		<li class="general_sub">포인터 주소체계가 4byte를 따른다.</li>
		    		<li class="general_sub">32bit OS 기준이며 64bit OS는 8byte로 바뀐다.</li><br>
				 </ul>
			<li>지역변수의 유효범위는 해당 변수가 선언된 블록내인데 포인터를 활용하면 블록 밖의 영역에서도 변수의 값을 바꾸거나 사용할 수 있다.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code">
	#include &lt;stdio.h&gt;
	void trans(int *, int *);
	int main()
	{
		int num1 = 1, num2 = 0;
		trans(&amp;num, &amp;num2);
		printf(“num1 = %d, num2 = %d\n”, num1, num2);
		return 0;
	}
	void trans(int *num1, int *num2)
	{
		*num1 = 0;
		*num2 = 1;
	}
			</textarea>
		</div>
			<li>포인터변수도 개념은 ‘변수’이기 때문에 일반 변수들의 주소값을 구했던 것처럼 주소값을 구할 수 있다. 포인터변수의 주소값도 상수이므로 변수에 담아서 사용하는데 이런식으로 확장해 나가면 2중, 3중 ... 의 포인터를 구할 수 있다.</li>
	            <li id="list" class="general_sub">int a = 1;</li>
	            <li id="list" class="general_sub">int *p = &a;</li>
	            <li id="list" class="general_sub">int **pp = &p;</li>
	            <li id="list" class="general_sub">int ***ppp = &pp;</li>
            <li id="list">이 때 이중포인터 pp가 가리키는 형은 (int *) 이며 삼중포인터 ppp가 가리키는 형은 (int **) 이다.</li>
				<li id="list" class="general_sub">cf. **pp는 주소값을 두 번 참조하게 되는데 주소값은 4byte 정수이다. 한 번 참조해서 들어갔을 때 4byte 주소값이 있어야 하기 때문에 무조건 그 안의 4byte를 주소로 인식한다(값은 관계 없다)</li><br>
            <li>배열명과 함수명은 그 자체가 주소값을 가지고 있는데 이를 배열포인터, 함수포인터라 한다.</li>
                <li id="list" class="general_sub">** 배열포인터</li>
                   <ul>
				       <li class="general_sub2">배열명은 배열 자체를 가리키는 주소값인데 이 주소값을 참조하면배열의 첫 번째 값을 알 수 있다.</li>
                       <li class="general_sub2">배열명도 하나의 주소값으로서 상수이기 때문에 변수에 넣어서 사용하는데 이것을 배열포인터변수라 한다.</li>
                       <li class="general_sub2">배열포인터변수 선언</li>
               		        <li id="list" class="general_sub3">[type] (*변수명)[배열 첨자 크기];</li>
                            <li id="list" class="general_sub3">int a[3][3];</li>
                            <li id="list" class="general_sub3">int (*p)[3] = a;</li>
                            <li id="list" class="general_sub3">- 배열포인터변수 p는 3개의 배열요소를 가지고 있는 배열 자체를 나타낸다.</li>
                       <li class="general_sub2">배열은 동일 자료형의 복수개의 모임으로서 각 방을 참조할 때는 첨자를 사용하는데 첫 번째 방을 첨자를 사용해서 참조한 경우와 배열명으로 참조한 경우의 결과는 같다. 허나 실제 값을 대입하거나 연산을 취할 때는 첨자를 사용해야 한다.</li>
					   <li class="general_sub2">위의 이유로서 배열명은 단순히 포인터로서의 주소값 역할과 배열 자체를 나타내는 두 가지의 기능을 동시에 가지고 있다.</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code2">
	#include &lt;stdio.h&gt;
	int main()
	{
		int a[5] = {1, 2, 3, 4, 5};
		printf(“a = %p, &amp;a = &p\n, a, &amp;a);
		printf(“a + 1 = %p\n”, a+1);
		return 0;
	}
			</textarea>
		</div>
					   <li class="general_sub2">2차원, 3차원의 배열에서 구성요소는 여러 파트로 나눌 수 있었는데 그 중 가장 큰 요소가 배열의 첫 번째 요소가 된다.</li>
					   <li class="general_sub2">2차원 배열의 경우는 가장 큰 배열요소가 1차원 배열이기 때문에 배열명이 가리키는 것은 1차원 배열(부분배열)이 된다.</li>
                            <li id="list" class="general_sub3">ex) int a[4][3] = {{1,1,1},{2,2,2},{3,3,3},{4,4,4}};</li>
			                <img src="<?=base_url()?>asset\lib\img\lecture\data_type\pointer\3.PNG" width=580px; height=160px; style="margin-bottom:40px"><br>
                       <li class="general_sub2">배열의 요소를 참조할 때 첨자를 사용하는 경우와 참조연산자를 사용하는 경우의 비교 (2차원 배열)</li>
	                        <li id="list" class="general_sub3">ex) int a[4][3] = {{1,1,1},{2,2,2},{3,3,3},{4,4,4}};</li>
                     	         <li id="list" class="general_sub3" style="text-indent:30px">1) 첨자를 사용하는 경우</li>
                        	     <li id="list" class="general_sub3" style="text-indent:55px">: 보통 사용하는 방법으로 직관적이다.</li>
                   		         <li id="list" class="general_sub3" style="text-indent:55px">a[2][2], a[1][2] ...</li>
                        	     <li id="list" class="general_sub3" style="text-indent:30px">2) 참조연산자를 사용하는 경우</li>
                                 <li id="list" class="general_sub3" style="text-indent:55px">: a[2][2]의 값을 구할 때</li>
                                 <li id="list" class="general_sub3" style="text-indent:55px">*(a + 2)[2]</li>
								    <ul>
                                 <li id="list" class="general_sub3">배열명은 주소값이다. 주소값에 어떤 상수를 더했을 경우에 실제로 연산되는 값은 ((상수 * 자료형의 크기) + 주소값)이다. 여기서 a는 배열의 첫 번째 구성요소인 1차원 배열을 가리키고 있으므로 3행으로 가기 위해서 +2를 계산한다. (a + 2)역시 3행의 1차원 배열 전체를 가리키고 있으므로 3열을 가기 위해서는 3행의 첫 번째 요소의 주소를 참조해야 한다(이것이 *(a + 2))</li>
                                    </ul>
				</ul><br>
                <li id="list" class="general_sub">**함수포인터</li>
                   <ul>
                       <li class="general_sub2">사용자가 만든 함수나 컴파일러가 제공해 주는 함수 모두 사용할 때 함수명을 호출하게 되는데 이는 함수명이 함수의 주소값을 가지고 있기 때문이다.</li>
				       <li class="general_sub2">함수명도 주소값이므로 함수포인터변수에 담아서 활용할 수 있다.</li>
				       <li class="general_sub2">함수포인터변수의 구성은 함수의 형태와 같은데 리턴값, 변수명, 전달인자의 형태와 개수가 이에 해당한다.</li>
				       <li class="general_sub2">함수포인터변수 선언</li>
				           <li id="list" class="general_sub3">[type] (* 변수명) (전달인자의 형태와 개수 명시);</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code3">
	int trans(int a, int b)
	{
		int c;
		c = b;
		b = a;
		a = b;
		return 0;
	}
	int (*func)(int, int);
	func = trans;
			</textarea>
		</div>
				       <li class="general_sub2">함수포인터변수에 들어가는 함수명의 경우 그 함수의 형태만 같으면 된다.</li>
                   </ul><br>
			<li>포인터배열</li>
			    <ul>
			        <li class="general_sub">포인터배열이란 말 그대로 배열의 한 종류이다.</li>
			        <li class="general_sub">배열의 요소가 포인터(주소값)이다.</li>
			        <li class="general_sub">필요한 메모리만큼만 할당이 되므로 메모리의 낭비를 막을 수 있다.</li>
			        <li class="general_sub">포인터배열의 선언</li>
		      	        <li id="list" class="general_sub2">[type] *배열명[첨자 크기];</li>
			            <li id="list" class="general_sub2">char *ch[3] = {“I”, “CAN”, “C”};</li>
			        <img src="<?=base_url()?>asset\lib\img\lecture\data_type\pointer\4.PNG" width=330px; height=200px; style="margin-bottom:40px"><br>
                    <li class="general_sub">위의 예제에서 배열 요소의 주소값에 해당하는 공간은 이미 고정으로 할당이 되어 있기 때문에 공간의 사용에 제약이 있다.</li>
                        <li id="list" class="general_sub2">*ch[1] = “CAN”; (x)</li><br>
			    </ul>
			<li>형태가 없는 포인터 – void 포인터</li>
			    <ul>
				    <li class="general_sub">포인터는 주소값으로서 해당 주소값의 기억공간에 있는 데이터를 읽어 올 때 tpye의 크기만큼 가져온다.</li>
					<li class="general_sub">때때로 이런 형태 정보 없이 사용하는 포인터가 존재하는데 이것을 void 포인터라 한다.</li>
			        <li class="general_sub">void 포인터라고 해도 본질은 같기 때문에 사용할때는 강제형변환을 통해 값을 읽어온다.</li>
					<li class="general_sub">void 포인터의 선언</li>
					    <li id="list" class="general_sub2">void *변수명;</li>
				    <li class="general_sub">void 포인터는 주로 동적할당 시에 사용한다.</li>
			    </ul>
        </ul>
    </span>    
</div>

















