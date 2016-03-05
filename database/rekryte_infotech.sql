-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2016 at 05:58 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rekryte_infotech`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `config_no` int(11) NOT NULL,
  `key` varchar(30) NOT NULL,
  `label` varchar(30) NOT NULL,
  `value` varchar(240) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`config_no`, `key`, `label`, `value`, `status`) VALUES
(1, 'site_title', 'Site Title', 'Welcome | Rekryte Infotech', 'y'),
(2, 'app_title', 'Application Title', 'Rekryte Infotech', 'y'),
(3, 'site_desc', 'Site Description', 'Rekryte Infotech is a startup company with 10+ employess , core objective is to train and recuruit students', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `group_master`
--

CREATE TABLE IF NOT EXISTS `group_master` (
  `group_master_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `group_name` varchar(30) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_master`
--

INSERT INTO `group_master` (`group_master_id`, `group_id`, `group_name`, `status`) VALUES
(1, 1, 'Admin', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `sno` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `group_id` int(11) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `Name`, `group_id`, `email_id`, `userName`, `password`, `status`) VALUES
(1, 'Admin', 1, 'rajancse15@gmail.com', 'admin', 'ea33fb47915ed5799f55e07a0270132a', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_icon` varchar(30) NOT NULL,
  `menu_name` varchar(30) NOT NULL,
  `xajax_script` varchar(30) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_icon`, `menu_name`, `xajax_script`, `status`) VALUES
(1, 'fa fa-home', 'Home', 'location.reload();', 'y'),
(2, 'fa fa-search', 'Quick Search', 'xajax_quickSearch()', 'y'),
(3, 'fa fa-user-plus', 'Upload Student Profile', 'xajax_addStudentList()', 'y'),
(4, 'fa fa-upload', 'Upload Marklist', 'xajax_uploadMarklist()', 'y'),
(5, 'fa fa-pie-chart', 'Overall Report', 'xajax_overallReport()', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `menu_group_mapping`
--

CREATE TABLE IF NOT EXISTS `menu_group_mapping` (
  `menu_group_mapping_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_group_mapping`
--

INSERT INTO `menu_group_mapping` (`menu_group_mapping_id`, `group_id`, `menu_id`, `status`) VALUES
(1, 1, 1, 'y'),
(2, 1, 2, 'y'),
(3, 1, 3, 'y'),
(4, 1, 4, 'y'),
(5, 1, 5, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `menu_sub_menu_mapping`
--

CREATE TABLE IF NOT EXISTS `menu_sub_menu_mapping` (
  `menu_sub_menu_mapping_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_sub_menu_mapping`
--

INSERT INTO `menu_sub_menu_mapping` (`menu_sub_menu_mapping_id`, `menu_id`, `sub_menu_id`, `status`) VALUES
(1, 4, 1, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE IF NOT EXISTS `sub_menu` (
  `sub_menu_id` int(11) NOT NULL,
  `sub_menu_icon` varchar(30) NOT NULL,
  `sub_menu_name` varchar(30) NOT NULL,
  `xajax_script` varchar(30) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sub_menu_id`, `sub_menu_icon`, `sub_menu_name`, `xajax_script`, `status`) VALUES
(1, 'fa fa-search', 'Search Staff', '', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu_group_mapping`
--

CREATE TABLE IF NOT EXISTS `sub_menu_group_mapping` (
  `sub_menu_group_mapping_id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu_group_mapping`
--

INSERT INTO `sub_menu_group_mapping` (`sub_menu_group_mapping_id`, `sub_menu_id`, `group_id`, `status`) VALUES
(1, 1, 1, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_menu`
--

CREATE TABLE IF NOT EXISTS `sub_sub_menu` (
  `sub_sub_menu_id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL,
  `xajax_script` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_sub_menu_mapping`
--

CREATE TABLE IF NOT EXISTS `sub_sub_sub_menu_mapping` (
  `sub_sub_sub_menu_mapping_id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL,
  `sub_sub_menu_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`config_no`);

--
-- Indexes for table `group_master`
--
ALTER TABLE `group_master`
  ADD PRIMARY KEY (`group_master_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menu_group_mapping`
--
ALTER TABLE `menu_group_mapping`
  ADD PRIMARY KEY (`menu_group_mapping_id`);

--
-- Indexes for table `menu_sub_menu_mapping`
--
ALTER TABLE `menu_sub_menu_mapping`
  ADD PRIMARY KEY (`menu_sub_menu_mapping_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- Indexes for table `sub_menu_group_mapping`
--
ALTER TABLE `sub_menu_group_mapping`
  ADD PRIMARY KEY (`sub_menu_group_mapping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `config_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `group_master`
--
ALTER TABLE `group_master`
  MODIFY `group_master_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu_group_mapping`
--
ALTER TABLE `menu_group_mapping`
  MODIFY `menu_group_mapping_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu_sub_menu_mapping`
--
ALTER TABLE `menu_sub_menu_mapping`
  MODIFY `menu_sub_menu_mapping_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_menu_group_mapping`
--
ALTER TABLE `sub_menu_group_mapping`
  MODIFY `sub_menu_group_mapping_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
