-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2013 at 02:14 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parcel`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_address` varchar(255) NOT NULL,
  `second_address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `source_country` varchar(255) NOT NULL,
  `telephone` int(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `first_address`, `second_address`, `town`, `country`, `postcode`, `source_country`, `telephone`, `notes`, `name`, `email`, `type`) VALUES
(124, 'delhi', 'noida', 'haldwani', 'india', '1234', 'india', 123456, 'hjhj', '', '', ''),
(125, 'delhi', 'haldeani', 'hjk', 'india', '1234', 'india', 12345, 'tyu', 'harish', 'harish@gmail.com', ''),
(126, 'delhi', 'haldeani', 'hjk', 'india', '1234', 'india', 12345, 'tyu', 'harish', 'harish@gmail.com', ''),
(127, 'delhi', 'haldeani', 'hjk', 'india', '1234', 'india', 12345, 'tyu', 'harish', 'harish@gmail.com', ''),
(128, 'delhi', 'noida', 'hld', 'india', '12345', 'uk', 12345, '', 'harish', 'harish@gmail.com', 'H'),
(129, 'delhi', 'noida', 'hld', 'india', '12345', 'uk', 12345, '', 'harish1', 'harish@gmail.com', 'H'),
(130, 'kjjh', 'kjkj', '', '', '65656', 'india', 4343, 'hjhj', '', '', ''),
(131, 'jhjh', '', '', 'khjh', '76767', 'ii', 6567, '', 'yty', 'harish@gmail.com', ''),
(132, 'jhjh', 'hjk', 'yutu', 'india', '65675', 'hjhkj', 6767, '', 'hjhjh', 'harish@gmail.com', 'B'),
(133, 'fdfsds', 'fdfs', 'refewrwerw', 'efwerw', '13213', 'efwerw', 1312312312, 'fdfdsfsdnm', 'dfsdfs', 'fdfds', ''),
(134, 'efsdefr', 'ffwerew', 'fdfds', 'dterter', '1312343', 'fdsfsdf', 21235545, '', 'sfsdf', 'ertertertert', ''),
(135, 'gdfsfd', 'gdfgdf', 'fdfds', 'ger', '3213123', 'dfsfs', 3131, 'fr', 'sdfds', 'dfsf', ''),
(136, 'ewrwer', 'grgdf', 'rter', 'rwerw', '443423`r', 'rerewdsf', 312312, '', 'fdfdsf', '', ''),
(137, 'mumbie', 'mumbie', 'hld', 'india', '12345', 'india', 56788, 'hi', '', '', ''),
(138, 'mumbie', 'mumbie', 'hld', 'india', '12345', 'india', 56788, 'hi', '', '', ''),
(139, 'mumbie', 'mumbie', 'hld', 'india', '12345', 'india', 56788, 'hi', '', '', ''),
(140, 'h', 'u', 'h', 'y', '1234', '2345', 12345, '34', '', '', ''),
(141, '', '', '', '', '2312312', '', 321312312, '', '', '', ''),
(142, '', '', '', '', '2312312', '', 321312312, '', '', '', ''),
(143, '', '', '', '', '2312312', '', 321312312, '', '', '', ''),
(144, '', '', '', '', '2312312', '', 321312312, '', '', '', ''),
(145, 'a', 'a', 'a', 'india', '12345', 'uk', 12345, 'hi', '', '', ''),
(146, 'a', 'b', 'h', 'india', '1234', 'uk', 1234, '345', 'harish', 'fgh', ''),
(147, 'hjh', 'kdjfkd', 'abc', 'india', '12345', 'uk', 123345, '', 'fgg', 'h@gmail.com', 'H'),
(148, 'jhsjd', 'kkd', 'dfdsf', 'ddf', '112', 'uk', 1234, '', 'nhjhdj', 'jhjhjh', 'H'),
(149, 'jdfhjdf', 'dhfjdf', 'dsgfdsg', 'india', '21321321', 'dfgdfsg', 4324, 'dfd', '', '', ''),
(150, 'dsfdf', 'dsfs', 'dsfsd', 'fdfsd', '45435', 'fsdfsdf', 45345, 'dfds', 'ueyrueyr', 'h@gmail.com', ''),
(151, 'rtret', 'retre', 'rtret', 'fdgfdg', '45435', 'i', 4545, '', 'rtret', 'h@gmail.com', 'H'),
(152, 'hjdh', 'dfdf', 'erterw', 'dfds', '4543', 'sdf', 455, 'dfsd', '', '', ''),
(153, 'sdf', 'dsfs', 'sdf', 'ewrte4', '34324', 'sdfdsf', 43543, 'dsfdsf', 'dsf', 'h@gmail.com', ''),
(154, 'fdg', 'dfg', 'dfg', 'fdgfg', '43645', 'fgfdg', 4654, '', 'fgfdg', 'h@gmail.com', 'H'),
(155, 'jhjfdf', 'sdfds', 'dfs', 'fdsf', '45656', 'fgfg', 4543, 'fdgfg', '', '', ''),
(156, 'dfgfdg', 'dfgfdg', 'fdgdfg', 'fdgfg', '45456546', 'fdsgfdg', 43543543, 'fdgfdg', 'fgfdg', 'h@gmail.com', ''),
(157, 'dfgfdg', 'dfgfdg', 'dfgdfg', 'tyty', '546546', 'fgfdg', 56546, '', 'fgfdg', 'h@gmail.com', 'H'),
(158, 'sdsd', 'sdsd', 'sdsd', 'dfds', '4545', 'dfsfdsf', 45435, 'dsfsdf', '', '', ''),
(159, 'sdfdsf', 'sdfsdf', 'sdfdsf', 'sdfdsf', '456546', 'fgfdg', 45646, 'fgfd', 'dsfsdf', 'h@gmail.com', ''),
(160, 'gfhgf', 'vbvcb', 'dfgfdg', 'india', '4545', 'fgfdg', 454354, '', 'ghgfh', 'h@gmail.com', 'H'),
(161, 'dsfsdf', 'dfdsf', 'dsfsd', 'df', '45435', 'dsfdsf', 435435, 'dfgdfsg', '', '', ''),
(162, 'dfgfdg', 'fdgfdg', 'fgfdg', 'fdgfdg', '45435', 'rtrtg', 45646, '346436', 'dfgdfs', 'h@gmail.com', ''),
(163, 'fdgfdg', 'egfdgfdg', 'fdgfdg', 'dfgfdg', '65654', 'ghgfh', 6565, '', 'fdgfg', 'h@gmail.com', 'H'),
(164, 'dfdf', 'dfdf', 'fdgsdf', 'dfdf', '4545', 'dfdf', 345435, 'dfdf', '', '', ''),
(165, 'dfdf', 'dfdf', 'dfdf', 'erer', '4545', 'dfdf', 4545, 'dfdf', 'dfdf', 'h@gmail.com', ''),
(166, 'fgfg', 'fgfg', 'fgfg', 'fgfg', '45456546', 'eer', 343434, '', 'fgfg', 'h@gmail.com', 'H'),
(167, 'sdfdsf', 'dsfdsf', 'dfsdf', 'sdfdsf435435', '45435', 'rtret', 543534, 'rtret', '', '', ''),
(168, 'tretret', 'retert', 'retret', 'fgfdg', '435435', 'fgfdg', 543534, 'fdgdfg', 'rtret', 'h@gmail.com', ''),
(169, 'tryrty', 'trytry', 'ytty', 'fgfg', '4545', 'dsfsdf', 543543, '', 'ytyty', 'h@gmail.com', 'H');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `date_of_booking` date NOT NULL,
  `destination` varchar(255) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `franchise_id` varchar(250) NOT NULL,
  `collected` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `date_of_booking`, `destination`, `reference_no`, `status`, `payment`, `franchise_id`, `collected`) VALUES
