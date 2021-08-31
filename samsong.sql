-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 04:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samsong`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(22) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `message` varchar(225) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `contact`, `message`, `date`) VALUES
(1, 'Prince James', 775577736, 'We are very much grateful of you son. Keep up with the courage.', '0000-00-00 00:00:00'),
(2, 'Jane Doe', 888610312, 'Can you design my company website for me? I really want some to ....', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `coverImg` varchar(100) NOT NULL,
  `zipfile` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `postDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `coverImg`, `zipfile`, `category`, `description`, `postDate`) VALUES
(6, 'Car Sticker Design', 'cca17dea870179cba0f872d943965975_car.jfif', 'e5d72bed73cc667ca91f12ec49998888_car.zip', 'Graphic Design', '<p>Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla.</p>\r\n\r\n<h3><strong>Deatils/Description</strong></h3>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Property</td>\r\n			<td>Value</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Extension</td>\r\n			<td>jfif</td>\r\n		</tr>\r\n		<tr>\r\n			<td>folder Type</td>\r\n			<td>zip</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique.</p>\r\n', '2021-08-10 18:59:56.353007'),
(8, 'Certificate Design', '4f1e90052cbfec6e7e99f80246f9bce6_certificate.jpg', '7bc14e88ec36606aa504ecc0ac803599_certificate (2).zip', 'Graphic Design', '<p>Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.</p>\r\n\r\n<h3><strong>Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla.</strong></h3>\r\n\r\n<p>Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique.</p>\r\n', '2021-08-11 10:31:07.369658'),
(9, 'Flyer Revival Flyer', 'f1baba525abc863eda6a444fef6762c1_flyer.jfif', '889cd07d38abcac07b1e1ed73c600f12_bunal flyer.zip', 'Graphic Design', '<p>Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla.</p>\r\n\r\n<p>Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique.</p>\r\n', '2021-08-11 10:35:51.133342'),
(10, 'Test Post Three', 'b4173d93266ec5919ed70d8152533664_bunal flyer.jpg', '6f1c53aaf317751a8c672f9bd50c8b43_certificate (2).zip', 'Graphic Design', '<p>Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla.</p>\r\n\r\n<p>Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique.</p>\r\n', '2021-08-11 12:38:09.671151');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `userType` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `userName`, `phone`, `userType`) VALUES
(1, 'test@gmail.com', 'test', 'Tarnue P. Borbor', 775577736, 'Admin'),
(2, 'myemail@gmail.com', 'myemail', 'Mark', 775577745, 'Admin'),
(3, 'abc@gmail.com', 'abc', 'Mark', 995566, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `videotable`
--

CREATE TABLE `videotable` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` longtext NOT NULL,
  `date_added` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videotable`
--

INSERT INTO `videotable` (`id`, `title`, `description`, `date_added`, `link`) VALUES
(4, 'Entrance Check System', '<p>A university based entrance check system for colleges</p>\r\n', '2021-08-31 01:54:34.250130', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/IBPHGuOb-zA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videotable`
--
ALTER TABLE `videotable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videotable`
--
ALTER TABLE `videotable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
