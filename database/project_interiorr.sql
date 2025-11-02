-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 09:42 PM
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
-- Database: `project_interiorr`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `subject` enum('Casual Enquiry','Product Details Enquiry','Interior Related','Others') NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(16) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `subject`, `name`, `email`, `phonenumber`, `message`, `date`) VALUES
(1, 'Product Details Enquiry', 'Stark', 'stark_industries@gmail.com', '9036644552', 'Hello this is Stark.. testing the contact form', '2021-01-12 00:06:12'),
(2, 'Others', 'Starlord', 'starlord@galaxy.com', '827365238', 'this is stardlord from knownwere...  ', '2021-01-12 00:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `free_quotation`
--

CREATE TABLE `free_quotation` (
  `id` int(255) NOT NULL,
  `work` enum('Full Interior','Renovate','Wooden Flooring','Lighting Works') NOT NULL,
  `room` enum('1BHK','2BHK','3BHK','3BHK +') NOT NULL,
  `purpose` enum('Own use','To Rent out','To Sale') NOT NULL,
  `sqrtfeet` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `free_quotation`
--

INSERT INTO `free_quotation` (`id`, `work`, `room`, `purpose`, `sqrtfeet`, `name`, `email`, `phone_number`, `message`, `date`) VALUES
(1, 'Renovate', '3BHK +', 'To Rent out', '4765', 'Captain', 'captainamerica@base.com', '3298563252783', 'avengers assemble', '2021-01-12 01:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Split Leaf Philodendrons Plant', 989),
(2, 'Copper Lamps(Set of 3)', 1977),
(3, 'Walton Single Chair and Vase', 2492),
(4, 'Traditional Pattern Chairs', 4238),
(5, 'Crystal Lamp', 3478),
(6, 'Modern Unique Wooden Lamp', 2899),
(7, 'Elite Dining Set Black', 8925),
(8, 'Elite Tea counter Table with vase', 6793),
(9, 'Succulent Plant(Set of 3)', 1947),
(10, 'Grey Sofa with 3 pillows', 9028);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `user_name`, `email`, `phone_number`, `password`) VALUES
(1, 'Tony Stark', 'stark_industries@gmail.com', '437544588423', '$2y$10$Vr.rEmFgPxw5DciJ1cGd8eWo1YjSdIgKA3hhS7erYIdxV0NtnmNhK'),
(3, 'gaganKUMAR', 'gagan@gmail.com', '43672432424', '$2y$10$YEmRiqU1ONQPDbhvPbYfYOVVAhnI8ZQ2WX0.t1G/AQL85F1b5O/7O');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Order Confirmed') NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_quotation`
--
ALTER TABLE `free_quotation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `free_quotation`
--
ALTER TABLE `free_quotation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
