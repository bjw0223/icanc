-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 13-08-29 17:14 
-- 서버 버전: 5.5.32
-- PHP 버전: 5.3.10-1ubuntu3.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `icanc`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `coding_quiz`
--

CREATE TABLE IF NOT EXISTS `coding_quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '문제번호',
  `question` text NOT NULL COMMENT '문제',
  `categoryNo` int(11) NOT NULL,
  `questionNo` int(11) NOT NULL,
  `context` text NOT NULL COMMENT '내용',
  `answer` text NOT NULL COMMENT '정답',
  `hint` text NOT NULL COMMENT '힌트',
  `description` text NOT NULL COMMENT '정답 설명',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 테이블의 덤프 데이터 `coding_quiz`
--

INSERT INTO `coding_quiz` (`id`, `question`, `categoryNo`, `questionNo`, `context`, `answer`, `hint`, `description`) VALUES
(1, 'I CAN C에 오신걸 환영합니다\r\n<br/>\r\n', 1, 1, 'C는 강력하며 이식성이 좋은 컴파일러 기반의 언어로 범용 프로그래밍에 적합하게 설계되어 있습니다.\r\n<br/>\r\n<br/>\r\n<b>고급언어</b> : 컴퓨터가 알아듣는 기계적인 언어가 아닌 사람이 쉽게 이해할 수 있게 되어있습니다 또한 저급언어로 기술이 가능하기 때문에 더욱 강력합니다.\r\n<br/>\r\n<br/>\r\n<b>구조적 프로그래밍</b> : 큰 프로그램을 단계적으로 분할하여 작성하는 하향식 프로그래밍 방법입니다.\r\n<br/>\r\n<br/>\r\n<b>이식성</b> : 다양한 시스템에서 실행되고 다양한 시스템의 소프트웨어 개발용으로 사용할 수 있는 언어입니다.\r\n<br/>\r\n<br/>\r\nI CAN C에서는 모든 사용자가 C에 대한 모든 지식을 배우실 수 있습니다.', '', 'C를 배우실 준비가 되셨습니까?', ''),
(2, 'printf()를 사용하여 Welcome to I CAN C를 출력하라', 2, 1, '<strong>prinft()</strong>는 화면에 결과를 출력해주는 표준출력함수이다.\r\n사용자가 형식을 미리 지정하여 원하는 값을 넣어 출력할 수 있다.\r\n값이 들어가는 형식을 ''서식'' 이라고 하며 들어가는 값에 따라서 알맞는 서식을 사용해야 한다.<br/><br/> \r\n<blockquote>\r\n<small>출력 형식</small>\r\n<p> printf("Color %s","RED");<br/>\r\nprintf("Number %d",1004);<br/>\r\nprintf("Float %f",1004.1004);<br/>\r\nprintf("Char %c",''c'');</p>\r\n</blockquote>', 'Welcome to I CAN C', '<code> #include<stdio.h>\r\nint main()\r\n{\r\n    printf("Hello World");\r\n\r\n    return 0;\r\n} </code>', ''),
(3, '출력 : ''정답은 i_int=1004 입니다''', 3, 1, '변수', '정답은 i_int=1004 입니다', '변수는 값이 항상 변하는 수이다.', '결과값에서 사용하는 정수는 a라는 변수이다. 하지만 문제에는 i_int라는 변수가 존재하지 않기 때문에 사용전에 선언을 하고 값을 1004로 대입 해야 출력시 1004라는 값이 나오게 된다.'),
(4, 'a,b,c의 평균을 구하여 avg의 대입하는 식을 작성하세요', 3, 2, 'Operation', 'a,b,c의 평균은 1004입니다.', '연산자의 결합을 활용하여 세수의 값들 더하고 그 개수만큼 나누면 된다.', '세수의 합이 3012가 되어야 3으로 나누었을때 1004가 된다.'),
(5, 'if문을 활용하여 i_int의 값이 1004일때 Yes를 출력하는 문장(i_int값 대입불가)', 3, 3, 'Conditional Sentence', 'Yes', 'hint', 'description'),
(6, 'weigth 90이면 고도비만, 70이면 정상, 50이면 왜소를 출력하는 프로그램', 3, 4, 'Switch()요', '정상', 'hint', 'description'),
(7, '0123456789가 출력 되도록 for문을 완성하세요', 4, 1, 'for()', '0123456789', 'hint', 'descrption'),
(8, '9876543210이 출력되게 코드를 완성하시오', 4, 2, 'while()', '9876543210', 'hint', 'description');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
