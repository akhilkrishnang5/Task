-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 08:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `placeorder`
--

CREATE TABLE `placeorder` (
  `orderid` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placeorder`
--

INSERT INTO `placeorder` (`orderid`, `qty`, `price`, `name`, `amount`) VALUES
(1, 10, 250, 'Thali Special', 2500),
(2, 10, 250, 'Thali Special', 2500),
(3, 2, 220, 'Mysore Dosa Combo', 440),
(4, 1, 170, 'Poratta Combo ', 170),
(5, 1, 250, 'Thali Special', 250),
(6, 1, 220, 'Mysore Dosa Combo', 220),
(7, 1, 210, 'Tamil Combo ', 210),
(8, 90, 205, 'Kerala Combo', 18450),
(9, 21, 250, 'Thali Special', 5250);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id`, `name`, `address`, `email`, `phone`) VALUES
(1, 'Akhil Krishnan G', 'TC 27/1291-2, SREEKRISHNA BHAVAN, RISHIMANGALAM, VANCHIYOOR, TRIVANDRUM', 'akhilkrishnang19@gmail.com', 2147483647),
(2, 'Akhil Krishnan G', 'TC 27/1291-2, SREEKRISHNA BHAVAN, RISHIMANGALAM, VANCHIYOOR, TRIVANDRUM', 'akhilkrishnang19@gmail.com', 2147483647),
(3, 'Akhil Krishnan G', 'TC 27/1291-2, SREEKRISHNA BHAVAN, RISHIMANGALAM, VANCHIYOOR, TRIVANDRUM', 'akhilkrishnang19@gmail.com', 2147483647),
(4, 'Kuttan', 'Vazuthakaud, Trivandrum', 'abc@gmail.com', 1234567899);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `confirmpassword`) VALUES
(1, 'Akhil', '23b4c237db51e5fb017e9a77ba1afb0f', '');

-- --------------------------------------------------------

--
-- Table structure for table `vegdishes`
--

CREATE TABLE `vegdishes` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `vegdishes`
--

INSERT INTO `vegdishes` (`id`, `name`, `description`, `price`, `picture`) VALUES
(11, 'Thali Special', 'Mini Dosa, Mini Utthappam, Idli,  Vada, Curd Rice, Pickle, Sweet and Tea/Coffee/Juice ', 250, 'ts.jpg'),
(12, 'Mysore Dosa Combo', 'Mysore Masala Dosa, 2 Vada, 3 Idlis and Buttermilk/Tea/Coffee/Juice', 220, 'mmd.jpg'),
(9, 'Poratta Combo ', 'Poratta, Veg Khurumma and Buttermilk/Lime Juice', 170, 'pc1.jpg'),
(8, 'Kerala Combo', ' Malabar Poratta, Veg Khurumma, Vada, Coconut rice, Sweet and Buttermilk', 205, 'pc.jpg'),
(7, 'Tamil Combo ', 'Mini Onion Dosa, Vada, Curd Rice, Pickle, Sweet and Tea/Coffee ', 210, 'tc1.jpg'),
(13, 'Uttapam Combo', 'Utthappam (Tomato/Onion), 2 Vada, 2 Idlis, and Buttermilk/Tea/Coffee/Juice', 190, 'ut.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `placeorder`
--
ALTER TABLE `placeorder`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vegdishes`
--
ALTER TABLE `vegdishes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `placeorder`
--
ALTER TABLE `placeorder`
  MODIFY `orderid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vegdishes`
--
ALTER TABLE `vegdishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
