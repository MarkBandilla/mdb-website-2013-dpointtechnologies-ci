-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2013 at 07:56 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_dpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pid`, `pname`, `type`, `thumbnail`, `code`, `description`, `price`) VALUES
(1, 'DVR Kit', 'Packages', 'pp1', 'imgp1', 'Complete Analog Camera kit. Includes DVR and wiring.', 21599),
(4, 'A-444D', 'Indoor', 'p1', 'img1', 'The High Resolution Choice in a Metal Shell Perfect for outdoors and public areas.', 2799),
(5, 'A-471D', 'Indoor', 'p2', 'img2', 'The Affordable Dome Camera that offers High Resolution. Perfect for homes and small businesses.', 3599),
(6, 'A-171D-SE', 'Indoor', 'p3', 'img3', 'Top of the line Analog camera that has all the best Specs plus the durability to withstand vandals. Used in areas of high crime rate.', 6199),
(7, 'DP-793', 'Indoor', 'p4', 'img4', 'The top of the line Dome type IP Camera. Perfect for monitoring floor operations at 360 degrees view.', 18699),
(8, 'A-180B-SE', 'Outdoor', 'p5', 'img5', 'High Resolution, Weatherproof and High Night Sensitivity. Perfect for outdoors and public areas.', 4699),
(9, 'A-181B-SE', 'Outdoor', 'p6', 'img6', 'High Specs Choice with Varifocal lens. Capture larger areas when zoomed out. Perfect for large spaces.', 5799),
(10, 'A-841B', 'Indoor', 'p7', 'img7', 'All the Best Features with External Focusing Function. Can view wide angles. Perfect for offices and classrooms.', 5999),
(11, 'DP-744L', 'Outdoor', 'p8', 'img8', 'All in IP Camera. Wide View, Night Vision and Waterproof. Perfect for outdoor use like parking areas and street corners.', 11299),
(12, 'A-481D', 'Indoor', 'p9', 'img9', 'The Affordable Dome Camera that offers High Resolution and a discreet dome design. Perfect for restaurants, banks, casinos and hotels.', 3699),
(13, 'A-170D-SE', 'Outdoor', 'p10', 'img10', 'High Resolution and Weatherproof. Perfect for outdoors and public areas.', 4499),
(14, 'DP-783', 'Outdoor', 'p11', 'img11', 'The professional indoor IP Camera. Extra high resolution for extra large monitoring screens. Perfect for museums, banks and stores.', 18499),
(16, 'DP-i17', 'Indoor', 'p13', 'img13', 'This Little Wonder Camera can Pan and Tilt at your command. An affordable IP Camera for your home or business.', 10499),
(17, 'DP-713', 'Indoor', 'p14', 'img14', 'Indoor IP Camera with Wide View. Perfect for gyms, halls and stadiums.', 16799);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
