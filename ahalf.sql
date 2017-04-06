-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?02 �?21 �?15:28
-- 服务器版本: 5.5.40
-- PHP 版本: 5.5.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ahalf`
--

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `doublejoin`
--

CREATE TABLE IF NOT EXISTS `doublejoin` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(11) NOT NULL,
  `username1` varchar(20) NOT NULL,
  `headimg1` varchar(200) DEFAULT NULL,
  `uid2` int(11) NOT NULL,
  `username2` varchar(20) NOT NULL,
  `headimg2` varchar(200) DEFAULT NULL,
  `pic` varchar(150) NOT NULL,
  `title` varchar(40) NOT NULL,
  `content` varchar(200) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `prise` int(11) DEFAULT '0',
  `time` date DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `doublejoin`
--

INSERT INTO `doublejoin` (`pid`, `uid1`, `username1`, `headimg1`, `uid2`, `username2`, `headimg2`, `pic`, `title`, `content`, `label`, `prise`, `time`) VALUES
(1, 1, 'eva', '\\uploads\\headimg\\h1.png', 2, 'lily', '\\uploads\\headimg\\h2.png', '\\uploads\\double\\20170219\\s3.png', '同城热恋', '那一天在厦门,鼓浪屿,傍晚,彼此想念', '厦门,唯美,浪漫', 0, '2017-02-13'),
(2, 1, 'eva', '\\uploads\\headimg\\h1.png', 2, 'lily', '\\uploads\\headimg\\h2.png', '\\uploads\\double\\20170219\\s2.png', '美味寿司', '美味小吃,休闲娱乐,开心拼图', '小吃,娱乐,开心', 0, '2017-02-16'),
(3, 1, 'eva', '\\uploads\\headimg\\h1.png', 2, 'lily', '\\uploads\\headimg\\h2.png', '\\uploads\\double\\20170219\\s1.png', '厦门记忆', '一起走过的那段时光,致青春,厦门回忆', '时光,青春,回忆', 0, '2017-02-16'),
(4, 1, 'eva', '\\uploads\\headimg\\h1.png', 2, 'lily', '\\uploads\\headimg\\h2.png', '\\uploads\\double\\20170219\\s4.png', '美味佳肴', '小店小吃,休闲娱乐,趣味拼图', '小吃,娱乐,趣味', 0, '2017-02-16');

-- --------------------------------------------------------

--
-- 表的结构 `mytask`
--

CREATE TABLE IF NOT EXISTS `mytask` (
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `time` date DEFAULT NULL,
  `state` int(11) DEFAULT NULL COMMENT '0：进行中；1：已完成；2：已过期'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `singlepic`
--

CREATE TABLE IF NOT EXISTS `singlepic` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userimg` varchar(200) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` varchar(200) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `prise` int(11) DEFAULT '0',
  `time` date DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `singlepic`
--

INSERT INTO `singlepic` (`pid`, `uid`, `username`, `userimg`, `pic`, `title`, `content`, `label`, `prise`, `time`) VALUES
(1, 1, 'eva', '', '32123', '美味一线牵', '趣味加美味，胜过1+1', '趣味', 0, '2017-02-13');

-- --------------------------------------------------------

--
-- 表的结构 `taskinfo`
--

CREATE TABLE IF NOT EXISTS `taskinfo` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `content` varchar(200) DEFAULT NULL,
  `memnum` int(11) DEFAULT '0',
  `time` date DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `headimg` varchar(200) DEFAULT NULL,
  `label` varchar(150) DEFAULT NULL,
  `addr` varchar(80) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `logo` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `headimg`, `label`, `addr`, `tel`, `logo`) VALUES
(1, 'eva', '1234', NULL, '浪漫,趣味,厦门', NULL, NULL, NULL),
(2, 'lily', '1234', '', '趣味,休闲，娱乐', NULL, NULL, NULL),
(3, 'test', '1234', NULL, '浪漫,唯美', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
