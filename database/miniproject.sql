-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 05:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application_id` int(4) NOT NULL,
  `userID` int(4) NOT NULL,
  `uni_id` varchar(3) NOT NULL,
  `progrm_id` varchar(3) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_id`, `userID`, `uni_id`, `progrm_id`, `feedback`, `status`) VALUES
(51694, 8, 'U01', 'PD1', 'Good luck!', '1');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `progrm_id` varchar(3) NOT NULL,
  `progrm_name` varchar(50) NOT NULL,
  `duration_in_year` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`progrm_id`, `progrm_name`, `duration_in_year`, `qualification`) VALUES
('', '', '', ''),
('PB1', 'Degree in Information Technology', '3', 'At least 3Bs in UEC'),
('PB2', 'Degree in Business', '3', ''),
('PB3', 'Degree in Mass Communication', '3', ''),
('PB4', 'Degree in Finance and Accounting', '2', ''),
('PD1', 'Diploma in Information Technology', '2', ''),
('PD2', 'Diploma in Business', '2', ''),
('PD3', 'Diploma in Mass Communication', '2', ''),
('PD4', 'Diploma in Finance and Accounting', '2', ''),
('PD5', 'Diploma in Tourism', '', 'At least 3Bs in UEC'),
('PD6', 'testtest', '2', 'at least 4Bs in UEC');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `qua_name` varchar(200) NOT NULL,
  `cal_overall` varchar(200) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qua_name`, `cal_overall`, `grade`) VALUES
('STPM', 'Average of best 3 Subjects\r\n\r\nMinimum Score: 0.0\r\nMaximum Score: 4.0', 'A   (4.00)\r\nA-  (3.67)\r\nB+ (3.33)\r\nB    (3.00)\r\nB-  (2.67)\r\nC+  (2.33)\r\nC   (2.00)\r\nB+ (1.67)\r\nD+ (1.33)\r\nD  (1.00)\r\nF  (0.00)'),
('A-levels', 'Average of best 3 Subjects\r\n\r\nMinimum Score: 0.0\r\nMaximum Score: 5.0', 'A - 5 points\r\nB - 4 points\r\nC - 3 points\r\nD - 2 points\r\nE - 1 point'),
('Australian Matriculation', 'Average of best 4 subjects \r\nMinimum Score: 0\r\nMaximum Score: 100%', '0 - 100%'),
('Canadian Pre-University', 'Average of 6 subjects\r\n\r\nMinimum Score: 0\r\nMaximum Score: 100%', '0 - 100%'),
('Unified Examination Certificate (UEC)', 'Total of best 5 subjects\r\n\r\nMinimum Score: 5\r\nMaximum Score: 30', 'A1 - 1 point\r\nA2 - 2 points\r\nB3 - 3 points\r\nB4 - 4 points\r\nB5 - 5 points\r\nB6 - 6 points'),
('International Baccalaureate', 'Total of  6 subjects\r\n\r\nMinimum Score: 0 \r\nMaximum Score: 42', '0 - 7 points per subject'),
('we', 'qwe', 'qwe'),
('123', '', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `grade` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuId`, `username`, `name`, `email`, `password`, `gender`, `birthday`, `phone`, `major`, `qualification`, `grade`) VALUES
(1, '', 'ting weng kei', 'ting@gmail.com', '123', 'Male', '2019-04-03', '012-111-2222', 'art', 'STPM', '2.0'),
(2, '', 'ting ting', '', '123', 'Male', '2019-04-01', '012-123-3333', 'science', 'STPM', '3'),
(3, '', 'ali ', '', '123', 'Male', '2019-04-03', '012-111-2222', 'science', 'STPM', '2'),
(4, '', 'John', '', '123', 'Male', '2019-04-09', '012-123-3333', 'science', 'STPM', '1'),
(5, '', 'lee', '', '123', 'Female', '2019-04-02', '018-111-1222', 'science', 'STPM', '3'),
(6, '', 'liew cj', '', '123', 'Male', '2019-04-03', '012-111-2222', 'science', 'STPM', '3.2'),
(7, '', 'liew cj', '', '123', 'Male', '2019-04-10', '012-123-3333', 'science', 'STPM', '3'),
(8, 'melanie', 'melaine ', 'melanie@abc.com', '123', 'Female', '2019-04-10', '012-111-2222', 'science', 'STPM', '2'),
(9, 'ffff', '', '', '', '', '0000-00-00', '', '', '', ''),
(10, 'test', '', '', '', '', '0000-00-00', '', '', '', ''),
(11, 'Liew', '', '', '', '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `uni_id` varchar(3) NOT NULL,
  `uni_name` varchar(50) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `university_admin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`uni_id`, `uni_name`, `duration`, `contactno`, `address`, `university_admin`) VALUES
('U01', 'Help University', '3 Year', '+603-2716 2000 ', 'No. 15, Jalan Sri Semantan 1, Off Jalan Semantan, Bukit Damansara 50490 Kuala Lumpur', 2),
('U02', 'Segi University', '4 Year', '+603 6145 1777 ', 'alan Teknologi, Kota Damansara, \r\n47810 Petaling Jaya, Selangor, \r\nMalaysia', 5),
('U03', 'Utar', '2 Year', '+603 6145 1777 ', 'Jalan Teknologi, Kota Damansara, 47810 Petaling Jaya, Selangor, Malaysia', 18739),
('U04', 'qwer', '', '2234', 'qwer', 5),
('U05', 'Sunway', '', '05-4345863', 'Jalan 8', 8208);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'sasystem', 'sasystem', 'sasAdmin'),
(2, 'help', 'help', 'UA'),
(3, 'tingwengkei', 'tingwengkei', 'user'),
(4, 'abc', 'abc', 'user'),
(5, 'segi', 'segi', ''),
(8, 'melanie', 'melanie', 'user'),
(1702, 'tua', 'tua', 'ua'),
(5219, 'ting', 'tingting', 'ua'),
(6406, '', '', 'ua'),
(6878, 'test', 'test', 'ua'),
(8208, 'ring', 'ring', 'ua'),
(18739, 'utar', 'utar', 'ua'),
(29535, 'ring', 'ting', ''),
(29536, 'pro', 'pro', ''),
(29538, 'wong', 'wong', 'user'),
(29539, 'qing', 'qing', 'user'),
(29540, 'abc', '123', 'user'),
(29541, 'pppp', 'pppp', 'user'),
(29542, 'ffff', 'ffff', 'user'),
(29543, 'test', 'test', 'user'),
(29544, 'Liew', 'Liew', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `uni_id` (`uni_id`),
  ADD KEY `progrm_id` (`progrm_id`),
  ADD KEY `id` (`userID`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`progrm_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuId`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`uni_id`),
  ADD KEY `university_admin` (`university_admin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29545;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `progrm_id` FOREIGN KEY (`progrm_id`) REFERENCES `programme` (`progrm_id`),
  ADD CONSTRAINT `uni_id` FOREIGN KEY (`uni_id`) REFERENCES `university` (`uni_id`),
  ADD CONSTRAINT `user_id_application` FOREIGN KEY (`userID`) REFERENCES `user` (`id`);

--
-- Constraints for table `university`
--
ALTER TABLE `university`
  ADD CONSTRAINT `user_id_universityadmin` FOREIGN KEY (`university_admin`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
