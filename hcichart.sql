-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 02 月 26 日 09:17
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hcichart`
--
CREATE DATABASE IF NOT EXISTS `hcichart` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hcichart`;

-- --------------------------------------------------------

--
-- 表的结构 `meeting_information`
--

CREATE TABLE IF NOT EXISTS `meeting_information` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_room` varchar(20) NOT NULL,
  `meeting` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `meeting_information`
--

INSERT INTO `meeting_information` (`ID`, `meeting_room`, `meeting`) VALUES
(1, '537', '第一次例会');

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `grade` int(5) DEFAULT NULL,
  `long_phone` varchar(12) DEFAULT NULL,
  `short_phone` int(8) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `times` int(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`ID`, `name`, `grade`, `long_phone`, `short_phone`, `department`, `times`) VALUES
(1, '黄茹静', 12, '15913121947', 611947, '前端', 0),
(2, '陈思宇', 12, '13822192563', 622563, '前端', 1),
(4, '钟少良', 12, '13760803353', 633353, '前端', 1),
(5, '李波', 12, '13501514078', 637078, '前端', 0),
(6, '钟淑娜', 12, '13539779742', 639742, '前端', 1),
(7, '涂宝妮', 12, '13580416326', 659326, '前端', 0),
(8, '吕柔纯', 12, '13580415903', 675903, '前端', 0),
(9, '陈耿彬', 12, '13580413415', 683415, '前端', 1),
(10, '吴泽标', 12, '13560401685', 686685, '后台', 1),
(11, '蔡月军', 12, '13539897778', 687778, '前端', 0),
(12, '吴俊锋', 12, '13711706747', 692747, '前端', 0),
(13, '钟霞萍', 12, '15813394428', 694428, '前端', 0),
(14, '陈伟成', 12, '13560457989', 667989, '移动', 1),
(15, '朱锦辉', 12, '13560418496', 678496, '移动', 0),
(16, '何文斌', 12, '13556155906', 675906, '移动', 1),
(17, '梁栩健', 12, '15017539545', 699545, '移动', 1),
(18, '方嘉伟', 12, '13580413415', 683415, '移动', 1),
(19, '俞昌林', 12, '13560476398', 616398, '系统', 0),
(20, '冯华江', 12, '13556111235', 699025, '系统', 1),
(21, '孙彬彬', 12, '13570432686', 683415, '移动', 0),
(22, '李宇星', 12, '13710566354', 63354, '系统', 0),
(24, '陈文浩', 12, '13560418206', 688206, '后台', 1),
(25, '王海英', 11, '18826495181', 645181, '前端', 1),
(26, '龚楚贤', 11, '13719356819', 696819, '前端', 0),
(27, '郑坚鹏', 11, '18825166531', 696531, '前端', 0),
(28, '张定杰', 11, '18825166130', 626130, '前端', 0),
(29, '李沃强', 11, NULL, 6121, '前端', 0),
(30, '钟芝连', 11, '15102034498', 674498, '前端', 0),
(31, '廖林兴', 11, '18826490952', 630952, '前端', 0),
(32, '许梓凡', 11, '18825166099', 636099, '前端', 1),
(33, '曾少龙', 11, '18825180286', 620286, '前端', 0),
(34, '李锦鸿', 11, '1882516933', 622933, '前端', 0),
(35, '王映君', 11, '18826485402', 6502, '前端', 1),
(36, '吴海斌', 11, '18825162833', 622833, '后台', 1),
(37, '曾庆贤', 11, '18825180364', 660364, '后台', 0),
(38, '胡华泉', 11, '18826495176', 625176, '后台', 0),
(39, '庄奕珊', 11, '18826485394', 685394, '后台', 0),
(40, '郑俊燕', 11, '18825179968', 629968, '后台', 0),
(41, '吴丽莎', 11, '18825185740', 635740, '后台', 0),
(42, '黄文东', 11, '18825165358', 695358, '后台', 0),
(43, '黄坚道', 11, '18825165361', 6561, '后台', 0),
(44, '叶耀文', 11, '18825166112', 616112, '后台', 0),
(45, '黄哲东', 11, '18825162580', 652580, '后台', 0),
(46, '邓区', 11, '18825180161', 630161, '后台', 0),
(47, '林文湖', 11, '18825180152', 650152, '后台', 1),
(48, '刘耀熹', 11, '18825491016', 631016, '后台', 0),
(49, '谢佳鸿', 11, '18826485034', 635034, '移动', 0),
(50, '谭智良', 11, '18825166201', 626201, '移动', 1),
(51, '张宏业', 13, '18814092578', 688206, NULL, 1),
(52, '刘超勇', 13, '18813752517', 672517, NULL, 0),
(53, '许国立', 13, '18813752548', 652548, NULL, 0),
(56, '梁忠杰', 12, '13539778449', 658449, '前端', 1);

-- --------------------------------------------------------

--
-- 表的结构 `minister_information`
--

CREATE TABLE IF NOT EXISTS `minister_information` (
  `student_ID` varchar(12) NOT NULL DEFAULT '',
  `department` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `major` varchar(20) DEFAULT NULL,
  `grade` int(5) DEFAULT NULL,
  `long_phone` varchar(12) DEFAULT NULL,
  `short_phone` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `minister_information`
--

INSERT INTO `minister_information` (`student_ID`, `department`, `name`, `major`, `grade`, `long_phone`, `short_phone`) VALUES
('2011', '后台', '钟煜', '软件工程', 11, '1882630076', '630076'),
('201130690328', '负责人', '叶志良', '软件工程', 11, '18826485242', '685242'),
('2011307', '移动', '黄旭辉', '软件工程', 11, '1882999', '62499'),
('201130720218', '主任', '王海英', '网络工程', 11, '18826495181', '645181'),
('201131000408', '前端', '方思霓', '软件工程', 11, '18825166238', '626238'),
('201131000626', '前端', '严思雯', '软件工程', 11, '18825166254', '666254'),
('201131001022', '系统', '邱传旭', '软件工程', 11, '13422349864', '629864'),
('2222222', '前端', 'why', '软工', 12, '18826385181', '645181');

-- --------------------------------------------------------

--
-- 表的结构 `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `meeting` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `register`
--

INSERT INTO `register` (`ID`, `meeting`, `name`) VALUES
(5, '第一次例会', '钟少良'),
(6, '第一次例会', '陈文浩'),
(7, '第一次例会', '徐国立'),
(8, '第一次例会', '冯华江'),
(9, '第一次例会', '严思雯'),
(10, '第一次例会', '陈伟成'),
(11, '第一次例会', '陈思宇'),
(12, '第一次例会', '陈耿彬'),
(13, '第一次例会', '方嘉伟'),
(14, '第一次例会', '张宏业'),
(15, '第一次例会', '钟淑娜'),
(16, '第一次例会', '蔡月君'),
(17, '第一次例会', '吴泽标'),
(18, '第一次例会', '林文湖'),
(19, '第一次例会', '许梓凡'),
(20, '第一次例会', '王映君'),
(21, '第一次例会', '谭智良'),
(22, '第一次例会', '何文斌'),
(23, '第一次例会', '梁栩健'),
(24, '第一次例会', '黄东文'),
(25, '第一次例会', '林岳钦'),
(26, '第一次例会', '吴海斌'),
(27, '第一次例会', '梁忠杰'),
(29, '第一次例会', '王海英');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
