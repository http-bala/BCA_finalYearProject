-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 05:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `location`
--

-- --------------------------------------------------------

--
-- Table structure for table `attend-record`
--

CREATE TABLE `attend-record` (
  `id` int(111) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `emp_user` varchar(111) NOT NULL,
  `lat` varchar(11) NOT NULL,
  `long` varchar(11) NOT NULL,
  `typeofpunching` varchar(11) NOT NULL,
  `attend_date` varchar(11111) NOT NULL,
  `attend_time` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(111) NOT NULL,
  `cat_name` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(25, 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `cmplete_task`
--

CREATE TABLE `cmplete_task` (
  `id` int(111) NOT NULL,
  `company_name` varchar(111) NOT NULL,
  `employe_name` varchar(111) NOT NULL,
  `curent_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `work_details` varchar(255) NOT NULL,
  `upload_img` varchar(299) NOT NULL,
  `p_dignoses` varchar(200) NOT NULL,
  `p_process` varchar(200) NOT NULL,
  `p_decspritions` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cmplete_task`
--

INSERT INTO `cmplete_task` (`id`, `company_name`, `employe_name`, `curent_date_time`, `work_details`, `upload_img`, `p_dignoses`, `p_process`, `p_decspritions`) VALUES
(54, 'englightend degital marketing', 'manoj123', '2024-02-20 06:14:31', 'this only testing propose', '1192839783.jpg', '', '', ''),
(55, 'my home', 'manoj123', '2024-03-01 17:09:41', 'GDGDJKSKSKJSJSJSKJ', '1538238094.jpeg', 'motherboard total blasted ', 'changing a mother board  ', 'there is the some bugs and hardrive issuse '),
(56, 'shirnathji college', 'balakrishna', '2024-03-15 04:38:34', 'shake hands with one person ', '687720703.jpg', ' finding the handsome/beautiful person', 'finding one friend shake hands ', ' no issuse');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(111) NOT NULL,
  `c_name` varchar(111) NOT NULL,
  `c_address` varchar(111) NOT NULL,
  `c_contact` varchar(111) NOT NULL,
  `c_email` varchar(111) NOT NULL,
  `location` varchar(111) NOT NULL,
  `latitude` varchar(111) NOT NULL,
  `longitude` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `c_name`, `c_address`, `c_contact`, `c_email`, `location`, `latitude`, `longitude`) VALUES
(14, 'my home ', 'bhimpore latitude and longitude added here', '7600298709', ' mailconcern@mail.com', ' bhimpore', ' 20.452987', ' 72.864672'),
(15, 'enlightened digital company', 'Shopper Gate 2floor shop no. 320  , Chala , Vapi', '1234567890', ' enlightend@mail.in', ' vapi', ' 20.396645329756353', ' 72.89250012076701'),
(16, 'softonic', 'bhimpore nani daman', '8154954408', ' softonic@mail.com', ' daman', ' 23.024349', ' 72.5301521'),
(17, 'shirnathji college', 'varkund ', '7600298709', ' shirnathji@email.com', ' daman', ' 23.022505', ' 72.5713621'),
(18, '2nd shrinathji company', 'varkund', '665547689', ' 2ndshrinathji@company.com', ' varkund,daman', ' 23.022505', ' 72.5713621');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(111) NOT NULL,
  `emp_name` varchar(111) NOT NULL,
  `emp_code` varchar(111) NOT NULL,
  `emp_user` varchar(111) NOT NULL,
  `emp_designation` varchar(111) NOT NULL,
  `emp_company` varchar(111) NOT NULL,
  `emp_password` varchar(111) NOT NULL,
  `emp_department` varchar(111) NOT NULL,
  `emp_pan` varchar(111) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_doj` date NOT NULL,
  `emp_mail` varchar(111) NOT NULL,
  `emp_bankname` varchar(111) NOT NULL,
  `emp_bankAC` varchar(111) NOT NULL,
  `emp_tpd` varchar(111) NOT NULL,
  `emp_basicsalary` varchar(111) NOT NULL,
  `emp_shifttime` varchar(111) NOT NULL,
  `profile` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_name`, `emp_code`, `emp_user`, `emp_designation`, `emp_company`, `emp_password`, `emp_department`, `emp_pan`, `emp_dob`, `emp_doj`, `emp_mail`, `emp_bankname`, `emp_bankAC`, `emp_tpd`, `emp_basicsalary`, `emp_shifttime`, `profile`) VALUES
(25, 'balakrishna kolla', 'emp001', 'balakrishna', 'developer', 'enlightened digital company', 'admin', 'development', '1233456789', '2002-04-25', '2024-03-01', 'balakrishna@gmail.com', 'hdfc', '123456789012', '28', '25000', '08:00:00', '2067505724.png'),
(26, 'mahesh kolla', 'emp002', 'mahesh', 'web desinger', 'enlightened digital company', 'admin', 'designer', '0987654321', '2004-04-15', '2024-03-01', 'mahesh@gmail.com', 'STATE BANK OF INDIA', '123456789098', '28', '25000', '08:00:00', '23822681.png');

-- --------------------------------------------------------

--
-- Table structure for table `taskdata`
--

CREATE TABLE `taskdata` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `category` varchar(111) NOT NULL,
  `company` varchar(244) NOT NULL,
  `employee` varchar(244) NOT NULL,
  `details` varchar(299) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taskdata`
--

INSERT INTO `taskdata` (`id`, `date`, `time`, `category`, `company`, `employee`, `details`, `flag`) VALUES
(19, '2024-03-16', '17:02:00', 'developer', 'shirnathji college', 'balakrishna', 'shake hands with one person ', 1),
(20, '1970-01-01', '10:03:00', 'developer', 'enlightened digital company', 'balakrishna', 'create one instagram post for hair scrub', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(111) NOT NULL,
  `fullname` varchar(111) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `role`) VALUES
(1, 'balakrishna', 'bala7600', '123', 0),
(2, 'mahesh kolla', 'mahesh', '1234567', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attend-record`
--
ALTER TABLE `attend-record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmplete_task`
--
ALTER TABLE `cmplete_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_code` (`emp_code`);

--
-- Indexes for table `taskdata`
--
ALTER TABLE `taskdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attend-record`
--
ALTER TABLE `attend-record`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cmplete_task`
--
ALTER TABLE `cmplete_task`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `taskdata`
--
ALTER TABLE `taskdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
