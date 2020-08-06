-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 10:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `fullname`, `user_id`, `email`, `district`, `subject`, `ip`) VALUES
(1, 'Noka', '', 'gfdg', '', 'fggd', ''),
(2, 'Kapungu', '', 'noelikapungu3@gmail.com', '', 'Jaman mnatenda kazi vyema', ''),
(3, 'srxcgf', '', '', '', 'vgj ', ''),
(4, 'root', '6', 'test@gmil.com', '', 'I like ur services', '127.0.0.1'),
(5, 'noka', '6', 'test@gmil.com', '', 'Nakubalii sana kazi yenu wakubwa Tupo pamoja', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chat`
--

CREATE TABLE `tb_chat` (
  `id` int(11) NOT NULL,
  `chat_room_id` int(11) DEFAULT NULL,
  `chat_msg` text DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `id_user1` int(11) DEFAULT NULL,
  `id_user2` int(11) NOT NULL,
  `chat_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_chat`
--

INSERT INTO `tb_chat` (`id`, `chat_room_id`, `chat_msg`, `status`, `id_user1`, `id_user2`, `chat_date`) VALUES
(3, 4, 'Mambo', '1', 7, 1, '2020-08-02 22:55:20'),
(4, 4, 'safi tuu', '1', 7, 1, '2020-08-03 08:49:09'),
(5, 4, 'Nakubaliii', '1', 7, 1, '2020-08-03 09:12:30'),
(6, 4, 'mhsjhgxhjag', '1', 7, 1, '2020-08-03 09:16:35'),
(7, 4, 'Poa pw mkuu', '1', 1, 7, '2020-08-03 09:25:14'),
(8, 4, 'Sawa', '0', 7, 1, '2020-08-03 10:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chat_room`
--

CREATE TABLE `tb_chat_room` (
  `chat_room_id` int(11) NOT NULL,
  `chat_room_name` varchar(255) DEFAULT NULL,
  `last_message` varchar(2000) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `chat_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_chat_room`
--

INSERT INTO `tb_chat_room` (`chat_room_id`, `chat_room_name`, `last_message`, `from_user_id`, `to_user_id`, `status`, `chat_date`) VALUES
(4, 'marwa-admin1', 'Sawa', 7, 1, '1', '2020-08-03 10:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_district`
--

CREATE TABLE `tb_district` (
  `id` int(11) NOT NULL,
  `region_id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_district`
--

INSERT INTO `tb_district` (`id`, `region_id`, `name`) VALUES
(1, '1', 'Ilala'),
(2, '1', 'Kinondoni');

-- --------------------------------------------------------

--
-- Table structure for table `tb_region`
--

CREATE TABLE `tb_region` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_region`
--

INSERT INTO `tb_region` (`id`, `name`) VALUES
(1, 'Dar es Salaam'),
(2, 'Arusha');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reports`
--

CREATE TABLE `tb_reports` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `messages` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `progress` varchar(100) NOT NULL DEFAULT 'NOT YET',
  `img_path` varchar(100) NOT NULL,
  `region_id` varchar(100) NOT NULL,
  `district_id` varchar(100) NOT NULL,
  `ward_id` varchar(100) NOT NULL,
  `incident_area` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  `ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_reports`
--

INSERT INTO `tb_reports` (`id`, `user_id`, `messages`, `email`, `type`, `progress`, `img_path`, `region_id`, `district_id`, `ward_id`, `incident_area`, `date_time`, `ip`) VALUES
(1, '0', 'Herereee', '', 'ANONYMOUS', 'ON PROGRESS', 'img/reports/2020_07_26/kapungu.jpg', '2', '2', '1', 'School', '2020-07-26 18:35:36', '::1'),
(2, '0', 'jghggfuyuiy', '', 'ANONYMOUS', 'ON PROGRESS', 'img/reports/2020_07_26/20200516_134457.jpg', '1', '1', '1', 'Hotel', '2020-07-26 23:53:31', '::1'),
(3, '6', 'nfhhdsgjfgsd', '', 'USER', 'ON PROGRESS', 'img/reports/2020_07_26/20200516_134310.jpg', '1', '1', '1', 'dnfdsgfhs', '2020-07-26 23:58:07', '::1'),
(4, '6', 'nbxbvcvkj', '', 'USER', 'ON PROGRESS', 'img/reports/2020_07_27/20200516_134609.jpg', '1', '1', '1', 'jkfhdsjfgdsgh', '2020-07-27 00:09:22', '::1'),
(5, '6', 'Mtoto kaibiwa', '', 'USER', 'ACCOMPLISHED', '', '1', '2', '1', 'School', '2020-08-03 09:14:00', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ward`
--

CREATE TABLE `tb_ward` (
  `id` int(11) NOT NULL,
  `region_id` varchar(200) NOT NULL,
  `district_id` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ward`
--

INSERT INTO `tb_ward` (`id`, `region_id`, `district_id`, `name`) VALUES
(1, '1', '1', 'Ukonga');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'admin1', 'admin@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'kefa', 'mdf@haj.com', 'admin', '202cb962ac59075b964b07152d234b70'),
(6, 'noka', 'test@gmil.com', 'user', '202cb962ac59075b964b07152d234b70'),
(7, 'marwa', 'test@gmail.com', 'police', '202cb962ac59075b964b07152d234b70'),
(8, 'john', 'test@gmail.com', 'user', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_chat_room`
--
ALTER TABLE `tb_chat_room`
  ADD PRIMARY KEY (`chat_room_id`);

--
-- Indexes for table `tb_district`
--
ALTER TABLE `tb_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_region`
--
ALTER TABLE `tb_region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_reports`
--
ALTER TABLE `tb_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ward`
--
ALTER TABLE `tb_ward`
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
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_chat`
--
ALTER TABLE `tb_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_chat_room`
--
ALTER TABLE `tb_chat_room`
  MODIFY `chat_room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_district`
--
ALTER TABLE `tb_district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_region`
--
ALTER TABLE `tb_region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_reports`
--
ALTER TABLE `tb_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_ward`
--
ALTER TABLE `tb_ward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
