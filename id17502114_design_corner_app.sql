-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2021 at 10:25 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17502114_design_corner_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `bill_id` int(11) NOT NULL,
  `order_no` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `paid_amount` varchar(100) NOT NULL,
  `balance_amount` varchar(100) NOT NULL,
  `paid_date` date NOT NULL,
  `payment_confirmed_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `slider_id` int(11) NOT NULL,
  `silder_name` varchar(100) NOT NULL,
  `slider_path` varchar(200) NOT NULL,
  `slider_extension` varchar(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`slider_id`, `silder_name`, `slider_path`, `slider_extension`, `created_on`, `delete_status`) VALUES
(1, 'TEST1', 'images/pictures/13.jpg', 'jpg', '2021-08-20 17:20:04', 0),
(2, 'Test2', 'images/pictures/29.jpg', 'jpg', '2021-08-20 17:20:04', 0),
(3, 'test3', 'images/pictures/28.jpg', 'jpg', '2021-08-20 17:20:51', 0),
(4, 'TEST 4', 'images/pictures/13.jpg', 'jpg', '2021-08-20 17:22:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_names`
--

CREATE TABLE `order_names` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `file_required` int(11) NOT NULL,
  `active_status` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_names`
--

INSERT INTO `order_names` (`order_id`, `order_name`, `file_required`, `active_status`, `delete_status`) VALUES
(1, 'logo', 1, 1, 0),
(2, 'website', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_placing_main`
--

