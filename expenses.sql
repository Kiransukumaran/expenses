-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 07:45 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expenses`
--

-- --------------------------------------------------------

--
-- Table structure for table `createcuti`
--

CREATE TABLE `createcuti` (
  `slno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `empid` varchar(100) NOT NULL,
  `dep` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `dateto` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `pur` varchar(100) NOT NULL,
  `add` varchar(100) NOT NULL,
  `rec` varchar(100) NOT NULL,
  `sign1` varchar(100) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `sign2` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `sign3` varchar(100) NOT NULL,
  `title3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createcuti`
--

INSERT INTO `createcuti` (`slno`, `name`, `empid`, `dep`, `group`, `date`, `dateto`, `days`, `pur`, `add`, `rec`, `sign1`, `title1`, `sign2`, `title2`, `sign3`, `title3`) VALUES
(1, 'mnbmn', '45', 'nmbm', 'nb', '2018-02-01', '2018-02-02', '7', 'vnnb', 'vnbv', 'nbv', 'nbv', 'nbv', 'nbv', 'nbv', 'nbv', 'nbv'),
(2, '', '451', 'n', '', '2018-09-03', '2018-09-18', '4354', '', '', '', '', '', '', '', '', ''),
(3, '645', '654', '64', '546', '2018-05-04', '2018-05-04', '465', '4654456', '465', '45', '4654', '654', '654', '654', '654', '564'),
(4, '645', '654', '64', '546', '2018-05-04', '2018-05-04', '465', '4654456', '465', '45', '4654', '654', '654', '654', '654', '564'),
(5, '645', '654', '64', '546', '2018-05-04', '2018-05-04', '465', '4654456', '465', '45', '4654', '654', '654', '654', '654', '564'),
(6, '645', '654', '64', '546', '2018-05-04', '2018-05-04', '465', '4654456', '465', '45', '4654', '654', '654', '654', '654', '564'),
(7, '645', '654', '64', '546', '2018-05-04', '2018-05-04', '465', '4654456', '465', '45', '4654', '654', '654', '654', '654', '564'),
(8, '645', '654', '64', '546', '2018-05-04', '2018-05-04', '465', '4654456', '465', '45', '4654', '654', '654', '654', '654', '564'),
(9, '645', '654', '64', '546', '2018-05-04', '2018-05-04', '465', '4654456', '465', '45', '4654', '654', '654', '654', '654', '564'),
(10, '645', '654', '64', '546', '2018-05-04', '2018-05-04', '465', '4654456', '465', '45', '4654', '654', '654', '654', '654', '564'),
(11, '645', '654', '64', '546', '2018-05-04', '2018-05-04', '465', '4654456', '465', '45', '4654', '654', '654', '654', '654', '564'),
(12, '212', '2121', '121', '2121', '2018-10-10', '2018-10-10', '121', '111', '2121', '21212', '2121', '1212', '1212', '2121', '2121', '2121'),
(13, '543', '135', '43', '43', '0435-05-03', '0435-04-03', '435', '435', '435', '4354', '534', '343', '43', '453', '453', '435'),
(14, '543', '135', '43', '43', '0435-05-03', '0435-04-03', '435', '435', '435', '4354', '534', '343', '43', '453', '453', '435'),
(15, '543', '135', '43', '43', '0435-05-03', '0435-04-03', '435', '435', '435', '4354', '534', '343', '43', '453', '453', '435'),
(16, '543', '135', '43', '43', '0435-05-03', '0435-04-03', '435', '435', '435', '4354', '534', '343', '43', '453', '453', '435'),
(17, '543', '135', '43', '43', '0435-05-03', '0435-04-03', '435', '435', '435', '4354', '534', '343', '43', '453', '453', '435'),
(18, '543', '135', '43', '43', '0435-05-03', '0435-04-03', '435', '435', '435', '4354', '534', '343', '43', '453', '453', '435'),
(19, '543', '135', '43', '43', '0435-05-03', '0435-04-03', '435', '435', '435', '4354', '534', '343', '43', '453', '453', '435'),
(20, '543', '135', '43', '43', '0435-05-03', '0435-04-03', '435', '435', '435', '4354', '534', '343', '43', '453', '453', '435'),
(21, '543', '135', '43', '43', '0435-05-03', '0435-04-03', '435', '435', '435', '4354', '534', '343', '43', '453', '453', '435'),
(22, '543', '135', '43', '43', '0435-05-03', '0435-04-03', '435', '435', '435', '4354', '534', '343', '43', '453', '453', '435'),
(23, 'THEJAS LAL', '1001', 'SALES', 'JAKARTA', '2018-10-10', '2018-10-10', '10', 'THE RESON IS I WANT JOIN PT VOLO CUSTOMER GATHER HEALD ON  SUNDAY IN BALI\r\nTHE PT VOLVO SEND ME REQY', 'KDSJGFKSDGJSKDGJSKJ\r\nSGDKSGKJKSDJGKSJSJGD\r\nSKGDJSKGDJSKGJSGKJ', 'I AM VERY GOOD PERSON AND DO ALL THE JOB BEFORE I LEAVE\r\nFKGSJDGKSJDGKSDJGSJG\r\nDSKGJSKJGSKGDJSKGJ', 'THEJAS LAL', 'MANAGER', 'KIRAN', 'HEAD', 'RISKA', 'HR MANAGER'),
(24, 'THEJAS LAL', '1001', 'SALES', 'JAKARTA', '2018-10-10', '2018-10-10', '10', 'THE RESON IS I WANT JOIN PT VOLO CUSTOMER GATHER HEALD ON  SUNDAY IN BALI\r\nTHE PT VOLVO SEND ME REQY', 'KDSJGFKSDGJSKDGJSKJ\r\nSGDKSGKJKSDJGKSJSJGD\r\nSKGDJSKGDJSKGJSGKJ', 'I AM VERY GOOD PERSON AND DO ALL THE JOB BEFORE I LEAVE\r\nFKGSJDGKSJDGKSDJGSJG\r\nDSKGJSKJGSKGDJSKGJ', 'THEJAS LAL', 'MANAGER', 'KIRAN', 'HEAD', 'RISKA', 'HR MANAGER'),
(25, 'THEJAS LAL', '1001', 'SALES', 'JAKARTA', '2018-10-10', '2018-10-10', '10', 'THE RESON IS I WANT JOIN PT VOLO CUSTOMER GATHER HEALD ON  SUNDAY IN BALI\r\nTHE PT VOLVO SEND ME REQY', 'KDSJGFKSDGJSKDGJSKJ\r\nSGDKSGKJKSDJGKSJSJGD\r\nSKGDJSKGDJSKGJSGKJ', 'I AM VERY GOOD PERSON AND DO ALL THE JOB BEFORE I LEAVE\r\nFKGSJDGKSJDGKSDJGSJG\r\nDSKGJSKJGSKGDJSKGJ', 'THEJAS LAL', 'MANAGER', 'KIRAN', 'HEAD', 'RISKA', 'HR MANAGER'),
(26, 'THEJAS LAL', '1001', 'SALES', 'JAKARTA', '2018-10-10', '2018-10-10', '10', 'THE RESON IS I WANT JOIN PT VOLO CUSTOMER GATHER HEALD ON  SUNDAY IN BALI\r\nTHE PT VOLVO SEND ME REQY', 'KDSJGFKSDGJSKDGJSKJ\r\nSGDKSGKJKSDJGKSJSJGD\r\nSKGDJSKGDJSKGJSGKJ', 'I AM VERY GOOD PERSON AND DO ALL THE JOB BEFORE I LEAVE\r\nFKGSJDGKSJDGKSDJGSJG\r\nDSKGJSKJGSKGDJSKGJ', 'THEJAS LAL', 'MANAGER', 'KIRAN', 'HEAD', 'RISKA', 'HR MANAGER'),
(27, 'THEJAS LAL', '1001', 'SALES', 'JAKARTA', '2018-10-10', '2018-10-10', '10', 'THE RESON IS I WANT JOIN PT VOLO CUSTOMER GATHER HEALD ON  SUNDAY IN BALI\r\nTHE PT VOLVO SEND ME REQY', 'KDSJGFKSDGJSKDGJSKJ\r\nSGDKSGKJKSDJGKSJSJGD\r\nSKGDJSKGDJSKGJSGKJ', 'I AM VERY GOOD PERSON AND DO ALL THE JOB BEFORE I LEAVE\r\nFKGSJDGKSJDGKSDJGSJG\r\nDSKGJSKJGSKGDJSKGJ', 'THEJAS LAL', 'MANAGER', 'KIRAN', 'HEAD', 'RISKA', 'HR MANAGER'),
(28, 'THEJAS LAL', '1001', 'SALES', 'JAKARTA', '2018-10-10', '2018-10-10', '10', 'THE RESON IS I WANT JOIN PT VOLO CUSTOMER GATHER HEALD ON  SUNDAY IN BALI\r\nTHE PT VOLVO SEND ME REQY', 'KDSJGFKSDGJSKDGJSKJ\r\nSGDKSGKJKSDJGKSJSJGD\r\nSKGDJSKGDJSKGJSGKJ', 'I AM VERY GOOD PERSON AND DO ALL THE JOB BEFORE I LEAVE\r\nFKGSJDGKSJDGKSDJGSJG\r\nDSKGJSKJGSKGDJSKGJ', 'THEJAS LAL', 'MANAGER', 'KIRAN', 'HEAD', 'RISKA', 'HR MANAGER'),
(29, 'THEJAS LAL', '1001', 'SALES', 'JAKARTA', '2018-10-10', '2018-10-10', '10', 'THE RESON IS I WANT JOIN PT VOLO CUSTOMER GATHER HEALD ON  SUNDAY IN BALI\r\nTHE PT VOLVO SEND ME REQY', 'KDSJGFKSDGJSKDGJSKJ\r\nSGDKSGKJKSDJGKSJSJGD\r\nSKGDJSKGDJSKGJSGKJ', 'I AM VERY GOOD PERSON AND DO ALL THE JOB BEFORE I LEAVE\r\nFKGSJDGKSJDGKSDJGSJG\r\nDSKGJSKJGSKGDJSKGJ', 'THEJAS LAL', 'MANAGER', 'KIRAN', 'HEAD', 'RISKA', 'HR MANAGER'),
(30, 'THEJAS LAL', '1001', 'SALES', 'JAKARTA', '2018-10-10', '2018-10-10', '10', 'THE RESON IS I WANT JOIN PT VOLO CUSTOMER GATHER HEALD ON  SUNDAY IN BALI\r\nTHE PT VOLVO SEND ME REQY', 'KDSJGFKSDGJSKDGJSKJ\r\nSGDKSGKJKSDJGKSJSJGD\r\nSKGDJSKGDJSKGJSGKJ', 'I AM VERY GOOD PERSON AND DO ALL THE JOB BEFORE I LEAVE\r\nFKGSJDGKSJDGKSDJGSJG\r\nDSKGJSKJGSKGDJSKGJ', 'THEJAS LAL', 'MANAGER', 'KIRAN', 'HEAD', 'RISKA', 'HR MANAGER'),
(31, 'THEJAS LAL', '1001', 'SALES', 'JAKARTA', '2018-10-10', '2018-10-10', '10', 'THE RESON IS I WANT JOIN PT VOLO CUSTOMER GATHER HEALD ON  SUNDAY IN BALI\r\nTHE PT VOLVO SEND ME REQY', 'KDSJGFKSDGJSKDGJSKJ\r\nSGDKSGKJKSDJGKSJSJGD\r\nSKGDJSKGDJSKGJSGKJ', 'I AM VERY GOOD PERSON AND DO ALL THE JOB BEFORE I LEAVE\r\nFKGSJDGKSJDGKSDJGSJG\r\nDSKGJSKJGSKGDJSKGJ', 'THEJAS LAL', 'MANAGER', 'KIRAN', 'HEAD', 'RISKA', 'HR MANAGER'),
(32, 'THEJAS LAL', '1001', 'SALES', 'JAKARTA', '2018-10-10', '2018-10-10', '10', 'THE RESON IS I WANT JOIN PT VOLO CUSTOMER GATHER HEALD ON  SUNDAY IN BALI\r\nTHE PT VOLVO SEND ME REQY', 'KDSJGFKSDGJSKDGJSKJ\r\nSGDKSGKJKSDJGKSJSJGD\r\nSKGDJSKGDJSKGJSGKJ', 'I AM VERY GOOD PERSON AND DO ALL THE JOB BEFORE I LEAVE\r\nFKGSJDGKSJDGKSDJGSJG\r\nDSKGJSKJGSKGDJSKGJ', 'THEJAS LAL', 'MANAGER', 'KIRAN', 'HEAD', 'RISKA', 'HR MANAGER');

