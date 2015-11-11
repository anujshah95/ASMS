-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2015 at 07:57 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

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
('anujshah', 'niketpshah98@gmail.com', '9876543210', 'can_better', 'yoyo niketiyo ...'),
('Dhruvesh Tripathi', 'dhruvesh_tripathi@yahoo.c', '9552552167', 'login', 'problem related to login..stuck from 9 days..'),
('Anuj Shah', 'anuj.shah95@gmail.com', '9876543210', 'can_better', 'it should be better'),
('Jay Jaiswal', 'jay@jay.com', '234234234', 'can_better', 'fdsfs'),
('Udit Verma ', 'udit@gmail.com', '2342342344', 'issue_page', 'fsffd'),
('Aditya', 'adi@gmail.com', '2342423', 'issue_page', 'xc'),
('harsh soman', 'soman@gmail.com', '3453535', 'retailer_request_issue', 'xcvxv'),
('Dhruvesh ', 'anuj@anuj.com', '25432', 'can_better', 'gdf'),
('babaa', 'baba@gmail.com', '455', 'add_feature', 'sfsfd'),
('anujshah', 'anuj.shah95@gmail.com', '9327311008', 'issue_page', 'your retailer page is not working well.please fix it as soon as possible.'),
('Ansh', 'shahanuj@aol.com', '9865327410', 'retailer_request_issue', 'i dont have vat , but i want retailership under shivani enterprise'),
('ansh ansh', 'shahanuj@aol.com', '09887', 'add_feature', 'ye sirf timepass he'),
('vicky', 'shahanuj@aol.com', '1234567890', 'can_better', 'vickey timepass'),
('ansh ansh ansh', 'shahanuj@aol.com', '1234567890', 'add_feature', 'adad'),
('pol', 'shahanuj@aol.com', '2345678', 'can_better', 'sdfdsf'),
('asd', '14030142063@sicsr.ac.in', '98', 'add_feature', 'bullshit'),
('anujshah', 'anuj.shah95@gmail.com', '9898', 'can_better', 'sfdsf'),
('rishab desai', 'rishabdesai@hotmail.com', '3213131321', 'issue_page', 'fdsdfsf'),
('AnujShah', 'anuj.shah95@gmail.com', '9327311008', 'retailer_request_issue', 'I am enable to login on this page'),
('AnujShah', '14030142063@sicsr.ac.in', '93276565', 'retailer_request_issue', 'sdfsf'),
('niketshah', 'niketpshah98@gmail.com', '45', 'products', 'dsfsf'),
('anujshah', 'anuj.shah95@gmail.com', '311', 'can_better', 'sfd'),
('anujshah', 'anuj.shah95@gmail.com', '3', 'issue_page', 'qwewqe'),
('anujshah', 'anuj@anuj.com', '11111', 'can_better', 'f'),
('anujshah', 'anuj@anuj.com', '2423', 'can_better', 'vc'),
('Dhruvesh Tripathi', '14030142036@sicsr.ac.in', '9595959595', 'issue_page', 'there are lots of bug in retailer request page .. kindle improve that page .otherwise website is awesome dude..'),
('AnujShah', 'anuj.shah95@gmail.com', '9327311008', 'love_products', 'blah blah ..'),
('Niket', 'niketpshah98@gmail.com', '9898989898', 'Login Related Issue', 'login related issue  ssdflsfsdf\nlfslf\nsfskfbksdbfksbkfbsf\nsfslfbsdflsblfsdf\nsfksbkfksfbs\nfs;fbskfksbfsd\nfskdfbksdbflsdf\nsdflskfsfjs\nfkslfskflaf\nskflsgkflsf\nsfksfkshfsa\nfskdfjsfds\nfslfjsvfsd\nfslfd'),
('anujshah', 'anuj.shah95@gmail.com', '9327311008', 'Love The All New Products', 'awesome dude..'),
('AnujShah', 'anuj.shah95@gmail.com', '9327311008', 'Can Get Better', 'yoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoy\nyoyooyoyyoyooyoyyoyooyoy\nyoyooyoy\nyoyooyoyyoyooyoyyoyooyoy\nyoyooyoy\nyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoyyoyooyoy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Login`
--

CREATE TABLE IF NOT EXISTS `tbl_Login` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(10) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_Login`
--

INSERT INTO `tbl_Login` (`lid`, `uname`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'anuj', 'anuj', 'retailer'),
(3, 'autogold', 'autogold', 'manufacture');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`rid`),
  UNIQUE KEY `shop_address` (`shop_address`),
  UNIQUE KEY `contact_number` (`contact_number`),
  UNIQUE KEY `other_number` (`other_number`),
  UNIQUE KEY `email_id` (`email_id`),
  UNIQUE KEY `vat` (`vat`),
  UNIQUE KEY `cst` (`cst`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `tbl_Retailer_Request`
--

INSERT INTO `tbl_Retailer_Request` (`rid`, `rname`, `shop_name`, `shop_address`, `contact_number`, `other_number`, `email_id`, `vat`, `vat_date`, `cst`, `cst_date`) VALUES
(39, 'anujshah', 'anuj infotech pvt ltd', 'adajan road surat', '9327311008', '0261278100', 'anuj.shah95@gmail.com', '1234567890', '2015-10-14', '9876543101', '2015-10-15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
