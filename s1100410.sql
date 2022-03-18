-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-02-06 17:02:27
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `s1100410`
--

-- --------------------------------------------------------

--
-- 資料表結構 `pf_admin`
--

CREATE TABLE `pf_admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `pf_admin`
--

INSERT INTO `pf_admin` (`id`, `acc`, `pw`, `img`) VALUES
(1, 'sss2', '1234', ''),
(3, 'ff2', 'ff', ''),
(6, '2121', '', ''),
(9, '32323', '', ''),
(10, '212313', '', ''),
(11, '3232323323', '', ''),
(12, '232', '', ''),
(13, '0.0', '', ''),
(14, '00', '', ''),
(15, '00', '', ''),
(16, '00', '', ''),
(17, '00', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `pf_bottom`
--

CREATE TABLE `pf_bottom` (
  `id` int(11) UNSIGNED NOT NULL,
  `bottom` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `pf_bottom`
--

INSERT INTO `pf_bottom` (`id`, `bottom`) VALUES
(1, 'Copyright © 2022, All Rights Reserved '),
(2, '33');

-- --------------------------------------------------------

--
-- 資料表結構 `pf_collection`
--

CREATE TABLE `pf_collection` (
  `id` int(11) UNSIGNED NOT NULL,
  `titles` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `category` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `icon_eyes` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `icon_gh` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_eyes` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_gh` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0,
  `sort` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `pf_collection`
--

INSERT INTO `pf_collection` (`id`, `titles`, `img`, `text`, `category`, `icon_eyes`, `icon_gh`, `link_eyes`, `link_gh`, `sh`, `sort`, `rank`) VALUES
(7, 'COLLECTION', 'cal01.png', 'Calendar', 'PHP', 'far fa-eye', 'fab fa-github', 'http://220.128.133.15/s1100410/calendarr/index.php?year=2021&month=01', 'https://github.com/teatimehr13/calendar', 1, 'b2n', 2),
(8, '', 'sv01-1.png', 'Polling Website', 'PHP', 'far fa-eye', 'fab fa-github', 'http://220.128.133.15/s1100410/hello/', 'https://github.com/teatimehr13/survey', 1, 'b2n', 3),
(11, '', 'tc01.jpg', 'Calendar', 'PHOTOSHOP', 'far fa-eye', '', 'img/tiger calendar 01.jpg', '', 1, 'others', 4),
(12, '', 'pm01.png', 'Bannber', 'PHOTOSHOP', 'far fa-eye', '', 'img/promo01.png', '', 1, 'others', 5),
(20, '', '', '', 'dd', '', '', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `pf_me`
--

CREATE TABLE `pf_me` (
  `id` int(11) UNSIGNED NOT NULL,
  `titles` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ordered` varchar(10) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `pf_me`
--

INSERT INTO `pf_me` (`id`, `titles`, `img`, `text`, `ordered`, `sh`) VALUES
(4, 'ME', 'FB200BBD-D5D0-457B-A702-A53D37533EA6.jpg', 'Hello this is Henry.\r\n<br><br>\r\nI graduated from the Chihlee University of Technology with a major in International trade.', '1', 1),
(6, '', '', 'I am interested in connecting various people and products from different corners of the globe.', '2', 1),
(7, '', '', 'Currently, I was learning computer programing in the Workforce Development Agency, Ministry of\r\n                    Labor.<br> I will be a good programmer and will keep stepping it up.', '3', 1),
(12, '', '', 'Thank you for your watching ! <br>\r\nIf you interested in  my collection, please contact me!', '4', 1),
(15, '', '', 'fffsd', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `pf_skills`
--

CREATE TABLE `pf_skills` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `titles` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `icon` varchar(132) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `class` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `position` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `pf_skills`
--

INSERT INTO `pf_skills` (`id`, `img`, `titles`, `icon`, `text`, `class`, `position`, `sh`) VALUES
(14, '', 'SKILLS', 'fab fa-php', '使用PHP串接SQL可將資料放在伺服器端進行驗證或讀取，避免資料的暴露或被攻擊。', 'phpContent', 'top', 1),
(15, '', '', 'fab fa-js-square', 'JS在商業上可搭配GTM設定滑鼠停留事件(onmouseover)追蹤，紀錄使用者停留在特定網頁時間長度;或使用滑鼠點擊事件紀錄商品被點擊的次數。', 'jsContent', 'bottom', 1),
(16, '', '', 'fab fa-html5', 'HTML5支援影音檔的播放及新的網頁區塊標籤，讓電腦更容易辨認網頁架構藉此提高搜尋引擎排名。', 'htmlContent', 'left', 1),
(17, '', '', 'fab fa-css3-alt', 'CSS3新增了文字陰影、盒子模型、漸變及偽元素等讓網頁呈現方式更加多樣化的新選擇器。', 'cssContent', 'right', 1),
(25, 'c', 'SKILLS', 'c', 'c000', 'c', '', 0),
(2126, '', '', 'ff', '', '', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `pf_title`
--

CREATE TABLE `pf_title` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `pf_title`
--

INSERT INTO `pf_title` (`id`, `img`, `text`, `sh`) VALUES
(1, '01B04.jpg', '', 0),
(2, 'henry_logo.png', 'tt', 1),
(16, 'bg.png', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `pf_total`
--

CREATE TABLE `pf_total` (
  `id` int(11) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `pf_total`
--

INSERT INTO `pf_total` (`id`, `total`) VALUES
(1, 5);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `pf_admin`
--
ALTER TABLE `pf_admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pf_bottom`
--
ALTER TABLE `pf_bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pf_collection`
--
ALTER TABLE `pf_collection`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pf_me`
--
ALTER TABLE `pf_me`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pf_skills`
--
ALTER TABLE `pf_skills`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pf_title`
--
ALTER TABLE `pf_title`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pf_total`
--
ALTER TABLE `pf_total`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pf_admin`
--
ALTER TABLE `pf_admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pf_bottom`
--
ALTER TABLE `pf_bottom`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pf_collection`
--
ALTER TABLE `pf_collection`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pf_me`
--
ALTER TABLE `pf_me`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pf_skills`
--
ALTER TABLE `pf_skills`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2127;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pf_title`
--
ALTER TABLE `pf_title`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pf_total`
--
ALTER TABLE `pf_total`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
