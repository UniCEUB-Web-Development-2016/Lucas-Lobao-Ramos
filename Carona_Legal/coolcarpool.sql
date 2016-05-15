-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2016 at 03:59 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coolcarpool`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` mediumint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `lastName` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(7) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `birthDate` varchar(10) NOT NULL,
  `driver` tinyint(1) NOT NULL,
  `carplate` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `carpool` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `lastName` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(7) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `birthDate` varchar(10) NOT NULL,
  `driver` tinyint(1) NOT NULL,
  `carplate` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `lastName`, `email`, `cpf`, `rg`, `phoneNumber`, `birthDate`, `driver`, `carplate`) VALUES
('Tomate', 'vermelho', 'tomatinho@saladas.com', 2147483647, 123456, 2147483647, '02-02-2002', 0, 'null'),
('Cebola', 'Roxa', 'cebolinha@roxa.com', 2147483647, 2222222, 2147483647, '01-01-1001', 0, 'null'),
('Laranja', 'muitolaranja', 'laranja@suculenta.com', 2147483647, 11111111, 2147483647, '02-02-2000', 0, 'null'),
('Alface', 'Verde', 'alface@saladas.com', 2147483647, 13131313, 22222222, '03-03-1994', 0, 'null'),
('arroz', 'branco', 'naosoufruta@alimentos.com', 2147483647, 3333333, 2147483647, '04-12-2016', 0, 'null'),
('Cebolaaaao', 'Roxa', 'cebolinha@roxa.com', 2147483647, 2222222, 2147483647, '01-01-1001', 0, 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
