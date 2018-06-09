-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 12:46 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prince_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(63) NOT NULL,
  `password` varchar(63) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `email`) VALUES
(1, 'admin1', 'admin1', 'Admin 1 ', 'admin1@fashion.com'),
(2, 'admin2', 'admin2', 'Admin 2', 'admin2@fashion.com');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `u_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(127) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(1028) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `email` varchar(127) NOT NULL,
  `education` varchar(32) NOT NULL,
  `work_experience` varchar(2048) NOT NULL,
  `prof_q` varchar(2048) NOT NULL,
  `cv` varchar(10000) NOT NULL,
  `img` varchar(10000) NOT NULL,
  `status` varchar(25) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`u_id`, `job_id`, `name`, `dob`, `address`, `contactno`, `email`, `education`, `work_experience`, `prof_q`, `cv`, `img`, `status`, `mark`) VALUES
(1, 4, '', '0000-00-00', ' ', '', '', 'Post Graduate', 'a:1:{i:0;a:3:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";}}', 'a:1:{i:0;a:3:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";}}', 'C:/wamp64/www/fashion/images/application/cv/', '', '', 28);

-- --------------------------------------------------------

--
-- Table structure for table `client_department`
--

CREATE TABLE `client_department` (
  `u_id` int(11) NOT NULL,
  `dept_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_department`
--

INSERT INTO `client_department` (`u_id`, `dept_id`) VALUES
(1, '1'),
(4, '1'),
(14, '1'),
(5, '2'),
(6, '3'),
(13, '3'),
(7, '4'),
(8, '5');

-- --------------------------------------------------------

--
-- Table structure for table `client_login`
--

CREATE TABLE `client_login` (
  `c_id` int(11) NOT NULL,
  `username` varchar(63) NOT NULL,
  `password` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_login`
--

INSERT INTO `client_login` (`c_id`, `username`, `password`) VALUES
(1, 'client1', 'clpw');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` varchar(3) NOT NULL,
  `department` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `department`) VALUES
('1', 'Finance'),
('2', 'hr'),
('3', 'marketing'),
('4', 'it'),
('5', 'production');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `dept_id` varchar(3) NOT NULL,
  `title` varchar(256) NOT NULL,
  `position` varchar(100) NOT NULL,
  `description` varchar(1028) NOT NULL,
  `post_date` date NOT NULL,
  `closing_date` date NOT NULL,
  `img_job` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `u_id`, `dept_id`, `title`, `position`, `description`, `post_date`, `closing_date`, `img_job`) VALUES
(2, 1, '1', 'New Recruitment', 'SMM', 'Social media marketer', '2018-06-15', '2018-06-20', 'null'),
(4, 1, '2', 'aaa', 'Jr Exec', 'aaa', '2018-06-05', '2018-06-01', 'C:/xampp/htdocs/fashion/images/job/18557112_1860632280631523_549291065253158337_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(63) NOT NULL,
  `password` varchar(63) NOT NULL,
  `email` varchar(127) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `password`, `email`, `role`) VALUES
(1, 'First Applicant', 'pw', 'dwadwa@gmail.com\r\n', 'user'),
(2, 'admin1', 'admin1', 'admin1@gmail.com', 'admin'),
(3, 'admin2', 'admin2', 'admin2@gmail.com', 'admin'),
(4, 'client1', 'client1', 'client1@gmail.com', 'client'),
(5, 'client2', 'client2', 'client2@gmail.com', 'client'),
(6, 'client3', 'client3', 'client3@gmail.com', 'client'),
(7, 'client4', 'client4', 'client4@gmail.,com', 'client'),
(8, 'client5', 'client5', 'client5', 'client'),
(13, 'newuser', 'newuser', 'dwada@gm.com', 'client'),
(14, '', '', '', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`u_id`,`job_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `client_department`
--
ALTER TABLE `client_department`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `client_login`
--
ALTER TABLE `client_login`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`,`u_id`,`dept_id`),
  ADD KEY `c_id` (`u_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_department`
--
ALTER TABLE `client_department`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `client_login`
--
ALTER TABLE `client_login`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`),
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`);

--
-- Constraints for table `client_department`
--
ALTER TABLE `client_department`
  ADD CONSTRAINT `client_department_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `client_department_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `client_login`
--
ALTER TABLE `client_login`
  ADD CONSTRAINT `client_login_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `client_department` (`u_id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `client_department` (`u_id`),
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
