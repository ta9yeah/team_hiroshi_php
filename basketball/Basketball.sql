-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016 年 1 月 26 日 11:20
-- サーバのバージョン： 5.6.28
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Basketball`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `alerts`
--

CREATE TABLE IF NOT EXISTS `alerts` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `alertmodel_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `delete_flag` int(11) NOT NULL DEFAULT '0',
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `alert_models`
--

CREATE TABLE IF NOT EXISTS `alert_models` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `id` int(11) NOT NULL,
  `master_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `deadline_date` date NOT NULL,
  `deadline_time` time NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `type` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `people_min` int(11) NOT NULL,
  `people_max` int(11) NOT NULL,
  `place_type` int(11) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_url` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `status_flag` int(11) NOT NULL DEFAULT '0',
  `modified` datetime DEFAULT NULL,
  `cancelled` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `matches`
--

INSERT INTO `matches` (`id`, `master_id`, `date`, `start_time`, `end_time`, `deadline_date`, `deadline_time`, `title`, `comment`, `type`, `level`, `people_min`, `people_max`, `place_type`, `place_name`, `address`, `address_url`, `created`, `status_flag`, `modified`, `cancelled`) VALUES
(1, 1, '2016-02-20', '09:00:00', '10:00:00', '2016-02-15', '02:00:00', 'Gachinko match with Shinya-san', '本気で戦う６０分、頑張りましょう', 1, 1, 12, 20, 1, 'AYALA mall', 'AYALA', NULL, NULL, 0, NULL, NULL),
(2, 1, '2016-02-23', '15:00:00', '19:00:00', '2016-02-21', '05:00:00', 'yuruyuru ', 'yururyuru', 1, 2, 20, 50, 2, 'SM seaside', 'SM seaside', NULL, NULL, 0, NULL, NULL),
(3, 2, '2016-01-31', '03:00:00', '05:00:00', '2016-01-29', '12:00:00', 'Midnight basketball', 'Do you understand this mean?', 2, 1, 6, 12, 1, 'ラグワージャ', 'ラグワージャ', NULL, NULL, 0, NULL, NULL),
(4, 3, '2016-02-14', '09:00:00', '11:00:00', '2016-02-10', '11:00:00', 'VD match', 'If you win, you can get chocolates', 1, 1, 1, 2, 2, 'flat 1', 'flat 1', NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `match_images`
--

CREATE TABLE IF NOT EXISTS `match_images` (
  `id` int(11) NOT NULL,
  `match_type` int(11) NOT NULL,
  `match_level` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `match_members`
--

CREATE TABLE IF NOT EXISTS `match_members` (
  `id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cancel_flag` int(11) NOT NULL DEFAULT '0',
  `applied` datetime DEFAULT NULL,
  `cancelled` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `delete_flag` int(11) NOT NULL DEFAULT '0',
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`, `delete_flag`, `deleted`) VALUES
(1, 'yo_kubocchi@hotmail.com', 'basketball0825', NULL, NULL, 0, NULL),
(2, 'gogogo@gmail.com', 'gogogo', NULL, NULL, 0, NULL),
(3, 'gangangan@gmail.com', 'gangangan', NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `name_flag` int(11) DEFAULT '0',
  `nickname` varchar(30) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `birthday_flag` int(11) DEFAULT '0',
  `basketball_level` int(11) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `height` double DEFAULT NULL,
  `comment` text,
  `picture` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alert_models`
--
ALTER TABLE `alert_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_images`
--
ALTER TABLE `match_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_members`
--
ALTER TABLE `match_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alerts`
--
ALTER TABLE `alerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `alert_models`
--
ALTER TABLE `alert_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `match_images`
--
ALTER TABLE `match_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `match_members`
--
ALTER TABLE `match_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
