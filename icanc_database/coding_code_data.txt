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
-- 테이블 구조 `coding_code`
--

CREATE TABLE IF NOT EXISTS `coding_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `threadCodeHead` text NOT NULL,
  `threadCodeTail` text NOT NULL,
  `mainCodeHead` text NOT NULL,
  `mainCodeTail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 테이블의 덤프 데이터 `coding_code`
--

INSERT INTO `coding_code` (`id`, `threadCodeHead`, `threadCodeTail`, `mainCodeHead`, `mainCodeTail`) VALUES
(1, '#include <pthread.h>\r\n#include <unistd.h>\r\n#include <stdlib.h>\r\n#include <stdio.h>\r\nvoid *runCode34567(void *id34567)\r\n{', '}\r\n\r\nvoid *checkTime34567(void *id34567)\r\n{\r\n    sleep(2);\r\n    \r\n    //pthread_cancel((pthread_t )id34567);\r\n    pthread_kill((pthread_t)id34567, 9);\r\n}\r\n\r\nint main()\r\n{\r\n    pthread_t code34567,check34567;\r\n    int thr_id34567;\r\n    int status34567;\r\n    int a34567 = 1;\r\n\r\n    // 실제 사용자 코드 실행 쓰레드\r\n    thr_id34567 = pthread_create(&check34567, NULL, checkTime34567,(void *)&check34567);\r\n    \r\n    if (thr_id34567 < 0)\r\n    {\r\n        perror("thread create error : ");\r\n        exit(0);\r\n    }\r\n\r\n    // 사용자 코드가 10초 이상 진행시 KILL 쓰레드\r\n    thr_id34567 = pthread_create(&code34567, NULL, runCode34567, (void *)&check34567);\r\n    if (thr_id34567 < 0)\r\n    {\r\n        perror("thread create error : ");\r\n        exit(1);\r\n    }\r\n\r\n    // 쓰레드 종료를 기다린다. \r\n    pthread_join(check34567, (void **)&status34567);\r\n    \r\n    return 0;\r\n}', '// C언어의 가장 기본적인구조\r\n\r\n#include<stdio.h>\r\n\r\nint main()\r\n{', '    return 0;\r\n}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
