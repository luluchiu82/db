-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-05-02 18:30:58
-- 伺服器版本： 10.4.25-MariaDB
-- PHP 版本： 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db_test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `留言區`
--

CREATE TABLE `留言區` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `留言區`
--

INSERT INTO `留言區` (`id`, `message`, `timestamp`) VALUES
(173, '11111', '2023-05-02 21:08:06'),
(174, '1111111', '2023-05-02 21:08:13'),
(175, '1111111', '2023-05-02 21:11:29'),
(176, '1111111', '2023-05-02 21:18:00'),
(177, '111111', '2023-05-02 21:18:05'),
(178, '111111', '2023-05-02 21:18:31'),
(179, '111111', '2023-05-02 21:19:50'),
(180, '111111', '2023-05-02 21:19:54'),
(181, '111111', '2023-05-02 21:20:19'),
(182, '111111', '2023-05-02 21:23:51'),
(183, '123', '2023-05-02 21:25:39'),
(184, '123', '2023-05-02 21:31:59'),
(185, '123', '2023-05-02 21:36:11'),
(186, '123', '2023-05-02 21:36:36'),
(187, '123', '2023-05-02 21:36:53'),
(188, '1333333', '2023-05-02 21:37:00'),
(189, '1333333', '2023-05-02 21:37:06'),
(190, '6161', '2023-05-02 21:44:13'),
(191, '566', '2023-05-02 21:44:25'),
(192, '566', '2023-05-02 21:44:36'),
(193, '566', '2023-05-02 21:44:46'),
(194, '616', '2023-05-02 21:45:27'),
(195, '616', '2023-05-02 21:45:32'),
(196, '616', '2023-05-02 21:46:58'),
(197, '156651', '2023-05-02 21:48:19'),
(198, '156651', '2023-05-02 21:48:24'),
(199, '156651', '2023-05-02 21:48:51'),
(200, '156651', '2023-05-02 22:05:30'),
(201, '166161', '2023-05-02 22:05:35'),
(202, '166161', '2023-05-02 22:05:40'),
(203, '166161', '2023-05-02 22:08:57'),
(204, '166161', '2023-05-02 22:09:02'),
(205, '166161', '2023-05-02 22:13:12'),
(206, '166161', '2023-05-02 22:18:49'),
(207, '166161', '2023-05-02 22:19:34'),
(208, '166161', '2023-05-02 22:21:03'),
(209, '166161', '2023-05-02 22:25:19'),
(210, '166161', '2023-05-02 22:26:31'),
(211, '166161', '2023-05-02 22:29:29'),
(212, '166161', '2023-05-02 22:30:22'),
(213, '166161', '2023-05-02 23:51:34'),
(214, '166161', '2023-05-02 23:55:00'),
(215, '166161', '2023-05-02 23:56:45'),
(216, '166161', '2023-05-02 23:58:22'),
(217, '166161', '2023-05-02 23:59:58'),
(218, '166161', '2023-05-03 00:00:24'),
(219, '166161', '2023-05-03 00:03:26'),
(220, '166161', '2023-05-03 00:04:10'),
(221, '166161', '2023-05-03 00:04:47'),
(222, '166161', '2023-05-03 00:06:02'),
(223, '166161', '2023-05-03 00:08:47'),
(224, '166161', '2023-05-03 00:12:05'),
(225, '166161', '2023-05-03 00:12:15'),
(226, '166161', '2023-05-03 00:12:54'),
(227, '166161', '2023-05-03 00:13:42'),
(228, '166161', '2023-05-03 00:15:51'),
(229, '166161', '2023-05-03 00:18:18'),
(230, '166161', '2023-05-03 00:19:05'),
(231, '166161', '2023-05-03 00:19:50'),
(232, '166161', '2023-05-03 00:20:39'),
(233, '166161', '2023-05-03 00:21:32'),
(234, '166161', '2023-05-03 00:25:59'),
(235, '166161', '2023-05-03 00:26:22');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `留言區`
--
ALTER TABLE `留言區`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `留言區`
--
ALTER TABLE `留言區`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
