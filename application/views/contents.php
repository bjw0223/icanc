<script>
$(window).scroll(function(){
    var $width = $(".bs-sidebar").css('width');
    var refHeight = $('#referenceDev').height();
    var docScrollTop = $(document).scrollTop();

    if(docScrollTop > 160 + refHeight)
    {
        $(".bs-sidebar").css({
            position: 'fixed',
            top: 80 + 'px',
            width: $width
        });
    }
    else if(docScrollTop <= 170 + refHeight)
    {
        $(".bs-sidebar").css({
            position: 'relative',
            top:'auto'
        });
    }
});
</script>
<div class="container bs-docs-container" style="">
<div class="row"> 

<div id="tutorial_contents" class="col-lg-3" >
    <div class="bs-sidebar">
       <ul class="nav bs-sidebar"> 
            <li class="">
                <a class="nav-title" href="#"  load-href="<?=base_url();?>index.php/lecture/show/program/program">프로그램</a>
                <ul class="nav">
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/program/understanding">이해</a></li>
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/program/constitute">구성</a></li>
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/program/execution_process">실행과정</a></li>
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/program/reference">참고사항</a></li>
                </ul>
            </li>
            <li class="">
                <a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/constant/constant">상수</a>
            </li>  
            <li class="">
                <a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/variable/variable">변수</a>
            </li>
            <li class="">
                <a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/storage_class/storage_class">기억클래스</a>
            </li>
            <li class="">
                <a class="nav-title" href="#" load-href="<?=base_url();?>index.php/lecture/show/data_type/integer">자료형</a>
                <ul class="nav">
                    <li class="">
					<a class="nav-subCategory" href="#" load-href="<?=base_url();?>index.php/lecture/show/data_type/integer">기본</a>
						<ul class="nav" style="margin-left:10px">
							 <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/data_type/integer">정수</a></li>
							 <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/data_type/real_number">실수</a></li>
							 <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/data_type/character">문자</a></li>
						</ul>
					</li>
                    <li class="">
						<a class="nav-subCategory" href="#" load-href="<?=base_url();?>index.php/lecture/show/data_type/array">응용</a>
						<ul class="nav" style="margin-left:10px">
							 <li><a class="nav-subtitle" load-href="<?=base_url();?>index.php/lecture/show/data_type/array">배열</a></li>
							 <li><a class="nav-subtitle" load-href="<?=base_url();?>index.php/lecture/show/data_type/pointer">포인터</a></li>
							 <li><a class="nav-subtitle" load-href="<?=base_url();?>index.php/lecture/show/data_type/struct">구조체</a></li>
							 <li><a class="nav-subtitle" load-href="<?=base_url();?>index.php/lecture/show/data_type/union">공용체</a></li>
							 <li><a class="nav-subtitle" load-href="<?=base_url();?>index.php/lecture/show/data_type/enum">열거형</a></li>
						</ul>
					</li>
                </ul>
            </li>
            <li class="">
                <a class="nav-title" href="#" load-href="<?=base_url();?>index.php/lecture/show/control_statement/selection">제어문</a>
                <ul class="nav">
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/control_statement/selection">선택</a></li>
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/control_statement/repetition">반복</a></li>
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/control_statement/branch_statement">분기</a></li>
                </ul>
            </li>  
            <li class="">
                <a class="nav-title" href="#" load-href="<?=base_url();?>index.php/lecture/show/operator/operator">연산자</a>
            </li>  
            <li class="">
                <a class="nav-title" href="#" load-href="<?=base_url();?>index.php/lecture/show/function/function">함수</a>
                <ul class="nav">
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/function/printf">PRINTF</a></li>
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/function/scanf">SCANF</a></li>
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/function/dynamic_allocation">동적할당</a></li>
                </ul>
            </li>  
            <li class="">
                <a class="nav-title" href="#" load-href="<?=base_url();?>index.php/lecture/show/fileio/fileio">파일 입출력</a>
            <!--    <ul class="nav">
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/file/stream">스트림</a></li>
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/file/open">개방</a></li>
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/file/file_input">입력</a></li>
                    <li><a class="nav-subtitle" href="#" load-href="<?=base_url();?>index.php/lecture/show/file/file_output">출력</a></li>
                </ul>  --!>
            </li>  











	</ul>
  <!--        <ul class="nav">
                    <li><a load-href="<?=base_url();?>index.php/lecture/show/program/understanding">이해</a></li>
                    <li><a load-href="<?=base_url();?>index.php/lecture/show/program/constitute">구성</a></li>
                    <li><a load-href="<?=base_url();?>index.php/lecture/show/program/execution_process">실행과정</a></li>
                    <li><a load-href="<?=base_url();?>index.php/lecture/show/program/reference">참고사항</a></li>

		   
                    <li class="">
			<a load-href="<?=base_url();?>index.php/lecture/show/program/reference">사고뭉치</a>

			<ul class="nav">
			    <li><a load-href="<?=base_url();?>index.php/lecture/show/program/understanding">a</a></li>
			    <li><a load-href="<?=base_url();?>index.php/lecture/show/program/constitute">b</a></li>
			    <li><a load-href="<?=base_url();?>index.php/lecture/show/program/execution_process">c</a></li>
			    <li><a load-href="<?=base_url();?>index.php/lecture/show/program/reference">d</a></li>
			</ul>

		   </li>

                </ul> -->
	   
    <!-- <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2">
                진법   
                </a>
            </div>
            <div id="collapse_2" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li class="in"><a class="contents_list" href="#" data-in="system/decimal">10진법</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="system/octal">8진법</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="system/binary">2진법</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="system/hexadecimal">16진법</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_3">
                상수 
                </a>
            </div>
            <div id="collapse_3" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-side">
                        <li class="in"><a class="contents_list" href="#" data-in="literal/numeric">숫자</a></li> <li class="in"><a class="contents_list" href="#" data-in="literal/character">문자</a></li> <li class="in"><a class="contents_list" href="#" data-in="literal/string">문자열</a></li> <li class="in"><a class="contents_list" href="#" data-in="literal/method_of_saving">저장방식</a></li> </ul> </div> </div> </div> <div class="accordion-group"> <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_4"> 변수 </a> </div> <div id="collapse_4" class="accordion-body collapse"> <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li class="in"><a class="contents_list" href="#" data-in="variable/auto">Auto</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="variable/static">Static</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="variable/extern">Extern</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_5">
                자료형 
                </a>
            </div>
            <div id="collapse_5" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li class="nav-header">Basic</li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/int">int(정수)</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/double">double(실수)</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/char">char(문자)</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">Array</li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/numeric">숫자</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/character">문자</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/two_dimensional">2차원</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">Pointer</li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/pointer_variable">포인터변수</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/relation_to_array">배열과의 관계</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/pointer_array">포인터배열</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/multiplePointer">다중포인터</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/arrayPointer">배열포인터</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/functionPointer">함수포인터</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/voidPointer">void포인터</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">Struct</li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/form">형태</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/structureArray">구조체배열</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/structurePointer">구조체포인터</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/union">공용체</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="data_type/enumeration">열거형</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_6">
                제어문 
                </a>
            </div>
            <div id="collapse_6" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li class="nav-header">선택</li>
                        <li class="in"><a class="contents_list" href="#" data-in="control_statement/if">if</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="control_statement/switch_case">switch_case</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">반복</li>
                        <li class="in"><a class="contents_list" href="#" data-in="control_statement/do_while">do_while</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="control_statement/while">while</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="control_statement/for">for</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="control_statement/multiple">다중</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="control_statement/infinite">무한</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">분기</li>
                        <li class="in"><a class="contents_list" href="#" data-in="control_statement/break">break</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="control_statement/continue">continue</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_7">
                연산자 
                </a>
            </div>
            <div id="collapse_7" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li class="nav-header">산술</li>
                        <li class="in"><a class="contents_list" href="#" data-in="operator/four_fundamental">사칙</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="operator/remainder">나머지</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="operator/increase_and_decrease">증감</a></li>
                        <li class="divider"></li>
                        <li class="in"><a class="contents_list" href="#" data-in="operator/relation_and_logic">관계,논리</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="operator/bit">비트</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="operator/memberReference">멤버참조</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="operator/sizeof">sizeof</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="operator/priority">우선순위</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_8">
                형변환 
                </a>
            </div>
            <div id="collapse_8" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li class="in"><a class="contents_list" href="#" data-in="type_conversion/automatic">자동</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="type_conversion/forced">강제</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_9">
                함수 
                </a>
            </div>
            <div id="collapse_9" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li class="in"><a class="contents_list" href="#" data-in="function/declaration">선언</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/definition">정의</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/call">호출</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/various_form">다양한 형태</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/array_handling">배열 처리</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/strcpy">strcpy</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">동적할당</li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/malloc">malloc</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/calloc">calloc</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/realloc">realloc</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/free">free</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">입력</li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/scanf">scanf</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/getchar">getchar</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/gets">gets</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">출력</li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/printf">printf</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/putchar">putchar</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="function/puts">puts</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_10">
                파일 
                </a>
            </div>
            <div id="collapse_10" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li class="in"><a class="contents_list" href="#" data-in="file/stream">스트림</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="file/fopen">fopen</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">입력함수</li>
                        <li class="in"><a class="contents_list" href="#" data-in="file/fgetc">fgetc</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="file/fgets">fgets</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="file/fscanf">fscanf</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">출력함수</li>
                        <li class="in"><a class="contents_list" href="#" data-in="file/fputc">fputc</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="file/fputs">fputs</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="file/fprintf">fprintf</a></li>
                    </ul>
                </div>
            </div>
        </div>
 기본형식
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_11">
                형변환 
                </a>
            </div>
            <div id="collapse_11" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li class="nav-header">기본</li>
                        <li class="divider"></li>
                        <li class="in"><a class="contents_list" href="#" data-in="">자동</a></li>
                        <li class="in"><a class="contents_list" href="#" data-in="">강제</a></li>
                    </ul>
                </div>
            </div>
        </div>
-->
    </div>
</div>


