<div>
5. C프로그램의 실행흐름
C program은 함수를 기본으로 한 집합체

1) main 함수는 다른 함수들의 기능을 묶어주는 역할
Start up code는 main 함수만 부른다(위치에 상관없다)
2) 함수의 Type = Return 값의 Type
3) main 함수 끝에서 return 하고 Start up code로 돌아간다.

(1) 1 line : C 언어 주석문, 프로그램의 이해를 돕기 위한 해설,
컴파일 대상에서 제외
/* .... */ -&gt; 여러 줄 주석
//
-&gt; 한 줄 주석
(2) 2 line : #include <stdio.h>
ž <stdio.h>의 h는 header file을 의미하며, 표준 입출력 함수의 선언부가
header file 내에 존재 한다는 뜻 (Standard input/output)
ž #include는 선행처리기 명령(Preprocessor 지시자)이다.
cf) 문장 뒤에 ;(세미콜론)이 붙으면 컴파일러가, 문장 앞에 #이 붙으면
전처리기가 처리한다.
(3) 3 line : void print_number(int);
ž print_number() 함수의 선언부분으로서 컴파일러에게 함수에 대한
기본 정보를 제공하며 선언부분 미 존재 시 함수호출부에서 에러 발생
(호출 전에만 선언하면 되므로 위치는 상관없다)
ž 괄호 안은 함수의 전달인자(Parameter)로서 이 함수의 전달인자
type은 int 형이다.
(4) 4 line : int main()
ž main 함수의 시작 부분
(5) 5 line : {
ž ( ) : 소괄호, 함수를 나타내기 위해 사용되며 수식의 우선순위를 변경
할 때도 사용된다. 소괄호의 우선순위가 최고
ž < > : 헤더파일을 포함 시 사용(include)
ž { } : 중괄호, Block의 시작과 끝 표시, 또는 응용 자료형의 데이터
초기화 시 사용된다. ex) int ary[5] = {1,2,3,4,5};
ž [ ] : 대괄호 : 배열 선언 및 배열 요소 지정에 사용된다.
ex) int a[5];
(6) 6~7 line : int num;
ž num 이라는 이름의 int형(정수형) 변수 생성
ž num = 1; : 생성된 변수 num에 숫자상수 1을 대입한다.
ž int num = 1; 의 형태처럼 한 줄로 쓸 수 있다.
(7) 8, 10 line : print_number(num);
ž print_number() 함수의 호출 부분
(8) 13~17 line : print_number(int n) {...}
ž print_number 함수 정의부
(9) 15 line : printf(“정수값은 %d입니다.\n”, n);
ž printf() 는 표준 출력함수로서 괄호 안에 지정되어 있는 출력 형식대로
화면(모니터)에 출력한다.
ž %d : 형식변환문자 -&gt; 2진수로 저장이 되어 있기 때문
ž “\n” : 기능문자 (개행 기능)
(10) 11, 16 line : return 문
ž return 0; -&gt; 함수 수행을 모두 끝내고 리턴 할 때 0 값을 갖고 제어를
되돌려 줌
ž return; -&gt; 함수 수행을 모두 끝내고 리턴 할 때 리턴 값없이 제어만
돌아 감
* 돌아오는 값을 받는 OS가 리눅스, 유닉스 등
cf) C 언어 block의 종류
1. 함수의 block (몸체)
2. 명령어 block
ex) if (조건식)
{
.....
}
else
{
.....
}
3. Sub block (이름 없는 block)
ex) int main()
{
{
....
}
}







</div>
