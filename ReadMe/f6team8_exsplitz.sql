-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2017 at 11:38 AM
-- Server version: 5.5.52-cll
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f6team8_exsplitz`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostedrides`
--

CREATE TABLE IF NOT EXISTS `hostedrides` (
  `origin` varchar(500) NOT NULL,
  `destination` varchar(500) NOT NULL,
  `date_of_travel` date NOT NULL,
  `departure_time` varchar(15) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `number_of_seats` int(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `hostedrides`
--

INSERT INTO `hostedrides` (`origin`, `destination`, `date_of_travel`, `departure_time`, `vehicle`, `number_of_seats`, `id`, `email`) VALUES
('1', '2', '2016-12-08', '12:00 AM', '', 2, 1, 'achamaria@live.co'),
('1897 Princes Highway, Heywood, Victoria, Australia', '2 France, Gaja-et-Villedieu', '2016-12-13', '12:59 PM', 'dsga', 1, 10, 'technoflucom@gmail.com'),
('29464 Princes Highway, Glenburnie, South Australia, Australia', '29464 Princes Highway, Glenburnie, South Australia, Australia', '2016-12-14', '12:00 AM', '', 5, 7, 'achamaria@live.com'),
('29464 Princes Highway, Glenburnie, South Australia, Australia', '310 U.S. 1, Norwalk, CT, United States', '2016-12-14', '12:00 AM', '', 5, 8, 'achamaria@live.com'),
('29464 Princes Highway, Glenburnie, South Australia, Australia', '310 U.S. 1, Norwalk, CT, United States', '2016-12-14', '12:59 PM', '', 5, 9, 'achamaria@live.com'),
('Toronto, ON, Canada', 'New York, NY, United States', '2016-12-07', '12:00 PM', 'Audi', 2, 11, 'vishvajit79@gmail.com'),
('160 Kendal Avenue, Toronto, ON, Canada', '1440 Lawrence Avenue East, North York, ON, Canada', '2016-12-13', '12:59 PM', 'car', 1, 12, 'vishvajitrkher@outlook.com'),
('Toronto, ON, Canada', 'New York, NY, United States', '2016-12-07', '01:00 AM', 'Audi', 2, 13, 'vishvajit79@gmail.com'),
('1405 Birchmount Road, Scarborough, ON, Canada', '160 Kendal Avenue, Toronto, ON, Canada', '2016-12-12', '10:23 AM', '4 wheel', 2, 14, 'vishvajit79@gmail.com'),
('160 Kendal Avenue, Toronto, ON, Canada', 'Niagara Falls, ON, Canada', '2016-12-12', '12:30 PM', 'Audi', 3, 16, 'karan.thescholar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `requestedrides`
--

CREATE TABLE IF NOT EXISTS `requestedrides` (
  `origin` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `date_of_travel` date NOT NULL,
  `prefered_time` time NOT NULL,
  `num_of_seats` int(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `requestedrides`
--

INSERT INTO `requestedrides` (`origin`, `destination`, `date_of_travel`, `prefered_time`, `num_of_seats`, `id`, `email`) VALUES
('ori1', 'des1', '2016-12-07', '08:17:12', 5, 1, 'technoflucom@gmail.com'),
('ori2', 'des2', '2016-12-20', '07:15:14', 3, 2, 'akash@adf.com'),
('29464 Princes Highway, Glenburnie, South Australia, Australia', '310 U.S. 1, Norwalk, CT, United States', '2016-12-14', '12:59:00', 0, 3, 'achamaria@live.com'),
('', '', '1970-01-01', '12:00:00', 0, 4, 'achamaria@live.com'),
('Vadodara, Gujarat, India', 'Ahmedabad', '2016-12-06', '12:15:00', 0, 5, '14it126@charusat.edu.in');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `dob` date NOT NULL,
  `phone_number` int(10) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `register_date` varchar(20) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_3` (`email`,`phone_number`),
  KEY `email` (`email`,`phone_number`),
  KEY `email_2` (`email`,`phone_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `dob`, `phone_number`, `last_login`, `register_date`, `hash`, `active`) VALUES
(37, 'Yash', 'Sheth', '14it126@charusat.edu.in', 'b65b64dc93fe6d3fe316b6967d4054df', '1996-09-19', 0, '2016-12-05 06:45:12', '05/12/2016', '1d7f7abc18fcb43975065399b0d1e48e', 1),
(36, 'VISHVAJIT', 'KHER', 'vishvajitrkher@outlook.com', '59abf4a14f14ff3c3afe0d883dfb8d20', '1997-07-29', 0, '2016-12-05 16:01:14', '05/12/2016', '8f85517967795eeef66c225f7883bdcb', 1),
(34, 'sid', 'zankat', 'siddhzankat@gmail.com', 'f201239f3484af0c55abd1f92c13e054', '1990-10-04', 0, '2016-12-04 18:07:18', '04/12/2016', 'f2fc990265c712c49d51a18a32b39f0c', 1),
(32, 'Vishvajit', 'Kher', 'vishvajit79@gmail.com', '59abf4a14f14ff3c3afe0d883dfb8d20', '1992-12-17', 0, '2016-12-05 03:10:28', '03/12/2016', '9bf31c7ff062936a96d3c8bd1f8f2ff3', 1),
(35, 'Akash', 'Chamaria', 'achamaria@live.com', '6be21eb0cc6281597eae39fa081c9d0e', '2000-12-04', 0, '2016-12-12 16:26:35', '05/12/2016', '9dcb88e0137649590b755372b040afad', 1),
(38, 'jaimin', 'chaudhari', 'jaiminchaudhari01@gmail.com', 'b5fa78c2a17b9fad3a43549ac33f8147', '2000-12-05', 0, '2016-12-05 07:07:59', '05/12/2016', '061412e4a03c02f9902576ec55ebbe77', 1),
(39, 'Siddharth', 'Patel', 'patel.siddharth500@gmail.com', '68c7ba908a3ea129dbd8b9c542e6adb4', '1996-01-22', 0, '2016-12-05 08:53:19', '05/12/2016', '3cf166c6b73f030b4f67eeaeba301103', 0),
(40, 'Akash', 'Chamaria', 'bossthumb@gmail.com', '6be21eb0cc6281597eae39fa081c9d0e', '2000-12-05', 0, '2016-12-05 17:20:45', '05/12/2016', '996a7fa078cc36c46d02f9af3bef918b', 0),
(41, 'dhruti', 'parekh', 'dhruti.parekh266@gmail.com', 'fda05763aee398e56fa7e7baed8b1e50', '2000-12-05', 0, '2016-12-05 18:28:53', '05/12/2016', '884d247c6f65a96a7da4d1105d584ddd', 0),
(42, 'Vatsal', 'Patel', 'vatsalforapple@gmail.com', '020f712a44f7c831fb016f511f5eafe1', '1997-04-11', 0, '2016-12-06 15:33:24', '06/12/2016', 'faa9afea49ef2ff029a833cccc778fd0', 0),
(45, 'karan', 'achary', 'karan.thescholar@gmail.com', '79f4cf7ad89a0dc59ff6504946df109a', '2000-12-05', 0, '2016-12-12 17:24:50', '12/12/2016', 'a8e864d04c95572d1aece099af852d0a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `postal` varchar(10) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `notifications` int(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `image` (`image`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `email`, `first_name`, `last_name`, `address`, `city`, `postal`, `state`, `country`, `phone`, `image`, `notifications`) VALUES
(16, '14it126@charusat.edu.in', 'Yash', 'Sheth', NULL, NULL, NULL, NULL, NULL, NULL, '919713', 1),
(15, 'vishvajitrkher@outlook.com', 'VISHVAJIT', 'KHER', '1405 Birchmount Road', 'Toronto', 'M1P 2E2', 'ON', 'Canada', NULL, '144624', 0),
(13, 'siddhzankat@gmail.com', 'sid', 'zankat', NULL, NULL, NULL, NULL, NULL, NULL, '280702', 1),
(14, 'achamaria@live.com', 'Akash', 'Chamaria', '16dsfa', 'saf', 'kij', 'lkjl', 'jlkk', NULL, '41425', 0),
(11, 'vishvajit79@gmail.com', 'Vishvajit', 'Kher', '1405 Birchmount Road', 'Toronto', 'M1P 2E2', 'ON', 'Canada', '647-504-4743', '659293', 0),
(17, 'jaiminchaudhari01@gmail.com', 'jaimin', 'chaudhari', NULL, NULL, NULL, NULL, NULL, NULL, '674667', 1),
(18, 'patel.siddharth500@gmail.com', 'Siddharth', 'Patel', NULL, NULL, NULL, NULL, NULL, NULL, '994125', 1),
(19, 'bossthumb@gmail.com', 'Akash', 'Chamaria', NULL, NULL, NULL, NULL, NULL, NULL, '627481', 0),
(20, 'dhruti.parekh266@gmail.com', 'dhruti', 'parekh', NULL, NULL, NULL, NULL, NULL, NULL, '430059', 1),
(24, 'karan.thescholar@gmail.com', 'karan', 'achary', 'kendal avwnue', 'toronto', 'm1p2e2', 'on', 'canada', '647-647-6555', '122171', 1),
(21, 'vatsalforapple@gmail.com', 'Vatsal', 'Patel', NULL, NULL, NULL, NULL, NULL, NULL, '551483', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
