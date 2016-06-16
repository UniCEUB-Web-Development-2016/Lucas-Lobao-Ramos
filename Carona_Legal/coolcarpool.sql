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
create schema IF NOT EXISTS coolcarpool;
USE coolcarpool;




CREATE TABLE `user` (
  `id` mediumint(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(150) NOT NULL,
  `lastName` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(7) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `birthDate` varchar(10) NOT NULL,
  `driver` varchar(2) NOT NULL,
  `carplate` varchar(10) NOT NULL,
  `pass` varchar(200) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `carpool` (
  `carpoolId` mediumint(9) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `cpf` varchar(15) NOT NULL,
  `sLatitude` varchar(15) NOT NULL,
  `sLongitude` varchar(15) NOT NULL,
  `dLatitude` varchar(15) NOT NULL,
  `dLongitude` varchar(15) NOT NULL,
  `datee` varchar(10) NOT NULL,
  `timee` varchar(10) NOT NULL,
  `sRange` varchar(5) NOT NULL,
  `dRange` varchar(5) NOT NULL,
  `emptySeats` mediumint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `lastName`, `email`, `cpf`, `rg`, `phoneNumber`, `birthDate`, `driver`, `carplate`, `pass`) VALUES
('Tomate', 'vermelho', 'tomatinho@saladas.com', 2147483647, 123456, 2147483647, '02-02-2002', 'n', 'null', 'HARDP4SSW0RD'),
('Cebola', 'Roxa', 'cebolinha@roxa.com', 2147483647, 2222222, 2147483647, '01-01-1001', 's', 'abcd1234', 'senhafass1lxD'),
('Laranja', 'muitolaranja', 'laranja@suculenta.com', 2147483647, 11111111, 2147483647, '02-02-2000', 'n', 'null', 'senhafass1lxD'),
('Alface', 'Verde', 'alface@saladas.com', 2147483647, 13131313, 22222222, '03-03-1994', 's', 'efgh-5678', 'senhafass1lxD'),
('arroz', 'branco', 'naosoufruta@alimentos.com', 2147483647, 3333333, 2147483647, '04-12-2016', 'n', 'null', 'senhafass1lxD'),
('Cebolaaaao', 'Roxa', 'cebolinha@roxa.com', 2147483647, 2222222, 2147483647, '01-01-1001', 'n', 'null', 'senhafass1lxD');