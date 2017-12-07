-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2017 at 09:56 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demomvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `content`, `author`, `created_at`) VALUES
(2, 'Em Gái Mưa - Hương Tràm', 'Mưa trôi cả bầu trời nắng trượt theo những nỗi buồn Thấm ướt lệ sầu môi đắng vì đánh mất hy vọng', 'Mưa trôi cả bầu trời nắng trượt theo những nỗi buồn\r\nThấm ướt lệ sầu môi đắng vì đánh mất hy vọng\r\nLần đầu gặp nhau dưới mưa, trái tim rộn ràng bởi ánh nhìn\r\nTình cảm dầm mưa thấm lâu, em nào ngờ.\r\n\r\nMình hợp nhau đến như vậy thế nhưng không phải là yêu\r\nVà em muốn hỏi anh rằng chúng ta là thế nào\r\nRồi lặng người đến vô tận, trách sao được sự tàn nhẫn\r\nAnh trót vô tình thương em như là em gái.\r\n\r\n[ĐK:]\r\nĐừng lo lắng về em khi mà em vẫn còn yêu anh\r\nCàng xa lánh, càng trống vắng, tim cứ đau và nhớ lắm\r\nĐành phải buông hết tất cả thôi, nụ cười mỉm sau bờ môi\r\nẤm áp dịu dàng vai anh, em đã bao lần yên giấc.\r\n\r\nNhìn trên cao khoảng trời yêu mà em lỡ dành cho anh\r\nGiờ mây đen quyện thành bão, giông tố đang dần kéo đến\r\nChồi non háo hức đang đợi mưa, rất giống em ngày xưa\r\nMưa trôi để lại ngây thơ trong giấc mơ buốt lạnh.\r\n\r\n[Mr.Siro:]\r\nTựa như yêu nhưng đến khi ai đó chối từ\r\nTrời đất như rung chuyển một người vỡ mộng.\r\n\r\nNhớ nhưng chẳng thể ở bên\r\nNuốt nước mắt lòng buồn tênh\r\nI can not feel your love.', 'Ubuntu', '2017-12-06 21:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '123456', 'admin@gmail.com'),
(2, 'long', '123456', 'long@gmail.com'),
(3, 'Ubuntu', '123456', 'ubuntu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
