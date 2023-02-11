-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 08:09 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: dpoint
--

-- --------------------------------------------------------

--
-- Table structure for table tbl_client
--

CREATE TABLE tbl_client (
  cid int(11) NOT NULL,
  fullname varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  company varchar(255) NOT NULL,
  delivery varchar(255) NOT NULL,
  address varchar(255) NOT NULL,
  location varchar(255) NOT NULL,
  purchase_status varchar(255) NOT NULL DEFAULT 'false'
);

--
-- Dumping data for table tbl_client
--

INSERT INTO tbl_client (cid, fullname, email, company, delivery, address, location, purchase_status) VALUES
(1, 'Kimberly', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(2, 'Kim', 'kimmy_bigheart@yahoo.com', 'Microsoft', 'LBC', 'sfcsacf', 'Manila', 'false'),
(3, 'Test', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'sfcsacf', 'Manila', 'false'),
(4, 'Test', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'sfcsacf', 'Manila', 'false'),
(5, 'IT Solution', 'kimmy_bigheart@yahoo.com', 'Microsoft', 'LBC', 'dasd', 'Manila', 'false'),
(6, 'IT Solution', 'kimmy_bigheart@yahoo.com', 'Microsoft', 'LBC', 'dasd', 'Manila', 'false'),
(7, 'IT Solution', 'kimmy_bigheart@yahoo.com', 'Microsoft', 'LBC', 'dasd', 'Manila', 'false'),
(8, 'IT Solution', 'kimmy_bigheart@yahoo.com', 'Microsoft', 'LBC', 'dasd', 'Manila', 'false'),
(9, 'IT Solution', 'kimmy_bigheart@yahoo.com', 'Microsoft', 'LBC', 'dasd', 'Manila', 'false'),
(10, 'IT Solution', 'kimmy_bigheart@yahoo.com', 'Microsoft', 'LBC', 'dasd', 'Manila', 'false'),
(11, 'IT Solution', 'kimmy_bigheart@yahoo.com', 'Microsoft', 'LBC', 'dasd', 'Manila', 'false'),
(12, 'IT Solution', 'kimmy_bigheart@yahoo.com', 'Microsoft', 'LBC', 'dasd', 'Manila', 'false'),
(13, 'IT Solution', 'kimmy_bigheart@yahoo.com', 'Microsoft', 'LBC', 'dasd', 'Manila', 'false'),
(14, 'Kiimii Castle', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(15, 'Kiimii Castle', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(16, 'Nicole', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(17, 'Nicole', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(18, 'Nicole', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(19, 'Nicole', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(20, 'Nicole', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(21, 'Nicole', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(22, 'Nicole', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(23, 'Nicole', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(24, 'Nicole', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(25, 'Nicole', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(26, 'Nicole', 'castillo.kimberlykc@yahoo.com', 'Microsoft', 'LBC', 'Sta. Mesa', 'Manila', 'false'),
(27, 'Jen', 'castillo.kimberlykc@yahoo.com', 'Apple', 'LBC', 'dasd', 'Manila', 'false'),
(28, 'Jen', 'castillo.kimberlykc@yahoo.com', 'Apple', 'LBC', 'dasd', 'Manila', 'false'),
(29, 'Jen', 'castillo.kimberlykc@yahoo.com', 'Apple', 'LBC', 'dasd', 'Manila', 'false'),
(30, 'Jen', 'castillo.kimberlykc@yahoo.com', 'Apple', 'LBC', 'dasd', 'Manila', 'false'),
(31, 'Jen', 'castillo.kimberlykc@yahoo.com', 'Apple', 'LBC', 'dasd', 'Manila', 'false'),
(32, 'Mark', 'castillo.kimberlykc@yahoo.com', 'Apple', 'LBC', 'hfgjhfj', 'Manila', 'false'),
(33, 'Mark', 'castillo.kimberlykc@yahoo.com', 'Apple', 'LBC', 'hfgjhfj', 'Manila', 'false');

-- --------------------------------------------------------

--
-- Table structure for table tbl_gallery
--

CREATE TABLE tbl_gallery (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  image1 varchar(255) NOT NULL,
  image2 varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  type varchar(255) NOT NULL,
  Ctype varchar(255) NOT NULL,
  price int(11) NOT NULL,
  features text NOT NULL,
  stocks int(11) NOT NULL
);

--
-- Dumping data for table tbl_gallery
--

INSERT INTO tbl_gallery (id, name, image1, image2, description, type, Ctype, price, features, stocks) VALUES
(2, 'A-171D-SE', 'A-171D-SE_01', 'A-171D-SE_02', 'Top of the line Analog camera that has all the best Specs plus the durability to withstand vandals. Used in areas of high crime rate.', 'Indoor', 'Analog', 4399, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n        <td>Value</td>\r\n        <td>Description</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>TVL Analog</td>\r\n        <td>650 High Resolution</td>\r\n        <td><i>\"You get a very clear view\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Infrared Leds</td>\r\n        <td>36pcs. - High Sensitivity</td>\r\n        <td><i>\"You can view objects even at pitch dark for as far as 30 meters\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td colspan=\"2\">Weather proof</td>\r\n        <td><i>\"You can put this outside and exposed to the elements\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td colspan=\"2\">2.8mm SONY Effio VARIFOCAL lens</td>\r\n        <td><i>\"View coverage expands as you zoom out\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td colspan=\"2\">Vandal Proof</td>\r\n        <td><i>\"This is made of very durable materials that can withstand brute force\"</i></td>\r\n    </tr>\r\n</tbody></table>', 100),
(4, 'A-181B-SE', 'A-181B-SE_01', 'A-181B-SE_02', 'High Specs Choice with Varifocal lens. Capture larger areas when zoomed out. Perfect for large spaces.', 'Outdoor', 'Analog', 4099, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n        <td>Value</td>\r\n        <td>Description</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>TVL Analog</td>\r\n        <td>650 High Resolution</td>\r\n        <td><i>\"You get a very clear view\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Infrared Leds</td>\r\n        <td>42pcs. - High sensitivity</td>\r\n        <td><i>\"You can view objects even at pitch dark for as far as 30 meters\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td colspan=\"2\">50 m. Night Vision range</td>\r\n        <td><i>\"You can view objects even at pitch dark for as far as 50 meters\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td colspan=\"2\">Weather proof</td>\r\n        <td><i>\"You can put this outside and exposed to the elements\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td colspan=\"2\">4mm SONY Effio VARIFOCAL lens</td>\r\n        <td><i>\"You get a branded SONY lens. The best there is\"</i></td>\r\n    </tr>\r\n</tbody></table>', 100),
(7, 'A-471D', 'A-471D_01', 'A-471D_02', 'The Affordable Dome Camera that offers High Resolution. Perfect for homes and small businesses.', 'Indoor', 'Analog', 3099, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n        <td>Value</td>\r\n        <td>Description</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>TVL Analog</td>\r\n        <td>650 High Resolution</td>\r\n        <td><i>\"You get a very clear view\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Low light capability</td>\r\n        <td>0.5 lux</td>\r\n        <td><i>\"You can view at very low light availability\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td colspan=\"2\">3.6mm SONY color lens</td>\r\n        <td><i>\"You get a branded SONY lens. The best there is\"</i></td>\r\n    </tr>\r\n</tbody></table>', 100),
(8, 'A-481D', 'A-481D_01', 'A-481D_02', 'The Affordable Dome Camera that offers High Resolution and a discreet dome design. Perfect for restaurants, banks, casinos and hotels.', 'Indoor', 'Analog', 3199, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n        <td>Value</td>\r\n        <td>Description</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>TVL Analog</td>\r\n        <td>650 High Resolution</td>\r\n        <td><i>\"You get a very clear view\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td colspan=\"2\">Low light capability - 0.5 lux</td>\r\n        <td>You can view at very low light availability</td>\r\n    </tr>\r\n    <tr>\r\n        <td colspan=\"2\">3.6mm SONY color lens</td>\r\n        <td><i>\"You get a branded SONY lens. The best there is\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td colspan=\"2\">Covered Dome design</td>\r\n        <td><i>\"You get a discreet looking eye-in-the-sky\"</i></td>\r\n    </tr>\r\n</tbody></table>', 100),
(9, 'A-601B', 'A-601B_01', 'A-601B_02', 'Feature Winner with All High Specs. Waterproof too. Perfect for extreme outdoor conditions.', 'Outdoor', 'Analog', 4099, '', 100),
(10, 'A-841B', 'A-841B_01', 'A-841B_02', 'All the Best Features with External Focusing Function. Can view wide angles. Perfect for offices and classrooms.', 'Indoor', 'Analog', 4299, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n        <td>Value</td>\r\n        <td>Description</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>TVL Analog</td>\r\n        <td>650 High Resolution</td>\r\n        <td><i>\"You get a very clear view\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Infrared Leds</td>\r\n        <td>36pcs.</td>\r\n        <td><i>\"You can view objects even at pitch dark for as far as 30 meters\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td colspan=\"2\">Waterproof</td>\r\n        <td><i>\"You won\'t have to worry putting this outside, this is rain proof\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td colspan=\"2\">External Focusing Function</td>\r\n        <td><i>\"You can adjust focus manually at the camera base\"</i></td>\r\n    </tr>\r\n</tbody></table>', 100),
(13, 'DP-713', 'DP-713_01', 'DP-713_02', 'Indoor IP Camera with Wide View. Perfect for gyms, halls and stadiums.', 'Indoor', 'IP', 14399, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n        <td>Description</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>720P High Resolution IP Camera, HD</td>\r\n        <td><i>\"You get a very clear view in High Definition\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Wide Dynamic Range - wide view</td>\r\n        <td><i>\"You can view expansive areas with just one focus\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>4 mm SONY CCD lens</td>\r\n        <td><i>\"You get a branded SONY lens The best there is\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>WIFI capable</td>\r\n        <td><i>\"Video feed is transmitted via WIFI\"</i></td>\r\n    </tr>\r\n</tbody></table>', 100),
(14, 'DP-743', 'DP-743_01', 'DP-743_02', 'Top-of-the-line IP Camera with 2 Megapixels of Resolution. It does not get any clearer than this.', 'Indoor', 'IP', 17649, '', 100),
(15, 'DP-744L', 'DP-744L_01', 'DP-744L_02', 'All in IP Camera. Wide View, Night Vision and Waterproof. Perfect for outdoor use like parking areas and street corners.', 'Outdoor', 'IP', 9699, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n        <td>Description</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>720P High Resolution IP Camera, HD</td>\r\n        <td><i>\"You get a very clear view in High Definition\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Wide Dynamic Range - wide view</td>\r\n        <td><i>\"You can view expansive areas with just one focus\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>4 mm SONY CCD lens</td>\r\n        <td><i>\"You get a branded SONY lens. The best there is\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Night Vision 30 m</td>\r\n        <td><i>\"You can view objects even at pitch dark for as far as 30 meters\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Waterproof</td>\r\n        <td><i>\"You won\'t have to worry putting this outside, this is rain proof\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Power over ethernet capable</td>\r\n        <td><i>\"You just need one wire for both power and video\"</i></td>\r\n    </tr>\r\n    \r\n</tbody></table>', 100),
(16, 'DP-782', 'DP-782_01', 'DP-782_02', 'The professional outdoor IP Camera. Bright Light Compensation for glaring outdoor conditions. Feature-packed for all types of monitoring applications.', 'Outdoor', 'IP', 15849, '', 100),
(17, 'DP-783', 'DP-783_01', 'DP-783_02', 'The professional indoor IP Camera. Extra high resolution for extra large monitoring screens. Perfect for museums, banks and stores.', 'Outdoor', 'IP', 15849, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n        <td>Description</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>720P High Resolution IP Camera, HD</td>\r\n        <td><i>\"You get a very clear view in High Definition\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Wide Dynamic Range - wide view</td>\r\n        <td><i>\"You can view expansive areas with just one focus\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Night Vision 40 m</td>\r\n        <td><i>\"You can view objects even at pitch dark for as far as 40 meters\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>2.8 mm SONY CCD lens</td>\r\n        <td><i>\"You get a branded SONY lens The best there is\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>WIFI capable</td>\r\n        <td><i>\"Video feed is transmitted via WIFI\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Weather proof</td>\r\n        <td><i>\"You can put this outside and exposed to the elements\"</i></td>\r\n    </tr>\r\n</tbody></table>', 100),
(18, 'DP-784', 'DP-784_01', 'DP-784_02', 'The professional indoor IP Camera. Extra high resolution for extra large monitoring screens. Perfect for museums, banks and stores.', 'Indoor', 'IP', 12899, '', 100),
(19, 'DP-793', 'DP-793_01', 'DP-793_02', 'The top of the line Dome type IP Camera. Perfect for monitoring floor operations at 360 degrees view.', 'Indoor', 'IP', 16049, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n        <td>Description</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>720P High Resolution IP Camera</td>\r\n        <td><i>\"You get a very clear view\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Wide Dynamic Range - wide view</td>\r\n        <td><i>\"You can view expansive areas with just one focus\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>4 mm SONY CCD lens</td>\r\n        <td><i>\"You get a branded SONY lens. The best there is\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Night Vision 20 m</td>\r\n        <td><i>\"You can view objects even at pitch dark for as far as 20 meters\"</i></td>\r\n    </tr>\r\n</tbody></table>', 100),
(20, 'DP-i17', 'DP-i17_01', 'DP-i17_02', 'This Little Wonder Camera can Pan and Tilt at your command. An affordable IP Camera for your home or business.', 'Indoor', 'IP', 8999, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n        <td>Description</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>2 Megapixel High Resolution IP Camera</td>\r\n        <td><i>\"You get the highest view clarity\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>3.6mm SONY CCD lens</td>\r\n        <td><i>\"You get a branded SONY lens. The best there is\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Night Vision 10 m</td>\r\n        <td><i>\"You can view objects even at pitch dark for as far as 10 meters\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>WIFI capable</td>\r\n        <td><i>\"Video feed is transmitted via WIFI\"</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td>Pan and Tilt function</td>\r\n        <td><i>\"You can remotely control what the camera sees\"</i></td>\r\n    </tr>\r\n</tbody></table>', 100),
(22, 'DV-908F', 'DV-908F_01', 'DV-908F_02', '8Channel DVR Component', 'MainComponent', 'Component', 5149, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>Hi3515 Chip</td>\r\n    </tr>\r\n    <tr>\r\n        <td>2CH D1 + 6CH CIF Playback</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Motion Detection</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Backup: DVDRW</td>\r\n    </tr>\r\n    <tr>\r\n        <td>USB 2.0 &amp; Network</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Support up to 2TB SATA HDD</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Mobile Monitoring</td>\r\n    </tr>\r\n    <tr>\r\n        <td>1Ch Audio</td>\r\n    </tr>\r\n    <tr>\r\n        <td>PTZ:RS485</td>\r\n    </tr>\r\n</tbody></table>\r\n', 100),
(23, 'DV-916A', 'DV-916A_01', 'DV-916A_02', '16Channel DVR Component', 'MainComponent', 'Component', 8049, '', 100),
(24, 'DV-916C', 'DV-916C_01', 'DV-916C_02', '16Channel DVR Component', 'MainComponent', 'Component', 17999, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>Hi3515 Chip</td>\r\n    </tr>\r\n    <tr>\r\n        <td>16CH D1 Playback</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Motion Detection</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Backup: DVDRW</td>\r\n    </tr>\r\n    <tr>\r\n        <td>USB 2.0 &amp; Network</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Support up to 2TB SATA HDD</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Mobile Monitoring</td>\r\n    </tr>\r\n    <tr>\r\n        <td>16Ch Audio</td>\r\n    </tr>\r\n    <tr>\r\n        <td>8ch Alarm</td>\r\n    </tr>\r\n    <tr>\r\n        <td>PTZ:RS485</td>\r\n    </tr>\r\n    <tr>\r\n        <td>support USB WIFI &amp; 3G</td>\r\n    </tr>\r\n</tbody></table>', 100),
(25, 'IP-CAM-Set-01', 'IP-CAM-Set-01A', 'IP-CAM-Set-01B', 'Wide Dynamic Range IP Camera Package', 'Packages', 'Packages', 38999, '', 100),
(26, 'IP-CAM-Set-02', 'IP-CAM-Set-02A', 'IP-CAM-Set-02B', 'WDR and Pan Tilt IP Camera Package', 'Packages', 'Packages', 58899, '', 100),
(27, 'IP-CAM-Set-03', 'IP-CAM-Set-03A', 'IP-CAM-Set-03B', 'Wide Dynamic Range IP Camera Package', 'Packages', 'Packages', 57699, '', 100),
(28, 'IP-CAM-Set-04', 'IP-CAM-Set-04A', 'IP-CAM-Set-04B', '', 'Packages', 'Packages', 0, '', 100),
(29, 'IP-CAM-Set-05', 'IP-CAM-Set-05A', 'IP-CAM-Set-05B', '', 'Packages', 'Packages', 0, '', 100),
(30, 'NV-401', 'NV-N401_01', 'NV-N401_02', '4Channel NVR Component', 'MainComponent', 'Component', 16299, '', 100),
(36, 'POES-4', 'POES-4_01', 'POES-4_02', '5Port Switch / 4Port POE', 'MainComponent', 'Component', 7199, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>5 Port Switch / 4 Port PoE</td>\r\n    </tr>\r\n    <tr>\r\n        <td>10/100 mbps, 15.4 watts per PoE port</td>\r\n    </tr>\r\n    <tr>\r\n        <td>IEEE 502.3at, IEEEE 802.3af</td>\r\n    </tr>\r\n    <tr>\r\n        <td>LED Indicators: Link/Act, PoE Act. Status &amp; Unit power</td>\r\n    </tr>\r\n</tbody></table>', 100),
(37, 'POES-8', 'POES-8_01', 'POES-8_02', '8Port POE', 'MainComponent', 'Component', 11249, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>8 Port PoE</td>\r\n    </tr>\r\n    <tr>\r\n        <td>10/100 mbps</td>\r\n    </tr>\r\n    <tr>\r\n        <td>15.4 watts per PoE port</td>\r\n    </tr>\r\n    <tr>\r\n        <td>IEEE 502.3at, IEEEE 802.3af</td>\r\n    </tr>\r\n    <tr>\r\n        <td>LED Indicators: Link/Act</td>\r\n    </tr>\r\n    <tr>\r\n        <td>PoE Act. Status &amp; Unit power</td>\r\n    </tr>\r\n</tbody></table>', 100),
(39, 'SD-908A', 'SD-908A_01', 'SD-908A_02', '', 'MainComponent', 'Component', 5149, '', 100),
(40, '650-TVL-DVR-Kit', '650-TVL-DVR-KitA', '650-TVL-DVR-KitB', '4 pcs. A-23B Camera', 'AnalogKit', 'Analog', 15999, '<table>\r\n    <thead>\r\n        <tr><td>Specs</td>\r\n    </tr></thead>\r\n    <tbody><tr>\r\n        <td>4units 600TVL Sony CCD Camera</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Night Vision: 30 m. Infrared Range</td>\r\n    </tr>\r\n    <tr>\r\n        <td>1 unit Digital Video Recorder (DVR)</td>\r\n    </tr>\r\n</tbody></table>', 100);

-- --------------------------------------------------------

--
-- Table structure for table tbl_order
--

CREATE TABLE tbl_order (
  oid int(11) NOT NULL,
  pid int(11) NOT NULL,
  cid int(11) NOT NULL,
  quantity int(11) NOT NULL,
  cur_price int(11) NOT NULL,
  date date NOT NULL
);

--
-- Dumping data for table tbl_order
--

INSERT INTO tbl_order (oid, pid, cid, quantity, cur_price, date) VALUES
(1, 2, 5, 5, 4399, '0000-00-00'),
(2, 4, 5, 1, 4099, '0000-00-00'),
(3, 7, 5, 1, 3099, '0000-00-00'),
(4, 8, 5, 6, 3199, '0000-00-00'),
(5, 2, 5, 5, 4399, '0000-00-00'),
(6, 4, 5, 1, 4099, '0000-00-00'),
(7, 7, 5, 1, 3099, '0000-00-00'),
(8, 8, 5, 6, 3199, '0000-00-00'),
(9, 2, 12, 5, 4399, '0000-00-00'),
(10, 4, 12, 1, 4099, '0000-00-00'),
(11, 7, 12, 1, 3099, '0000-00-00'),
(12, 8, 12, 6, 3199, '0000-00-00'),
(13, 2, 13, 5, 4399, '0000-00-00'),
(14, 4, 13, 1, 4099, '0000-00-00'),
(15, 7, 13, 1, 3099, '0000-00-00'),
(16, 8, 13, 6, 3199, '0000-00-00'),
(17, 8, 14, 1, 3199, '0000-00-00'),
(18, 8, 15, 1, 3199, '0000-00-00'),
(19, 8, 16, 1, 3199, '0000-00-00'),
(20, 8, 17, 1, 3199, '0000-00-00'),
(21, 8, 18, 1, 3199, '0000-00-00'),
(22, 8, 19, 1, 3199, '0000-00-00'),
(23, 8, 20, 1, 3199, '0000-00-00'),
(24, 8, 21, 1, 3199, '2013-05-14'),
(25, 8, 22, 1, 3199, '2013-05-14'),
(26, 8, 23, 1, 3199, '2013-05-14'),
(27, 8, 24, 1, 3199, '2013-05-14'),
(28, 8, 25, 1, 3199, '2013-05-14'),
(29, 8, 26, 1, 3199, '2013-05-14'),
(30, 8, 27, 1, 3199, '2013-05-14'),
(31, 8, 28, 1, 3199, '2013-05-14'),
(32, 8, 29, 1, 3199, '2013-05-14'),
(33, 8, 30, 1, 3199, '2013-05-14'),
(34, 8, 31, 1, 3199, '2013-05-14'),
(35, 8, 32, 1, 3199, '2013-05-14'),
(36, 13, 32, 1, 14399, '2013-05-14'),
(37, 8, 33, 1, 3199, '2013-05-14'),
(38, 13, 33, 1, 14399, '2013-05-14');

-- --------------------------------------------------------

--
-- Table structure for table tbl_products
--

CREATE TABLE tbl_products (
  pid int(11) NOT NULL,
  pname varchar(255) NOT NULL,
  type varchar(255) NOT NULL,
  thumbnail varchar(255) NOT NULL,
  code varchar(100) NOT NULL,
  description text NOT NULL,
  price int(11) NOT NULL
);

--
-- Dumping data for table tbl_products
--

INSERT INTO tbl_products (pid, pname, type, thumbnail, code, description, price) VALUES
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
(17, 'DP-713', 'Indoor', 'p14', 'img14', 'Indoor IP Camera with Wide View. Perfect for gyms, halls and stadiums.', 16799),
(20, 'DV-904D 4CH DVR', 'MainComponent', 'mc3', 'mc3', '4Channel DVR Component', 5899),
(21, 'DV-908F 8CH DVR', 'MainComponent', 'mc4', 'mc4', '8Channel DVR Component', 5999),
(22, 'DV-916C 16CH DVR', 'MainComponent', 'mc5', 'mc5', '16Channel DVR Component', 20999),
(23, '4 CH. H.264 NVR', 'MainComponent', 'mc6', 'mc6', '4Channel NVR Component', 18999),
(24, 'POES-4', 'MainComponent', 'mc7', 'mc7', '5Port Switch / 4Port POE', 7199),
(25, 'POES-8', 'MainComponent', 'mc8', 'mc8', '8Port POE', 13099),
(26, 'DP-782', 'Outdoor', 'p15', 'img15', 'The professional outdoor IP Camera. Bright Light Compensation for glaring outdoor conditions. Feature-packed for all types of monitoring applications.', 14999),
(27, 'DP-784', 'Indoor', 'p16', 'img16', 'The professional indoor IP Camera. Extra high resolution for extra large monitoring screens. Perfect for museums, banks and stores.', 14999),
(28, 'DP-743', 'Indoor', 'p17', 'img17', 'Top-of-the-line IP Camera with 2 Megapixels of Resolution. It does not get any clearer than this.', 20599),
(29, 'A-441D', 'Outdoor', 'p18', 'img18', 'The Hi-Resolution Choice in a Metal Shell. Perfect for outdoors and public areas.', 3899),
(30, 'A-874B', 'Outdoor', 'p19', 'img19', 'The Affordable Waterproof Choice. Standard specs for all features. Perfect for outdoor use of homes and small businesses.', 3299),
(31, 'A-871B', 'Outdoor', 'p20', 'img20', 'Hi-Resolution and Waterproof. Focused Narrow View for face identification.', 4399),
(32, 'A-601B', 'Outdoor', 'p21', 'img21', 'Feature Winner with All High Specs. Waterproof too. Perfect for extreme outdoor conditions.', 5799);

-- --------------------------------------------------------

--
-- Table structure for table tb_emails
--

CREATE TABLE tb_emails (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  date date NOT NULL
);

--
-- Dumping data for table tb_emails
--

INSERT INTO tb_emails (id, name, email, date) VALUES
(1, 'Zy', 'santillan_z@yahoo.com', '0000-00-00'),
(2, 'Kiimii', 'kimmy_bigheart@yahoo.com', '0000-00-00'),
(3, 'Kim', 'castillo.kimberlykc@yahoo.com', '0000-00-00'),
(4, 'Kc', 'castillo.kimberlykc@yahoo.com', '0000-00-00'),
(5, 'Kim', 'castillo.kimberlykc@yahoo.com', '0000-00-00'),
(6, 'mark', 'mark@yahoo.com', '0000-00-00'),
(7, 'Kim', 'castillo.kimberlykc@yahoo.com', '0000-00-00'),
(8, 'Kem', 'kimmy_bigheart@yahoo.com', '2013-05-08'),
(9, 'Kim', 'castillo.kimberlykc@yahoo.com', '2013-05-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_client
--
ALTER TABLE tbl_client
  ADD PRIMARY KEY (cid);

--
-- Indexes for table tbl_gallery
--
ALTER TABLE tbl_gallery
  ADD PRIMARY KEY (id);

--
-- Indexes for table tbl_order
--
ALTER TABLE tbl_order
  ADD PRIMARY KEY (oid);

--
-- Indexes for table tbl_products
--
ALTER TABLE tbl_products
  ADD PRIMARY KEY (pid);

--
-- Indexes for table tb_emails
--
ALTER TABLE tb_emails
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_client
--
ALTER TABLE tbl_client
  MODIFY cid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table tbl_gallery
--
ALTER TABLE tbl_gallery
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table tbl_order
--
ALTER TABLE tbl_order
  MODIFY oid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table tbl_products
--
ALTER TABLE tbl_products
  MODIFY pid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table tb_emails
--
ALTER TABLE tb_emails
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
