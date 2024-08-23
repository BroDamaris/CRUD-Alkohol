-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2024 at 01:11 PM
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
-- Database: `sidomuncul`
--

-- --------------------------------------------------------

--
-- Table structure for table `alcohol`
--

CREATE TABLE `alcohol` (
  `id` int(11) NOT NULL,
  `nama_alkohol` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alcohol`
--

INSERT INTO `alcohol` (`id`, `nama_alkohol`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Intisari Anggur Hijau', 'A mixture of Green Grapes and Ginseng with real grapes and secret ingredients from Ginseng Grapes, it tastes fresh and has good properties.', '65000', '66c86271dacf5.jpg'),
(3, 'Arak Bali', 'enaknya dicampur tebs atau sprite biar ga panas', '50000', '66c8632a4be46.jpg'),
(4, 'East Indies - Archipelago Gin', 'gin bisa mabok terakhiran brutal', '590000', '66c86888e752e.jpg'),
(5, 'Vibe Black Tea', 'enak banget lohh bisa buat mabukin damen', '300000', '66c862b4427dc.jpg'),
(6, 'bakso', 'Bakso kuah bigboss anying', '40000', '66c86bb326ec8.png'),
(9, 'Big Boss', 'Big boss campur extra joss enak lohh apalagi es batu', '25000', '66c86b6ef3fec.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alcohol`
--
ALTER TABLE `alcohol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alcohol`
--
ALTER TABLE `alcohol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
