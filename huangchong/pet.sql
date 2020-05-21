-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-05-21 11:55:24
-- 服务器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `pet`
--

-- --------------------------------------------------------

--
-- 表的结构 `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'dog'),
(2, 'cat'),
(3, 'bird'),
(4, 'fish'),
(5, 'foods'),
(6, 'all');

-- --------------------------------------------------------

--
-- 表的结构 `pets`
--

CREATE TABLE `pets` (
  `pet_id` int(10) NOT NULL,
  `pet_cat` varchar(255) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_age` varchar(255) NOT NULL,
  `pet_price` int(10) NOT NULL,
  `cat_img` varchar(255) NOT NULL,
  `pet_catn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `pets`
--

INSERT INTO `pets` (`pet_id`, `pet_cat`, `pet_name`, `pet_age`, `pet_price`, `cat_img`, `pet_catn`) VALUES
(1, 'cat', 'Tony', '6Month', 5000, 'image/cat1.jpg', 2),
(2, 'cat', 'RouRou', '3Month', 200, 'image/cat2.jpg', 2),
(3, 'cat', 'Manj', '2Month', 300, 'image/cat3.jpg', 2),
(4, 'dog', 'Gogo', '7Month', 3100, 'image/dog1.jpg', 1),
(5, 'dog', 'Wangwang', '5Month', 1500, 'image/dog2.jpg', 1),
(6, 'dog', 'Qiqi', '1Month', 2000, 'image/dog3.jpg', 1),
(7, 'bird', 'ZZd', '1Years', 700, 'image/bird1.jpg', 3),
(8, 'fish', 'Bob', '1Month', 150, 'image/fish1.jpg', 4),
(9, 'fish', 'Luka', '2Month', 200, 'image/fish2.jpg', 4),
(10, 'food', 'Dog food A', '', 20, 'image/food1.jpg', 5),
(11, 'food', 'Cat food A', '', 15, 'image/food2.jpg', 5),
(12, 'food', 'Bird food A', '', 20, 'image/food3.jpg', 5),
(13, 'food', 'Fish food A', '', 40, 'image/food4.jpg', 5);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `UserID` int(200) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`UserID`, `Fname`, `Lname`, `email`, `Password`) VALUES
(1, 'jia', 'hong', '646869480@qq.com', 'wocaonima123'),
(2, 'jia', 'hong', '', ''),
(3, 'jia', 'hong', '', ''),
(4, 'xiaokuaile', 'huai', '', ''),
(5, 'jia', 'hong', '', ''),
(6, 'gao', 'manshu', '', ''),
(7, 'jia', 'hong', 'asd', '$2y$10$BWxuldPj1t4KGAa/rRzfGuGd1d5HbOcHtCx0QVls5dQF6wHS8xppG'),
(8, 'jia', 'hong', '646869480@qq.com', '$2y$10$nmftVunkwXuA9tErfZvnU.A9O9sEOizY4tbUIsO/wV9CrsyxRRBVK'),
(9, 'manshu', 'jiahong', '6450', '$2y$10$9ELPdgthYBH081bLFfoGsOSy3IduNTK6qy54kdnAjbCtJust49/JS'),
(10, 'xiaokuaile', 'jiahong', '6450@ait.nsw.edu.au', '$2y$10$ImBg/c3pJILovyTa/D4VQ.OlFbBCHpUNZEGsMy4IQzbll/HlE7eh.'),
(11, '', '', '', '$2y$10$3PCHFGFXIgQxcTMtF3HqsePLdMq1Dpc.9aGPc2PVMHU1omETLCDn6'),
(12, 'Manshu', 'Gao', 'woaijiahong@qq.com', '$2y$10$vzFiKh.O4kXb5g0srlBskuhmGkHO.J8PR5RyGOHqodqs16irs9CeS');

--
-- 转储表的索引
--

--
-- 表的索引 `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- 表的索引 `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
