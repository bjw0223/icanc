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
-- 테이블 구조 `coding_basic`
--

CREATE TABLE IF NOT EXISTS `coding_basic` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '문제번호',
  `categoryNo` int(11) NOT NULL,
  `questionNo` int(11) NOT NULL,
  `question` text NOT NULL COMMENT '문제',
  `context` text NOT NULL COMMENT '내용',
  `answer` text NOT NULL COMMENT '정답',
  `hint` text NOT NULL COMMENT '힌트',
  `description` text NOT NULL COMMENT '정답 설명',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 테이블의 덤프 데이터 `coding_basic`
--

INSERT INTO `coding_basic` (`id`, `categoryNo`, `questionNo`, `question`, `context`, `answer`, `hint`, `description`) VALUES
(1, 1, 1, '"I CAN의 오신것을 환영합니다" 출력하기', '', 'I CAN의 오신것을 환영합니다', '표준출력함수를 사용하면 화면에 원하는 문자를 출력할 수 있습니다.', 'printf()는 가장 기본적은 표준출력함수로써 특정한 서식을 가지고 다양한 형식으로 출력이 가능합니다.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
