-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 13-08-31 11:50 
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
-- 테이블 구조 `coding_category`
--

CREATE TABLE IF NOT EXISTS `coding_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `categoryEng` varchar(50) NOT NULL,
  `categoryDescription` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 테이블의 덤프 데이터 `coding_category`
--

INSERT INTO `coding_category` (`id`, `category`, `categoryEng`, `categoryDescription`) VALUES
(1, '시작하기', 'Start', 'C언어의 기본 틀을 이해합니다.'),
(2, '상수', 'Constant', '변하지 않는 값인 상수에 대해서 알아봅니다.'),
(3, '변수', 'Variable', '크기가 변할 수 있는 값을 취할 수 있는 수인 변수에 대해서 알아봅니다.'),
(4, '연산자', 'Operator', '어떤 동작이나 계산을 수행하도록 지시하는 연산자에 대해서 알아봅니다.'),
(5, '제어문', 'Control Statement', '일정한 조건이 충족되었을때만 사용가능하게 만들어주는 제어문에 대해 알아봅니다.'),
(6, '반복문', 'Repetitive Statement', '조건이 만족할경우 해당 문장들을 반복적으로 실행시키는 반복문에 대해서 알아봅니다.'),
(7, '분기문', 'Branch Statement', '다른 문에 제어의 명시적인 이행을 일으키는 문인 분기문에 대해서 알아봅니다.'),
(8, '배열', 'Array', '같은 속성을 갖는 데이터형을 여러 개 동시에 정의할 때 사용하는 배열에 대하여 알아봅니다.'),
(9, '함수', 'Function', '소프트웨어에서 특정 동작을 수행하는 일정 코드 부분을 의미하는 함수에 대해서 알아봅니다.'),
(10, '구조체', 'Struct', '서로 다른 데이터형을 하나의 묶음으로 처리하기 위한 구조체에 대하여 알아봅니다.'),
(11, '포인터', 'Pointer', '메모리를 직접 접근하기 위해 사용하는 포인터에 대해서 알아봅니다.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
