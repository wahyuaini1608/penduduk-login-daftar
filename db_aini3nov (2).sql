-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 05:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aini3nov`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aini3nov`
--

CREATE TABLE `tb_aini3nov` (
  `id` int(10) NOT NULL,
  `nik` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Buddha','Hindu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_aini3nov`
--

INSERT INTO `tb_aini3nov` (`id`, `nik`, `nama`, `agama`) VALUES
(4, 987654321, 'Anton', 'Islam'),
(5, 123456789, 'David', 'Islam'),
(6, 123456, 'Lucas', 'Kristen'),
(7, 7654987, 'Rimba', 'Katolik');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `nama_lengkap`, `username`, `password`, `umur`) VALUES
(1, 'yuaini1608@gmail.com', 'wahyu aini', 'aini', '2771', 17),
(2, 'yshn00@gmail.com', 'kanemoto yoshinori', 'yshn00', '2000', 22),
(6, '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aini3nov`
--
ALTER TABLE `tb_aini3nov`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aini3nov`
--
ALTER TABLE `tb_aini3nov`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
