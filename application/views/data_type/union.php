<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
	       <li>정 의</li>
<pre class="brush:cpp">
union 공용체명{
    변수 선언;
    기타 자료형 변수 선언;
        .
        .
};
</pre>
<pre class="brush:cpp">
union unity{
    int num;
    char ary[10];
};
</pre><br>
	       <li>선 언</li>
              <li id="list" class="general_sub">[union] [공용체명] [공용체변수명];</li>
              <li id="list" class="general_sub">union unity u1;</li>
                  <span class="general_sub2">대부분의 변수는 선언과 동시에 초기화가 가능하고 그것이 복수여도 상관이 없었지만 공용체는 한 시점에 하나의 자료형의 데이터만 저장되어 있으므로 초기화도 첫 번째 멤버만 가능하다.</span><br><br>
           <li>공용체의 각 멤버 접근 방법도 구조체와 동일하다.</li>
              <li id="list" class="general_sub">u1.num = 1;</li><br>
           <li>공용체의 크기는 멤버 중 가장 큰 변수의 크기를 따라간다(여러 멤버가 있으므로 크기가 가장 큰 멤버도 사용할 수 있도록 하기 위해)</li><br>
	       <li>공용체는 여러 멤버가 존재하는 것은 맞지만 결국 사용하고자 할 때는 단 하나의 데이터만 제대로 기억하고 있다. 때문에 데이터 사용의 부정합성등을 방지하기 위해 권장하지 않는 자료형이다.</li>

		   
       </ul>
    </span>    
</div>
