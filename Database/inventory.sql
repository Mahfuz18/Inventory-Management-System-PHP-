-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 12:45 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `email`, `password`) VALUES
('Admin', 'admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `ceramic`
--

CREATE TABLE `ceramic` (
  `product_name` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `company` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ceramic`
--

INSERT INTO `ceramic` (`product_name`, `weight`, `quantity`, `company`) VALUES
('Plate', '2kg', 10, 'Ceramic icon');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `email`, `contact`, `password`) VALUES
(1, 'Mahfuz', 'Sozeeb', 'mahfuzsozeeb2012@gmail.com', '01768094971', '1234'),
(2, 'Sumon', 'Hossain', 'sumon@gmial.com', '01725946821', '123'),
(3, 'Akib', 'Rahman', 'akib2012@gmail.com', '01954251220', 'qwe'),
(4, 'Rakib', 'Hasan', 'rakib@yahoo.com', '001542698521', '369'),
(5, 'Alif', 'Rahman', 'alif2012@gmail.com', '012587416925', '25'),
(6, 'Asad', 'Rahman', 'asad@gmail.com', '01824596325', '458'),
(7, 'Kabir', 'Islam', 'kabir@yahoo.com', '01924587163', '159'),
(8, 'Anne', 'Rahman', 'anne@gmail.com', '01745681246', '136');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`fname`, `lname`, `email`, `contact`, `age`) VALUES
('Abid', 'Hossain', 'abid@gmail.com', '01759841256', 25),
('Rahim', 'Shekh', 'rahim@gmail.com', '01945213684', 29);

-- --------------------------------------------------------

--
-- Table structure for table `glass`
--

CREATE TABLE `glass` (
  `product_name` varchar(20) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `company` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glass`
--

INSERT INTO `glass` (`product_name`, `weight`, `quantity`, `company`) VALUES
('Glass', '5kg', 20, 'Glass for all'),
('window', '0', 13, 'Ionic'),
('Door', '0', 10, 'Ionic');

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE `grocery` (
  `product_name` varchar(20) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `company` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`product_name`, `weight`, `quantity`, `company`) VALUES
('Rice', '10kg', 0, 'Rice for all '),
('Potato', '5kg', 0, 'Unknown'),
('Garlic', '5kg', 0, 'unknown'),
('Onion', '3kg', 0, 'Unknown'),
('Cinamon', '6kg', 0, 'Unknown');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