-- --------------------------------------------------------

--
-- Table structure for table `createsppd`
--

CREATE TABLE `createsppd` (
  `slno` int(100) NOT NULL,
  `locbr` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `form` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `emp` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `loc` varchar(100) NOT NULL,
  `dep` varchar(100) NOT NULL,
  `desi` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `purp` varchar(100) NOT NULL,
  `follow` varchar(100) NOT NULL,
  `datedep` varchar(100) NOT NULL,
  `dateret` varchar(100) NOT NULL,
  `typetra` varchar(100) NOT NULL,
  `lagg` varchar(100) NOT NULL,
  `pendcas` varchar(100) NOT NULL,
  `group1` varchar(100) NOT NULL,
  `brasit` varchar(100) NOT NULL,
  `ware` varchar(100) NOT NULL,
  `busi` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `bppmoney` varchar(100) NOT NULL,
  `note1` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL,
  `note2` varchar(100) NOT NULL,
  `out` varchar(100) NOT NULL,
  `note3` varchar(100) NOT NULL,
  `flight` varchar(100) NOT NULL,
  `note4` varchar(100) NOT NULL,
  `meals` varchar(100) NOT NULL,
  `note5` varchar(100) NOT NULL,
  `cost1` varchar(100) NOT NULL,
  `note6` varchar(100) NOT NULL,
  `others` varchar(100) NOT NULL,
  `note7` varchar(100) NOT NULL,
  `alltotal` varchar(100) NOT NULL,
  `comcost` varchar(100) NOT NULL,
  `note8` varchar(100) NOT NULL,
  `custcost` varchar(100) NOT NULL,
  `note9` varchar(100) NOT NULL,
  `flight1` varchar(100) NOT NULL,
  `note10` varchar(100) NOT NULL,
  `subfrom` varchar(100) NOT NULL,
  `sign` varchar(100) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `sign1` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `sign3` varchar(100) NOT NULL,
  `sign4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createsppd`
--

INSERT INTO `createsppd` (`slno`, `locbr`, `month`, `year`, `form`, `name`, `emp`, `title`, `rank`, `loc`, `dep`, `desi`, `from`, `purp`, `follow`, `datedep`, `dateret`, `typetra`, `lagg`, `pendcas`, `group1`, `brasit`, `ware`, `busi`, `cost`, `bppmoney`, `note1`, `local`, `note2`, `out`, `note3`, `flight`, `note4`, `meals`, `note5`, `cost1`, `note6`, `others`, `note7`, `alltotal`, `comcost`, `note8`, `custcost`, `note9`, `flight1`, `note10`, `subfrom`, `sign`, `title1`, `sign1`, `title2`, `sign3`, `sign4`) VALUES
(1, 'xcvxc', '', '', 'nbvnb', 'vnb', 'vnb', 'vnb', 'vnbv', 'nbv', 'nbv', 'nbv', 'nb', 'vnbv', 'nb', '', '', '', '', '', 'BPP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'xcvxc', '', '', 'nbvnb', 'vnb', 'vnb', 'vnb', 'vnbv', 'nbv', 'nbv', 'nbv', 'nb', 'vnbv', 'nb', '', '', '', '', '', 'BPP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'mnm', '', '', 'bmnb', 'mnb', 'mn', 'bmnb', 'nm', 'bmn', 'bmn', 'bmn', 'bmn', 'bmn', 'bm', '', '', 'mn', 'bmnb', 'mn', 'BPP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'nbv', '', '', 'vnb', 'vnb', 'vnbv', 'nbv', 'nbv', 'nbv', 'nbv', 'nbv', 'nv', 'nbv', 'nbv', '', '', '', '', '', 'BPP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'nhg', '', '', 'fgf', 'hgf', 'gf', '', 'hgf', 'hgf', 'hgf', 'hgf', 'hgf', 'hgf', 'hgf', '', '', '', '', '', 'BPP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', '', '', '', 'bv', '312087', '331', '', '', '', '', '', '', '', '', '', '', '', '', 'BPP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(8, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(9, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(10, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(11, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(12, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(13, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(14, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(15, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(16, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(17, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(18, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(19, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(20, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(21, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(22, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(23, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(24, 'bvcvbcv', '1', '1', ' vcbvc', 'bvcvbcvb', '1', 'bvbnvnb', 'vnbv', 'nbvn', 'vn', 'vnbv', 'nbv', 'nbv', 'nbnv', '2018-01-01', '2018-02-01', 'bvc', 'bvcb', 'cbvc', 'BPP', 'bvc', 'bvc', 'bvc', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '7', '1', '', '1', '', '1', '', 'bv', 'b ', 'bcb', 'cvb', 'cbvc', 'bvc', 'bvcvbb'),
(25, 'nbnbvn', '1', '1', '', 'bv', '2', 'vnb', '312', '31323', '132', '1321', '321', '21', '231', '2332-02-01', '2018-12-01', '231', '321', '231', 'BPP', '21', '32121', '213', '', '2132', '132', '1231', '321', '321', '321', '23', '321', '2311', '2', '323', '132', '211321', '31232', '217662', '231', '13213', '1231', '321', '321', '32', '321', '231', '3213', '32', '321', '321', '3213'),
(26, '354', '354', '34', '43', '435', '43', '5', '343', '535', '435', '35', '35', '34', '353', '0005-05-31', '0004-03-05', '35', '35', '321', 'BPP', '32122323', '132', '132', '', '12', '131', '321', '312', '123', '2132', '13', '132', '1321', '321', '321', '321', '321', '231', '2432', '231', '332', '23', '132', '32', '231', '231', '32', '223', '32', '321', '321', '31'),
(27, '3', '354', '35435', '4354', '3543', '5435', '435', '35', '353', '35', '354', '354', '353', '535', '0005-05-31', '0004-03-05', '354', '3553', '453', 'BPP', '435', '3535', '4354', '', '534', '354', '354', '3535', '435', '435', '453', '435', '354', '3543', '4354', '354', '353', '54', '6837', '34535', '354', '354354', '34535', '435', '354', '354', '43535', '354', '354', '3', '35', '35'),
(28, 'gj', '65465', '4654', '654', '654', '654', '654', '65465', '4', '65465', '465', '4654', '654', '65465', '0565-06-04', '4654-06-05', '654', '65465', '465', 'BPP', '654', '654', '654', '', '564', '654', '654', '65465', '56', '4564', '654', '65', '65', '654', '654', '65465', '46', '5465', '2693', '65465', '65', '4654', '654', '654', '654', '65', '456', '56', '456', '54', '64', '65'),
(29, 'gj', '65465', '4654', '654', '654', '654', '654', '65465', '4', '65465', '465', '4654', '654', '65465', '0565-06-04', '4654-06-05', '654', '65465', '465', 'BPP', '654', '654', '654', '', '564', '654', '654', '65465', '56', '4564', '654', '65', '65', '654', '654', '65465', '46', '5465', '2693', '65465', '65', '4654', '654', '654', '654', '65', '456', '56', '456', '54', '64', '65'),
(30, '343', '543', '4324', '3', '43', '43', '35', '354', '354', '354', '354', '35435', '435', '435', '2014-01-01', '2018-12-01', '354', '354', '343', 'BPP', '435', '434', '354', '', '3543', '453', '434', '3', '4534', '354', '354', '354', '354', '35435', '35', '53', '35', '435', '4354', '35', '3435', '4354', '35', '354', '354', '354', '35', '354', '354', '354', '3543', '5435'),
(31, '343', '543', '4324', '3', '43', '43', '35', '354', '354', '354', '354', '35435', '435', '435', '2014-01-01', '2018-12-01', '354', '354', '343', 'BPP', '435', '434', '354', '', '3543', '453', '434', '3', '4534', '354', '354', '354', '354', '35435', '35', '53', '35', '435', '4354', '35', '3435', '4354', '35', '354', '354', '354', '35', '354', '354', '354', '3543', '5435'),
(32, '3534', '34', '354', '354', '35435', '35', '453', '4354', '354', '354', '351', '354', '3543', '5435', '2018-04-01', '2015-01-01', '354', '534', '354354', 'BPP', '351', '355', '13', '', '131', '321', '321', '3213', '213', '213', '2132', '132', '1321', '321', '321', '321', '321', '321', '32131', '3213', '2132', '132', '1321', '231', '231', '21213', '123', '123', '21', '13', '21321', '321'),
(33, '', '', '', '', '', '1414', '', '', '', '', '', '', '', '', '', '', '', '', '', 'BPP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '', '', '', '', '', '1414', '', '', '', '', '', '', '', '', '', '', '', '', '', 'BPP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'NKT-JKT', '12', '2018', 'SPPD', 'THEJAS', '1001', 'MANAGER', 'SALES', 'JAKARTA', 'MARKETING', 'JAKARTA', 'BALI', 'SKDGJSKDJGKSDJGKSDJGKSDJKGJSDKJGSDKGJSDKGJSDKGJSKDGJKSDJGKSDJGKSDJGKSJDKG\r\nSGSKDJGKSJDGKSJGKSJGK', 'KIRAN', '2018-10-10', '2018-11-10', 'FLIGHT', 'PETTY', 'TIDAK', 'Hotel', 'JAKARTA', 'JAKRTA', 'JAKRTA', '', '500000', 'PT VOLVO', '200000', 'PTVOLVO', '5000000', '', '5000000', '', '1000000', '', '100000000', '', '5000000', '', '116700000', '', '', '', '', '50000', 'PT VOLVO', 'JAKARTA', 'THEJAS', 'MANAGER', 'KIRAN', 'HEAD', 'FRISKA', 'HR MANAGER'),
(36, 'NKT-JKT', '12', '2018', 'SPPD', 'THEJAS', '1001', 'MANAGER', 'SALES', 'JAKARTA', 'MARKETING', 'JAKARTA', 'BALI', 'SKDGJSKDJGKSDJGKSDJGKSDJKGJSDKJGSDKGJSDKGJSDKGJSKDGJKSDJGKSDJGKSDJGKSJDKG\r\nSGSKDJGKSJDGKSJGKSJGK', 'KIRAN', '2018-10-10', '2018-11-10', 'FLIGHT', 'PETTY', 'TIDAK', 'Hotel', 'JAKARTA', 'JAKRTA', 'JAKRTA', '', '500000', 'PT VOLVO', '200000', 'PTVOLVO', '5000000', '', '5000000', '', '1000000', '', '100000000', '', '5000000', '', '116700000', '', '', '', '', '50000', 'PT VOLVO', 'JAKARTA', 'THEJAS', 'MANAGER', 'KIRAN', 'HEAD', 'FRISKA', 'HR MANAGER'),
(37, 'NKT-JKT', '12', '2018', 'SPPD', 'THEJAS', '1001', 'MANAGER', 'SALES', 'JAKARTA', 'MARKETING', 'JAKARTA', 'BALI', 'SKDGJSKDJGKSDJGKSDJGKSDJKGJSDKJGSDKGJSDKGJSDKGJSKDGJKSDJGKSDJGKSDJGKSJDKG\r\nSGSKDJGKSJDGKSJGKSJGK', 'KIRAN', '2018-10-10', '2018-11-10', 'FLIGHT', 'PETTY', 'TIDAK', 'Hotel', 'JAKARTA', 'JAKRTA', 'JAKRTA', '', '500000', 'PT VOLVO', '200000', 'PTVOLVO', '5000000', '', '5000000', '', '1000000', '', '100000000', '', '5000000', '', '116700000', '', '', '', '', '50000', 'PT VOLVO', 'JAKARTA', 'THEJAS', 'MANAGER', 'KIRAN', 'HEAD', 'FRISKA', 'HR MANAGER'),
(38, 'NKT-JKT', '12', '2018', 'SPPD', 'THEJAS', '1001', 'MANAGER', 'SALES', 'JAKARTA', 'MARKETING', 'JAKARTA', 'BALI', 'SKDGJSKDJGKSDJGKSDJGKSDJKGJSDKJGSDKGJSDKGJSDKGJSKDGJKSDJGKSDJGKSDJGKSJDKG\r\nSGSKDJGKSJDGKSJGKSJGK', 'KIRAN', '2018-10-10', '2018-11-10', 'FLIGHT', 'PETTY', 'TIDAK', 'Hotel', 'JAKARTA', 'JAKRTA', 'JAKRTA', '', '500000', 'PT VOLVO', '200000', 'PTVOLVO', '5000000', '', '5000000', '', '1000000', '', '100000000', '', '5000000', '', '116700000', '', '', '', '', '50000', 'PT VOLVO', 'JAKARTA', 'THEJAS', 'MANAGER', 'KIRAN', 'HEAD', 'FRISKA', 'HR MANAGER'),
(39, 'NKT-JKT', '12', '2018', 'SPPD', 'THEJAS', '1001', 'MANAGER', 'SALES', 'JAKARTA', 'MARKETING', 'JAKARTA', 'BALI', 'SKDGJSKDJGKSDJGKSDJGKSDJKGJSDKJGSDKGJSDKGJSDKGJSKDGJKSDJGKSDJGKSDJGKSJDKG\r\nSGSKDJGKSJDGKSJGKSJGK', 'KIRAN', '2018-10-10', '2018-11-10', 'FLIGHT', 'PETTY', 'TIDAK', 'Hotel', 'JAKARTA', 'JAKRTA', 'JAKRTA', '', '500000', 'PT VOLVO', '200000', 'PTVOLVO', '5000000', '', '5000000', '', '1000000', '', '100000000', '', '5000000', '', '116700000', '', '', '', '', '50000', 'PT VOLVO', 'JAKARTA', 'THEJAS', 'MANAGER', 'KIRAN', 'HEAD', 'FRISKA', 'HR MANAGER'),
(40, 'NKT-JKT', '12', '2018', 'SPPD', 'THEJAS', '1001', 'MANAGER', 'SALES', 'JAKARTA', 'MARKETING', 'JAKARTA', 'BALI', 'SKDGJSKDJGKSDJGKSDJGKSDJKGJSDKJGSDKGJSDKGJSDKGJSKDGJKSDJGKSDJGKSDJGKSJDKG\r\nSGSKDJGKSJDGKSJGKSJGK', 'KIRAN', '2018-10-10', '2018-11-10', 'FLIGHT', 'PETTY', 'TIDAK', 'Hotel', 'JAKARTA', 'JAKRTA', 'JAKRTA', '', '500000', 'PT VOLVO', '200000', 'PTVOLVO', '5000000', '', '5000000', '', '1000000', '', '100000000', '', '5000000', '', '116700000', '', '', '', '', '50000', 'PT VOLVO', 'JAKARTA', 'THEJAS', 'MANAGER', 'KIRAN', 'HEAD', 'FRISKA', 'HR MANAGER');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sl_no` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sl_no`, `name`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'admin', 'D6BF4BB9A66419380A7E8B034270D381', 'admin'),
(2, 'Emp', 'employee', '033836B6CEDD9A857D82681AAFADBC19', 'employe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createcuti`
--
ALTER TABLE `createcuti`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `createsppd`
--
ALTER TABLE `createsppd`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `createcuti`
--
ALTER TABLE `createcuti`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `createsppd`
--
ALTER TABLE `createsppd`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
