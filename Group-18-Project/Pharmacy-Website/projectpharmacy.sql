-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 09:18 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectpharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(20) NOT NULL,
  `medicine_id` int(200) NOT NULL,
  `Noofpiecesrequired` int(200) NOT NULL,
  `TotalAmount` int(200) NOT NULL,
  `PaidAmount` int(200) NOT NULL,
  `dates` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `medicine_id`, `Noofpiecesrequired`, `TotalAmount`, `PaidAmount`, `dates`) VALUES
(1, 2, 5, 50, 100, '21/04/19');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(20) NOT NULL,
  `MedicineName` varchar(200) NOT NULL,
  `RegisterDate` varchar(200) NOT NULL,
  `ExpDate` varchar(200) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `Types` varchar(200) NOT NULL,
  `CostPrice` varchar(200) NOT NULL,
  `SellingPrice` varchar(200) NOT NULL,
  `NoofPieces` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `MedicineName`, `RegisterDate`, `ExpDate`, `Category`, `Types`, `CostPrice`, `SellingPrice`, `NoofPieces`) VALUES
(2, 'aaaaaa', 'aaaaaaaa', 'aaaaaaaa', 'aaaaaa', 'SACHET', '20', '50', 5),
(3, 'Paracetmol', '15-05-2021', '15-06-2023', 'Fever', 'TAB', '500', '600', 50),
(4, 'Paracetmol', '15-05-2021', '15-06-2023', 'Fever', 'SACHET', '500', '600', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Fullname` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phoneno` varchar(200) NOT NULL,
  `Pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Username`, `Fullname`, `Email`, `Phoneno`, `Pass`) VALUES
(2, 'Likitha', 'Likitha', 'Likitha@gmail.com', '8888999965', 'Likitha.T');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
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
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
