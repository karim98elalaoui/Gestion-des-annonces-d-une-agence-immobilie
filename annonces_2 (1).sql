-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 07:38 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_immoblie`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonces 2`
--

CREATE TABLE `annonces 2` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `discription` varchar(3000) NOT NULL,
  `Superficie` int(11) NOT NULL,
  `adresse` varchar(1000) NOT NULL,
  `montant` decimal(10,0) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annonces 2`
--

INSERT INTO `annonces 2` (`id`, `titre`, `image`, `discription`, `Superficie`, `adresse`, `montant`, `date`, `type`) VALUES
(4, 'villa', 'villa1.jpg', '     A Villa is a type of house, usually a single-family, detached dwelling, that is often luxurious and large,      ', 340, 'tetouan', '430000', '2011-05-15', 'vente'),
(6, 'apartment', 'Apartment1.jpg', 'An Apartment is a self-contained living unit within a larger building. Apartments come in various sizes and configurations,', 55, 'tanger', '1450', '2023-02-04', 'location'),
(7, 'apartement', 'Apartment3.jpg', 'A Villa is a type of house, usually a single-family, detached dwelling, that is often luxurious and large,    ', 800, 'tanger', '1200000', '2016-12-22', 'vente'),
(8, 'duplex', 'Apartment2.jpg', '  A Villa is a type of house, usually a single-family, detached dwelling, that is often luxurious and large,  ', 110, 'fes', '3000', '2023-02-23', 'location'),
(25, 'apartement', 'Apartment2.jpg', 'An Apartment is a self-contained living unit within a larger building. Apartments come in various sizes and configurations,y ', 90, 'tanger', '900', '2019-09-10', 'vente'),
(26, 'villa', 'villa1.jpg', 'A Villa is a standalone house, often luxurious, with ample space for outdoor activities like gardening, swimming and parking.', 130, 'rabat', '900000', '2022-01-02', 'vente'),
(28, 'villa', 'villa1.jpg', 'A Villa is a standalone house, often luxurious, with ample space for outdoor activities like gardening, ', 430, 'tanger', '8300', '0201-10-20', 'location'),
(29, 'duplex', 'house2.jpg', 'A Duplex is a building that has two separate living units, typically side-by-side, with a shared wall. Duplexes ', 102, 'tetouan', '3000', '2022-02-02', 'location'),
(30, 'villa', 'villa2.jpg', 'A Villa is a standalone house, often luxurious, with ample space for outdoor activities like gardening,', 83, 'tetouan', '900', '2022-12-09', 'location');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonces 2`
--
ALTER TABLE `annonces 2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonces 2`
--
ALTER TABLE `annonces 2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
