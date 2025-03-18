-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 03:30 AM
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
-- Database: `student_enroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `username`, `password`) VALUES
(1, 'admin24', '$2y$10$iuA2j07hE1PECwOwNB45Xes.jvNncF581oMIQfZk.UupDZf0qS67G');

-- --------------------------------------------------------

--
-- Table structure for table `classes_offered`
--

CREATE TABLE `classes_offered` (
  `Id` int(50) NOT NULL,
  `classes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes_offered`
--

INSERT INTO `classes_offered` (`Id`, `classes`) VALUES
(1, 'Computer Science'),
(2, 'Cybersecurity'),
(3, 'Data Analytics'),
(4, 'Machine Learning'),
(5, 'AI Essentials'),
(6, 'Networking'),
(7, 'Data Center Operations'),
(8, 'Pentesting'),
(9, 'Cloud computing'),
(10, 'Network Administration'),
(11, 'Software Design'),
(12, 'Software Programing');

-- --------------------------------------------------------

--
-- Table structure for table `fall_ai_essentials`
--

CREATE TABLE `fall_ai_essentials` (
  `student_Id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fall_ai_essentials`
--

INSERT INTO `fall_ai_essentials` (`student_Id`, `username`, `firstName`, `lastName`, `email`) VALUES
(3, 'jog123', 'Jane', 'Dim', 'testing@gmail.com'),
(4, 'john_123', 'John', 'Bigs', 'johnb123@gmail.com'),
(5, 'bob123', 'Bob', 'Yall', 'bob234@gmail.com'),
(6, 'Emily123', 'Emily', 'Ann', 'emily123@gmail.com'),
(7, 'joshy24', 'josh', 'hurd', 'jb123@gmail.com'),
(8, 'savannah24', 'sav', 'brittenham', 'savanah123@gmail.com'),
(9, 'danny24', 'dan', 'grit', '12345@gmail.com'),
(10, 'fred24', 'fred', 'tall', 'fred24@gmail.com'),
(11, 'betty54', 'betty', 'yancy', 'betty54@gmail.com'),
(13, 'emily1234', 'emily', 'Anny', 'emily1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fall_data_center_operations`
--

