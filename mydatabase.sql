-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 12 月 27 日 09:54
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mydatabase`
--

-- --------------------------------------------------------

--
-- 表的结构 `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `number` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `time_start` varchar(14) CHARACTER SET utf8 NOT NULL,
  `time_end` varchar(14) CHARACTER SET utf8 NOT NULL,
  `create_time` varchar(14) CHARACTER SET utf8 NOT NULL,
  `intro` text CHARACTER SET utf8 NOT NULL,
  `belong_to` int(10) unsigned NOT NULL,
  `place` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cost` varchar(100) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`number`),
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='活动表' AUTO_INCREMENT=2000000013 ;

--
-- 转存表中的数据 `activity`
--

INSERT INTO `activity` (`number`, `act_name`, `time_start`, `time_end`, `create_time`, `intro`, `belong_to`, `place`, `cost`, `photo`) VALUES
(2000000001, '聚餐', '20121127120000', '20121127180000', '20121127000000', '很好玩的聚餐活动', 1000000001, '同济大学操场', '100元/人', '无'),
(2000000002, '郊游', '20121128000000', '20121129000000', '20121127000000', '郊游活动', 1000000002, '同济大学', '0', '无'),
(2000000003, '聚餐2', '20121127120000', '20121127180000', '20121127000000', '很好玩的聚餐活动', 1000000001, '同济大学操场', '100元/人', '无'),
(2000000004, '聚餐3', '20121127120000', '20121127180000', '20121127000000', '很好玩的聚餐活动', 1000000001, '同济大学操场', '100元/人', '无'),
(2000000005, '聚餐4', '20121127120000', '20121127180000', '20121127000000', '很好玩的聚餐活动', 1000000001, '同济大学操场', '100元/人', '无'),
(2000000006, '聚餐5', '20121127120000', '20121127180000', '20121127000000', '很好玩的聚餐活动', 1000000001, '同济大学操场', '100元/人', '无'),
(2000000007, '聚餐6', '20121127120000', '20121127180000', '20121127000000', '很好玩的聚餐活动', 1000000001, '同济大学操场', '100元/人', '无'),
(2000000008, '聚餐7', '20121127120000', '20121127180000', '20121127000000', '很好玩的聚餐活动', 1000000001, '同济大学操场', '100元/人', '无'),
(2000000009, '聚餐8', '20121127120000', '20121127180000', '20121127000000', '很好玩的聚餐活动', 1000000001, '同济大学操场', '100元/人', '无'),
(2000000010, 'the seventh activity', '199301020256', '199402030789', '', 'zhege huodong henhao!', 1000000001, '学校里面', '308', '../photo/photo32.jpg'),
(2000000011, 'the seventh activity', '199301020256', '199402030789', '', 'zhege huodong henhao!', 1000000001, '学校里面', '308', '../photo/photo32.jpg'),
(2000000012, 'xindehuodong ', '123', '123', '', 'zheshijieshao', 1000000001, 'tongji', '30', 'xindehuodong ');

-- --------------------------------------------------------

--
-- 表的结构 `activity_attri`
--

CREATE TABLE IF NOT EXISTS `activity_attri` (
  `number` int(10) unsigned NOT NULL,
  `show` int(1) unsigned NOT NULL,
  `sports` int(1) unsigned NOT NULL,
  `lecture` int(1) unsigned NOT NULL,
  `travel` int(1) unsigned NOT NULL,
  `party` int(1) unsigned NOT NULL,
  `welfare` int(1) unsigned NOT NULL,
  `photos` int(1) unsigned NOT NULL,
  `online` int(1) unsigned NOT NULL,
  `offline` int(1) unsigned NOT NULL,
  PRIMARY KEY (`number`),
  UNIQUE KEY `no.` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='活动属性表';

--
-- 转存表中的数据 `activity_attri`
--

INSERT INTO `activity_attri` (`number`, `show`, `sports`, `lecture`, `travel`, `party`, `welfare`, `photos`, `online`, `offline`) VALUES
(2000000001, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(2000000002, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(2000000003, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(2000000004, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(2000000005, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(2000000006, 0, 0, 0, 0, 0, 1, 0, 0, 0),
(2000000007, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(2000000008, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(2000000009, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `attention`
--

CREATE TABLE IF NOT EXISTS `attention` (
  `user_num` int(10) unsigned NOT NULL,
  `act_num` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='关注表';

--
-- 转存表中的数据 `attention`
--

INSERT INTO `attention` (`user_num`, `act_num`) VALUES
(1000000001, 2000000001),
(1000000001, 2000000002),
(1000000001, 2000000003),
(1000000002, 2000000001),
(1000000003, 2000000001);

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_num` int(10) unsigned NOT NULL,
  `user_num` int(10) unsigned NOT NULL,
  `act_num` int(10) unsigned NOT NULL,
  `time` varchar(14) CHARACTER SET utf8 NOT NULL,
  `content` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`comment_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='评论表';

-- --------------------------------------------------------

--
-- 表的结构 `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `group_num` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `admin_num` int(10) unsigned NOT NULL,
  `school` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`group_num`),
  UNIQUE KEY `group_num` (`group_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='团体表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `participate`
--

CREATE TABLE IF NOT EXISTS `participate` (
  `user_num` int(10) unsigned NOT NULL,
  `act_num` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='参加表';

--
-- 转存表中的数据 `participate`
--

INSERT INTO `participate` (`user_num`, `act_num`) VALUES
(1000000001, 2000000001),
(1000000002, 2000000001),
(1000000003, 2000000001);

-- --------------------------------------------------------

--
-- 表的结构 `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `number` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id` varchar(50) CHARACTER SET utf8 NOT NULL,
  `passwd` varchar(50) CHARACTER SET utf8 NOT NULL,
  `gender` int(1) unsigned NOT NULL,
  `birthday` varchar(8) CHARACTER SET utf8 NOT NULL,
  `school` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone_num` varchar(20) CHARACTER SET utf8 NOT NULL,
  `if_admin` int(1) unsigned NOT NULL,
  `belong_to` int(10) unsigned NOT NULL,
  `photo` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`number`),
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='用户信息表' AUTO_INCREMENT=1000000016 ;

