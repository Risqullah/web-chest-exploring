-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2025 at 05:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `level`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_info`
--

CREATE TABLE `game_info` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_posted` datetime DEFAULT current_timestamp(),
  `author` varchar(60) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_info`
--

INSERT INTO `game_info` (`id`, `title`, `content`, `date_posted`, `author`, `gambar`) VALUES
(1, 'CBT Website', 'pada kali ini kami mau melakukan CBT untuk website ini jadi stytune ya', '2025-07-10 19:59:22', 'admin', ''),
(3, 'percobaan', 'kami akan melakukan percobaan pada website', '2025-07-10 22:39:37', 'admin', ''),
(10, 'tes ', 'tes ', '2025-07-11 08:18:29', 'admin', ''),
(12, 'tes', 'tes', '2025-07-11 09:33:30', 'admin', '0'),
(13, 'tes foto', 'tes lah ', '2025-07-11 09:51:24', 'admin', '0'),
(14, 'tes gambar 1', 'tes tes aja ', '2025-07-11 10:09:22', 'admin', '0'),
(15, 'tes gambar ui', 'cuma tes', '2025-07-11 10:20:14', 'admin', '0'),
(16, 'peh', 'peh', '2025-07-11 10:25:56', 'admin', '0'),
(17, 'p', 'p', '2025-07-11 10:27:09', 'admin', '0'),
(18, 'p1', 'p1', '2025-07-11 10:28:20', 'admin', '0');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `timestamp` datetime DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `timestamp`, `user_id`) VALUES
(57, 'hai', '2025-07-11 07:20:16', 5),
(61, 'hai bambang', '2025-07-11 07:42:40', 4),
(62, 'hai guys', '2025-07-11 07:43:34', 10),
(64, 'hai', '2025-07-11 08:18:48', 3),
(65, 'test', '2025-07-11 08:25:53', 12),
(66, 'hallo', '2025-07-11 08:36:14', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user'),
(3, 'iki', 'iki', 'user'),
(4, 'budi', 'budi', 'user'),
(5, 'bambang', 'bambang', 'user'),
(6, 'benet', 'benet', 'user'),
(7, 'badu', 'badu', 'user'),
(8, 'lapau', 'lapau', 'user'),
(9, 'iki19', 'iki', 'user'),
(10, 'nopal', 'nopal', 'user'),
(11, 'tes1', 'tes1', 'user'),
(12, 'pe', 'pe', 'user'),
(13, 'iki20', 'iki', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_info`
--
ALTER TABLE `game_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_info`
--
ALTER TABLE `game_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
