-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 يوليو 2018 الساعة 04:06
-- إصدار الخادم: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `post`
--

INSERT INTO `post` (`id`, `username`, `post`, `time`) VALUES
(1, 'Mohammed', 'لمتحدث بإسم حركة حماس عبد اللطيف القانوع:\r\n\r\nشعبنا بعد مائة يوم من مسيرات العودة أقرب إلى تحقيق أهدافها وجني ثمارها ولم يزل أشد ثباتاً على مواقفه وأكثر التفافاً حول حقوقه وثوابته الوطنية!\r\n\r\nكلنا نقول مع بعض #احا!!', '2018-07-13 13:34:45'),
(3, 'ahmed monir', 'مرحبا \r\nلو سمحتو كتاب unity 3D', '2018-07-14 22:47:46'),
(5, '', 'ههههههههههههههههههههههههه...واخيرا زبطت', '2018-07-14 23:25:42'),
(6, '', 'معقول تزبط....واخيرا زبطت', '2018-07-14 23:27:42'),
(9, '', 'هههههههه...انا بكلمك من الجوال', '2018-07-14 23:33:25'),
(10, '', 'هيو زابطة', '2018-07-14 23:33:36'),
(12, 'Mohammed Abbas', 'اهلا بكم في موقعي', '2018-07-14 23:39:21'),
(13, 'Mohammed Abbas', 'تمت الاضافة بنجاح', '2018-07-14 23:39:33'),
(14, 'Mohammed Abbas', 'يوم جديد على خير بسم الله الرحمن الرحيم', '2018-07-15 11:27:13'),
(15, 'Mohammed Abbas', 'ههههه..واخيرا بحمد الله تم العمل بنجاح', '2018-07-15 11:46:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
