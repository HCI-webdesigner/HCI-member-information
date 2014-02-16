-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 02 月 16 日 06:58
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
-- 表的结构 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `grade` int(5) DEFAULT NULL,
  `long_phone` varchar(12) DEFAULT NULL,
  `short_phone` int(8) NOT NULL DEFAULT '0',
  `department` varchar(20) DEFAULT NULL,
  `times` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`ID`, `name`, `grade`, `long_phone`, `short_phone`, `department`, `times`) VALUES
(1, '黄茹静', 12, '15913121947', 611947, '前端', NULL),
(2, '陈思宇', 12, '13822192563', 622563, '前端', NULL),
(3, '陆柏均', 12, '13760800528', 630528, '后台', NULL),
(4, '钟少良', 12, '13760803353', 633353, '前端', NULL),
(5, '李波', 12, '13501514078', 637078, '前端', NULL),
(6, '钟淑娜', 12, '13539779742', 639742, '前端', NULL),
(7, '涂宝妮', 12, '13580416326', 659326, '前端', NULL),
(8, '吕柔纯', 12, '13580415903', 675903, '前端', NULL),
(9, '陈耿彬', 12, '13580413415', 683415, '前端', NULL),
(10, '吴泽标', 12, '13560401685', 686685, '后台', NULL),
(11, '蔡月军', 12, '13539897778', 687778, '前端', NULL),
(12, '吴俊锋', 12, '13711706747', 692747, '前端', NULL),
(13, '钟霞萍', 12, '15813394428', 694428, '前端', NULL),
(14, '陈伟成', 12, '13560457989', 667989, '移动', NULL),
(15, '朱锦辉', 12, '13560418496', 678496, '移动', NULL),
(16, '何文斌', 12, '13556155906', 675906, '移动', NULL),
(17, '梁栩健', 12, '15017539545', 699545, '移动', NULL),
(18, '方嘉伟', 12, '13580413415', 683415, '移动', NULL),
(19, '俞昌林', 12, '13560476398', 616398, '系统', NULL),
(20, '冯华江', 12, '13556111235', 699025, '系统', NULL),
(21, '孙彬彬', 12, '13570432686', 683415, '移动', NULL),
(22, '李宇星', 12, '13710566354', 63354, '系统', NULL),
(23, '李丽君', 12, '13711707742', 637742, '前端', NULL),
(24, '陈文浩', 12, '13560418206', 688206, '后台', NULL),
(25, '王海英', 11, '18826495181', 645181, '前端', NULL),
(26, '龚楚贤', 11, '13719356819', 696819, '前端', NULL),
(27, '郑坚鹏', 11, '18825166531', 696531, '前端', NULL),
(28, '张定杰', 11, '18825166130', 626130, '前端', NULL),
(29, '李沃强', 11, NULL, 6121, '前端', NULL),
(30, '钟芝连', 11, '15102034498', 674498, '前端', NULL),
(31, '廖林兴', 11, '18826490952', 630952, '前端', NULL),
(32, '许梓凡', 11, '18825166099', 636099, '前端', NULL),
(33, '曾少龙', 11, '18825180286', 620286, '前端', NULL),
(34, '李锦鸿', 11, '1882516933', 622933, '前端', NULL),
(35, '王映君', 11, '18826485402', 6502, '前端', NULL),
(36, '吴海斌', 11, '18825162833', 622833, '后台', NULL),
(37, '曾庆贤', 11, '18825180364', 660364, '后台', NULL),
(38, '胡华泉', 11, '18826495176', 625176, '后台', NULL),
(39, '庄奕珊', 11, '18826485394', 685394, '后台', NULL),
(40, '郑俊燕', 11, '18825179968', 629968, '后台', NULL),
(41, '吴丽莎', 11, '18825185740', 635740, '后台', NULL),
(42, '黄文东', 11, '18825165358', 695358, '后台', NULL),
(43, '黄坚道', 11, '18825165361', 6561, '后台', NULL),
(44, '叶耀文', 11, '18825166112', 616112, '后台', NULL),
(45, '黄哲东', 11, '18825162580', 652580, '后台', NULL),
(46, '邓区', 11, '18825180161', 630161, '后台', NULL),
(47, '林文湖', 11, '18825180152', 650152, '后台', NULL),
(48, '刘耀熹', 11, '18825491016', 631016, '后台', NULL),
(49, '谢佳鸿', 11, '18826485034', 635034, '移动', NULL),
(50, '谭智良', 11, '18825166201', 626201, '移动', NULL),
(51, '张宏业', 13, '18814092578', 688206, NULL, NULL),
(52, '刘超勇', 13, '18813752517', 672517, NULL, NULL),
(53, '许国立', 13, '18813752548', 652548, NULL, NULL);

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
('201131001022', '系统', '邱传旭', '软件工程', 11, '13422349864', '629864');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