--
-- 转存表中的数据 `user_info`
--

INSERT INTO `user_info` (`number`, `id`, `passwd`, `gender`, `birthday`, `school`, `name`, `phone_num`, `if_admin`, `belong_to`, `photo`) VALUES
(1000000001, '', '', 0, '', '', '1号傻瓜', '', 0, 0, ''),
(1000000002, '', '', 0, '', '', '傻瓜2号', '', 0, 0, ''),
(1000000003, 'qweqwe', 'qweqwe', 1, '', '', 'thisis3rd', '', 0, 0, ''),
(1000000004, 'qweqweww', 'wwwwwwww', 0, '', '', '', '', 0, 0, ''),
(1000000005, '123123', '123123', 0, '', '', '', '', 0, 0, ''),
(1000000006, '123123123', '123123123', 0, '', '', '', '', 0, 0, ''),
(1000000007, '1231231232', '22222222222', 0, '', '', '', '', 0, 0, ''),
(1000000008, '12312312321', 'qweqweqweqwe', 0, '', '', '', '', 0, 0, ''),
(1000000009, '12312312321w', 'qweqweqweqwe', 0, '', '', '', '', 0, 0, ''),
(1000000010, 'ertew', 'wertwert', 0, '', '', '', '', 0, 0, ''),
(1000000011, 'asdasdasd', 'asdasdasdasd', 0, '', '', '', '', 0, 0, ''),
(1000000012, 'rghrsgasdf', 'asdfwqerfadf', 0, '', '', '', '', 0, 0, ''),
(1000000013, 'afafsdfwer', 'awfwefxfwEFAWD', 0, '', '', '', '', 0, 0, ''),
(1000000014, 'SERGQERGASD', 'AWERFQEFAEWF', 0, '', '', '', '', 0, 0, ''),
(1000000015, 'sdfsaf', 'sdfasd', 0, '', '', '', '', 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
