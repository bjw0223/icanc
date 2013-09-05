<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
	       <li>서로 다른 자료형들을 모아서 새롭게 자료형을 정의한다.</li><br>
		   <li>모여진 데이터들은 서로 관련이 있으므로 관리가 용이하다.</li><br>
		   <li>복잡한 데이터들을 표현할 때 사용한다.</li><br>
		   <li>운영체제 같이 하나의 큰 프로그램에서 많이 사용된다.</li><br>
		   <li>특정 오브젝트를 표현할 때 사용된다.</li><br>
		   <li>정 의</li>
<pre class="brush:cpp">
struct 구조체명{
   변수 선언;
   기타 자료형 선언;
   구조체 선언;
       .
       .
}
</pre>
               <ul>
			       <li class="general_sub">구조체를 정의할 때는 내부에 초기값을 설정할 수 없다.</li>
					   <li id="list" class="general_sub">: 단순히 정의만 내린 것이기 때문이다.</li>
				   <li class="general_sub">구조체 정의 끝 부분에 세미콜론을 꼭 써주어야 한다.</li>
				   <li class="general_sub">구조체 역시 다른 자료형과 마찬가지로 연속적인 기억공간에 할당된다.</li>
               </ul><br>
		   <li>선 언</li>
               <ul>
			       <li class="general_sub">struct 구조체명 구조체변수명;</li>
				   <li class="general_sub">대부분 구조체의 선언은 전역변수 같이 함수 밖에서 선언한다.</li>
				   <li class="general_sub">정의에서는 초기화가 불가능하지만 선언에서는 가능하다.</li>
<pre style="margin-bottom:20px" class="brush:cpp">
struct people{
    int age;
    char name[10];
};
struct people p1 = {13, “student”};
p1.age = 20; // 사용시 멤버참조 연산자를 사용한다
                (여러 변수가 존재하기 때문에)
</pre>
				   <li class="general_sub">정의와 선언을 동시에 할 수 있으며 이때는 초기화도 가능하다.</li>
<pre style="margin-bottom:20px" class="brush:cpp">
struct people{
    int age;
    char name[10]
}p1 = {10, “student”};
</pre>
                   <li class="general_sub">구조체는 형식 상 선언 시 길이가 길기 때문에 typedef를 사용하여 재정의 해주면 사용 시 용이하다.</li>
                       <ul>
					       <li class="general_sub2">형식 : typedef (기존 자료형) (새로운 자료형);</li>
                           <li class="general_sub2">일반 구조체 선언 : struct people p1;</li>
                           <li class="general_sub2">typedef 재정의 후 선언 : typedef struct people People;</li>
						   <li id="list" class="general_sub2" style="text-indent:195px">People P1;</li>
                           <li class="general_sub2">구조체 뿐 아니라 기존의 다른 자료형들도 재정의가 가능하다.</li>
                           <li class="general_sub2">구조체를 정의하는 과정에서 typedef를 이용할 수 있다.</li>
<pre style="margin-bottom:20px" class="brush:cpp">
typedef people{
    int age;
    char name[10];
}People;
People p1;
</pre>
                       </ul>
               </ul>
		   <li>구조체도 하나의 자료형이므로 메모리의 공간을 차지하며 주소값을 가지고 있다. 즉, 포인터가 존재하며 구조체를 배열로 만들어 사용할 수도 있다.</li>
               <ul>
			       <li class="general_sub">구조체 포인터</li>
<pre style="margin-bottom:20px" class="brush:cpp">
typedef people{
	int age;
	char name[10];
}People;
People p1;
People *p_p1 = &p1;
</pre>
                   <span class="general_sub">구조체 포인터로 값을 접근할 때는 두가지 방법이 존재하는데 하나는 포인터의 주소를 참조한 후 멤버참조 연산자를 사용하는 것과 간접멤버참조 연산자를 사용하는 방법이다.</span>
<pre style="margin-bottom:20px" class="brush:cpp">
(*p_p1).age = 20;
printf(“%d\n”, p_p1-&gt;age);
</pre>
			       <li class="general_sub">구조체 배열</li>
<pre class="brush:cpp">
typedef people{
	int age;
	char name[10];
}People;
People p[2];
p[1].age = 20;
</pre>
                   <span class="general_sub">배열의 요소 하나하나가 구조체란 것만 빼면 일반 배열과 성격이 동일하다. 구조체 특성 상 여러 변수가 같이 있으므로 초기화 시 주의한다.</span>
               </ul>


       </ul>
    </span>  
</div>


