-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2015 at 04:15 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `created_at`, `updated_at`, `remember_token`) VALUES
(2, 'kenny', '827ccb0eea8a706c4c34a16891f84e7b', 'kenny@qhonline.edu.vn', 2, '2015-06-22 07:56:43', '0000-00-00 00:00:00', ''),
(3, 'jacky', '12345', 'jacky@qhonline.edu.vn', 1, '2015-06-22 07:56:43', '0000-00-00 00:00:00', ''),
(4, 'vicky123', '12345', 'vicky@qhonline.edu.vn', 1, '2015-06-22 07:56:43', '0000-00-00 00:00:00', ''),
(6, 'kenny9999', '12345', 'kenny9999@gmail.com', 1, '2015-06-22 07:56:43', '0000-00-00 00:00:00', ''),
(10, 'fdffff', '', '', 2, '2015-06-22 07:56:43', '0000-00-00 00:00:00', ''),
(11, 'albert', '202cb962ac59075b964b07152d234b70', 'albert@gmail.com', 1, '2015-06-22 07:56:43', '0000-00-00 00:00:00', ''),
(12, 'ti123', '827ccb0eea8a706c4c34a16891f84e7b', 'ti@gmail.com', 1, '2015-06-22 07:56:43', '0000-00-00 00:00:00', ''),
(13, 'lili', '202cb962ac59075b964b07152d234b70', 'lili@gmail.com', 1, '2015-06-22 07:56:43', '0000-00-00 00:00:00', ''),
(14, 'lucas', '827ccb0eea8a706c4c34a16891f84e7b', 'lucas123@gmail.com', 1, '2015-06-22 07:56:43', '0000-00-00 00:00:00', ''),
(15, 'anna', '827ccb0eea8a706c4c34a16891f84e7b', 'anna@gmail.com', 2, '2015-06-22 07:56:43', '0000-00-00 00:00:00', ''),
(16, 'neymar', '70080aa08b4fe2b66aae3baea7e4a99f', 'neymar@gmail.com', 1, '2015-06-22 07:56:43', '0000-00-00 00:00:00', ''),
(18, 'danny', '$2y$10$q7zu2ozULezHZk077Vyafeu2rDP0dvq4PJM3ho.rh.A', 'danny@gmail.com', 1, '2015-06-22 08:09:43', '0000-00-00 00:00:00', ''),
(19, 'test', '202cb962ac59075b964b07152d234b70', 'test@gmail.com', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(22, 'sting', 'baff3413d5c1c99fc516c977b6f12d64', 'sting@gmail.com', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(23, 'dustin', '$2y$10$Pox4AXqJ7xw8qp9k/FWvduQgXYNe/kZ0tAFLyKTQO/dJvTnqOcnZ6', 'dustin@gmail.com', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`), ADD KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
