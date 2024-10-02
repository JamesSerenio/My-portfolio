-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2024 at 06:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `project_name`, `message`) VALUES
(40, 'janereyes', 'janereyes363@gmail.com', 'book management', 'dawdwa'),
(41, 'janereyes', 'janereyes363@gmail.com', 'book management', 'dwada'),
(42, 'janereyes', 'janereyes363@gmail.com', 'book management', 'dwada'),
(43, 'janereyes', 'janereyes363@gmail.com', 'book management', 'dwada'),
(44, 'janereyes', 'janereyes363@gmail.com', 'book management', 'dwada'),
(45, 'janereyes', 'janereyes363@gmail.com', 'book management', 'dwada'),
(46, 'janereyes', 'janereyes363@gmail.com', 'book management', 'dwada'),
(47, 'janereyes', 'janereyes363@gmail.com', 'book management', 'dwada'),
(48, 'janereyes', 'janereyes363@gmail.com', 'dawdwa', 'dwadwa'),
(49, 'janereyes', 'janereyes363@gmail.com', 'dawdwa', 'dwadwa'),
(50, 'janereyes', 'janereyes363@gmail.com', 'dawdwa', 'dwadwa'),
(51, 'janereyes', 'dwadaw@wadwa', 'dwadwa', 'dwadwa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
