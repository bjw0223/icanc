<div class="col-lg-9 tutorial_desc">
    <span class="general">    
       <ul>
           <li>연속된 기억공간에 할당 된다.</li><br>
           <li>첨자(subscript, indext)</li>
               <ul>
                   <li class="general_sub">선언문 : int b[5] = {1, 3, 5, 7, 9}; --&gt; 방 번호는 0부터 시작</li>
                   <li class="general_sub" id="list">0~4번 방은 존재, 5번 방은 물리적으로는 존재 하나 논리적으로는 존재 하지 않는다.</li>
                   <img src="<?=base_url()?>asset\lib\img\tutorial\data_type\array\1.PNG" width=550px; height=350px; style="margin-bottom:10px"><br>
                   <li class="general_sub">실행문 : b[2] = 15;</li>
               </ul><br>
           <li class="red">배열명은 곧 그 배열의 시작 주소 상수</li>
              <ul>
                  <li class="general_sub">ex) int b[5] = {1, 3, 5, 7, 9};</li>
                  <li class="general_sub" id="list" style="text-indent:30px; margin-bottom:10px">printf("%u\n", b); = printf("%u\n", &amp;b);</li>
                  <li class="general_sub">cf) 쓰레기 값은 전달 인자로 보내면 안된다.</li> 
                  <li class="general_sub" id="list" style="text-indent:30px">ex) int a; &nbsp;&nbsp; --&gt; 초기화 필수</li>
                  <li class="general_sub" id="list" style="text-indent:60px">printf("%u\n", a); &nbsp;&nbsp; --&gt; 런타임 에러 발생</li>
              </ul>




       </ul>
    </span>    
</div>
