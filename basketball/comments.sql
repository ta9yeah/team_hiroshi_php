-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016 年 2 月 03 日 02:16
-- サーバのバージョン： 5.6.28
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basketball`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `delete_flag` int(11) NOT NULL DEFAULT '0',
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `match_id`, `comment`, `created`, `modified`, `delete_flag`, `deleted`) VALUES
(1, 1, 1, '初めてのコメント初めての試合', NULL, NULL, 0, NULL),
(2, 1, 1, '初めてのコメント初めての試合', NULL, NULL, 1, '2016-02-02 12:33:46'),
(3, 2, 1, 'First comment and first match', NULL, NULL, 0, NULL),
(4, 3, 1, 'Amazing!!!', NULL, NULL, 0, NULL),
(5, 2, 1, 'First comment and first match', NULL, NULL, 0, NULL),
(6, 3, 1, 'Amazing!!!', NULL, NULL, 0, NULL),
(7, 1, 2, 'マジで？', NULL, NULL, 0, NULL),
(8, 3, 3, 'I cant understand what you said', NULL, NULL, 0, NULL),
(9, 1, 2, 'マジで？', NULL, NULL, 1, '2016-02-02 19:49:39'),
(10, 3, 3, 'I cant understand what you said', NULL, NULL, 0, NULL),
(11, 3, 1, 'なんで？', NULL, NULL, 1, '2016-02-02 12:34:21'),
(12, 3, 1, 'なんで？', NULL, NULL, 0, NULL),
(13, 1, 2, '方法', '2016-02-02 11:07:59', NULL, 1, '2016-02-02 19:46:58'),
(14, 1, 2, '方法', '2016-02-02 11:11:52', NULL, 1, '2016-02-02 19:10:13'),
(15, 1, 2, '方法', '2016-02-02 11:12:45', NULL, 1, '2016-02-02 19:10:28'),
(16, 1, 2, '方法', '2016-02-02 11:13:14', NULL, 1, '2016-02-02 19:49:22'),
(17, 1, 2, '方法', '2016-02-02 11:14:11', NULL, 1, '2016-02-02 19:49:31'),
(18, 1, 2, '方法', '2016-02-02 11:15:28', NULL, 1, '2016-02-02 19:49:34'),
(19, 1, 1, '初めてですか？', '2016-02-02 11:16:19', NULL, 0, NULL),
(20, 1, 1, '初めてですか？', '2016-02-02 11:16:43', NULL, 0, NULL),
(21, 1, 1, '野球', '2016-02-02 11:19:53', NULL, 0, NULL),
(22, 1, 1, 'サッカー', '2016-02-02 11:30:53', NULL, 1, '2016-02-02 12:30:10'),
(23, 1, 1, 'なに？', '2016-02-02 11:31:33', NULL, 0, NULL),
(24, 1, 1, 'いつ？', '2016-02-02 11:32:16', NULL, 0, NULL),
(25, 1, 1, 'いつ？', '2016-02-02 11:34:13', NULL, 0, NULL),
(26, 1, 1, 'koi', '2016-02-02 11:34:39', NULL, 0, NULL),
(27, 1, 1, 'momo', '2016-02-02 11:37:26', NULL, 0, NULL),
(28, 1, 2, '野球', '2016-02-02 11:38:24', NULL, 0, NULL),
(29, 1, 2, 'サッカー', '2016-02-02 19:09:38', NULL, 0, NULL),
(30, 1, 2, 'バスケ', '2016-02-02 19:09:56', NULL, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
