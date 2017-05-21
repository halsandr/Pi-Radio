-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2017 at 10:38 PM
-- Server version: 5.5.54-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `piradio`
--
CREATE DATABASE IF NOT EXISTS `piradio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `piradio`;

-- --------------------------------------------------------

--
-- Table structure for table `radio_stations`
--

CREATE TABLE IF NOT EXISTS `radio_stations` (
`id` tinyint(3) NOT NULL,
  `playing` tinyint(1) NOT NULL,
  `pretty_name` char(255) NOT NULL,
  `url` char(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `radio_stations`
--

INSERT INTO `radio_stations` (`id`, `playing`, `pretty_name`, `url`) VALUES
(1, 0, 'Absolute Radio', 'http://aacplus-ar-128.timlradio.co.uk/'),
(2, 0, 'Classical FM', 'http://media-ice.musicradio.com/ClassicFMMP3'),
(3, 0, 'Absolute Classic Rock', 'http://aacplus-ac-128.timlradio.co.uk/'),
(4, 0, 'Absolute 80s', 'http://aacplus-a8-128.timlradio.co.uk/'),
(5, 0, 'Absolute 60s', 'http://aacplus-a6-128.timlradio.co.uk/'),
(6, 0, 'Absolute 70s', 'http://aacplus-a7-128.timlradio.co.uk/'),
(7, 0, 'Absolute 90s', 'http://aacplus-a9-128.timlradio.co.uk/'),
(8, 0, 'Absolute 00s', 'http://aacplus-a0-128.timlradio.co.uk/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `radio_stations`
--
ALTER TABLE `radio_stations`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `radio_stations`
--
ALTER TABLE `radio_stations`
MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
