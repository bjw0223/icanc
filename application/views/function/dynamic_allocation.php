<script>
	var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
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
           <li>프로그램을 작성하는 과정에서 선언한 변수나 배열은 미리 예측 가능한 기억공간이다.</li><br>
	       <li>하드코딩으로 선언된 변수나 배열 등의 기억공간 할당을 정적할당이라 한다.</li><br>
	       <li>실제로 프로그램 실행 중 외부로부터의 데이터의 입력이나 예상치 못한 기억공간의 필요가 발생하게 된다. 이를 해결하기 위해 동적할당이라는 방법을 사용한다.</li><br>
	       <li>동적할당을 위해서는 함수를 이용한다.</li>
	       <li id="list">1. malloc 함수</li>
		      <ul>
			      <li class="general_sub">함수원형 : void *malloc(unsigned int);</li>
	              <li id="list" class="general_sub">ex) double *db; db = (double *)malloc(8);</li>
	              <li class="general_sub">stdlib.h 헤더파일에 함수가 선언되어 있다.</li>
	              <li class="general_usb">전달인자는 할당 받을 크기의 바이트 수이다.</li>
	              <li class="general_sub">malloc 함수의 리턴값은 void형 포인터인데 이는 함수가 전달인자로 받은 크기의 공간을 할당해준 후 시작 주소값을 리턴해 주는데 이 주소값의 형태를 알 수 없기 때문에 void형인 것이다.</li>
	              <li class="general_sub">실제 사용 시에는 void형을 쓸 수 없으므로 형변환을 꼭 해야 한다.</li>
	              <li class="general_sub">리턴값인 포인터도 그대로 사용하기에는 불편함이 따르므로 포인터변수에 담아 사용한다.</li>
		      </ul><br>
	       <li id="list">2. calloc 함수</li>
		      <ul>
	              <li class="general_sub">함수원형 : void *calloc(unsigned int, unsigned int);</li>
	              <li id="list" class="general_sub">ex) double *db; db = (double *)calloc(8, sizeof(double));</li>
	              <li class="general_sub">stdlib.h 헤더파일에 함수가 선언되어 있다.</li>
	              <li class="general_sub">전달인자의 첫 번째는 개수이며 두 번째는 할당 받을 크기의 바이트 수이다.</li>
	              <li class="general_sub">calloc 함수의 리턴값은 void형 포인터인데 이는 함수가 전달인자로 받은 크기의 (공간 x 개수)을 할당해준 후 시작 주소값을 리턴해 주는데 이 주소값의 형태를 알 수 없기 때문에 void형인 것이다.</li>
	              <li class="general_sub">실제 사용 시에는 void형을 쓸 수 없으므로 형변환을 꼭 해야 한다.</li>
	              <li class="general_sub">리턴값인 포인터도 그대로 사용하기에는 불편함이 따르므로 포인터변수에 담아 사용한다.</li>
	              <li class="general_sub">할당 받은 기억공간을 모두 0으로 초기화 해 준다.</li>
		      </ul><br>
	       <li id="list">3. realloc 함수</li>
		      <ul>
                  <li class="general_sub">원형 : void *realloc (void *, unsigned int);</li>
			      <li id="list" class="general_sub">ex) double *db; db = (double *)calloc(8, sizeof(double));</li>
			      <li id="list" class="general_sub" style="text-indent:36px">db = (double *)realloc(db, 15*sizeof(double));</li>
			      <li class="general_sub">stdlib.h 헤더파일에 함수가 선언되어 있다.</li>
			      <li class="general_sub">이미 동적으로 할당 받은 기억공간을 재조절하여 다시 할당 받는다.</li>
			      <li class="general_sub">전달인자의 첫 번째는 이미 할당 받은 기억공간의 포인터, 두 번째는 새로 할당 받고자 하는 기억공간의 크기이다.</li>
			      <li class="general_sub">realloc 함수를 사용하여 받은 기억공간은 이전에 할당 받은 위치와 같고 만약 새로 받은 공간이 이전보다 작다면 나머지는 잘린다.</li>
			      <li class="general_sub">리턴값은 어떤 용도로 사용될지 알 수 없으므로 void 형 포인터로 리턴하기 때문에 사용 시에는 상황에 맞게 형변환 해주어야 한다.</li><br>
		      </ul>
	       <li>동적할당은 메모리(RAM)에서 heap 영역에 저장된다. 그러므로 프로그램 종료 시까지 사라지지 않는데 이는 메모리의 사용효율을 떨어뜨리게 된다(메모리는 한정되어 있기 때문에) 그렇기 때문에 동적할당으로 할당 받은 기억공간은 사용자가 꼭 반납해 주어야 한다. 반납을 위해서도 역시 함수를 이용한다.</li>
		      <ul>
                  <li class="general_sub">함수원형 : void free(void *);</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code">
	#include &lt;stdio.h&gt;
	int main()
	{
		int *p;
		p = (int *)malloc(sizeof(int));
			 .
			 .
		free(p);
		return 0;
	}
			</textarea>
		</div>
                  <li class="general_sub">동적할당 시 리턴값이 void형 포인터인 이유와 같은 맥락으로 free() 함수의 전달인자도 void형 포인터이다(모든 형이 반환되어야 하므로)</li>
		      </ul><br>
	       <li>동적할당이 실패할 경우 리턴값은 널 포인터이다.</li>

       </ul>
    </span>    
</div>
