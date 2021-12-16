-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 12:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee-timesheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `role_id`) VALUES
(1, 'chocolatey', 'James', 'Chocolatey', 'employee@test.com', '*********', 1),
(2, 'the_boss', 'Boss', 'Truman', 'supervisor@test.com', '*********', 2),
(3, 'time', 'Joe', 'Thyme', 'employee2@test.com', '*********', 1),
(4, 'spiderman', 'Peter', 'Parker', 'peterparker@mail.com', 'spidyotw', 3),
(44, '', '', 'lastname', '', '', 3),
(45, 'asdddf', 'Martine', 'lastname', 'adrien127@gmail.com', 'bbd', 3),
(46, NULL, '   ', '', '', '', 0),
(47, 'dickeater', 'Adrien', 'lastname', 'cierra.ray@outlook.com', 'bla', 1),
(48, NULL, '   ', '', '', '', 0),
(49, 'asdddf', 'Adrien', 'lastname', 'mphilippeauguste@yahoo.com', 'bla', 1),
(50, 'trial', 'rollanot', 'herone', 'trial@gmail.com', 'dce2520bde4a8385ac20fedb65d2ac10', 0),
(55, 'trialrun', 'trial', 'woo', 'who@gmail.com', 'bc625a563a0d8db2ec86d50bda4addc0', 2);

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) UNSIGNED NOT NULL,
  `activity_name` varchar(255) DEFAULT NULL,
  `project_id` int(11) UNSIGNED DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time_from` time DEFAULT NULL,
  `time_to` time DEFAULT NULL,
  `Role_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `activity_name`, `project_id`, `date`, `time_from`, `time_to`, `Role_Id`) VALUES
(1, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(2, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(3, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(4, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(14, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(15, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(16, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(17, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(18, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(19, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(20, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(21, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(44, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1),
(45, 'Haiti Mission', 1, '2021-12-16', '00:00:00', '08:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) UNSIGNED NOT NULL,
  `project_code` varchar(255) DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `manager_id` int(11) UNSIGNED DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_code`, `name`, `manager_id`, `start_date`, `end_date`) VALUES
(1, 'P100813-1', 'Cleaning the Gulf of Mexico', 2, '2021-01-01', '2021-12-31'),
(2, 'P100813-2', 'Haiti Mission Trip', 2, '2022-01-01', '2022-12-31'),
(3, 'P100813-3', 'Hurricane Cleanup', 2, '2023-01-01', '2023-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) UNSIGNED NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'User'),
(2, 'Admin'),
(3, 'Corporate');

-- --------------------------------------------------------

--
-- Table structure for table `timesheet`
--

CREATE TABLE `timesheet` (
  `id` int(11) UNSIGNED NOT NULL,
  `employee_id` int(11) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `time_from` time DEFAULT NULL,
  `time_to` time DEFAULT NULL,
  `activity_id` int(11) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timesheet`
--

INSERT INTO `timesheet` (`id`, `employee_id`, `date`, `time_from`, `time_to`, `activity_id`, `project_id`) VALUES
(1, 1, '2021-12-15', '00:30:00', '08:30:00', 1, 2),
(50, 1, '2021-12-15', '00:30:00', '08:30:00', 1, 2),
(56, 50, '2021-12-15', '00:30:00', '08:30:00', 1, 2),
(57, 50, '2021-12-15', '00:30:00', '08:30:00', 1, 2),
(58, 50, '2021-12-15', '00:30:00', '08:30:00', 1, 2),
(59, 50, '2021-12-15', '00:30:00', '08:30:00', 1, 2),
(60, 50, '2021-12-15', '00:30:00', '08:30:00', 1, 2),
(61, 50, '2021-12-15', '00:30:00', '08:30:00', 1, 2),
(62, 50, '2021-12-15', '00:30:00', '08:30:00', 1, 2),
(66, 50, '2021-12-15', '00:30:00', '08:30:00', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_account_role` (`role_id`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_activity_project` (`project_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fk_activity_projectn` (`name`),
  ADD KEY `fk_project_manager` (`manager_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fk_activity_role` (`id`);

--
-- Indexes for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_timesheet_account` (`employee_id`) USING BTREE,
  ADD KEY `fk_timesheet_activity` (`activity_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timesheet`
--
ALTER TABLE `timesheet`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_account_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `fk_activity_project` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk_project_manager` FOREIGN KEY (`manager_id`) REFERENCES `account` (`id`);

--
-- Constraints for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD CONSTRAINT `fk_hour_account` FOREIGN KEY (`employee_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `fk_timesheet_activity` FOREIGN KEY (`activity_id`) REFERENCES `activity` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
