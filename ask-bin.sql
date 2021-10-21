-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 01:50 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ask-bin`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` smallint(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `formname` varchar(255) NOT NULL,
  `numberofquestions` smallint(11) NOT NULL,
  `questions` varchar(2550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `owner`, `formname`, `numberofquestions`, `questions`) VALUES
(8, 'ahmed0saber', 'test', 3, '(1) What is your name ?\r\n(2) What is your age ?\r\n(3) What is your fav color ?'),
(11, 'ahmed0saber', 'form1', 3, '(1) First Name\r\n(2) Last Name\r\n(3) Phone Number\r\n'),
(12, 'ahmed0saber', 'quiz', 4, '(1) what is your name ?\r\n(2) your job ?\r\n(3) what is your country ?\r\n(4) best wishes !\r\n'),
(13, 'AhmedSaber', 'testing', 3, '(1) a\r\n(2) b\r\n(3) c\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `submits`
--

CREATE TABLE `submits` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `formname` varchar(255) NOT NULL,
  `answers` varchar(2550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ahmed0saber', 'ahmed0saber33@gmail.com', 'b7c24dc09c5511d3321bf14c029ffd21'),
(2, 'AhmedSaber', 'ahmed0saber11@gmail.com', 'b7c24dc09c5511d3321bf14c029ffd21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submits`
--
ALTER TABLE `submits`
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
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `submits`
--
ALTER TABLE `submits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
