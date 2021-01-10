-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 09:50 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikorido`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `adhar_Number` varchar(50) NOT NULL,
  `Dr.exp` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `adhar_front` varchar(255) NOT NULL,
  `adhar_back` varchar(255) NOT NULL,
  `driving_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `mobile`, `adhar_Number`, `Dr.exp`, `address`, `adhar_front`, `adhar_back`, `driving_img`) VALUES
(18, 'Kamesh', '9845678976', '856765789876', '2021-01-10', 'gdhjfghjk', '422486441img.jpeg', '2146905446img.jpeg', '824641064img.jpeg'),
(19, 'Shailesh', '9161353499', '964575432456', '2020-01-23', 'sdfgfhgfxdfbgfnhg', '1980814684img.jpeg', '1404563706img.jpeg', '1420559234img.jpeg'),
(20, 'vijay', '9996546786', '985678657897', '2020-01-24', 'fdghfdsghjk', '1134743638img.jpeg', '1415228683img.jpeg', '324576486img.jpeg'),
(21, 'kimdfs', '9865786546', '879807654678', '2020-01-11', 'fgkhjlhgfd', '1976742815img.jpeg', '1781190392img.jpeg', '891799795img.jpeg'),
(22, 'gfhfs', '8796897657', '987657890876', '2020-01-11', 'fgjuhkjgfbhj', '28693817img.jpeg', '882451319img.jpeg', '1866727372img.jpeg'),
(23, 'dfghfjghkj', '9878976898', '897689765789', '2020-01-23', 'sfghjkl', '762701395img.jpeg', '430195341img.jpeg', '1285509920img.jpeg'),
(24, 'fghdfxcg', '8765786578', '878787657897', '2020-01-11', 'gfhjgfh', '477382526img.jpeg', '2049837995img.jpeg', '1598715002img.jpeg'),
(25, 'fhyjgukii', '8976897654', '789098767890', '2020-01-11', 'gfhjkhgfbgvn', '2059475598img.jpeg', '1263206180img.jpeg', '774156821img.jpeg'),
(26, 'fghjkhgfcvh', '8797689654', '897657865467', '2020-01-11', 'drtfyuiuloi;l', '1789135345img.jpeg', '1572793822img.jpeg', '34876420img.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
