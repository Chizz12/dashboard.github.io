-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 03:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `advanture`
--

CREATE TABLE `advanture` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advanture`
--

INSERT INTO `advanture` (`id`, `nis`, `name`, `umur`, `kelas`) VALUES
(28, 2022050101, 'satya', '18', 'XI-PPLG'),
(35, 2022050102, 'Istimoy', '20', 'XI-PPLG'),
(37, 2022050103, 'CISTIUS KA', '19', 'XI-PPLG'),
(38, 2022050104, 'idoy', '15', 'X-PPLG');

-- --------------------------------------------------------

--
-- Table structure for table `pplg_db`
--

CREATE TABLE `pplg_db` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `collected` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pplg_db`
--

INSERT INTO `pplg_db` (`id`, `nis`, `name`, `age`, `gender`, `status`, `collected`, `os`) VALUES
(1, 212210542, 'Akmal Muhamad Kamil', 17, 'Man', 'Available', 'Rp 100000', '97'),
(2, 212210541, 'Agung Muhammad Fajri', 17, 'Man', 'Available', 'Rp 5000', '87');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(6, 'wewe', '$2y$10$DFBWKQetn/sdm1gwt6X.q.ANlRtPLwmpisvsdn.EeiPJTnsWV/qJm', 'wewe@gmail.com'),
(7, 'admin', '$2y$10$zPMuzzSxtfHqUinZGkDy2exmIy.DP7.QxcuBcmrEfNFJn7O6j3sGS', 'admin@gmail.com'),
(8, 'yuyu', '$2y$10$Sk0SH5jHEi/okt7JmeyeX.kmLEgEJ4i0Bhk4um0Su3KLBFI6CqHze', 'yuyu@gmail.com'),
(9, 'lala', '$2y$10$uKwI2MmBjPxUGXcWxrDYtuYGQAmeOWCdRb2JCeWXn0uh47Qcv30tK', 'lala@gmail.com'),
(10, 'huhu', '$2y$10$9Mt5.bVHrxO0aH1QGdl/1OaaF7CrY6OJUvVJdfYHO4OChjn79Xuba', 'huhu@gmail.com'),
(11, 'sasasa', '$2y$10$ejLrvEURZkx9w1HAELRga.W0vekN5t64AJR.Jy6zeQjcryWocfFSi', 'sasasa@gmail.com'),
(12, 'tt', '$2y$10$O/llkbzyChNuln0FO2fVo.AKyqkoYGlS9ZEhr.OlSCd.8K206ukh6', 'tt@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advanture`
--
ALTER TABLE `advanture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pplg_db`
--
ALTER TABLE `pplg_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advanture`
--
ALTER TABLE `advanture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `pplg_db`
--
ALTER TABLE `pplg_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
