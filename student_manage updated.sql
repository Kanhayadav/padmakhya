-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 10:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Naman Arora', 'namanaurora01@gmail.com', 'na21', 'Student'),
(27, 'kanha yadav', 'kanhayadav1610@gmail.com', 'asdf', ''),
(28, 'GANESHA', 'ganeshayadav13@gmail.com', 'ganesha1310', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(100) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `std_rollno` int(100) NOT NULL,
  `std_dept` varchar(100) NOT NULL,
  `std_sem` int(100) NOT NULL,
  `std_fees_status` varchar(100) NOT NULL,
  `attendance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `std_rollno`, `std_dept`, `std_sem`, `std_fees_status`, `attendance`) VALUES
(4, 'Lakshey Gulyani', 22002, 'BBA', 5, 'Paid', 'Absent'),
(5, 'Ratan', 22003, 'BBA', 4, 'Paid', 'Present'),
(7, 'Naman Arora', 22004, 'BCA', 6, 'Paid', 'Present'),
(8, 'Rahul Aggarwal', 22008, 'BCA', 6, 'Paid', 'Present'),
(9, 'Namrita Thappa', 22009, 'BBA', 5, 'Paid', 'Present'),
(10, 'Nitika Rawat', 22010, 'BBA', 4, 'Paid', 'Absent'),
(11, 'Chavi Sharma', 22011, 'BBA', 4, 'Paid', 'Present'),
(12, 'Naina Sachdeva', 22005, 'BBA', 5, 'Paid', 'Present'),
(13, 'Rohit Mehra', 22006, 'BBA', 3, 'Paid', 'Present'),
(14, 'Deepti Kapoor', 22014, 'BBA', 4, 'Paid', 'Present'),
(15, 'asdfasdlfkj;lkj', 2394809, 'BCA', 5, 'Paid', 'Present');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
