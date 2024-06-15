-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 07:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `Tracking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `Br_name` varchar(100) NOT NULL,
  `Br_contact` varchar(50) NOT NULL,
  `Br_email` varchar(100) NOT NULL,
  `Br_address` varchar(100) NOT NULL,
  `Br_city` varchar(100) NOT NULL,
  `Br_pincode` varchar(50) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `Br_name`, `Br_contact`, `Br_email`, `Br_address`, `Br_city`, `Br_pincode`, `country`) VALUES
(12, 'Imtaiz', '03122774693', 'Branch.@example.com', 'Gulshan e Iqbal', 'Karachi', '75850', 4),
(13, 'Al Yousuf', '03122774693', 'Branch.@example.com', 'N-90 Sector 7/C', 'Hyderabad', '231400', 6);

-- --------------------------------------------------------

--
-- Table structure for table `branch_country`
--

CREATE TABLE `branch_country` (
  `country_id` int(11) NOT NULL,
  `Branch_country` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_country`
--

INSERT INTO `branch_country` (`country_id`, `Branch_country`) VALUES
(1, 'Pakistan'),
(2, 'Bangladesh'),
(3, 'Canada'),
(4, 'China'),
(5, 'Saudia Arabia'),
(6, 'Qatar'),
(7, 'Turkey'),
(8, 'Iran'),
(10, 'Hadi Markets');

-- --------------------------------------------------------

--
-- Table structure for table `courier_details`
--

CREATE TABLE `courier_details` (
  `userid` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `amount_cate` varchar(50) NOT NULL,
  `Days` varchar(50) NOT NULL,
  `courier_desc` varchar(150) NOT NULL,
  `parcel_weight` varchar(50) NOT NULL,
  `status_id` int(11) NOT NULL,
  `sender_branch` int(11) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_address` varchar(100) NOT NULL,
  `sender_contact` varchar(40) NOT NULL,
  `sender_city` varchar(40) NOT NULL,
  `sender_pincode` varchar(50) NOT NULL,
  `sender_country` varchar(50) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `receiver_contact` varchar(50) NOT NULL,
  `receiver_address` varchar(100) NOT NULL,
  `receiver_city` varchar(50) NOT NULL,
  `receiver_pincode` varchar(40) NOT NULL,
  `receiver_country` varchar(40) NOT NULL,
  `date_of_delivery` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_details`
--

INSERT INTO `courier_details` (`userid`, `package_id`, `amount_cate`, `Days`, `courier_desc`, `parcel_weight`, `status_id`, `sender_branch`, `sender_name`, `sender_address`, `sender_contact`, `sender_city`, `sender_pincode`, `sender_country`, `receiver_name`, `receiver_contact`, `receiver_address`, `receiver_city`, `receiver_pincode`, `receiver_country`, `date_of_delivery`) VALUES
(0, 1, '170', '2', 'Food item', '2', 1, 12, 'kashif', 'North Karachi', '0300-2500012', 'Karachi', '15001', 'Pakistan', 'Noman', '03477800153', 'FL-5, Islamabad', 'Islamabad', '051001', 'Pakistan', '2023-07-29 07:13:00'),
(0, 2, '200', '1', 'Hard Items', '5', 1, 13, 'Hamza', 'House No. L12, North Karachi', '0314-4400789', 'Karachi', '450010', 'Pakistan', 'Hazim', '03172500001', 'FL-5, Islamabad, Pk', 'Islamabad', '0512001', 'Pakistan', '2023-07-29 08:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `insert_contact`
--

CREATE TABLE `insert_contact` (
  `User_Id` int(10) NOT NULL,
  `uid` int(11) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `User_Email` varchar(50) NOT NULL,
  `User_message` varchar(500) NOT NULL,
  `Reply` varchar(600) NOT NULL DEFAULT 'No Reply'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insert_contact`
--

INSERT INTO `insert_contact` (`User_Id`, `uid`, `User_Name`, `User_Email`, `User_message`, `Reply`) VALUES
(13, 3, 'Kashif', 'kashif@gmail.com', 'Please Send me the Parcel as soon as earliest, Thanks!', 'Sir, sorry for delaying, but I am still working on it, thanks for your patience!');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_cate` varchar(10) NOT NULL,
  `amount_cate` varchar(40) NOT NULL,
  `Days` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_cate`, `amount_cate`, `Days`) VALUES
(1, 'Normal', '170', '2'),
(2, 'Urgent', '200', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_desc`) VALUES
(1, 'Courier Picked Up'),
(2, 'Shipped'),
(3, 'Intransit'),
(7, 'Arrived at Destinations'),
(8, 'Out of Delivery'),
(9, 'Your Parcel has been delivered!');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Date_of_Registration` datetime NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `UserName`, `email`, `password`, `contact`, `Address`, `Date_of_Registration`, `Branch`, `Role`) VALUES
(1, 'furqan', 'furqanrehman@gmail.com', 'admin786', '03124785308', 'BL-14, Gulshan-e-Iqbal, Karachi', '2023-07-29 15:39:05', 'North Karachi', 'Admin'),
(2, 'sabir', 'sabir@gmail.com', 'sabir123', '03151087622', 'North Nazimabad Karachi', '2023-07-29 15:42:27', 'North Nazimabad', 'Admin'),
(3, 'Kashif', 'kashif@gmail.com', '123', '03457896321', 'Block 16 Karachi.', '2023-07-29 06:55:00', '', 'Customer'),
(4, 'Hamza', 'hamza@gmail.com', 'hamza124', '03457896321', 'Karachi', '2023-07-29 08:21:00', '', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `country` (`country`);

--
-- Indexes for table `branch_country`
--
ALTER TABLE `branch_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `courier_details`
--
ALTER TABLE `courier_details`
  ADD KEY `package_id` (`package_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `sender_branch` (`sender_branch`);

--
-- Indexes for table `insert_contact`
--
ALTER TABLE `insert_contact`
  ADD PRIMARY KEY (`User_Id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `branch_country`
--
ALTER TABLE `branch_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `insert_contact`
--
ALTER TABLE `insert_contact`
  MODIFY `User_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_ibfk_1` FOREIGN KEY (`country`) REFERENCES `branch_country` (`country_id`);

--
-- Constraints for table `courier_details`
--
ALTER TABLE `courier_details`
  ADD CONSTRAINT `courier_details_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `package` (`package_id`),
  ADD CONSTRAINT `courier_details_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `courier_details_ibfk_3` FOREIGN KEY (`sender_branch`) REFERENCES `branch` (`branch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
