-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 09:25 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bkstr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `passw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `passw`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `isbn` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `sinopsis` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `title`, `author`, `price`, `sinopsis`) VALUES
('11', 'aku lah lelaki', 'saya baik', 10.9, 'aku seorang lelaki yang biasa menjadi pujaan ramai wanita.'),
('15-2012-1234', 'Emak Rindu Mathanga Erissery', 'Khairul Hakimin Muhammad', 30, ''),
('15-2012-1591', 'Salina', 'A.Samad Said', 25.9, ''),
('15-2012-3691', 'Interbiu', 'Syahmi Hafizuddin', 19.9, ''),
('15-2012-9871', 'Pengembaraan Tanah Jepun ', 'Azaruddin Paiman', 25.9, ''),
('a', 'a', 'a', 19.5, ''),
('b', 'b', 'b', 13.9, ''),
('c', 'c', 'c', 20, ''),
('d', 'd', 'd', 80.8, ''),
('e', 'e', 'e', 25.9, '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passw` varchar(50) NOT NULL,
  `cpassw` varchar(50) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phonenumber` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `topup` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `username`, `passw`, `cpassw`, `firstname`, `lastname`, `address`, `phonenumber`, `email`, `topup`) VALUES
('a', 'a', 'a', 'a', 'Ali', 'Bakar', 'Sungai Besar, Selangor', '0112233445', 'alibakar@gmail.com', '0'),
('b', 'b', 'b', 'b', 'Abu', 'Bakar', 'Jasin, Melaka', '01234456756', 'abubakar@gmail.com', '0'),
('c', 'c', 'c', 'c', 'Nurul', 'Haiza', 'Seremban, Negeri Sembilan', '0179988890', 'nurul_haiza@yahoo.com', '0'),
('d', 'd', 'd', 'd', 'Chua', ' Ah Boon', 'Kuala Lumpur', '0113131310', 'chua90@ymail.com', '0'),
('e', 'e', 'e', 'e', 'Farah', 'Aqila', 'Merlimau, Melaka', '0191233210', 'aqila_cute88@gmail.com', '0'),
('f', 'f', 'f', 'f', 'Fakhrul', 'Fakih', 'Teluk Intan, Perak', '0188101234', 'fakih@yahoo.com', '0'),
('kaifiq', 'kaifiq', 'kaifiq', 'kaifiq', 'Fikri', 'Khairul', 'uitm jasin, melaka', '0173974461', 'kaifiq94@gmail.com', '295');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`), ADD FULLTEXT KEY `name` (`name`), ADD FULLTEXT KEY `cpassw` (`cpassw`), ADD FULLTEXT KEY `passw` (`passw`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
