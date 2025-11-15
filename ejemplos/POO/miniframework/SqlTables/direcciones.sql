-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 14, 2025 at 10:43 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `direcciones`
--

CREATE TABLE `direcciones` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `pais` varchar(250) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `ciudad` varchar(250) NOT NULL,
  `municipio` varchar(250) NOT NULL,
  `calle` varchar(250) NOT NULL,
  `numero` int NOT NULL,
  `codigopostal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `direcciones`
--

INSERT INTO `direcciones` (`id`, `iduser`, `pais`, `estado`, `ciudad`, `municipio`, `calle`, `numero`, `codigopostal`) VALUES
(1, 2, 'mexico', 'jalisco', 'guadalajara', 'zapopan', 'av la paz', 1787, '5679'),
(2, 6, 'brazil', 'janeiro', 'fabela', 'comuna', 'alveiros', 77, '989');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
