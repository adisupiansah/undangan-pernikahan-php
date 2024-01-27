-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2024 at 01:10 PM
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
-- Database: `undangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pernikahan`
--

CREATE TABLE `pernikahan` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pernikahan`
--

INSERT INTO `pernikahan` (`id`, `nama`, `status`, `komentar`, `date`) VALUES
(21, 'adadad', 'Berhalangan', 'adddddddddddddd', '2024-01-27 02:58:08'),
(22, 'Putri syahfira', 'Hadir', 'Selamat wahyu atas pernikahannya, happy wedding !!', '2024-01-27 02:59:34'),
(23, 'febri', 'Berhalangan', 'huhahuhau selamat', '2024-01-27 03:10:01'),
(24, 'adi boghel', 'Hadir', 'wedding', '2024-01-27 03:10:01'),
(25, 'teh kotak', 'Hadir', 'selamat suksess', '2024-01-27 03:10:55'),
(26, 'teh bootl', 'Hadir', 'Happy samawa', '2024-01-27 03:10:55'),
(27, 'panthr', 'Berhalangan', 'keren wak dh nikah aj', '2024-01-27 03:11:31'),
(28, 'wak duyy', 'Hadir', 'tk bisa mbar lg deh', '2024-01-27 03:11:31'),
(29, 'latip', 'Berhalangan', 'sorry wak tk bisah datang, dan selamat ya wak', '2024-01-27 03:12:32'),
(30, 'Zilong', 'Hadir', 'ayoo hijaukan dan tumbuhkan dunia', '2024-01-27 03:12:32'),
(31, 'nana', 'Berhalangan', 'mantap dh nikah aj, enakla ngewe', '2024-01-27 03:13:07'),
(32, 'lesley', 'Hadir', 'keren samawa', '2024-01-27 03:13:07'),
(33, 'Vexana', 'Berhalangan', 'samawa bg, maaf ya bg belum bisa datang', '2024-01-27 10:42:45'),
(34, 'Adi dan Partner', 'Hadir', 'selamat wak', '2024-01-27 17:41:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pernikahan`
--
ALTER TABLE `pernikahan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pernikahan`
--
ALTER TABLE `pernikahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