CREATE TABLE `fall_data_center_operations` (
  `student_Id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fall_data_center_operations`
--

INSERT INTO `fall_data_center_operations` (`student_Id`, `username`, `firstName`, `lastName`, `email`) VALUES
(3, 'emily1234', 'emily', 'Anny', 'emily1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fall_machine_learning`
--

CREATE TABLE `fall_machine_learning` (
  `student_Id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fall_machine_learning`
--

INSERT INTO `fall_machine_learning` (`student_Id`, `username`, `firstName`, `lastName`, `email`) VALUES
(3, 'emily1234', 'emily', 'Anny', 'emily1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fall_networking`
--

CREATE TABLE `fall_networking` (
  `student_Id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fall_networking`
--

INSERT INTO `fall_networking` (`student_Id`, `username`, `firstName`, `lastName`, `email`) VALUES
(3, 'emily1234', 'emily', 'Anny', 'emily1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `SSN` int(50) NOT NULL,
  `address` varchar(256) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `SSN`, `address`, `phone`) VALUES
(6, 'john_123', '$2y$10$pbHqKIJkTpWi72l4X67ggOPHfabazgnUV4ZSIJSjRpMjn43UxP1Gu', 'John', 'Bigs', 'johnb123@gmail.com', 987126534, '876 South St Westfall Ne 98340', 2147483647),
(7, 'bob123', '$2y$10$o3CvtS4TB1AQn7J76ZTlVOG3Rs81uV6BlduZ5/o77Ndq78TnxJRRC', 'Bob', 'Yall', 'bob234@gmail.com', 987126534, '2345 west walker road', 2147483647),
(8, 'Emily123', '$2y$10$mcU3O6T1sLeb5pogIGOkN.AR.DWzJ6yj2vuD12YQ9rWXAwQtMjEmC', 'Emily', 'Ann', 'emily123@gmail.com', 345678734, '235 north pivot drive', 987451267),
(9, 'Emily1234', '$2y$10$AK5HASXQava3FaiMF9WvIejOFs4ip4CnfaHlIXMVdpVLnLfizzMby', 'Emily', 'Anny', 'emily1234@gmail.com', 234567892, '235 north pivot drive', 2147483647),
(11, 'jog123', '$2y$10$W0mdfHkpPhrD/4jzjQXJYuVYzWtSjiX.ROZTSMbjOh6HWAdBlNjvK', 'jane', 'dim', 'testing@gmail.com', 987655467, '363gh', 2147483647),
(12, 'joshy24', '$2y$10$XnBiAqw9y2SumhJcDRwmve2c4WO48pvDxz7I/Pkrc9u3pd26yCloW', 'josh', 'hurd', 'jb123@gmail.com', 2147483647, '875 hills rd ', 2147483647),
(13, 'savannah24', '$2y$10$JEsyBTIEAAC5Zk4IyxYdHupnCfKzWR.r6Y.m5xTf8bAZDf7arfFsW', 'sav', 'brittenham', 'savanah123@gmail.com', 2147483647, '765 valley rd', 2147483647),
(14, 'danny24', '$2y$10$5/UpiK9W/pA0S6MOOl6reuJaC5po2UsSg17nxvxBMX8a6mGXoj316', 'dan', 'grit', '12345@gmail.com', 23455678, '23456dfgh grit st', 2147483647),
(15, 'fred24', '$2y$10$hoHpNTegfvOBCTkwfSqRg.mVoTn6IWNWv8Knd8DqkXaVEP6CO.L0W', 'fred', 'tall', 'fred24@gmail.com', 2147483647, '2345 trail rd', 2147483647),
(16, 'betty54', '$2y$10$TYqhIyUlKTZXGTgECCqSUewkAM.NR5f8OHmtoLu1RvUk.U1JzH7nC', 'betty', 'yancy', 'betty54@gmail.com', 2147483647, '9876 gravel rd', 874456787),
(17, 'paul66', '$2y$10$KkfPpHEGZmcnzq9fDRqo4OMlPqQbX93zfiw3kYEDddNwpap9Rx7b2', 'paul', 'burk', 'pb55@gmail.com', 964323456, '876 South St Westfall', 2147483647),
(18, 'blink234', '$2y$10$tuDu8epRaC.jTFZB4Hofyuj7yhFglUw5QzPpx4jsLvxbA7u1yDHUW', 'Blake', 'Lurky', 'blink234@gmail.com', 2147483647, '234 vahl drive', 2147483647),
(19, 'brook234', '$2y$10$jGvlAOeSK4SCxKFP7iNX2.amgY/U7J7Y0GzcGsA31PfTP9ogBcAhi', 'brook', 'fin', 'brook234@gmail.com', 234567765, '234 hild drive', 2147483647),
(20, 'lucus123', '$2y$10$GSk.L3V0kHdeH5dqJ5gizun17SZDO9WOulXIdQhDQQAtANk.5yC2C', 'Lucus', 'hux', 'lucus123@gmail.com', 234876234, '153 dirt rd', 2147483647),
(21, 'chloe23', '$2y$10$7wF9DQ3LPibUx4aJxzYJY.HOrqy3d0ni/lwfkYGbaUxTsKavaVm/e', 'chloe', 'pain', 'chloe23@gmail.com', 234567431, '125 tiny rd', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `spring_computer_science`
--

CREATE TABLE `spring_computer_science` (
  `student_Id` int(10) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spring_computer_science`
--

INSERT INTO `spring_computer_science` (`student_Id`, `firstName`, `lastName`, `email`, `username`) VALUES
(3, 'paul', 'burk', 'pb55@gmail.com', 'paul66');

-- --------------------------------------------------------

--
-- Table structure for table `spring_data_analytics`
--

CREATE TABLE `spring_data_analytics` (
  `student_Id` int(10) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spring_data_analytics`
--

INSERT INTO `spring_data_analytics` (`student_Id`, `firstName`, `lastName`, `email`, `username`) VALUES
(3, 'paul', 'burk', 'pb55@gmail.com', 'paul66'),
(7, 'emily', 'Anny', 'emily1234@gmail.com', 'emily1234');

-- --------------------------------------------------------

--
-- Table structure for table `spring_pentesting`
--

CREATE TABLE `spring_pentesting` (
  `student_Id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spring_pentesting`
--

INSERT INTO `spring_pentesting` (`student_Id`, `username`, `firstName`, `lastName`, `email`) VALUES
(1, '', 'John', 'Bigs', 'johnb123@gmail.com'),
(2, '', 'Bob', 'Yall', 'bob234@gmail.com'),
(3, '', 'Emily', 'Ann', 'emily123@gmail.com'),
(6, 'bob123', 'Bob', 'Yall', 'bob234@gmail.com'),
(8, 'paul66', 'paul', 'burk', 'pb55@gmail.com'),
(9, 'emily1234', 'emily', 'Anny', 'emily1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `spring_software_design`
--

CREATE TABLE `spring_software_design` (
  `student_Id` int(10) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spring_software_design`
--

INSERT INTO `spring_software_design` (`student_Id`, `firstName`, `lastName`, `email`, `username`) VALUES
(4, 'paul', 'burk', 'pb55@gmail.com', 'paul66'),
(5, 'emily', 'Anny', 'emily1234@gmail.com', 'emily1234');

-- --------------------------------------------------------

--
-- Table structure for table `spring_software_programming`
--

CREATE TABLE `spring_software_programming` (
  `student_Id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spring_software_programming`
--

INSERT INTO `spring_software_programming` (`student_Id`, `username`, `firstName`, `lastName`, `email`) VALUES
(2, 'bob123', 'Bob', 'Yall', 'bob234@gmail.com'),
(5, 'paul66', 'paul', 'burk', 'pb55@gmail.com'),
(6, 'emily1234', 'emily', 'Anny', 'emily1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `summer_cloud_computing`
--

CREATE TABLE `summer_cloud_computing` (
  `student_Id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `summer_cloud_computing`
--

INSERT INTO `summer_cloud_computing` (`student_Id`, `username`, `firstName`, `lastName`, `email`) VALUES
(3, 'emily1234', 'emily', 'Anny', 'emily1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `summer_cybersecurity`
--

CREATE TABLE `summer_cybersecurity` (
  `student_Id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `summer_cybersecurity`
--

INSERT INTO `summer_cybersecurity` (`student_Id`, `username`, `firstName`, `lastName`, `email`) VALUES
(3, 'emily1234', 'emily', 'Anny', 'emily1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `summer_network_administration`
--

CREATE TABLE `summer_network_administration` (
  `student_Id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `summer_network_administration`
--

INSERT INTO `summer_network_administration` (`student_Id`, `username`, `firstName`, `lastName`, `email`) VALUES
(3, 'emily1234', 'emily', 'Anny', 'emily1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wait_list`
--

CREATE TABLE `wait_list` (
  `Id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `class_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wait_list`
--

INSERT INTO `wait_list` (`Id`, `username`, `firstName`, `lastName`, `email`, `class_name`) VALUES
(1, 'paul66', 'paul', 'burk', 'pb55@gmail.com', 'fall ai essentials'),
(2, 'brook234', 'brook', 'fin', 'brook234@gmail.com', 'fall ai essentials'),
(3, 'lucus123', 'Lucus', 'hux', 'lucus123@gmail.com', 'fall ai essentials'),
(17, 'chloe23', 'chloe', 'pain', 'chloe23@gmail.com', 'fall ai essentials'),
(18, 'chloe23', 'chloe', 'pain', 'chloe23@gmail.com', 'fall ai essentials');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes_offered`
--
ALTER TABLE `classes_offered`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fall_ai_essentials`
--
ALTER TABLE `fall_ai_essentials`
  ADD PRIMARY KEY (`student_Id`);

--
-- Indexes for table `fall_data_center_operations`
--
ALTER TABLE `fall_data_center_operations`
  ADD PRIMARY KEY (`student_Id`);

--
-- Indexes for table `fall_machine_learning`
--
ALTER TABLE `fall_machine_learning`
  ADD PRIMARY KEY (`student_Id`);

--
-- Indexes for table `fall_networking`
--
ALTER TABLE `fall_networking`
  ADD PRIMARY KEY (`student_Id`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spring_computer_science`
--
ALTER TABLE `spring_computer_science`
  ADD PRIMARY KEY (`student_Id`);

--
-- Indexes for table `spring_data_analytics`
--
ALTER TABLE `spring_data_analytics`
  ADD PRIMARY KEY (`student_Id`);

--
-- Indexes for table `spring_pentesting`
--
ALTER TABLE `spring_pentesting`
  ADD PRIMARY KEY (`student_Id`);

--
-- Indexes for table `spring_software_design`
--
ALTER TABLE `spring_software_design`
  ADD PRIMARY KEY (`student_Id`);

--
-- Indexes for table `spring_software_programming`
--
ALTER TABLE `spring_software_programming`
  ADD PRIMARY KEY (`student_Id`);

--
-- Indexes for table `summer_cloud_computing`
--
ALTER TABLE `summer_cloud_computing`
  ADD PRIMARY KEY (`student_Id`);

--
-- Indexes for table `summer_cybersecurity`
--
ALTER TABLE `summer_cybersecurity`
  ADD PRIMARY KEY (`student_Id`);

--
-- Indexes for table `summer_network_administration`
--
ALTER TABLE `summer_network_administration`
  ADD PRIMARY KEY (`student_Id`);

--
-- Indexes for table `wait_list`
--
ALTER TABLE `wait_list`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes_offered`
--
ALTER TABLE `classes_offered`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fall_ai_essentials`
--
ALTER TABLE `fall_ai_essentials`
  MODIFY `student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fall_data_center_operations`
--
ALTER TABLE `fall_data_center_operations`
  MODIFY `student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fall_machine_learning`
--
ALTER TABLE `fall_machine_learning`
  MODIFY `student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fall_networking`
--
ALTER TABLE `fall_networking`
  MODIFY `student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `spring_computer_science`
--
ALTER TABLE `spring_computer_science`
  MODIFY `student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spring_data_analytics`
--
ALTER TABLE `spring_data_analytics`
  MODIFY `student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `spring_pentesting`
--
ALTER TABLE `spring_pentesting`
  MODIFY `student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `spring_software_design`
--
ALTER TABLE `spring_software_design`
  MODIFY `student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spring_software_programming`
--
ALTER TABLE `spring_software_programming`
  MODIFY `student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `summer_cloud_computing`
--
ALTER TABLE `summer_cloud_computing`
  MODIFY `student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `summer_cybersecurity`
--
ALTER TABLE `summer_cybersecurity`
  MODIFY `student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `summer_network_administration`
--
ALTER TABLE `summer_network_administration`
  MODIFY `student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wait_list`
--
ALTER TABLE `wait_list`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
