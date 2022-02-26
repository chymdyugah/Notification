-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 04:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notification`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(13, 'ok', '444bcb3a3fcf8389296c49467f27e1d6', 'ok'),
(14, 'ok', '444bcb3a3fcf8389296c49467f27e1d6', 'ok'),
(15, 'kk', 'dc468c70fb574ebd07287b38d0d0676d', 'kk'),
(16, 'kk', 'dc468c70fb574ebd07287b38d0d0676d', 'kk'),
(17, 'jo', '674f33841e2309ffdd24c85dc3b999de', 'jo'),
(18, 'jo', '674f33841e2309ffdd24c85dc3b999de', 'jo'),
(19, 'lo', '7ce8636c076f5f42316676f7ca5ccfbe', 'lo'),
(20, 'lo', '7ce8636c076f5f42316676f7ca5ccfbe', 'lo'),
(21, 'name', 'b068931cc450442b63f5b3d276ea4297', 'name'),
(22, 'name', 'b068931cc450442b63f5b3d276ea4297', 'name');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
