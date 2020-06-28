-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 06:32 PM
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
-- Database: `lavington`
--

-- --------------------------------------------------------

--
-- Table structure for table `duty`
--

CREATE TABLE `duty` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contacts` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `duty` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `duty`
--

INSERT INTO `duty` (`id`, `name`, `contacts`, `date`, `time`, `duty`) VALUES
('L1', 'Okoth Obado', '07020202020', '29-2020-05', '15:51', 'Block Two'),
('L2', 'Davis Wakhungu', '0790686848', '29-2020-05', '16:21', 'Back Gate'),
('L3', 'Karen Wasilwa', '078890929292', '29-2020-05', '14:54', 'Block One'),
('L4', 'Jane Ojong', '0789844999', '29-2020-05', '17:06', 'Block Two'),
('L5', 'Bonface Omari', '0788301340', '29-2020-05', '16:53', 'Block Two');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `email`, `pass`) VALUES
('Calvince ojwang', 'calvince@gmail.com', 'ken');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contacts` varchar(200) NOT NULL,
  `station` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id`, `name`, `contacts`, `station`, `date`, `status`) VALUES
('L1', 'Okoth Obado', '07020202020', 'Kajiado Quaters', '2020-04-28', 'On Leave'),
('L2', 'Davis Wakhungu', '0790686848', 'Kilimani Quaters', '2020-05-27', 'active'),
('L3', 'Karen Wasilwa', '078890929292', 'Ngara Quaters', '2020-05-02', 'Suspended'),
('L4', 'Jane Ojong', '0789844999', 'Ngara Quaters', '2020-05-29', 'On Leave'),
('L5', 'Bonface Omari', '0788301340', 'Kilimani Quaters', '2020-05-29', 'Suspended'),
('L6', 'Brenda Omondi', '0788363362', 'Kiambu Quaters', '2020-05-29', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `rest`
--

CREATE TABLE `rest` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cont` varchar(200) NOT NULL,
  `sdate` varchar(200) NOT NULL,
  `edate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rest`
--

INSERT INTO `rest` (`id`, `name`, `cont`, `sdate`, `edate`) VALUES
('L1', 'Okoth Obado', '07020202020', '2020-06-05', '2020-07-08'),
('L3', 'Karen Wasilwa', '078890929292', '2020-05-01', '2020-05-31'),
('L4', 'Jane Ojong', '0789844999', '2020-05-29', '2020-06-05'),
('L5', 'Bonface Omari', '0788301340', '2020-05-02', '2020-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`name`, `location`) VALUES
('Kajiado Quaters', 'Kajiado'),
('Kiambu Quaters', 'Kiambu'),
('Kilimani Quaters', 'Nairobi'),
('Ngara Quaters', 'Nairobi');

-- --------------------------------------------------------

--
-- Table structure for table `suspend`
--

CREATE TABLE `suspend` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cont` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suspend`
--

INSERT INTO `suspend` (`id`, `name`, `cont`, `date`) VALUES
('L3', 'Karen Wasilwa', '078890929292', '2020-05-29'),
('L5', 'Bonface Omari', '0788301340', '2020-05-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duty`
--
ALTER TABLE `duty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest`
--
ALTER TABLE `rest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `suspend`
--
ALTER TABLE `suspend`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
