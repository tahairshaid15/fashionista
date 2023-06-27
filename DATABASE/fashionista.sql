-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 يونيو 2023 الساعة 05:30
-- إصدار الخادم: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashionista`
--

-- --------------------------------------------------------

--
-- بنية الجدول `buying`
--

CREATE TABLE `buying` (
  `id` int(11) NOT NULL,
  `size` varchar(25) NOT NULL,
  `color` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cite` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `buying`
--

INSERT INTO `buying` (`id`, `size`, `color`, `name`, `cite`, `number`, `comments`) VALUES
(2, 'xl', 'احمر', 'طه ارشيد', 'ابو الزيغان', '0779906312', 'وصل لي الطلب الساعه 4 عصر');

-- --------------------------------------------------------

--
-- بنية الجدول `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `images` varchar(100) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `category_images` varchar(100) NOT NULL,
  `category_videos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `price`, `image`, `category`) VALUES
(1, 'فستان', '15', 'fostan.jpg', 'fostan.php'),
(2, 'فستان', '15', 'fostan.jpg', 'fostan.php'),
(3, 'صابون', '15', '3nayh.jpg', '3nayh.php'),
(4, 'صابون', '15', '3nayh.jpg', '3nayh.php'),
(5, 'صابون', '15', '3nayh.jpg', '3nayh.php'),
(6, 'بجامة ستاتي', '20', 'bjama.jpg', 'bjama.php'),
(7, 'بجامة ستاتي', '25', 'bjama.jpg', 'bjama.php'),
(9, 'بجامة ستاتي', '35', 'bjama1.jpg', 'bjama.php'),
(10, 'بجامة ستاتي', '35', 'bjama2.jpg', 'bjama.php'),
(11, 'داخلي', '5', 'dakle.jpg', 'dakle.php'),
(13, 'داخلي', '10', 'dakle1.jpg', 'dakle.php'),
(14, 'داخلي', '15', 'dakle2.jpg', 'dakle.php'),
(16, 'حقيبة مع شنته', '27', 'hkeba1.jpg', 'hkeba.php'),
(17, 'احذية وحقائب', '22', 'hkeba2.jpg', 'hkeba.php'),
(18, 'احذية وحقائب', '15', 'hkeba1.jpg', 'hkeba.php'),
(19, 'مجوهرات ', '20', 'exwar.jpg', 'exwar.php'),
(20, 'مجوهرات ', '25', 'exwar.jpg', 'exwar.php'),
(21, 'مجوهرات ', '25', 'exwar.jpg', 'exwar.php'),
(22, 'مجوهرات ', '25', 'exwar.jpg', 'exwar.php'),
(23, 'لانجري', '35', 'langre.png', 'langre.php'),
(24, 'لانجري', '25', 'langre.png', 'langre.php'),
(25, 'لانجري', '35', 'langre.png', 'langre.php'),
(26, 'لانجري', '20', 'langre.png', 'langre.php'),
(27, 'فستان', '25', 'fostan.jpg', 'fostan.php'),
(28, 'طقم', '25', 'tqm.jpg', 'tqm.php'),
(29, 'طقم', '35', 'tqm.jpg', 'tqm.php'),
(30, 'طقم', '20', 'tqm.jpg', 'tqm.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buying`
--
ALTER TABLE `buying`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buying`
--
ALTER TABLE `buying`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
