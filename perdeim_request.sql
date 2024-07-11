-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 12:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perdeim_request`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `college_id` int(11) NOT NULL,
  `dean_name` varchar(56) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `col_notif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `dean_name`, `comment`, `col_notif`) VALUES
(0, 'Kumarraaa', '', 0),
(233, 'Tadesse', '', 0),
(237, 'Fufa', '', 0),
(456, 'Naasisaa Biyyaa', '', 0),
(678, 'Gemechis', '', 0),
(1234, 'Sharoo', '', 0),
(1345, 'Galaa', '', 0),
(1941, 'Gamachis', 'You are not legible for this request', 0),
(1942, 'Tadese', '', 0),
(2134, 'Tadese', '', 0),
(2145, 'Gamacho', '', 0),
(3567, 'Dinaol', '', 0),
(4578, 'Guuchisaa Biyyaa', '', 0),
(5653, 'Birruu', '', 0),
(5673, 'Guraaraa', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_head` varchar(56) NOT NULL,
  `approved_birr` double NOT NULL,
  `dept_notif` int(11) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_head`, `approved_birr`, `dept_notif`, `comment`) VALUES
(0, '', 0, 0, 'Enter comment here'),
(178, 'Gamachis', 3689, 0, ''),
(456, 'Chala', 3689, 0, ''),
(944, 'Gemechis', 3689, 0, ''),
(1009, 'Namoo', 45900, 0, ''),
(1948, 'Gamachis', 5000, 0, ''),
(2242, 'Gamachis', 0, 0, 'You have already accepted the per diem last month.'),
(3412, 'Tola', 0, 0, ''),
(3451, '', 0, 0, 'You can not access the per diem.'),
(3453, 'Ketros', 1222, 0, ''),
(3456, 'Tola', 2345, 0, ''),
(3908, 'Tola', 1234, 0, ''),
(5643, 'Nagaasaa', 0, 0, 'It is failed'),
(5684, 'Gulummaa', 0, 0, 'Namicha nana xiqqooshee hin qaannoftuu');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `finance_id` int(11) NOT NULL,
  `code` varchar(56) NOT NULL,
  `auther_name` varchar(67) NOT NULL,
  `fin_notif` int(11) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`finance_id`, `code`, `auther_name`, `fin_notif`, `comment`) VALUES
