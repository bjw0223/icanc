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
              <li>break 문</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code">
	/* 예 제 */
	#include &lt;stdio.h&gt;
	int main()
	{
		int i;
		for(i=0; i&lt;10; i++)
		{
			printf("%d\n", i);
			if(i == 8)
			{
				break;
			}
		}
		return 0;
	}
			</textarea>
		</div>
                  <ul>
                  <li class="general_sub">조건식의 결과에 상관 없이 반복문을 빠져 나갈 때 사용한다.</li>
                  <li class="general_sub">여러 개의 반복문이 중첩 되어 있을 때 가장 가까운 반복문 블록 하나를 탈출한다.</li>
                  <li class="general_sub2" id="list">* if 구문 안에서 사용했을 경우 if 문의 블록을 탈출하는 것이 아닌 가까운 반복문을 탈출한다.</li>
                  </ul><br>
              <li>continue 문</li>
		<div class="codearea">
			<textarea class="code" name="code" id="code2">
	/* 예 제 */
	#include &lt;stdio.h&gt;
	int main()
	{
		int i;
		for(i=0; i&lt;10; i++)
		{
			printf("%d\n", i);
			if(i == 8)
			{
				coninue;
			}
		}
		return 0;
	}
			</textarea>
		</div>
                  <ul>
                  <li class="general_sub">반복문에서 남은 부분을 실행하지 않고 반복문의 조건식을 검사하는 부분으로 이동시킨다.</li>
                  <li class="general_sub">특정 부분을 수행하지 않고 넘길 때 사용한다.</li>
                  <li class="general_sub">switch 문에서는 사용하지 않는다.</li>
                  </ul><br>
              <li>goto 문</li>
              <ul>
                  <li class="general_sub">goto 문을 사용하지 않고도 개발이 가능하다는 것이 밝혀졌기 때문에 절대 쓰지 않는다.</li>
              </ul><br>
              <li>return 문</li>
              <ul>
                  <li class="general_sub">함수의 실행 결과를 호출한 함수에게 전달하고 제어를 넘긴다.</li>
                  <li class="general_sub">return; 처럼 사용하면 특정한 값의 전달 없이 제어만 넘긴다.</li>
                  <li class="general_sub">함수 실행 중 강제로 종료하기 위해서도 사용한다.</li>
              </ul>


       </ul>
    </span>
</div>
