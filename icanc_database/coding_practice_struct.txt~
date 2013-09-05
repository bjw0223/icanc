-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 13-08-31 11:51 
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
-- 테이블 구조 `coding_practice`
--

CREATE TABLE IF NOT EXISTS `coding_practice` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '문제번호',
  `question` text NOT NULL COMMENT '문제',
  `context` text NOT NULL COMMENT '내용',
  `answer` text NOT NULL COMMENT '정답',
  `hint` text NOT NULL COMMENT '힌트',
  `description` text NOT NULL COMMENT '정답 설명',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 테이블의 덤프 데이터 `coding_practice`
--

INSERT INTO `coding_practice` (`id`, `question`, `context`, `answer`, `hint`, `description`) VALUES
(1, '삼각형 출력하기', '''*''을 사용하여 아래와 같이 출력하는 프로그램을 작성하세요', '*<br>**<br>***<br>****<br>*****', '반복문을 활용하세요', '잘해라잉'),
(2, '1~100까지 홀수의 합 구하기', '1~100까지 홀수의 합을 구하여 출력하는 프로그램을 작성하세요', '1~100까지의 홀수의 합 : 2500', '반복문과 조건문을 잘쓰세요', '화이팅');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
