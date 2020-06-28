-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 09:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supervise`
--

-- --------------------------------------------------------

--
-- Table structure for table `ar`
--

CREATE TABLE `ar` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cont` varchar(200) NOT NULL,
  `comp` varchar(200) NOT NULL,
  `loc` varchar(200) NOT NULL,
  `sdate` varchar(200) NOT NULL,
  `edate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ar`
--

INSERT INTO `ar` (`id`, `name`, `cont`, `comp`, `loc`, `sdate`, `edate`) VALUES
('BIT/0166/2016', 'Mandali Nambale Levy', '0790686848', 'Compulynx', 'Parklands', '2020-05-01', '2020-05-31'),
('BIT/200/2017', 'Davis Wakhungu', '078983737392', 'World Vision', 'Karen', '2020-05-01', '2020-05-31'),
('faith@gmail.com', 'Faith Jelimo', '0788301340', 'KICD', 'Nairobi', '2020-05-02', '2020-05-29'),
('mandalilevy@gmail.com2', 'Cynthia Wafula', '0789888383', 'Atlas College', 'Nairobi', '2020-05-03', '2020-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `ases`
--

CREATE TABLE `ases` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `startdate` varchar(200) NOT NULL,
  `enddate` varchar(200) NOT NULL,
  `supervisorname` varchar(200) NOT NULL,
  `supervisorno` varchar(200) NOT NULL,
  `punctuality` varchar(200) NOT NULL,
  `adhere` varchar(200) NOT NULL,
  `adapt` varchar(200) NOT NULL,
  `reliability` varchar(200) NOT NULL,
  `communication` varchar(200) NOT NULL,
  `teamwork` varchar(200) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ases`
--

INSERT INTO `ases` (`id`, `name`, `company`, `startdate`, `enddate`, `supervisorname`, `supervisorno`, `punctuality`, `adhere`, `adapt`, `reliability`, `communication`, `teamwork`, `remarks`) VALUES
('BIT/200/2017', 'Davis Wakhungu', 'World Vision', '2020-05-01', '2020-05-31', 'Abdul Ibrahim', '0722968567', '7', '7', '8', '4', '2', '8', 'very cooperative'),
('mandalilevy@gmail.com2', 'Cynthia Wafula', 'Atlas College', '2020-05-03', '2020-05-31', 'Mandali Levy', '0790686848', '7', '9', '6', '7', '1', '8', 'very co-orperative');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(200) NOT NULL,
  `num` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `comp` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `duty` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `num`, `name`, `comp`, `date`, `duty`) VALUES
(6, 'mandalilevy@gmail.com2', 'Cynthia Wafula', 'Atlas College', '2020-05-28', 'Cleaned computers, Installed OS, Formatted Laptop, Served tea.'),
(7, 'faith@gmail.com', 'Faith Jelimo', 'KICD', '2020-05-24', 'Cleaned computers, Installed OS, Formatted Laptop, Served tea.'),
(8, 'faith@gmail.com', 'Faith Jelimo', 'KICD', '2020-06-23', 'Cleaned computers, Installed OS, Formatted Laptop, Served tea.'),
(14, 'BIT/0166/2016', 'Mandali Nambale Levy', 'Compulynx', '2020-05-25', 'MODIMO WA RESHEBA'),
(15, 'BIT/0166/2016', 'Mandali Nambale Levy', 'Compulynx', '2020-05-24', 'MODIMO WA RESHEBA'),
(16, 'BIT/0166/2016', 'Mandali Nambale Levy', 'Compulynx', '2020-05-26', 'MODIMO WA RESHEBA'),
(19, 'mandalilevy@gmail.com2', 'Cynthia Wafula', 'Atlas College', '2020-05-24', 'sdsdsJH USLSLDHSDS DSDSDSD SDSDKSDS SDS SDSDSDS SDSDS SDSDS SDSDSDS DSDSDS ASDADSA SDSDS SDSD SDSD SDSD ASDAD SDSD SDSD SDSD SDSDS DFSF SDSDS FSFS SDSDS FSFS FAS DSA DS SFSDF SDFSKJSKFJS V HDSLDSDS SD'),
(20, 'BIT/200/2017', 'Davis Wakhungu', 'World Vision', '2020-05-24', 'Clean Computer, Activate Server, Served tea');

-- --------------------------------------------------------

--
-- Table structure for table `csuper`
--

CREATE TABLE `csuper` (
  `name` varchar(200) NOT NULL,
  `cont` varchar(200) NOT NULL,
  `comp` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `csuper`
--

INSERT INTO `csuper` (`name`, `cont`, `comp`, `username`, `pass`) VALUES
('Abdul Ibrahim', '0722968567', 'Atlas College', 'Abdul', '123'),
('Mandali Levy', '0790686848', 'World Vision', 'Mandali', '123');

-- --------------------------------------------------------

--
-- Table structure for table `sreg`
--

CREATE TABLE `sreg` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cont` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sreg`
--

INSERT INTO `sreg` (`id`, `name`, `cont`, `pass`) VALUES
('BIT/0166/2016', 'Mandali Nambale Levy', '0790686848', '123'),
('BIT/200/2017', 'Davis Wakhungu', '078983737392', '1234'),
('faith@gmail.com', 'Faith Jelimo', '0788301340', '123'),
('mandalilevy@gmail.com2', 'Cynthia Wafula', '0789888383', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ar`
--
ALTER TABLE `ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ases`
--
ALTER TABLE `ases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csuper`
--
ALTER TABLE `csuper`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `sreg`
--
ALTER TABLE `sreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ases`
--
ALTER TABLE `ases`
  ADD CONSTRAINT `ases_ibfk_1` FOREIGN KEY (`id`) REFERENCES `sreg` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
