-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 01:44 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dare`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `ads-code` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `ads-code`) VALUES
(1, '<iframe width=\"300\" height=\"488\" src=\"https://www.youtube.com/embed/n72ypXA1QY0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `dares`
--

CREATE TABLE `dares` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answered` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dares`
--

INSERT INTO `dares` (`id`, `Name`, `question_id`, `answered`, `slug`) VALUES
(1, 'jghjg', 9, 0, 'jghjg'),
(2, 'jghjg', 10, 0, 'jghjg'),
(3, 'jghjg', 11, 0, 'jghjg'),
(4, 'jghjg', 9, 0, 'jghjg'),
(5, 'jghjg', 10, 0, 'jghjg'),
(6, 'jghjg', 11, 0, 'jghjg'),
(7, 'gsgsfg', 9, 0, 'gsgsfg'),
(8, 'gsgsfg', 9, 0, 'ulaqkyv'),
(9, 'gsgsfg', 10, 0, 'ulaqkyv'),
(10, 'gsgsfg', 11, 0, 'ulaqkyv'),
(11, 'gsgsfg', 12, 0, 'ulaqkyv'),
(12, 'hjhgj', 9, 0, 'sd3kzjv'),
(13, 'hjhgj', 11, 0, 'sd3kzjv'),
(14, 'hjhgj', 13, 0, 'sd3kzjv'),
(15, 'hjhgj', 14, 0, 'sd3kzjv'),
(16, 'dfgdfg', 10, 0, 'ipnc64y'),
(17, 'dfgdfg', 11, 0, 'ipnc64y'),
(18, 'gfg', 9, 0, 'up4wd9x'),
(19, 'gfg', 10, 0, 'up4wd9x'),
(20, 'gfg', 11, 0, 'up4wd9x'),
(21, 'gfg', 12, 0, 'up4wd9x'),
(22, 'gfg', 13, 0, 'up4wd9x'),
(23, 'gfg', 14, 0, 'up4wd9x'),
(24, 'gfg', 16, 0, 'up4wd9x');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `favicon` varchar(24234) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `title`, `description`, `images`, `favicon`) VALUES
(1, 'dares site script', 'this is the descript123456gfdgfd', '6-min.png', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `image`) VALUES
(9, 'What is his Talent?', '1-min.png'),
(10, 'Which vegetable he/she like?', '3-min.png'),
(11, 'Write is his/her funny name?', '2-min.png'),
(12, 'Which job suites his/her?', '5-min.png'),
(13, 'Write name of his/her GF/BF?', '4-min.png'),
(14, 'Which of his/her habit irritates you?', '7-min.png'),
(15, 'Do you want to steal anything from his/her?', '8-min.png'),
(16, 'Which color does not suites his/her?', '9-min.png'),
(17, 'A song that you dedicate him/her?', 'home.png'),
(18, 'His/her name in your mobile contact?', '10-min.png'),
(21, 'Images for whatsapp', '002 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `solved`
--

CREATE TABLE `solved` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solved`
--

