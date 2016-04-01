-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2016 at 01:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adova_billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `expandables`
--

CREATE TABLE IF NOT EXISTS `expandables` (
`id` int(11) NOT NULL,
  `field_name` varchar(32) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expandables`
--

INSERT INTO `expandables` (`id`, `field_name`, `created`, `modified`, `user_id`) VALUES
(1, 'city', '2016-02-19 12:49:36', '2016-02-19 12:49:36', 4),
(2, 'zip', '2016-02-19 12:50:32', '2016-02-19 12:50:32', 4);

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE IF NOT EXISTS `informations` (
`id` int(11) NOT NULL,
  `value` varchar(64) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `expandable_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `value`, `created`, `modified`, `expandable_id`) VALUES
(1, 'dhaka', '2016-02-19 12:51:03', '2016-02-19 12:51:03', 1),
(2, '1339', '2016-02-19 12:51:27', '2016-02-19 12:51:27', 2);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
`id` int(11) NOT NULL,
  `package_name` varchar(128) NOT NULL,
  `ammount` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL COMMENT '0=Inactive,1=Active '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `previous_packages`
--

CREATE TABLE IF NOT EXISTS `previous_packages` (
`id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `ammount` decimal(10,2) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL COMMENT '1 = Admin\n2 = Bill Collector\n3 = User',
  `status` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `role`, `status`, `created`, `modified`) VALUES
(4, 'Imran Hassan', 'EMon', 'emonmr@gmail.com', '$2y$10$82EMusgSse.UXE00JqiIO.MXM5HW0oL1C8V/gRcol8uracc/f12jW', '01748112046', 'sdfsf', 3, 1, '2016-02-19 12:44:51', '2016-02-19 12:44:51'),
(5, 'Kaushik', 'hasanath', 'kau@gmail.com', '$2y$10$TDqX8LcNZCg/LxXBDl2X3uZ.7/y2CMSDMXAWUVxco2WbAVg4YEcry', '111', '1111', 1, 0, '2016-02-22 03:42:23', '2016-02-22 03:42:23'),
(6, 'Riham', 'Morsed', 'mdriham@yahoo.com', '$2y$10$hKJXiZ7goANLbAE27ZEYcewU3zclxwH021boLgqg/HhUyDsCaIaRK', '01961566843', 'Dhaka', 4, 0, '2016-02-22 04:48:24', '2016-02-22 04:48:24'),
(7, 'Subrata', 'Mondol', 'mondol@gmail.com', '$2y$10$5FvYf6lq/mdyWyYyEjLZ8eKj/4zI83YLPvZHr7wQJ6fqijF53eoWW', '1111', '1111', 1, 1, '2016-02-22 04:54:59', '2016-02-22 04:54:59'),
(8, 'Imran Hassan', 'Emon', 'eemonmr@gmail.com', '$2y$10$qj7hp9ovGoSY/RjC4HELqeq8WAOl5qLqwdl5xSzX6NmRDyTDigT06', '222', '2222', 1, 1, '2016-02-22 05:03:03', '2016-02-22 05:03:03'),
(9, 'Shovon', 'Islam', 'Islamshovon@gmail.com', '$2y$10$qkUNQcAintQ.gDp1z0fdYutG9rqGkEO4C9th/UFIYEPChyrQW5y7e', '12344', 'ksjs', 1, 0, '2016-02-23 06:30:09', '2016-02-23 06:30:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expandables`
--
ALTER TABLE `expandables`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_expandables_users_idx` (`user_id`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_informations_expandables1_idx` (`expandable_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previous_packages`
--
ALTER TABLE `previous_packages`
 ADD PRIMARY KEY (`id`), ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expandables`
--
ALTER TABLE `expandables`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `previous_packages`
--
ALTER TABLE `previous_packages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `expandables`
--
ALTER TABLE `expandables`
ADD CONSTRAINT `fk_expandables_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `informations`
--
ALTER TABLE `informations`
ADD CONSTRAINT `fk_informations_expandables1` FOREIGN KEY (`expandable_id`) REFERENCES `expandables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `previous_packages`
--
ALTER TABLE `previous_packages`
ADD CONSTRAINT `previous_packages_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