CREATE TABLE `order_placing_main` (
  `order_placed_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_no` varchar(100) NOT NULL,
  `order_date` date NOT NULL,
  `order_count` int(11) NOT NULL,
  `bill_no` varchar(100) NOT NULL,
  `order_total_price` varchar(100) NOT NULL,
  `order_approve_status` int(11) NOT NULL,
  `current_working` int(11) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `completed_date` date NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL,
  `device_ip` varchar(200) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_placing_sub`
--

CREATE TABLE `order_placing_sub` (
  `order_sub_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_no` varchar(100) NOT NULL,
  `order_qty` varchar(100) NOT NULL,
  `order_file_path` varchar(100) NOT NULL,
  `order_content` text NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `order_price` varchar(100) NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `otp_log`
--

CREATE TABLE `otp_log` (
  `otp_id` int(11) NOT NULL,
  `otp_key` varchar(10) NOT NULL,
  `otp_session` varchar(100) NOT NULL,
  `requested_mail` varchar(200) NOT NULL,
  `requested_phone` varchar(200) NOT NULL,
  `otp_confirmation` int(11) NOT NULL,
  `otp_attempt` int(11) NOT NULL,
  `otp_requested_ip` varchar(100) NOT NULL,
  `otp_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `otp_date` date NOT NULL DEFAULT current_timestamp(),
  `valid_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_log`
--

INSERT INTO `otp_log` (`otp_id`, `otp_key`, `otp_session`, `requested_mail`, `requested_phone`, `otp_confirmation`, `otp_attempt`, `otp_requested_ip`, `otp_time`, `otp_date`, `valid_status`) VALUES
(1, '0000000', '6495203540394', 'asdf@asdf.c', '5487548754', 0, 0, '192.168.0.108', '2021-08-19 18:36:20', '2021-08-20', 0),
(2, '000000', '6495203540394', 'asdf@asdf.c', '5487548754', 0, 0, '192.168.0.108', '2021-08-19 18:37:23', '2021-08-20', 0),
(3, '000000', '2448204123684', 'asdf@asdf.c', '5487548754', 0, 0, '192.168.0.108', '2021-08-19 18:41:23', '2021-08-20', 0),
(4, '000000', '2448204123684', 'asdf@asdf.c', '5487548754', 0, 0, '192.168.0.108', '2021-08-19 18:42:04', '2021-08-20', 0),
(5, '000000', '2448204123684', 'asdf@asdf.c', '5487548754', 0, 0, '192.168.0.108', '2021-08-19 18:45:31', '2021-08-20', 0),
(6, '000000', '7903204711367', 'asdf', 'asdf', 0, 0, '192.168.0.108', '2021-08-19 18:47:11', '2021-08-20', 0),
(7, '000000', '1621204728433', 'asdf', 'asdf', 0, 0, '192.168.0.108', '2021-08-19 18:47:28', '2021-08-20', 0),
(8, '000000', '2773204734724', 'asdf', 'asdf', 0, 0, '192.168.0.108', '2021-08-19 18:47:34', '2021-08-20', 0),
(9, '000000', '4043204738428', 'asdf', 'asdf', 0, 0, '192.168.0.108', '2021-08-19 18:47:38', '2021-08-20', 0),
(10, '000000', '7263204740979', 'asdf', 'asdf', 0, 0, '192.168.0.108', '2021-08-19 18:47:40', '2021-08-20', 0),
(11, '000000', '6536205344279', 'sdfas', 'asdf', 0, 0, '192.168.0.108', '2021-08-19 18:53:44', '2021-08-20', 0),
(12, '000000', '1063205417165', 'sdfas', 'asdf', 0, 0, '192.168.0.108', '2021-08-19 18:54:17', '2021-08-20', 0),
(13, '000000', '4156205421622', 'sdfas', 'asdf', 0, 1, '192.168.0.108', '2021-08-19 18:54:21', '2021-08-20', 0),
(15, '000000', '4641213531884', 'asdf', 'asdf', 0, 0, '192.168.0.108', '2021-08-19 19:35:31', '2021-08-20', 0),
(16, '000000', '7823185552100', 'asdfd', 'asdfd', 0, 1, '192.168.0.108', '2021-08-20 16:55:52', '2021-08-20', 1),
(17, '000000', '5797180700714', 'test', 'Test', 0, 0, '103.114.211.18', '2021-08-29 18:07:00', '2021-08-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `user_id` int(11) NOT NULL,
  `user_privilege` int(11) NOT NULL,
  `user_category` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `logged_in_status` int(11) NOT NULL,
  `last_used_device` varchar(100) NOT NULL,
  `last_used_ip` varchar(100) NOT NULL,
  `last_used_uuid` varchar(100) NOT NULL,
  `last_used_platform` varchar(100) NOT NULL,
  `active_status` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL,
  `last_logged_in` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`user_id`, `user_privilege`, `user_category`, `user_name`, `user_password`, `logged_in_status`, `last_used_device`, `last_used_ip`, `last_used_uuid`, `last_used_platform`, `active_status`, `delete_status`, `last_logged_in`) VALUES
(1, 1, 'admin', 'test', 'test', 1, '', '103.114.211.18', '', '', 1, 0, '2021-08-29 18:07:46'),
(3, 2, 'customer', 'asdf', 'asdf', 0, '9.1.0', '103.114.211.18', '313c195d44f33b7f', 'Android', 1, 0, '2021-08-29 18:01:38'),
(4, 2, 'customer', 'asdf', 'asdf', 0, '6.0.0', '192.168.0.108', '', 'browser', 1, 0, '2021-08-20 16:56:11'),
(5, 3, 'customer', 'Test', 'test', 0, '9.1.0', '103.114.211.18', '313c195d44f33b7f', 'Android', 1, 0, '2021-08-29 18:07:24'),
(6, 3, 'customer', 'Test', 'test', 0, '9.1.0', '103.114.211.18', '313c195d44f33b7f', 'Android', 1, 0, '2021-08-29 18:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `detail_id` int(11) NOT NULL,
  `u_auth_id` int(11) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_mail` varchar(200) NOT NULL,
  `u_phone` varchar(200) NOT NULL,
  `u_city` varchar(200) NOT NULL,
  `profile_path` varchar(200) NOT NULL,
  `profile_extension` varchar(200) NOT NULL,
  `auth_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`detail_id`, `u_auth_id`, `u_name`, `u_mail`, `u_phone`, `u_city`, `profile_path`, `profile_extension`, `auth_status`, `delete_status`) VALUES
(1, 1, 'Test', 'asdf@asdf.c', '88888888888', 'Easdf', '', '', 1, 0),
(2, 3, 'asdf', 'asdf', 'asdf', '', '', '', 1, 0),
(3, 4, 'asdf', 'asdfd', 'asdfd', '', '', '', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `order_names`
--
ALTER TABLE `order_names`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_placing_main`
--
ALTER TABLE `order_placing_main`
  ADD PRIMARY KEY (`order_placed_id`);

--
-- Indexes for table `order_placing_sub`
--
ALTER TABLE `order_placing_sub`
  ADD PRIMARY KEY (`order_sub_id`);

--
-- Indexes for table `otp_log`
--
ALTER TABLE `otp_log`
  ADD PRIMARY KEY (`otp_id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_names`
--
ALTER TABLE `order_names`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_placing_main`
--
ALTER TABLE `order_placing_main`
  MODIFY `order_placed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_placing_sub`
--
ALTER TABLE `order_placing_sub`
  MODIFY `order_sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp_log`
--
ALTER TABLE `otp_log`
  MODIFY `otp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
