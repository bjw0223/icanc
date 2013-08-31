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
-- 테이블 구조 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `job` int(11) NOT NULL,
  `dateOfBirth` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `finishQuestionNo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_idx` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`id`, `level`, `email`, `nickname`, `job`, `dateOfBirth`, `password`, `created`, `finishQuestionNo`) VALUES
(1, 1, 'a1@naver.com', 'a1', 2, '2012.11.28', '$2y$10$0rDASSDLhchwsEMbbRlVcuqb18kafdG/7G2msapp6HqCjtdth0RoO', '2013-08-27 16:21:02', 3),
(2, 0, 'miss0110@naver.com', '유진영', 1, '2012.11.30', '$2y$10$gfsPrtCvummex37ep9v.pucLS4OAjP910c92r/Rkap5s8tLAyxnQ2', '2013-08-27 16:42:16', 5),
(3, 0, 'a2@naver.com', 'a2', 5, '2010.9.28', '$2y$10$9llwPwwP0XoyJMqtEl2fLeV09y4s8HGldohEhBSfraSzFavKf2Ntm', '2013-08-27 18:05:17', 0),
(4, 0, 'icanc@naver.com', 'icanc', 0, '2013.12.31', '$2y$10$L5.Q2qLj6qtTld35xadDGOynjnIVaruBYRpuox2yppaAdtT.5PlSy', '2013-08-29 12:31:06', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