(1, '2013-05-16', 'canada', 'dfdfdf', '1', 't', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `description`, `image`) VALUES
(11, 'Parcelforce Global', '', 'force-logo.gif'),
(12, 'FedEx International', '<p>\r\n	Ideal for single &amp; multiple package shipments</p>\r\n', 'fedex.png');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`) VALUES
(1, 'Australia'),
(2, 'canada'),
(3, 'china'),
(4, 'india'),
(5, 'japan');

-- --------------------------------------------------------

--
-- Table structure for table `franchises`
--

CREATE TABLE IF NOT EXISTS `franchises` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approve` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `franchises`
--

INSERT INTO `franchises` (`id`, `name`, `address`, `country_name`, `username`, `password`, `approve`) VALUES
(1, 'abc', 'delhi', '1', 'abc', 'abc', 1),
(2, 'hjfhj', 'Noida sec-16', '2', 'harish', '1234', 1),
(3, 'hct', 'hld', '3', 'hct@gmail.com', '1234', 1),
(4, 'aaa', 'Delhi-ncr', '2', 'aaa@gmail.com', '1234', 0),
(5, 'test', 'delhi', '5', 'test@gmail.com', '1234', 1),
(6, 'tewari', 'Noida sec-37 near city center', '2', 'tewari@gmail.com', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lineups`
--

CREATE TABLE IF NOT EXISTS `lineups` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `collect_address` varchar(255) NOT NULL,
  `sender_address` varchar(255) NOT NULL,
  `reciver_address` varchar(255) NOT NULL,
  `franchise_id` int(255) NOT NULL,
  `status` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `type` int(255) NOT NULL,
  `date_of_booking` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `lineups`
--

INSERT INTO `lineups` (`id`, `collect_address`, `sender_address`, `reciver_address`, `franchise_id`, `status`, `user_id`, `type`, `date_of_booking`) VALUES
(82, '124', '127', '129', 0, 0, 0, 0, '2013-05-13 00:00:00'),
(83, '130', '131', '132', 0, 0, 0, 0, '2013-05-13 00:00:00'),
(84, '', '133', '', 0, 0, 0, 0, '0000-00-00 00:00:00'),
(85, '', '', '134', 0, 0, 0, 0, '0000-00-00 00:00:00'),
(86, '', '135', '', 0, 0, 0, 0, '0000-00-00 00:00:00'),
(87, '', '', '136', 0, 0, 0, 0, '0000-00-00 00:00:00'),
(88, '144', '', '', 0, 0, 0, 0, '2013-05-16 00:00:00'),
(89, '145', '', '148', 0, 0, 0, 0, '2013-05-16 00:00:00'),
(90, '145', '', '', 0, 0, 0, 0, '2013-05-17 00:00:00'),
(91, '149', '150', '151', 0, 0, 0, 0, '2013-05-15 00:00:00'),
(92, '152', '153', '154', 0, 0, 0, 0, '2013-05-15 00:00:00'),
(93, '155', '156', '157', 0, 0, 0, 0, '2013-05-15 00:00:00'),
(94, '158', '159', '160', 0, 0, 0, 0, '2013-05-15 00:00:00'),
(95, '161', '162', '163', 0, 0, 0, 0, '2013-05-15 00:00:00'),
(96, '164', '165', '166', 0, 0, 0, 0, '2013-05-15 00:00:00'),
(97, '167', '168', '169', 0, 0, 0, 0, '2013-05-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE IF NOT EXISTS `parcels` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `quantity` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `country_of_origin` varchar(255) NOT NULL,
  `total_value` varchar(255) NOT NULL,
  `compansion_cover` tinyint(10) NOT NULL,
  `sending_reason` varchar(255) NOT NULL,
  `lineup_id` varchar(255) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `quantity`, `item_description`, `weight`, `country_of_origin`, `total_value`, `compansion_cover`, `sending_reason`, `lineup_id`, `booking_id`) VALUES
(36, '3434', 'fgf', '4', '1', '4', 1, 'Gift', '97', '');

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE IF NOT EXISTS `quotations` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `company_id` varchar(255) NOT NULL,
  `min_weight` varchar(255) NOT NULL,
  `max_weight` varchar(255) NOT NULL,
  `min_dimension` varchar(255) NOT NULL,
  `max_dimension` varchar(255) NOT NULL,
  `drop_of_price` varchar(255) NOT NULL,
  `collect_price` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `source_country` int(255) NOT NULL,
  `destination_country` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `quotations`
--

INSERT INTO `quotations` (`id`, `company_id`, `min_weight`, `max_weight`, `min_dimension`, `max_dimension`, `drop_of_price`, `collect_price`, `service`, `source_country`, `destination_country`) VALUES
(33, '11', '1', '5', '1', '20', '56', '67', '1', 0, 1),
(36, '11', '1', '5', '20', '50', '50', '100', '0', 0, 2),
(37, '12', '1', '5', '20', '50', '300', '400', '0', 0, 2),
(38, '12', '1', '5', '20', '50', '60.70', '102.68', '1', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `firstname` varchar(225) DEFAULT NULL,
  `lastname` varchar(225) DEFAULT NULL,
  `designation` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`, `firstname`, `lastname`, `designation`, `email`) VALUES
(1, 'admin', 'd3b2e902df3354f3f9351b36030779dabcaf2baf', 'admin', '2013-04-02 22:53:31', '2013-04-02 22:53:31', NULL, NULL, NULL, NULL),
(13, 'admin', 'a331ab8322fef0f81652a55accafe98a1ada2977', 'admin', NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