INSERT INTO `solved` (`id`, `name`, `slug`, `question_id`, `answer`) VALUES
(1, 'ghgh', 'jghjg', 9, 'jhjhj'),
(2, 'ghgh', 'jghjg', 9, 'jhjhjk'),
(3, 'ghgh', 'jghjg', 9, 'hjh'),
(4, 'ghgh', 'jghjg', 11, 'fh'),
(5, 'ghgh', 'jghjg', 9, 'kh'),
(6, 'ghgh', 'jghjg', 10, 'hk'),
(7, 'ghgh', 'jghjg', 11, 'hjk'),
(8, 'ghgh', 'jghjg', 9, 'hjk'),
(9, 'ghgh', 'jghjg', 10, 'hjk'),
(10, 'ghgh', 'jghjg', 11, 'k'),
(11, 'bnbhjghj', 'sd3kzjv', 9, 'hj'),
(12, 'bnbhjghj', 'sd3kzjv', 11, 'hjh'),
(13, 'bnbhjghj', 'sd3kzjv', 13, 'hjhgj'),
(14, 'hgjhgj', 'sd3kzjv', 9, 'jhj'),
(15, 'hgjhgj', 'sd3kzjv', 11, 'ghjhj'),
(16, 'hgjhgj', 'sd3kzjv', 13, 'gj'),
(17, 'ghjghj', 'sd3kzjv', 9, 'ghj'),
(18, 'ghjghj', 'sd3kzjv', 11, 'ghj'),
(19, 'ghjghj', 'sd3kzjv', 13, 'ghj'),
(20, 'ghjghj', 'sd3kzjv', 9, 'jghj'),
(21, 'ghjghj', 'sd3kzjv', 9, 'ghjgh'),
(22, 'ghjghj', 'sd3kzjv', 9, 'gjjgjhg'),
(23, 'ghjghj', 'sd3kzjv', 9, 'hj'),
(24, 'ghjghj', 'sd3kzjv', 9, 'j'),
(25, 'ghjghj', 'sd3kzjv', 11, 'hgj'),
(26, 'ghjghj', 'sd3kzjv', 13, 'ghj'),
(27, 'gj', 'sd3kzjv', 9, 'ghjh'),
(28, 'gj', 'sd3kzjv', 11, 'ghj'),
(29, 'gj', 'sd3kzjv', 13, 'hgj'),
(30, 'ghjhgj', 'sd3kzjv', 9, 'ghj'),
(31, 'ghjhgj', 'sd3kzjv', 9, 'gj'),
(32, 'ghjhgj', 'sd3kzjv', 9, 'ghj'),
(33, 'fghfggkghkh', 'sd3kzjv', 9, 'ghj'),
(34, 'fghfggkghkh', 'sd3kzjv', 11, 'gjgj'),
(35, 'fghfggkghkh', 'sd3kzjv', 13, 'ghjgj'),
(36, 'fghfggkghkh', 'sd3kzjv', 14, 'gjfghj'),
(37, 'gfhfgh', 'jghjg', 9, 'jghj'),
(38, 'gfhfgh', 'jghjg', 10, 'ghjg'),
(39, 'gfhfgh', 'jghjg', 11, 'ghjgjh'),
(40, 'gfhfgh', 'jghjg', 9, 'ghjghj'),
(41, 'gfhfgh', 'jghjg', 10, 'g'),
(42, 'gfhfgh', 'jghjg', 11, 'ghj'),
(43, 'acept name', 'up4wd9x', 9, 'example'),
(44, 'acept name', 'up4wd9x', 10, 'hjk'),
(45, 'acept name', 'up4wd9x', 11, 'fsdf'),
(46, 'acept name', 'up4wd9x', 12, 'fgdfg'),
(47, 'acept name', 'up4wd9x', 13, 'dfgdfg'),
(48, 'acept name', 'up4wd9x', 14, 'dfgdfg'),
(49, 'acept name', 'up4wd9x', 16, 'dfgdg'),
(50, 'ghjfghj', 'jghjg', 9, 'ghjfghj'),
(51, 'ghjfghj', 'jghjg', 10, 'ghjghj'),
(52, 'ghjfghj', 'jghjg', 11, 'gfjghj'),
(53, 'ghjfghj', 'jghjg', 9, 'ghjfgjh'),
(54, 'ghjfghj', 'jghjg', 10, 'ghjghj'),
(55, 'ghjfghj', 'jghjg', 11, 'ghjfghj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL DEFAULT '$2y$10$quickbrownfoxjumpsover'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `salt`) VALUES
(1, 'admin', '$1$J1EPWx/B$isgcaX9tRFMAN2uubLXuh0', '$2y$10$quickbrownfoxjumpsover');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dares`
--
ALTER TABLE `dares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solved`
--
ALTER TABLE `solved`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dares`
--
ALTER TABLE `dares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `solved`
--
ALTER TABLE `solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dares`
--
ALTER TABLE `dares`
  ADD CONSTRAINT `dares_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
