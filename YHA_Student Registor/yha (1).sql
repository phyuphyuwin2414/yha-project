-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 12:07 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yha`
--

-- --------------------------------------------------------

--
-- Table structure for table `asteacher`
--

CREATE TABLE `asteacher` (
  `asteacherid` int(11) NOT NULL,
  `asteachername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attend_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `dat` date NOT NULL,
  `section_id` int(100) NOT NULL,
  `time_id` int(100) NOT NULL,
  `attend` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attend_id`, `student_id`, `student_name`, `course_id`, `dat`, `section_id`, `time_id`, `attend`) VALUES
(9, 1, 'Phyu Phyu', 14, '2023-04-20', 1, 11, 'Present'),
(10, 3, 'Mg Mg', 12, '2023-02-01', 1, 9, 'Absent'),
(11, 2, 'Jhon', 10, '2023-02-14', 1, 1, 'Absent'),
(14, 4, 'Jame', 13, '2023-04-21', 2, 10, 'Absent'),
(21, 5, 'Phyu Phyu', 14, '2023-07-07', 1, 11, 'Present'),
(23, 5, 'Mg Mg', 14, '2023-07-11', 2, 11, 'Leave'),
(24, 8, 'Jame', 9, '2023-07-16', 1, 10, 'Leave');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseid` int(11) NOT NULL,
  `coursename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `coursename`) VALUES
(1, 'ICT Foundation Course'),
(2, 'Advanced Excel Course'),
(3, 'Adobe Photoshop(Ps) Beginner Class'),
(4, 'Adobe Photoshop(Ps) Advanced Master Class'),
(5, 'Adobe Illustrator(Ai) Beginner Class'),
(6, 'Adobe Illustrator(Ai) Advance Master Class'),
(7, 'Adobe Illustrator(Ai) Logo Class'),
(8, 'CorelDRAW 2021 Class'),
(9, 'Web Design & Development (PHP) (Fullstack Class)'),
(10, 'Java Programming Class(J2se)'),
(11, 'Java Programming Class(J2ee)'),
(12, 'Android Mobile Development Class with Kotlin'),
(13, 'iOS Mobile Development Class with Swift'),
(14, 'Python Programming Language Class'),
(15, 'Laravel Development Class'),
(16, 'React Development Class');

-- --------------------------------------------------------

--
-- Table structure for table `login_sample`
--

CREATE TABLE `login_sample` (
  `phno` double NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_sample`
--

INSERT INTO `login_sample` (`phno`, `password`) VALUES
(9753165889, '241499'),
(9400812594, '2001');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `register_date` date NOT NULL,
  `enroll_date` date NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `phno` varchar(50) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `stu_address` varchar(150) NOT NULL,
  `fb_acc` varchar(100) NOT NULL,
  `vb_phno` varchar(50) NOT NULL,
  `date_birth` date NOT NULL,
  `nrc_no` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `edu` varchar(150) NOT NULL,
  `native_town` varchar(100) NOT NULL,
  `rg_status` varchar(100) NOT NULL,
  `stu_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`stu_id`, `stu_name`, `course_id`, `section_id`, `time_id`, `register_date`, `enroll_date`, `father_name`, `mother_name`, `phno`, `e_mail`, `stu_address`, `fb_acc`, `vb_phno`, `date_birth`, `nrc_no`, `gender`, `edu`, `native_town`, `rg_status`, `stu_img`) VALUES
(1, 'Mg Mg', 13, 6, 10, '2023-07-22', '2023-07-22', 'U Aung', 'Daw Hla', '09400812594', 'admin@phpzag.com', 'Yangon', 'Aster', '09400812594', '2023-07-05', '5/kabala(N)241499', 'Male', 'High School', 'Shwebo', '', '03.png'),
(6, 'Aung Aung', 13, 6, 10, '2023-07-22', '2023-07-22', 'U Aung', 'Daw Hla', '09753165889', 'admin@phpzag.com', 'Yangon', 'Aster', '09400812594', '2023-07-05', '5/kabala(N)241499', 'Female', 'High School', 'Shwebo', '', 'bulb.png'),
(7, 'Aster', 13, 6, 10, '2023-07-22', '2023-07-22', 'U Aung', 'Daw Hla', '0993587155', 'admin@phpzag.com', 'Yangon', 'Aster', '09400812594', '2023-07-05', '5/kabala(N)241499', 'Male', 'High School', 'Shwebo', '', 'hero-img.png');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sectionid` int(11) NOT NULL,
  `sectionname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sectionid`, `sectionname`) VALUES
(1, 'Mon-Thus'),
(7, 'Mon-Wed'),
(8, 'Sat-Sun'),
(9, 'Sun Only'),
(10, 'Special');

-- --------------------------------------------------------

--
-- Table structure for table `sectiontime`
--

CREATE TABLE `sectiontime` (
  `timeid` int(11) NOT NULL,
  `timename` varchar(20) NOT NULL,
  `sectionid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(12, 'Nyi Nyi', '9819', '9819', '09981919237'),
(13, '', '', '', ''),
(14, 'Admin', '123', '123', '09400812594'),
(15, 'Aster', '1234', '1234', '09753165889'),
(16, 'Aster', '123', '123', '0927736535'),
(17, 'aung', '123', '123', '0977777');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `description`) VALUES
(1, 'Improgress'),
(2, 'DropOut'),
(3, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `status_details`
--

CREATE TABLE `status_details` (
  `std_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `dt_start` date NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_details`
--

INSERT INTO `status_details` (`std_id`, `status_id`, `student_id`, `dt_start`, `remark`) VALUES
(1, 3, 1, '2023-03-10', 'A'),
(97, 1, 1, '2023-07-14', 'a'),
(98, 3, 1, '2023-07-14', 'vv'),
(99, 2, 1, '2023-05-08', 'cc');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `phNo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `phNo`) VALUES
(1, 'Jame', 9753165889),
(2, 'Jhon', 9400812594);

-- --------------------------------------------------------

--
-- Table structure for table `subdetail`
--

CREATE TABLE `subdetail` (
  `subdeid` int(11) NOT NULL,
  `subdename` varchar(50) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(32, '5', '7', '1', '10', '3', '2023-04-07', '6'),
(33, '1', '1', '1', '1', '1', '2023-07-13', '2'),
(34, '1', '6', '1', '2', '1', '2023-07-16', '3'),
(35, '1', '12', '1', '2', '1', '2023-07-25', '2');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attend_id`);

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
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`stu_id`);

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
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_details`
--
ALTER TABLE `status_details`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sectionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sectiontime`
--
ALTER TABLE `sectiontime`
  MODIFY `timeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_details`
--
ALTER TABLE `status_details`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `trecord`
--
ALTER TABLE `trecord`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
