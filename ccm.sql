-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 07:13 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `feedback`, `date`) VALUES
('heyitsak@gmail.com', 'this is feedback for demo', '15-07-21'),
('manesaurabh420@gmail.com', 'this is teachers feedback', '21-07-21'),
('omkar@gmail.com', 'this is omkars feedback', '15-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `usertype` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `security_question` varchar(255) NOT NULL,
  `security_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`usertype`, `name`, `address`, `email`, `password`, `phone_no`, `security_question`, `security_answer`) VALUES
('Student', 'Akash Bhosale', 'Mauli', 'heyitsak@gmail.com', '1234', '1231231231', 'What is your school name?', 'sayajirao'),
('Teacher', 'Saurabh Mane', 'Satara', 'manesaurabh420@gmail.com', '123', '1231231231', 'What is your school name?', 'anant'),
('Student', 'Omkar Kathwate', 'Wai', 'omkar@gmail.com', '123', '1231231231', 'What is your middle name?', 'idk'),
('Teacher', 'shantanu nimbalkar', 'satara', 'shantya@gmail.com', '123', '1231231231', 'What is your school name?', 'anant');

-- --------------------------------------------------------

--
-- Table structure for table `student solution`
--

CREATE TABLE `student solution` (
  `student solution` varchar(255) NOT NULL,
  `solution type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `s_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_compliant`
--

CREATE TABLE `student_compliant` (
  `que_no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `complain_type` varchar(255) NOT NULL,
  `complain` varchar(255) NOT NULL,
  `s_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_compliant`
--

INSERT INTO `student_compliant` (`que_no`, `email`, `complain_type`, `complain`, `s_date`) VALUES
(11, 'omkar@gmail.com', 'Choose Complaint Type', 'this is updated omkars complaint', '13-07-21'),
(13, 'heyitsak@gmail.com', 'Complaint over Teacher', 'this is complaint over teacher\r\n', '22-07-21'),
(14, 'heyitsak@gmail.com', 'Complaint over other Student', 'this is complaint over student', '23-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `student_suggestion`
--

CREATE TABLE `student_suggestion` (
  `sug_no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `suggestion_type` varchar(255) NOT NULL,
  `suggestion` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_suggestion`
--

INSERT INTO `student_suggestion` (`sug_no`, `email`, `suggestion_type`, `suggestion`, `date`) VALUES
(1, 'omkar@gmail.com', 'Suggestion on Syllabus', 'THIS IS SUGGESTION ON SYLLABUS', '15-07-21'),
(2, 'omkar@gmail.com', 'Suggestion on Campus', 'THIS IS suggestion over campus', '15-07-21'),
(3, 'heyitsak@gmail.com', 'Complaint over Teacher', 'this is updated suggestion', '22-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `teacher solution`
--

CREATE TABLE `teacher solution` (
  `teacher solution` varchar(255) NOT NULL,
  `solution type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `t_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_complaint`
--

CREATE TABLE `teacher_complaint` (
  `que_no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `complain_type` varchar(255) NOT NULL,
  `complain` varchar(255) NOT NULL,
  `t_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_suggestion`
--

CREATE TABLE `teacher_suggestion` (
  `sug_no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `suggestion_type` varchar(255) NOT NULL,
  `suggestion` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_suggestion`
--

INSERT INTO `teacher_suggestion` (`sug_no`, `email`, `suggestion_type`, `suggestion`, `date`) VALUES
(3, 'manesaurabh420@gmail.com', 'Choose Suggestions', 'this is suggestion over update', '23-07-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `student solution`
--
ALTER TABLE `student solution`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `student_compliant`
--
ALTER TABLE `student_compliant`
  ADD PRIMARY KEY (`que_no`);

--
-- Indexes for table `student_suggestion`
--
ALTER TABLE `student_suggestion`
  ADD PRIMARY KEY (`sug_no`);

--
-- Indexes for table `teacher solution`
--
ALTER TABLE `teacher solution`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `teacher_complaint`
--
ALTER TABLE `teacher_complaint`
  ADD PRIMARY KEY (`que_no`);

--
-- Indexes for table `teacher_suggestion`
--
ALTER TABLE `teacher_suggestion`
  ADD PRIMARY KEY (`sug_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_compliant`
--
ALTER TABLE `student_compliant`
  MODIFY `que_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_suggestion`
--
ALTER TABLE `student_suggestion`
  MODIFY `sug_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_complaint`
--
ALTER TABLE `teacher_complaint`
  MODIFY `que_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_suggestion`
--
ALTER TABLE `teacher_suggestion`
  MODIFY `sug_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