(121, '56886', 'Tuulamaa Maccaa', 0, ''),
(897, '', ' Kaayyoo', 0, ''),
(988, '56886', ' Qabbanaa', 0, ''),
(1209, '56886', 'Tuulamaa Maccaa', 0, ''),
(1234, '56886', 'Tuulamaa Maccaa', 0, ''),
(1278, '444', ' Kaayyoo', 0, ''),
(1678, '56886', 'Tuulamaa Maccaa', 0, ''),
(1798, '123', 'Eliaas', 0, ''),
(3124, '56886', ' Qabbanaa', 0, ''),
(4566, '444', 'Shimallis', 0, ''),
(5670, '56886', 'Tuulamaa Maccaa', 0, ''),
(10912, '56886', ' Kaayyoo', 0, ''),
(10987, '56886', ' Kaayyoo', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `not_id` int(11) NOT NULL,
  `read_no` int(11) NOT NULL,
  `dept_notif` int(11) NOT NULL,
  `col_notif` int(11) NOT NULL,
  `vp_notif` int(11) NOT NULL,
  `fin_notif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`not_id`, `read_no`, `dept_notif`, `col_notif`, `vp_notif`, `fin_notif`) VALUES
(1, 0, 0, 0, 0, 0),
(2, 1, 0, 0, 0, 0),
(3, 0, 1, 0, 0, 0),
(4, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0),
(6, 0, 1, 0, 0, 0),
(7, 0, 1, 0, 0, 0),
(8, 0, 0, 0, 1, 0),
(9, 0, 0, 0, 1, 0),
(10, 0, 0, 0, 1, 0),
(11, 0, 0, 0, 1, 0),
(12, 0, 0, 0, 1, 0),
(13, 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `request_info`
--

CREATE TABLE `request_info` (
  `emp_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` text NOT NULL,
  `college/department` varchar(100) NOT NULL,
  `Project _name` varchar(100) NOT NULL,
  `salary` double NOT NULL,
  `perdiem_rate` double NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `means` varchar(30) NOT NULL,
  `total_days` int(11) NOT NULL,
  `payment` double NOT NULL,
  `fuel` double NOT NULL,
  `incidental` double NOT NULL,
  `total_birr` double NOT NULL,
  `dept_id` int(10) NOT NULL,
  `college_id` int(11) NOT NULL,
  `finance_id` int(11) NOT NULL,
  `vice_id` varchar(67) NOT NULL,
  `read_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_info`
--

INSERT INTO `request_info` (`emp_id`, `date`, `name`, `college/department`, `Project _name`, `salary`, `perdiem_rate`, `purpose`, `departure`, `destination`, `means`, `total_days`, `payment`, `fuel`, `incidental`, `total_birr`, `dept_id`, `college_id`, `finance_id`, `vice_id`, `read_no`) VALUES
(987, '2022-07-18', 'Galata Waqwaya', 'software engineering', 'project', 44444, 3, 'jOOrmaa', 'Haramaya', 'Arbaminch', 'bus', 3, 3, 3, 3, 4, 456, 2145, 897, '1230', 0),
(1798, '2022-07-27', 'Galaa', 'softe', '', 0, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(2242, '2022-07-15', 'Lachiisaa Badhaasaa', 'Software engineering', 'Apparentship', 8000, 1.2, 'Emprience sharing at company', 'Haramaya', 'Addis Ababa', 'bus', 149, 5000, 2, 4, 12334, 1948, 1942, 1798, '23111', 0),
(3245, '2022-07-12', 'Galata Waqwaya', 'Software engineering', 'Training', 23564, 1.2, 'For having training at Finfinnee', 'Haramaya', 'Addis Ababa', 'vehicle', 4, 3456, 89, 34, 16843, 178, 233, 0, '', 0),
(5633, '2022-07-18', 'Chala', 'software engineering', 'AI', 112, 1, 'trainiing', 'Chiro', 'fincaa', 'vehicle', 2, 2, 1, 1, 3345, 3453, 1345, 1278, '1296', 0),
(9876, '2022-07-19', 'Galaa', 'agri', 'Cloud', 234, 4, 'uiooo', 'Harar', 'Adama', 'bus', 2, 222, 1, 1, 222, 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(150) NOT NULL,
  `job_position` varchar(150) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `job_position`, `password`) VALUES
('Elias78', 'College Dean', 987),
('Fufa56', 'Department Head', 1357),
('Galata34', 'Vice President', 2468),
('Kumsa90', 'Accountant', 7890),
('Lechisa123', 'Employee', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `vice_president`
--

CREATE TABLE `vice_president` (
  `vice_id` int(11) NOT NULL,
  `president_name` varchar(56) NOT NULL,
  `vp_notif` int(11) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vice_president`
--

INSERT INTO `vice_president` (`vice_id`, `president_name`, `vp_notif`, `comment`) VALUES
(1230, 'Ketros', 0, ''),
(1296, 'Tola', 0, ''),
(2233, 'Jamal', 0, ''),
(2311, 'Chala', 0, ''),
(2312, 'Galaa', 0, ''),
(2345, 'Galaa', 0, ''),
(3210, 'Jamal', 0, ''),
(3211, 'Jamal', 0, ''),
(3218, 'Jamal', 0, ''),
(9087, 'Shorka', 0, ''),
(23111, 'Tolera', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`finance_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`not_id`);

--
-- Indexes for table `request_info`
--
ALTER TABLE `request_info`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `college_id` (`college_id`,`finance_id`),
  ADD KEY `vice_id` (`vice_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `vice_president`
--
ALTER TABLE `vice_president`
  ADD PRIMARY KEY (`vice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `not_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
