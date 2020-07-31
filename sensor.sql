-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 02:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensor`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `Full_name` varchar(256) NOT NULL,
  `email` varchar(240) NOT NULL,
  `Gender` varchar(220) NOT NULL,
  `Password` varchar(220) NOT NULL,
  `Country` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Full_name`, `email`, `Gender`, `Password`, `Country`) VALUES
(1, 'John', 'john@gmail.com', 'male', '12345678', 'Australia'),
(2, 'Mohit Jain', 's1032180418@gmail.com', 'male', '12345678', 'India'),
(3, 'Harshit Srivastav', 'harshit@yahoo.com', 'male', 'qwertyui', 'India'),
(4, 'Vatsal ', 'vatsal123@gmail.com', 'male', '12345678', 'Australia'),
(5, 'Sagar Jaiswal', 'sagar1234@gmail.com', 'male', 'vvvvvvvv', 'India'),
(6, 'Pinaaz Hode', 'pH@gmail.com', 'female', 'pinaaz12345678', 'India'),
(7, 'Maria', 'm1234@gmail.com', 'female', '12345678', 'Nepal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
