-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 06 月 12 日 11:58
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bighomework`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` char(32) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img_src` varchar(100) NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `img_src`, `price`, `name`) VALUES
(1, '../img/05.jpg', 1234, 'fff'),
(2, '../img/02.jpg', 2000, 'book'),
(3, '../img/03.jpg', 2000, 'haircup'),
(4, '../img/04.jpg', 1255, 'peach'),
(5, '../img/01.jpg', 1000, 'compute'),
(6, '../img/01.jpg', 1000, 'compute'),
(7, '../img/01.jpg', 1000, 'compute'),
(8, '../img/01.jpg', 1000, 'compute'),
(9, '../img/01.jpg', 1000, 'compute'),
(10, '../img/05.jpg', 1000, 'compute'),
(11, '../img/05.jpg', 1000, 'compute'),
(12, '../img/05.jpg', 1000, 'compute'),
(13, '../img/05.jpg', 1000, 'compute'),
(14, '../img/05.jpg', 1000, 'compute'),
(15, '../img/05.jpg', 1000, 'compute'),
(16, '../img/05.jpg', 1000, 'compute'),
(17, '../img/05.jpg', 1000, 'compute'),
(18, '../img/05.jpg', 1000, 'compute'),
(19, '../img/05.jpg', 1000, 'compute'),
(20, '../img/05.jpg', 1000, 'compute'),
(21, '../img/05.jpg', 1000, 'compute'),
(22, '../img/05.jpg', 1000, 'compute');

-- --------------------------------------------------------

--
-- 表的结构 `ord`
--

CREATE TABLE IF NOT EXISTS `ord` (
  `gid` int(10) unsigned DEFAULT NULL,
  `uid` int(10) unsigned DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ord`
--

INSERT INTO `ord` (`gid`, `uid`, `price`, `name`) VALUES
(3, 5, 2000, 'haircup'),
(9, 5, 1000, 'compute'),
(2, 5, 2000, 'book'),
(4, 5, 1255, 'peach'),
(4, 4, 1255, 'peach'),
(5, 4, 1000, 'compute'),
(8, 4, 1000, 'compute'),
(11, 4, 1000, 'compute');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` char(32) NOT NULL,
  `salt` char(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`, `email`) VALUES
(1, '老八', '66480f4dfa71b4d5149a0e33b23279a3', 'eebba793a7687af8cd20a87ce82d9173', '123@qq.com'),
(2, '1313', 'c58fbb1a98cff4db3a5f94460166f799', '602f5b624a6aa9ac13e30c34c261da48', '111111@qq.cs'),
(3, 'ddd', '10ebf1a1f5c253153452d9045fdb7241', 'e027937c46a0176b8dd3f420cd35bc36', 'asd@qq.cn'),
(4, 'admin', '220d16bc12d77fd2843cc162d0fcb503', 'a8de0834ecca6143526a026919486b6e', 'admin@ad.net'),
(5, '123123', '1009ea1da97b854c0c2e6f6268dc515e', '9074b7d72eb96ce6cd87b6526ee4f2d8', '123@qq.com'),
(6, 'asdf', '123456', 'ae3e49ee8a1a54b4c4fb17cf1bbfcad1', '123@qq.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
