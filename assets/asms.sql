-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2015 at 12:33 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Guest_Message`
--

CREATE TABLE IF NOT EXISTS `tbl_Guest_Message` (
  `name` varchar(20) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_Guest_Message`
--

INSERT INTO `tbl_Guest_Message` (`name`, `email_id`, `contact_number`, `subject`, `comments`) VALUES
('anujshah', 'anuj.shah95@gmail.com', '9327311008', 'Love The All New Products', 'awesome website'),
('jainam', 'jainam4me@gmail.com', '9898989898', 'Love The All New Products', 'alya tu to jordar manas...'),
('rakesh', 'anuj.shah95@gmail.com', '9327311008', 'Love The All New Products', 'hy .. i dont have satisfied with your website/service.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Login`
--

CREATE TABLE IF NOT EXISTS `tbl_Login` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `rid` int(11) DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_Login`
--

INSERT INTO `tbl_Login` (`lid`, `uname`, `password`, `type`, `rid`, `mid`) VALUES
(10, 'admin', 'admin', 'admin', NULL, NULL),
(11, 'anuj', 'anuj', 'retailer', NULL, NULL),
(12, 'shahanuj_i', '87FyiQXM', 'retailer', 28, NULL),
(13, 'shahanuj_infotech', 'GOE3HS$8', 'retailer', 29, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Products`
--

CREATE TABLE IF NOT EXISTS `tbl_Products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(20) DEFAULT NULL,
  `product_type` varchar(20) DEFAULT NULL,
  `image_url` longblob,
  `manufacture_name` varchar(20) DEFAULT NULL,
  `car_type` varchar(20) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_Products`
--

INSERT INTO `tbl_Products` (`product_id`, `product_name`, `product_type`, `image_url`, `manufacture_name`, `car_type`, `description`, `price`, `quantity`) VALUES
(1, 'N101', 'Head Light', '', 'Nachi', 'Innova', 'desci', '500', 50),
(2, 'N101', 'Head Light', '', 'Auto Gold', 'Innova', 'desci', '500', 50),
(3, 'o10', 'Air Filter', '', 'Auto Gold', 'Tavera', 'Air filter', '120', 6),
(4, 'N101', 'Head Light', '', 'Zip Filter', 'Zip Filter', 'desci', '500', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Retailer_Feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_Retailer_Feedback` (
  `name` varchar(20) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `category` varchar(30) NOT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Retailer_Login`
--

CREATE TABLE IF NOT EXISTS `tbl_Retailer_Login` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `r_username` varchar(10) NOT NULL,
  `r_password` varchar(25) NOT NULL,
  `rname` varchar(20) DEFAULT NULL,
  `shop_name` varchar(50) DEFAULT NULL,
  `shop_address` varchar(500) DEFAULT NULL,
  `contact_number` varchar(10) DEFAULT NULL,
  `other_number` varchar(10) DEFAULT NULL,
  `email_id` varchar(25) DEFAULT NULL,
  `vat` varchar(20) DEFAULT NULL,
  `vat_date` date DEFAULT NULL,
  `cst` varchar(20) DEFAULT NULL,
  `cst_date` date DEFAULT NULL,
  PRIMARY KEY (`rid`),
  UNIQUE KEY `r_username` (`r_username`),
  UNIQUE KEY `shop_address` (`shop_address`),
  UNIQUE KEY `contact_number` (`contact_number`),
  UNIQUE KEY `other_number` (`other_number`),
  UNIQUE KEY `email_id` (`email_id`),
  UNIQUE KEY `vat` (`vat`),
  UNIQUE KEY `cst` (`cst`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_Retailer_Login`
--

INSERT INTO `tbl_Retailer_Login` (`rid`, `r_username`, `r_password`, `rname`, `shop_name`, `shop_address`, `contact_number`, `other_number`, `email_id`, `vat`, `vat_date`, `cst`, `cst_date`) VALUES
(27, 'anuj_infot', '@T%R?U*c', 'anujshah', 'anuj infotech pvt ltd', 'adajan road surat', '9327311008', '7798486807', 'anuj.shah95@gmail.com', '52', '2015-11-03', '55', '2015-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Retailer_Request`
--

CREATE TABLE IF NOT EXISTS `tbl_Retailer_Request` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(20) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `shop_address` varchar(500) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `other_number` varchar(10) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `vat` varchar(20) NOT NULL,
  `vat_date` date NOT NULL,
  `cst` varchar(20) NOT NULL,
  `cst_date` date NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`rid`),
  UNIQUE KEY `shop_address` (`shop_address`),
  UNIQUE KEY `contact_number` (`contact_number`),
  UNIQUE KEY `other_number` (`other_number`),
  UNIQUE KEY `email_id` (`email_id`),
  UNIQUE KEY `vat` (`vat`),
  UNIQUE KEY `cst` (`cst`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbl_Retailer_Request`
--

INSERT INTO `tbl_Retailer_Request` (`rid`, `rname`, `shop_name`, `shop_address`, `contact_number`, `other_number`, `email_id`, `vat`, `vat_date`, `cst`, `cst_date`, `status`) VALUES
(27, 'anujshah', 'anuj infotech pvt ltd', 'adajan road surat', '9327311008', '7798486807', 'anuj.shah95@gmail.com', '52', '2015-11-03', '55', '2015-11-25', 1),
(29, 'shahanuj', 'shahanuj infotech pvt ltd', 'pal', '7878787878', '9898989855', '14030142063@sicsr.ac.in', '424234', '2015-11-11', '4353455', '2015-11-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Subscriber`
--

CREATE TABLE IF NOT EXISTS `tbl_Subscriber` (
  `sub_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(20) NOT NULL,
  `sub_email` varchar(50) NOT NULL,
  PRIMARY KEY (`sub_id`),
  UNIQUE KEY `sub_email` (`sub_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_Subscriber`
--

INSERT INTO `tbl_Subscriber` (`sub_id`, `sub_name`, `sub_email`) VALUES
(20, 'anuj shah', 'anuj.shah95@gmail.com'),
(21, 'chirag', 'chirag@gmail.com'),
(22, 'harsh', 'harsh@gmail.com'),
(23, 'ama', 'am@m.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_Transaction` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) DEFAULT NULL,
  `products` varchar(1000) DEFAULT NULL,
  `total` varchar(10) DEFAULT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_Transaction`
--

INSERT INTO `tbl_Transaction` (`tid`, `rid`, `products`, `total`, `purchase_date`) VALUES
(1, 1, 'head light', '600', '2015-10-15 17:21:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
