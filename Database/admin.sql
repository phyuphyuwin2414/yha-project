-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 09:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `asteacher`
--

CREATE TABLE `asteacher` (
  `asteacherid` int(11) NOT NULL,
  `asteachername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `asteacher`
--

INSERT INTO `asteacher` (`asteacherid`, `asteachername`) VALUES
(1, 'Sr.Ye Htun Aung'),
(2, 'Sr.Kyawt Yin'),
(3, 'Tr.Kay Thi'),
(4, 'Sr.Htin Aung'),
(5, 'Tr.Ei Khin'),
(6, 'Sr.Zin Ko Htike'),
(7, 'Tr.Ei Su'),
(8, 'Tr.Phyu Phyu Win'),
(9, 'Tr.Khin Bhone');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseid` int(11) NOT NULL,
  `coursename` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `coursename`) VALUES
(1, 'ICT Foundation Course'),
(2, 'Advanced Excel Class'),
(3, 'Adobe Photoshop Beginner Class'),
(4, 'Adobe Photoshop Advanced Maste'),
(5, 'Adobe Photoshop Beginner Class'),
(6, 'Adobe Illustrator Introduction'),
(7, 'Adobe Illustrator Master Class'),
(8, 'Adobe Illustrator Logo Master '),
(9, 'Corel DRAW 2021 Class'),
(10, 'A+ Hardwareကွန်ပျူတာပြုပြင်သင်တန်း'),
(11, 'A+ Networking Class'),
(12, 'Web Design Class(Fronted)'),
(13, 'Web Design and Development Cla'),
(14, 'Python Programming Class'),
(15, 'Java Programming Language Clas');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `phno` varchar(20) NOT NULL,
  `date` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `situration` varchar(30) NOT NULL,
  `cdate` varchar(30) NOT NULL,
  `edate` varchar(30) NOT NULL,
  `note` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`phno`, `date`, `name`, `reason`, `situration`, `cdate`, `edate`, `note`, `id`) VALUES
('09477465565', '2023-03-23', 'Khin ', 'fgwyfywyifgyi', 'yi23iyirwryw', '2023-03-01', '2023-03-04', 'wuhi2hfj', 1),
('096463242819', '2023-03-25', 'phyu phyu win', 'for fhh', 'illhkrhiw', '2023-03-24', '2023-03-25', 'urfiuryfio4', 3),
('09882838031', '2023-03-25', 'phyu', 'for fhh', 'illhggh', '2023-03-24', '2023-03-25', 'kdj', 4),
('09882838031', '1970-01-01', 'khin bhone', 'qnkrb', 'jbdhvwg', '1970-01-01', '1970-01-01', ',fg;ufgugewuh; xchgfaba;dq', 6);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sectionid` int(11) NOT NULL,
  `sectionname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sectionid`, `sectionname`) VALUES
(1, 'Mon-Thus'),
(2, 'Sat-Sun'),
(4, 'Sunday Only'),
(5, 'Special Class');

-- --------------------------------------------------------

--
-- Table structure for table `sectiontime`
--

CREATE TABLE `sectiontime` (
  `timeid` int(11) NOT NULL,
  `timename` varchar(20) NOT NULL,
  `sectionid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sectiontime`
--

INSERT INTO `sectiontime` (`timeid`, `timename`, `sectionid`) VALUES
(1, '7AM-9AM', 1),
(2, '8AM-10AM', 1),
(3, '10AM-12AM', 1),
(4, '12AM-2PM', 1),
(5, '2PM-4PM', 1),
(6, '4PM-6PM', 1),
(7, '8AM-11AM', 2),
(8, '11AM-2PM', 2),
(9, '2PM-5PM', 2),
(10, '8AM-12AM', 3),
(11, '12AM-4PM', 3);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `stid` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `cpass` varchar(30) NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`stid`, `uname`, `pass`, `cpass`, `phone`) VALUES
(1, 'Khin Bhone', '1234', '1234', '09882838031'),
(2, 'Phyu Pyu ', '5678', '5678', '09125456556'),
(4, 'ei', '2323', '2323', '0937361365'),
(9, 'Su', '4567', '4567', '0927736535'),
(10, 'kyi', '8900', '8900', '09433468778'),
(11, 'thin', '7878', '7878', '09756564657'),
(12, 'Nyi Nyi', '9819', '9819', '09981919237');

-- --------------------------------------------------------

--
-- Table structure for table `subdetail`
--

CREATE TABLE `subdetail` (
  `subdeid` int(11) NOT NULL,
  `subdename` varchar(50) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subdetail`
--

INSERT INTO `subdetail` (`subdeid`, `subdename`, `subid`) VALUES
(1, 'About Photoshop (Color Theory)', 2),
(2, 'About Internet and Email(Gmail)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` int(11) NOT NULL,
  `subname` varchar(30) NOT NULL,
  `courseid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `subname`, `courseid`) VALUES
(1, 'Internet and Email', 1),
(2, 'Pen Tool', 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherid` int(11) NOT NULL,
  `teachername` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherid`, `teachername`) VALUES
(1, 'Sr .Ye Htun Aung'),
(2, 'Sr.Kyawt Yin'),
(3, 'Tr.Kay Thi'),
(4, 'Sr.Htin Aung'),
(5, 'Tr.Ei Khin'),
(6, 'Sr.Zin Ko Htike'),
(7, 'Tr.Ei Su'),
(8, 'Tr.Phyu Phyu Win'),
(9, 'Tr.Khin Bhone');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `section` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `sectiontime` varchar(20) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `asteacher` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `section`, `course`, `subject`, `sectiontime`, `teacher`, `date`, `asteacher`) VALUES
(11, '1', '1', '1', '1', '3', '2023-03-06', '6'),
(16, '2', '1', '1', '2', '4', '2023-03-24', '6'),
(21, '1', '3', '2', '3', '6', '2023-03-28', '8'),
(23, '1', '8', '2', '1', '3', '2023-03-17', '4'),
(24, '4', '10', '1', '5', '2', '2023-04-06', '8'),
(25, '2', '9', '2', '2', '6', '2023-03-31', '8'),
(30, '4', '11', '1', '5', '5', '2023-04-06', '7'),
(31, '4', '9', '2', '5', '3', '2023-03-22', '5'),
(32, '5', '7', '1', '10', '3', '2023-04-07', '6');

-- --------------------------------------------------------

--
-- Table structure for table `trecord`
--

CREATE TABLE `trecord` (
  `tid` int(11) NOT NULL,
  `section` varchar(30) NOT NULL,
  `sectiontime` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `subdetail` varchar(50) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `trecord`
--

INSERT INTO `trecord` (`tid`, `section`, `sectiontime`, `course`, `subject`, `subdetail`, `teacher`, `date`) VALUES
(2, '2', '4', '4', '0', '2', '5', '2023-03-31'),
(3, '4', '4', '8', '0', '2', '8', '2023-04-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asteacher`
--
ALTER TABLE `asteacher`
  ADD PRIMARY KEY (`asteacherid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sectionid`);

--
-- Indexes for table `sectiontime`
--
ALTER TABLE `sectiontime`
  ADD PRIMARY KEY (`timeid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `subdetail`
--
ALTER TABLE `subdetail`
  ADD PRIMARY KEY (`subdeid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherid`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trecord`
--
ALTER TABLE `trecord`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asteacher`
--
ALTER TABLE `asteacher`
  MODIFY `asteacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sectionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sectiontime`
--
ALTER TABLE `sectiontime`
  MODIFY `timeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subdetail`
--
ALTER TABLE `subdetail`
  MODIFY `subdeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `trecord`
--
ALTER TABLE `trecord`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
