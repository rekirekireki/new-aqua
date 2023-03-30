-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 04:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aquaflants`
--

-- --------------------------------------------------------

--
-- Table structure for table `planttbl`
--

CREATE TABLE `planttbl` (
  `plantType` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gardenSize` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantName` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantDes` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantSoil` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantSun` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantWater` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Photo` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `planttbl`
--

INSERT INTO `planttbl` (`plantType`, `gardenSize`, `plantName`, `plantDes`, `plantSoil`, `plantSun`, `plantWater`, `Photo`) VALUES
('Angiosperms', 'Large Sized Garden', 'sad', 'dsfs', 'sdfsd', 'fgdgdf', 'fdgd', '3183.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `userName` text NOT NULL,
  `email` text NOT NULL,
  `userPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `firstName`, `lastName`, `userName`, `email`, `userPassword`) VALUES
(1, 'Kayl', 'Kyle', 'kayl', 'kyledelapena45@gmail.com', '123'),
(2, 'Kayl', 'Kyle', 'Kayl', 'kyledelapena45@gmail.com', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
