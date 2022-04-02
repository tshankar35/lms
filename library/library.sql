-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 07:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookrecord`
--

CREATE TABLE `bookrecord` (
  `bid` int(11) NOT NULL,
  `bname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookrecord`
--

INSERT INTO `bookrecord` (`bid`, `bname`) VALUES
(100, 'Harry Potter and The Philosphers Stone'),
(101, 'Harry Potter and Chamber of Secrets'),
(102, 'Harry Potter and The Prisoner of Azkaban'),
(103, 'Harry Potter and The Goblet of Fire'),
(104, 'Harry Potter and The Order of Phoenix'),
(105, 'Harry Potter and The Half Blood Prince'),
(106, 'Harry Potter and The Deathly Hallows'),
(107, 'Immortals of Melhua'),
(108, 'The Secret of Nagas'),
(109, 'The Oath of Vayuputras'),
(110, 'The Fault in Our Stars');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `userid` varchar(55) NOT NULL,
  `bid` int(11) DEFAULT NULL,
  `pas` varchar(55) DEFAULT NULL,
  `issue` date DEFAULT NULL,
  `returnby` date DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`userid`, `bid`, `pas`, `issue`, `returnby`, `name`) VALUES
('20CSE139', 0, 'payal', '0000-00-00', '0000-00-00', 'Payal Dash'),
('20CSE141', 0, 'shubham', '0000-00-00', '0000-00-00', 'Shubham Sharma'),
('20CSE145', 0, 'iamelectronic', '0000-00-00', '0000-00-00', 'Electrical Kavya'),
('20CSE146', 0, 'avinash', '0000-00-00', '0000-00-00', 'Avinash Sharma'),
('20CSE190', 0, 'tanay', '0000-00-00', '0000-00-00', 'Tanay'),
('admin', 0, 'libraryadmin', '0000-00-00', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookrecord`
--
ALTER TABLE `bookrecord`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
