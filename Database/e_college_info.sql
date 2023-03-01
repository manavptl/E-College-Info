-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 04:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e college info`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `filename` longblob DEFAULT NULL,
  `size` int(11) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `filename` longblob DEFAULT NULL,
  `size` int(11) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `common_info`
--

CREATE TABLE `common_info` (
  `userid` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  `first_name` char(20) NOT NULL,
  `middle_name` char(20) NOT NULL,
  `last_name` char(20) NOT NULL,
  `mobile_no` bigint(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `branch` char(20) NOT NULL,
  `gender` char(6) NOT NULL,
  `addhar_no` bigint(12) NOT NULL,
  `city` char(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `pincode` int(6) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `common_info`
--

INSERT INTO `common_info` (`userid`, `password`, `u_id`, `first_name`, `middle_name`, `last_name`, `mobile_no`, `address`, `branch`, `gender`, `addhar_no`, `city`, `dob`, `pincode`, `email`) VALUES
('ridham410', '$2y$10$j3E/9rYbnNy7.ObqD/nMae1EE0VNDdXQ5IJERwJ5XerQkfpk5WCO2', 1, 'ridham', 'ashvinbhai', 'patel', 7698193937, 'sariya wado, bulakhi pada same, patan', 'computer', 'male', 123456789012, 'patan', '1997-10-04', 384265, 'ridhampatel410@gmail.com'),
('saras@gmail.com', '$2y$10$NWFcXnSoOy1gclp/XnWSkek9VvBlsU3mCTt6PNeGEkgL3uARsatg2', 2, 'saras', 'ashvin', 'patel', 1234567890, 'sariyawado, bulakho pada same, patan', 'computer', 'male', 123456789012, 'patan', '1989-10-08', 384265, 'ridhampatel910@gmail.com'),
('man098', '$2y$10$57q4kR8KohEuitsBkNnxdOgArCQWmloxuuuJ9QKnM1qBoP/RIpKIO', 3, 'demo', 'dfg', 'gh', 987, 'ghj', 'computer', 'male', 123456789012, 'patan', '1989-10-08', 9876, 'ridhampatel410@gmail.com'),
('ridham910', '$2y$10$j3CKZEYLchZ5DsdPv7jrWu9fs/Rn6NA2e/Q552IAY7WdtkHqniiYm', 4, 'hjjn', 'hj', '0ij', 0, 'oi', 'computer', 'male', 34567, 'hjk', '1997-10-04', 987, 'ridhampatel910@gmail.com'),
('saraspatel@gmail.com', '$2y$10$H75aTIVFdC4gDJsSd/w.RebL6g5nJZX25UkT2Klb4tAJ91YrpEIk.', 5, 'saras', 'ashvinbhai', 'patel', 1234567890, 'saria wado, bulakhipada same, patan', 'computer', 'male', 1234567890, 'patan', '1998-08-10', 987654, 'ridhampatel410@gmail.com'),
('manav@gmail.com', '$2y$10$cf1HCdamHYN9MkOzeRwKnOyI35vGXdvopZpj5ASL//0tX0qIoEBwy', 6, 'manav', 'hiteshbhai', 'patel', 1234567890, 'kanku nagar, unjha', 'computer', 'male', 870965432112, 'unjha', '1998-06-07', 567890, 'ridhampatel410@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `faculty_id` int(11) NOT NULL,
  `post` char(25) NOT NULL,
  `u_id` int(9) DEFAULT NULL,
  `s_name1` char(50) NOT NULL,
  `s_name2` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`faculty_id`, `post`, `u_id`, `s_name1`, `s_name2`) VALUES
(1, 'faculty', 2, 'ACP', 'DS'),
(2, 'hjk', 4, 'hjk', 'hjk'),
(3, 'lactu', 5, '', ''),
(4, 'lactuere', 6, 'ACP', 'CPP');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  `login_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`login_time`, `logout_time`, `login_id`) VALUES
('2021-05-09 03:51:34', '2021-05-09 03:54:22', 'ridham410'),
('2021-05-10 10:48:55', '2021-05-10 10:55:33', 'ridham410'),
('2021-05-10 10:57:05', '2021-05-10 10:58:18', 'saras@gmail.com'),
('2021-05-10 11:21:23', '2021-05-10 11:21:30', 'ridham410'),
('2021-05-10 12:26:12', '2021-05-10 12:46:05', 'ridham410'),
('2021-05-10 19:58:00', '2021-05-10 19:58:07', 'saras@gmail.com'),
('2021-05-10 19:58:14', '2021-05-10 19:58:18', 'saras@gmail.com'),
('2021-05-12 10:48:15', '2021-05-12 10:48:25', 'ridham410'),
('2021-05-12 11:21:24', '2021-05-12 11:21:29', 'ridham410'),
('0000-00-00 00:00:00', '2021-05-12 11:27:45', ''),
('2021-05-13 17:58:11', '2021-05-13 17:59:04', 'ridham410'),
('2021-05-13 17:59:13', '2021-05-13 17:59:31', 'ridham410'),
('2021-05-13 18:01:00', '2021-05-13 18:01:03', 'ridham410'),
('2021-05-13 18:05:45', '2021-05-13 18:10:01', 'saras@gmail.com'),
('2021-05-13 19:17:18', '2021-05-13 19:20:27', 'manav@gmail.com'),
('2021-05-13 19:29:24', '2021-05-13 19:31:04', 'ridham410'),
('2021-05-13 19:33:57', '2021-05-13 19:34:56', 'ridham410'),
('2021-05-13 19:36:24', '2021-05-13 19:38:27', 'ridham410');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `filename` longblob DEFAULT NULL,
  `size` int(11) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `filename`, `size`, `upload_date`) VALUES
(1, 0x4e6f746963652e706466, 24923, '2021-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `filename` longblob DEFAULT NULL,
  `size` int(11) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `u_id` int(9) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `father_mno` bigint(10) NOT NULL,
  `father_address` varchar(100) NOT NULL,
  `enrolment` bigint(12) NOT NULL,
  `up_down` char(3) NOT NULL,
  `category` char(4) NOT NULL,
  `sem` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`u_id`, `student_id`, `father_mno`, `father_address`, `enrolment`, `up_down`, `category`, `sem`) VALUES
(1, 1, 9885714735, 'patan', 186310307072, 'yes', 'open', 6),
(3, 2, 9885714735, 'patan', 186310307072, 'yes', 'jghv', 6);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `filename` longblob DEFAULT NULL,
  `size` int(11) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_info`
--
ALTER TABLE `common_info`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `common_info`
--
ALTER TABLE `common_info`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty_info`
--
ALTER TABLE `faculty_info`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
