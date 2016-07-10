-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2016 at 03:42 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mylogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `lead` varchar(255) NOT NULL,
  `thought` varchar(255) NOT NULL,
  `emotion` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `weather` varchar(255) NOT NULL,
  `extra` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `lead`, `thought`, `emotion`, `location`, `person`, `weather`, `extra`, `description`, `date_time`, `name`) VALUES
(6, 'breakfast', 'N', 'N', 'MR', 'A', 'B', 'N', 'N', '2016-07-10 08:16:44', 'working'),
(7, 'breakfast', 'N', 'N', 'MR', 'A', 'B', 'N', 'N', '2016-07-10 08:17:10', 'working');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;