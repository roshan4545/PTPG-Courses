-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2018 at 10:36 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pg`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(10) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `cat` varchar(15) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `focc` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `mobno` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `addr1` varchar(50) NOT NULL,
  `empd` varchar(20) NOT NULL,
  `empd2` varchar(20) NOT NULL,
  `ssc_board` varchar(20) NOT NULL,
  `ssc_inst` varchar(20) NOT NULL,
  `ssc_div` varchar(20) NOT NULL,
  `ssc_agg` varchar(20) NOT NULL,
  `ssc_passDate` varchar(20) NOT NULL,
  `im_board` varchar(20) NOT NULL,
  `im_clg` varchar(20) NOT NULL,
  `im_div` varchar(20) NOT NULL,
  `im_agg` varchar(20) NOT NULL,
  `im_passDate` varchar(20) NOT NULL,
  `be_board` varchar(20) NOT NULL,
  `be_clg` varchar(20) NOT NULL,
  `be_div` varchar(20) NOT NULL,
  `be_agg` varchar(20) NOT NULL,
  `be_passDate` varchar(20) NOT NULL,
  `msc_board` varchar(20) NOT NULL,
  `msc_clg` varchar(30) NOT NULL,
  `msc_div` varchar(20) NOT NULL,
  `msc_agg` varchar(20) NOT NULL,
  `msc_passDate` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--
