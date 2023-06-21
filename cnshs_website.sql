-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 01:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cnshs_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `admin_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`admin_id`, `fname`, `mname`, `lname`, `email`, `password`) VALUES
(1, 'Lebron', 'Mayers', 'James', 'lebronjames@gmail.com', 'lebron');

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `applicant_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `extname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bdate` date NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `father_name` varchar(60) NOT NULL,
  `father_phone` varchar(15) NOT NULL,
  `father_occupation` varchar(30) NOT NULL,
  `mother_name` varchar(60) NOT NULL,
  `mother_phone` varchar(15) NOT NULL,
  `mother_occupation` varchar(30) NOT NULL,
  `guardian_name` varchar(60) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `guardian_phone` varchar(15) NOT NULL,
  `guardian_occupation` varchar(30) NOT NULL,
  `guardian_email` varchar(30) NOT NULL,
  `guardian_address` varchar(200) NOT NULL,
  `bcert` mediumblob NOT NULL,
  `form138` mediumblob NOT NULL,
  `ncae` mediumblob NOT NULL,
  `good_moral` mediumblob NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`applicant_id`, `fname`, `mname`, `lname`, `extname`, `gender`, `bdate`, `phone`, `email`, `father_name`, `father_phone`, `father_occupation`, `mother_name`, `mother_phone`, `mother_occupation`, `guardian_name`, `relationship`, `guardian_phone`, `guardian_occupation`, `guardian_email`, `guardian_address`, `bcert`, `form138`, `ncae`, `good_moral`, `status`) VALUES
(1, 'John Erwin', 'Sayno', 'Albos', '', 'male', '2003-06-05', '09126992952', 'albosjohn0@gmail.com', 'Erwin V. Albos', '09126992952', 'None', 'Lenida S. Albos', '09072132282', 'Teacher', 'Lenida S, Ablos', 'Mother', '09072132282', '', 'lenidaalbos@gmail.com', 'Daet, Camarines Norte', 0x62636572742e6a7067, 0x666f726d3133382e706e67, 0x6e6361652e6a7067, 0x676f6f646d6f72616c2e706e67, 'Pending'),
(2, 'Arvin', 'Pogi', 'Abina', '', 'male', '2023-05-31', '09126992952', 'arvin@gmail.com', 'Eduardo Abina', '09126992952', 'Police', 'Carmina Abina', '09072132282', 'Doctor', 'Eduardo Abina', 'Father', '09126992952', '', 'eduardo@gmail.com', 'Iraya', 0x62636572742e6a7067, 0x666f726d3133382e706e67, 0x6e6361652e6a7067, 0x676f6f646d6f72616c2e706e67, 'Pending'),
(3, 'Arvin', 'Pogi', 'Abina', '', 'male', '2023-05-31', '09126992952', 'arvin@gmail.com', 'Eduardo Abina', '09126992952', 'Police', 'Carmina Abina', '09072132282', 'Doctor', 'Eduardo Abina', 'Father', '09126992952', '', 'eduardo@gmail.com', 'Iraya', 0x62636572742e6a7067, 0x666f726d3133382e706e67, 0x6e6361652e6a7067, 0x676f6f646d6f72616c2e706e67, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_status`
--

CREATE TABLE `applicant_status` (
  `user_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant_status`
--

INSERT INTO `applicant_status` (`user_id`, `applicant_id`, `status`) VALUES
(1, 1, 'Not Qualified'),
(1, 2, 'Pending'),
(1, 3, 'Pending'),
(2, 2, 'Qualified'),
(3, 3, 'Not Qualified');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `con_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`con_id`, `username`, `email`, `subject`, `message`) VALUES
(1, 'Euriko Eborde Elagio', 'eurikoeborde@gmail.com', 'Hiraya', 'I love this school!');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `tes_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `batch_name` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`tes_id`, `name`, `email`, `batch_name`, `message`, `date_posted`, `status`) VALUES
(1, 'John Erwin S. Albos', 'albosjohn0@gmail.com', 'Hiraya', 'CNSHS is the best senior high school in the town!', '2023-05-04 13:49:37', 'Confirmed'),
(2, 'Stephen Curry', 'stephencurry@gmail.com', 'Alimbukad', 'I am proud to my alma mater. More powers to CNSHS!', '2023-05-04 14:33:11', 'Confirmed'),
(3, 'Jordan Poole', 'jordanpoole@gmail.com', 'Alimbukad', 'Grapeeee!', '2023-05-04 15:03:15', 'Confirmed'),
(5, 'Euriko Eborde Elagio', 'eurikoeborde@gmail.com', 'Hiraya', 'I miss this school particularly our research projects.', '2023-05-30 13:28:44', 'Deleted'),
(6, 'Lebron Mayers James', 'lebronjames@gmail.com', 'Hiraya', 'I love this school so much!', '2023-05-30 23:11:01', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` smallint(6) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `fname`, `mname`, `lname`, `email`, `password`) VALUES
(1, 'John Erwin', 'Sayno', 'Albos', 'albosjohn0@gmail.com', 'janjan'),
(2, 'Juan', 'Dela', 'Cruz', 'juandelacruz@gmail.com', 'juan'),
(3, 'jan', 'jan', 'jan', 'jan@gmail.com', 'jan'),
(4, 'Macha', 'Bogart', 'Maui', 'macha@gmail.com', 'macha'),
(5, 'Stephen', 'Albos', 'Curry', 'stephencurry@gmail.com', 'stephen'),
(6, 'Euriko', 'Eborde', 'Elagio', 'eurikoeborde@gmail.com', 'yuri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `applicant_status`
--
ALTER TABLE `applicant_status`
  ADD PRIMARY KEY (`user_id`,`applicant_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`tes_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `tes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
