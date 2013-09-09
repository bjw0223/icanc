<div class="col-lg-9 col-sm-9 tutorial_desc">
    <span class="general">    
       <ul>
	       <li>크기가 큰 데이터는 프로그램에서 내부적으로 관리하기에 한계가 있으므로 외부에 저장한다.<br>(메모리의 양은 한정되어 있기 때문에 한번에 올리는 것도 제한이 있다)</li><br>
	       <li>특정 파일들은 필요시만 불러와서 사용하는 것이 좋다.<br>(미디어나 이미지 등의 멀티미디어 파일)</li><br>
	       <li>크기에 상관 없이 영구적으로 보존되어야 하는 중요한 파일들은 외부에 저장해야 한다.</li><br>
	       <li>파일에 접근하기 위해서는 C 라이브러리가 제공하는 함수를 사용하거나 운영체제에서 제공해 주는 API 함수를 사용한다.</li><br>
	       <li>기본적인 개념으로서 파일은 텍스트 파일 등의 문서화된 이미지이지만<br>프로그램 내에서는 입출력을 하는 모든 대상을 의미한다.</li><br>
	       <li>서로 상이한 기기들까지 하나의 ‘파일’이란 개념으로 묶어서 생각할 수 있는 이유는, 이들이 직접적인 입출력은 하지 않고 중간에 스트림(stream)이라는 매개체를 통하기 때문이다.</li><br>
	       <li>원하는 기기나 파일에 스트림을 연결하여 입출력을 수행한다.</li><br>
	       <li>스트림을 사용하면 기기들간의 속도 차이를 보완할 수 있으며 일관된 <br>작업을 가능하게 한다.</li><br>
	       <li>스트림은 내부에 버퍼를 가지고 있어서 실시간으로 입출력을 수행하지 <br>않고 일정 양을 모아서 한 번에 입출력을 수행한다.</li><br>
	       <li>파일 입출력 순서</li>
	       <li id="list">: 파일 개방(open) --&gt; 접근(access) --&gt; 닫기(close)</li>
		       <ul>
			       <li class="general_sub">파일 개방(open)</li>
				       <ul>
					       <li class="general_sub">입출력을 수행하기 위해서 기기와 스트림을 연결시켜야 하는데 이 작업을 파일 개방이라 한다. 개방을 위해서는 fopen 이라는 함수를 사용한다.</li>
                           <li class="general_sub">원형 : FILE *fopen(const char *filename, const char mode);</li>
                           <li class="general_sub">첫 번째 전달인자는 대상 파일의 이름으로서 현재 작업 디렉토리에 파일이 존재하면 이름만, 다른 위치에 있다면 경로를 모두 적어주어야 한다.</li>
                           <li class="general_sub">두 번째 전달인자는 파일 접근 형태로서 다음과 같은 모드가 있다.</li>
                           <img src="<?=base_url()?>asset\lib\img\lecture\fileio\1.PNG" width=550px; height=230px;><br>
                           <li class="general_sub">파일 개방에 성공하여 지정된 파일에 액세스하면 파일에 대한 정보를 가진 주소값을 리턴하는데 이를 파일포인터라 한다.</li>
                           <li class="general_sub">fopen 함수의 원형에서 리턴값의 type이 FILE 인데 이것이 파일에 대한 정보를 가지고 있는 구조체이다.</li>
                           <li class="general_sub">파일은 개방이 된 후 안의 데이터들을 가져오기 위해서 위치지시자 등과 같은 정보가 필요한데 이런 정보들이 모두 FILE 구조체안에 있다.</li>
				       </ul><br>
			       <li class="general_sub">파일 접근(access)</li>
                   <li id="list" class="general_sub">&lt;파일 입력(input)&gt;</li>
				       <ul>
                           <li class="general_sub">파일 접근 후 입력을 위해서 fgetc 같은 함수를 이용한다.</li>
	                       <li class="general_sub">원형 : int fgetc (FILE *fp);</li>
	                       <li class="general_sub">전달인자인 파일포인터가 가리키는 파일에서 한 바이트를 읽어 리턴하는데 리턴값의 형태는 int 형이다.</li>
	                       <li class="general_sub">함수가 리턴한 값을 버퍼에 저장하여 함수 호출이 발생될 때마다 가져와 읽는다.</li>
	                       <li class="general_sub">버퍼의 데이터는 가져온다고 해서 없어지지 않는다.</li>
	                       <li class="general_sub">FILE 구조체에 파일에 대한 여러 정보가 있는데 그 중 위치지시자라는 것을 이용하여 순차적으로 파일의 데이터를 가져올 수 있게 한다.</li>
				       </ul>
	               <li id="list" class="general_sub">&lt;파일 출력(output)&gt;</li>
				       <ul>
                           <li class="general_sub">출력을 위해서는 fputc 같은 함수를 이용한다.</li>
	                       <li class="general_sub">원형 : int fputc(int ch, FILE *fp);</li>
	                       <li class="general_sub">첫 번째 전달인자가 파일에 출력할 대상 문자이며, 두 번째 <br>전달인자인 파일포인터와 연결되어있는 파일에 문자를 출력한다.</li>
				       </ul>
	                       <span class="red" style="font-size:16px">*** 그 밖의 파일 입출력 함수들은 reference 참조</span><br><br>
			       <li class="general_sub">파일 닫기(close)</li>
				       <ul>
					       <li class="general_sub">파일을 성공적으로 개방 후 입출력을 끝내면 파일을 닫아야 한다.</li>
	                       <li class="general_sub">파일을 닫기 위해서는 fclose를 사용한다.</li>
	                       <li class="general_sub">원형 : int fclose (FILE *fp);</li>
	                       <li class="general_sub">전달인자는 닫을 대상 파일의 파일포인터이며 성공적으로 닫았을 경우에는 0을 리턴, 실패 시 –1을 리턴한다.</li>
                       </ul>
		       </ul><br>
	       <li>스트림 버퍼 비우기</li>
		       <ul>
			       <li class="general_sub">다양한 입출력 함수들은 버퍼를 공유하기 때문에 가끔은 의도치 않게 <br>입출력이 수행되는 경우가 있다.</li>
	               <li class="general_sub">이를 방지하기 위해서 스트림의 버퍼를 비워주는데 이 때 사용하는 <br>함수가 fflush이다.</li>
	               <li class="general_sub">원형 : int fflush(FILE *fp);</li>
				   <li class="general_sub">전달인자인 파일포인터와 연결된 파일의 스트림 버퍼를 비워준다.</li>
	               <li class="general_sub">성공적으로 비우면 리턴값으로 0을, 실패 시 –1을 리턴한다.</li>
			   </ul>
       </ul>
    </span>    
</div>



