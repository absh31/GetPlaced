-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 07:38 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_tbl`
--

CREATE TABLE `college_tbl` (
  `college_id` int(11) NOT NULL,
  `college_uname` varchar(10) NOT NULL,
  `college_pass` varchar(20) NOT NULL,
  `college_name` varchar(128) NOT NULL,
  `college_contact` varchar(20) NOT NULL,
  `college_web` varchar(128) NOT NULL,
  `college_address` text NOT NULL,
  `college_add_comp` text NOT NULL,
  `college_app_comp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_skills`
--

CREATE TABLE `company_skills` (
  `company_id` int(11) NOT NULL,
  `company_html_css` tinyint(4) NOT NULL,
  `company_js` tinyint(4) NOT NULL,
  `company_php` tinyint(4) NOT NULL,
  `company_c` tinyint(4) NOT NULL,
  `company_cpp` tinyint(4) NOT NULL,
  `company_java` tinyint(4) NOT NULL,
  `company_python` tinyint(4) NOT NULL,
  `company_node` tinyint(4) NOT NULL,
  `company_mern` tinyint(4) NOT NULL,
  `company_mean` tinyint(4) NOT NULL,
  `company_sql` tinyint(4) NOT NULL,
  `company_photo` tinyint(4) NOT NULL,
  `company_illustrator` tinyint(4) NOT NULL,
  `company_ai` tinyint(4) NOT NULL,
  `company_ml` tinyint(4) NOT NULL,
  `company_kotlin` tinyint(4) NOT NULL,
  `company_swift` tinyint(4) NOT NULL,
  `company_c#` tinyint(4) NOT NULL,
  `company_flutter` tinyint(4) NOT NULL,
  `company_aspnet` tinyint(4) NOT NULL,
  `company_graphic` tinyint(4) NOT NULL,
  `company_aws` tinyint(4) NOT NULL,
  `company_design` tinyint(4) NOT NULL,
  `company_azure` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_tbl`
--

CREATE TABLE `company_tbl` (
  `company_id` int(11) NOT NULL,
  `company_uname` varchar(10) NOT NULL,
  `company_pass` varchar(20) NOT NULL,
  `company_name` varchar(128) NOT NULL,
  `company_contact` varchar(20) NOT NULL,
  `company_web` varchar(128) NOT NULL,
  `company_mail` varchar(40) NOT NULL,
  `company_about` text NOT NULL,
  `company_require` text NOT NULL,
  `company_location` varchar(40) NOT NULL,
  `company_campus` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seeker_project`
--

CREATE TABLE `seeker_project` (
  `seeker_id` int(11) NOT NULL,
  `seeker_project1` text DEFAULT NULL,
  `seeker_project2` text DEFAULT NULL,
  `seeker_project3` text DEFAULT NULL,
  `seeker_project4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seeker_skills`
--

CREATE TABLE `seeker_skills` (
  `seeker_id` int(11) NOT NULL,
  `seeker_html_css` tinyint(4) NOT NULL,
  `seeker_js` tinyint(4) NOT NULL,
  `seeker_php` tinyint(4) NOT NULL,
  `seeker_c` tinyint(4) NOT NULL,
  `seeker_cpp` tinyint(4) NOT NULL,
  `seeker_java` tinyint(4) NOT NULL,
  `seeker_python` tinyint(4) NOT NULL,
  `seeker_node` tinyint(4) NOT NULL,
  `seeker_mern` tinyint(4) NOT NULL,
  `seeker_mean` tinyint(4) NOT NULL,
  `seeker_sql` tinyint(4) NOT NULL,
  `seeker_photo` tinyint(4) NOT NULL,
  `seeker_illustrator` tinyint(4) NOT NULL,
  `seeker_ai` tinyint(4) NOT NULL,
  `seeker_ml` tinyint(4) NOT NULL,
  `seeker_kotlin` tinyint(4) NOT NULL,
  `seeker_swift` tinyint(4) NOT NULL,
  `seeker_c#` tinyint(4) NOT NULL,
  `seeker_flutter` tinyint(4) NOT NULL,
  `seeker_aspnet` tinyint(4) NOT NULL,
  `seeker_graphic` tinyint(4) NOT NULL,
  `seeker_aws` tinyint(4) NOT NULL,
  `seeker_design` tinyint(4) NOT NULL,
  `seeker_azure` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seeker_tbl`
--

CREATE TABLE `seeker_tbl` (
  `seeker_id` int(11) NOT NULL,
  `seeker_fname` varchar(30) NOT NULL,
  `seeker_lname` varchar(30) NOT NULL,
  `seeker_uname` varchar(10) NOT NULL,
  `seeker_pass` varchar(20) NOT NULL,
  `seeker_bdate` date NOT NULL,
  `seeker_contact` varchar(20) NOT NULL,
  `seeker_mail` varchar(50) NOT NULL,
  `seeker_web` varchar(256) NOT NULL,
  `seeker_college` varchar(256) DEFAULT NULL,
  `seeker_branch` varchar(60) DEFAULT NULL,
  `seeker_enroll` varchar(18) DEFAULT NULL,
  `seeker_year` smallint(6) NOT NULL,
  `seeker_about` text NOT NULL,
  `seeker_profile` varchar(128) NOT NULL,
  `seeker_cv` varchar(128) NOT NULL,
  `seeker_achievements` text DEFAULT NULL,
  `seeker_approve` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_tbl`
--
ALTER TABLE `college_tbl`
  ADD PRIMARY KEY (`college_id`),
  ADD UNIQUE KEY `college_uname` (`college_uname`);

--
-- Indexes for table `company_skills`
--
ALTER TABLE `company_skills`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_tbl`
--
ALTER TABLE `company_tbl`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `company_uname` (`company_uname`);

--
-- Indexes for table `seeker_project`
--
ALTER TABLE `seeker_project`
  ADD KEY `seeker_id` (`seeker_id`);

--
-- Indexes for table `seeker_skills`
--
ALTER TABLE `seeker_skills`
  ADD PRIMARY KEY (`seeker_id`);

--
-- Indexes for table `seeker_tbl`
--
ALTER TABLE `seeker_tbl`
  ADD PRIMARY KEY (`seeker_id`),
  ADD UNIQUE KEY `seeker_uname` (`seeker_uname`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_skills`
--
ALTER TABLE `company_skills`
  ADD CONSTRAINT `comapny_id` FOREIGN KEY (`company_id`) REFERENCES `company_tbl` (`company_id`);

--
-- Constraints for table `seeker_project`
--
ALTER TABLE `seeker_project`
  ADD CONSTRAINT `seeker_id` FOREIGN KEY (`seeker_id`) REFERENCES `seeker_tbl` (`seeker_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
