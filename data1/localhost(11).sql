-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2017 at 09:06 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `housejoy`
--
CREATE DATABASE `housejoy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `housejoy`;

-- --------------------------------------------------------

--
-- Table structure for table `addcity`
--

CREATE TABLE IF NOT EXISTS `addcity` (
  `c_id` int(255) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `c_id` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `addcity`
--

INSERT INTO `addcity` (`c_id`, `city_name`) VALUES
(1, 'Phagwara'),
(2, 'ludhiana'),
(3, 'jalandhar'),
(4, 'Mahilpur'),
(5, 'hoshiarpur');

-- --------------------------------------------------------

--
-- Table structure for table `addservice`
--

CREATE TABLE IF NOT EXISTS `addservice` (
  `s_id` int(255) NOT NULL AUTO_INCREMENT,
  `s_cate` varchar(255) NOT NULL,
  `s_subcate` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_price` varchar(255) NOT NULL,
  `s_pic` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `s_id` (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=203 ;

--
-- Dumping data for table `addservice`
--

INSERT INTO `addservice` (`s_id`, `s_cate`, `s_subcate`, `s_name`, `s_price`, `s_pic`, `description`) VALUES
(1, '2', '7', 'Tab spindel  Repair', '400/-', 'images/hpp.jpg', 'easy service'),
(2, '2', '8', 'New washbasin fitting', '800/-', 'images/xcg.jpeg', 'hhhhhhh'),
(3, '2', '13', 'showers repair', '700/-', 'images/fff.jpg', 'edrft'),
(4, '2', '14', 'Water Filter Service', '500/-', 'images/drrfttd.jpg', 'trrerer'),
(5, '2', '15', 'New Sinkh fitting', '700/-', 'images/sinh.jpeg', 'heydg'),
(6, '4', '9', 'Table Fan Motor Repair', '500/-', 'images/0.jpg', 'eduujjrj'),
(7, '4', '10', 'New Electrical Switch Fitting', '100/-  Per sheet', 'images/new.jpg', 'df'),
(8, '4', '12', 'New Invertor Fitting', '1000/-', 'images/inn.jpg', 'gfgfgf'),
(9, '4', '11', 'New house electrical Wiring', '1700/- Per Wiring Role', 'images/dgp.jpg', 'uu'),
(10, '3', '3', 'Change CPU power supply', '1500/-', 'images/power.jpg', 'wded'),
(11, '3', '4', 'window7 installation', '500/-', 'images/lap.jpg', 'jhujh'),
(12, '3', '5', 'New Touch', '1200/-', 'images/ft.jpg', 'rer'),
(13, '3', '6', 'touch problem', '1000/-', 'images/hello.jpg', 'ghhnjmk'),
(14, '5', '18', 'Window AC Service', '1400/-', 'images/wind.jpg', 'qwe'),
(15, '5', '19', '6-KG Washing Machine Motor Repair', '3000/-', 'images/gfdgfg.png', 'qwe'),
(16, '5', '20', 'Heating Problem', '700/-', 'images/heat.jpg', 'cfgh'),
(17, '5', '21', 'Screen Problem', '500/-', 'images/konka.jpg', 'rfrf'),
(18, '5', '24', 'Motor Repair', '3000/-', 'images/refmo.jpg', 'xcfn'),
(19, '5', '22', 'voice Problem', '800/-', 'images/oicelcd.jpg', 'h'),
(20, '5', '23', 'Double Screen Problem', '1300/-', 'images/LEDscreen.jpg', 'rfhrg'),
(21, '1', '2', 'facial', '300/-', 'images/facial.jpg', 'good '),
(22, '1', '2', 'garnier facial', '1000/-', 'images/f.jpg', ' jk,ndf'),
(23, '1', '16', 'garniar blech', '400/-', 'images/leech.jpg', 'jhjkhdkjsnd'),
(24, '1', '1', 'Threading style 1', '120/-', 'images/thred.jpg', 'threading'),
(25, '1', '1', 'Threading style 2', '150/-', 'images/threeeeeeed555.jpg', 'wjnwjnj'),
(26, '1', '1', 'Threading style 3', '170/-', 'images/threddd22.jpg', 'goooog'),
(27, '1', '1', 'Threading style 4', '170/-', 'images/th.jpg', 'eye'),
(28, '8', '33', 'Car Service', '4000/-', 'images/altoser.jpg', 'very fast '),
(29, '8', '33', ' wheel alignment', '2500/-', 'images/wheel.jpg', 'very fast '),
(30, '8', '33', 'Ac filter service', '1200/-', 'images/ac.jpg', 'very fast and easy'),
(31, '8', '33', 'Seat Cover', '3000/-', 'images/seat.jpg', 'easy'),
(32, '8', '34', 'car service', '4000/-', 'images/hundai.jpg', 'good'),
(33, '8', '34', 'wheel alignment', '1500/-', 'images/humdaiwheel.jpg', 'easy'),
(34, '8', '34', 'Ac filter service', '1500/-', 'images/hundaiac.jpg', 'easyused'),
(35, '8', '34', 'Break Repair', '1500/-', 'images/hundaibreak.jpg', 'easyused'),
(36, '8', '35', 'car service', '2500/-', 'images/datsunserive.jpg', 'fast'),
(37, '8', '35', 'wheel alignment', '1500/-', 'images/dustanwheel.jpg', 'fast'),
(38, '8', '35', 'Break Repair', '1500/-', 'images/dustanbreak.jpg', 'fast'),
(39, '8', '36', 'car service', '25000/-', 'images/merceedservie.jpg', 'fastest'),
(40, '8', '36', 'wheel alignment', '5000/-', 'images/mercedwheel.jpg', 'fastest'),
(41, '8', '36', 'Radiator Repair', '6000/-', 'images/merceedradi.jpg', 'goodfast'),
(42, '8', '37', 'Bike service', '1000/-', 'images/heroser.jpg', 'high'),
(43, '8', '37', 'Bike chainset repair', '2500/-', 'images/heochain.jpg', 'good'),
(44, '8', '37', 'Engin Repair', '2500/-', 'images/hey.jpg', 'good'),
(45, '8', '37', 'Change bike battery', '2500/-', 'images/herochangeat.jpg', 'good'),
(46, '8', '38', 'Bike service', '1200/-', 'images/hondaser.jpg', 'good'),
(47, '8', '38', 'Bike chainset repair', '2500/-', 'images/hondachainset.jpg', 'high'),
(48, '8', '38', 'Engin repair', '5000/-', 'images/hondaengin.jpg', 'highspeed'),
(49, '8', '39', 'Bike service', '1200/-', 'images/tsser.jpg', 'h'),
(50, '8', '39', 'Bike meter repair', '700/-', 'images/tsmeter.jpg', 'hnk'),
(51, '8', '39', 'Bike self repair', '2500/-', 'images/tsself.jpg', 'hnksrw'),
(52, '8', '40', 'Bike service', '1200/-', 'images/enfiledser.jpg', 'hnksrwkk'),
(53, '8', '40', 'Bike chainset repair', '1500/-', 'images/enfiledchain.jpg', 'ooooohgh'),
(54, '8', '40', 'Bike engin repair', '4000/-', 'images/enfildengin.jpg', 'goknkn'),
(55, '1', '1', 'Threading style 5', '250/-', 'images/the.jpg', 'good'),
(56, '1', '1', 'Threading style 6', '200/-', 'images/gfgftttdtd.jpg', 'nice\r\n'),
(57, '2', '13', 'Shower Repair', '700/-', 'images/sha1.jpg', 'nice\r\n'),
(58, '2', '13', 'Shower Repair', '1400/-', 'images/sha2.jpg', 'good\r\n'),
(59, '2', '13', 'Shower Repair', '1000/-', 'images/sha3.jpg', 'good\r\n'),
(60, '2', '13', 'Shower Repair', '700/-', 'images/sha4.jpg', 'good\r\n'),
(61, '2', '13', 'Shower Repair', '1300/-', 'images/sha5.jpg', 'goodgjhj\r\n'),
(62, '2', '7', 'New Tab & Repairing', '700/-', 'images/taq1.jpg', 'goodgjhj\r\nyuu'),
(63, '2', '7', 'New Tab & Repairing', '2000/-', 'images/taq2.jpg', 'goodgjhj\r\nyuu'),
(64, '2', '7', 'New Tab & Repairing', '2000/-', 'images/taq3.jpg', 'goodgjhj\r\nyuu'),
(65, '2', '7', 'New Tab & Repairing', '700/-', 'images/taq4.jpg', 'goodgjhj\r\nyuu'),
(66, '2', '7', 'New Tab & Repairing', '1000/-', 'images/ta5.jpg', 'goodgjhj\r\nyuuokpplplplpl'),
(67, '2', '8', 'New Wash Basin & Repairing', '2000/-', 'images/wash1.jpg', 'good'),
(68, '2', '8', 'New Wash Basin & Repairing', '2500/-', 'images/wash2.jpg', 'goodquality'),
(69, '2', '8', 'New Wash Basin & Repairing', '1700/-', 'images/wash3.jpg', 'goodquality'),
(70, '2', '8', 'New Wash Basin & Repairing', '1200/-', 'images/wash4.jpg', 'goodquality'),
(71, '2', '8', 'New Wash Basin & Repairing', '5000/-', 'images/wash5.jpg', 'goodquality'),
(72, '2', '8', 'New Wash Basin & Repairing', '3000/-', 'images/wash6.jpg', 'goodquality'),
(73, '2', '8', 'New Wash Basin & Repairing', '4000/-', 'images/wash7.jpg', 'goodquality'),
(74, '2', '8', 'New Wash Basin & Repairing', '1200/-', 'images/wash0.jpg', 'goodquality'),
(75, '2', '15', 'New sink & Repairing', '3000/-', 'images/sink1.jpg', 'goodquality'),
(76, '2', '15', 'New sink & Repairing', '5000/-', 'images/sink2.jpg', 'goodquality'),
(77, '2', '15', 'New sink & Repairing', '3500/-', 'images/sink3.jpg', 'goodquality'),
(78, '2', '15', 'New sink & Repairing', '4000/-', 'images/sink4.jpg', 'goodquality'),
(79, '2', '15', 'New sink & Repairing', '4000/-', 'images/sink5.jpg', 'goodquality'),
(80, '2', '14', 'New water filter& Repairing', '3000/-', 'images/water1.jpg', 'goodquality'),
(81, '2', '14', 'New water filter& Repairing', '4500/-', 'images/water2.jpg', 'goodquality'),
(82, '2', '14', 'New water filter& Repairing', '5000/-', 'images/water3.jpg', 'goodquality'),
(83, '2', '14', 'New water filter& Repairing', '7000/-', 'images/water4.jpg', 'goodquality'),
(84, '2', '14', 'New water filter& Repairing', '7000/-', 'images/water5.jpg', 'goodquality'),
(85, '3', '3', 'Motherboard Repairing', '4000/-', 'images/desk1.jpg', 'goodquality'),
(86, '3', '3', 'window7 installation', '500/-', 'images/desk2.jpg', 'go'),
(87, '3', '3', ' CPU  RAM problem', '1200/-', 'images/desk3.jpg', 'godfff'),
(88, '3', '3', ' CPU wire connector problem', '400/-', 'images/desk4.jpg', 'godfff'),
(89, '3', '3', ' CPU harddisk problem', '3500/-', 'images/desk5.jpg', 'godfffjiii'),
(90, '3', '4', ' key borad problem', '700/-', 'images/keyprolem.jpg', 'fast'),
(91, '3', '4', ' Motherborad problem', '5000/-', 'images/motherorad.jpg', 'fast'),
(92, '3', '4', 'Processor Heating problem', '4000/-', 'images/processor.jpg', 'fast'),
(93, '3', '4', 'laptop Harddisk problem', '7000/-', 'images/hard.jpg', 'fast'),
(94, '3', '4', 'laptop lamination', '700/-', 'images/lamination.jpg', 'fast'),
(95, '3', '5', 'ipad battery problem', '2000/-', 'images/attery.jpg', 'fastututu'),
(96, '3', '5', 'ipad touch problem', '2500/-', 'images/touch.jpg', 'fastututu'),
(97, '3', '5', 'ipad borad problem', '3500/-', 'images/orad.jpg', 'fastututu'),
(98, '3', '5', 'ipad jack problem', '500/-', 'images/jack.jpg', 'fastututu'),
(99, '3', '5', 'ipad damage problem', '7000/-', 'images/damage.jpg', 'fastututu'),
(100, '1', '2', 'Gold facial', '1000/-', 'images/f1.jpg', 'qsquyq'),
(101, '1', '2', 'simple facial', '400/-', 'images/f3.jpg', 'qsquyq'),
(102, '1', '2', 'simple facial', '700/-', 'images/f5.jpg', 'qsquyq'),
(103, '1', '2', ' facial', '700/-', 'images/fa7.jpg', 'hghg'),
(104, '1', '16', 'Bleach', '700/-', 'images/la1.jpg', 'ajhjajshj'),
(105, '1', '16', 'Bleach', '1000/-', 'images/la3.jpg', 'ajhjajshj'),
(106, '1', '16', 'Bleach', '700/-', 'images/la2.jpg', 'ajhjajshj'),
(107, '1', '16', 'Bleach', '900/-', 'images/la7.jpg', 'ajhjajshj'),
(108, '1', '16', 'Bleach', '500/-', 'images/la5.jpg', 'hffhfh'),
(109, '1', '17', 'Pedicure Cleaning', '700/-', 'images/ped1.jpg', 'hffhfh'),
(110, '1', '17', 'Pedicure Designimg', '900/-', 'images/ped2.jpg', 'hffhfh'),
(111, '1', '17', 'Pedicure clean', '500/-', 'images/ped3.jpg', 'esay'),
(112, '1', '17', 'Pedicure nails', '500/-', 'images/ped4.jpg', 'esay'),
(113, '1', '17', 'Pedicure hand nails designing', '900/-', 'images/ped5.jpg', 'esay to used'),
(114, '1', '17', 'Nail Cleain', '400/-', 'images/ped7.jpg', 'esay used\r\n'),
(115, '1', '41', 'Hand mehndi style', '700/-', 'images/me5.jpg', 'uyuyu'),
(116, '1', '41', 'Hand back side mehndi style', '800/-', 'images/me0.jpg', 'uyuyu'),
(117, '1', '41', ' Foot mehndi style', '800/-', 'images/me6.jpg', 'uyuyu'),
(118, '1', '41', ' back side Arm mehndi style', '800/-', 'images/me3.jpg', 'uyuyu'),
(119, '1', '41', 'Hand mehndi style2', '800/-', 'images/me4.jpg', 'uyuyu'),
(120, '1', '41', 'full Hand and arm mehndi style', '1500/-', 'images/me7.jpg', 'uyuyu'),
(121, '1', '42', 'Bridal Makeup', '10000/-', 'images/m2.jpg', 'good quality'),
(122, '1', '42', 'Dulhan Fully Makeup', '17000/-', 'images/m0.jpg', 'good quality Makeup'),
(123, '1', '42', 'Eye Makeup', '1700/-', 'images/m3.jpg', 'good quality Makeup'),
(124, '1', '42', 'Eye Color Makeup', '1500/-', 'images/m7.jpg', 'good quality EyeMakeup'),
(125, '1', '42', 'Bridal  Makeup 2', '15000/-', 'images/m1.jpg', 'good quality Makeup'),
(126, '1', '42', 'Bridal  Makeup 3', '20000/-', 'images/moo.jpg', 'good quality Makeup'),
(127, '4', '9', 'New Table Fan  ', '1500/-', 'images/newsasd.jpg', 'ttrt'),
(128, '4', '9', 'Repair aggjoust  fan', '700/-', 'images/agout.jpg', 'ttrt'),
(129, '4', '9', 'Repair Standing  fan', '1200/-', 'images/standing.jpg', 'good'),
(130, '6', '28', 'cleaning sofa 5 seatter', '1000/-', 'images/sofa5.jpg', 'veryfast'),
(131, '6', '28', 'sofa 2 seatter repair', '2000/-', 'images/sofa1.jpg', 'veryfast'),
(132, '6', '28', 'sofa 3 seatter repair', '3000/-', 'images/sofa2.jpg', 'good'),
(133, '6', '28', 'sofa 3 seatter Arm repair', '1500/-', 'images/sofa3.jpg', 'good'),
(134, '6', '28', 'sofa  stiching repair', '1500/-', 'images/sofa4.jpg', 'good'),
(135, '6', '28', 'sofa  sapanj repair', '3000/-', 'images/sofa7.jpg', 'good fastest'),
(136, '6', '26', 'small table repair', '500/-', 'images/tal2.jpg', 'good fastest'),
(137, '6', '26', 'small table2 repair', '500/-', 'images/tal1.jpg', 'good fastest'),
(138, '6', '26', 'small table foot repair', '500/-', 'images/tal3.jpg', 'jhfj'),
(139, '6', '26', 'fancy table repair', '1000/-', 'images/tal4.jpg', 'jhfj'),
(140, '6', '26', 'computer table repair', '500/-', 'images/sunny.jpg', 'jhfj'),
(141, '6', '26', 'work table repair', '1400/-', 'images/worktale.jpg', 'jhfj'),
(142, '6', '29', 'Door lock problem', '700/-', 'images/door11.jpg', 'servicesfast'),
(143, '6', '29', 'fit new door lock ', '1100/-', 'images/door22.jpg', 'servicesfast'),
(144, '6', '29', 'fit new door  ', '25000/-', 'images/door33.jpg', 'servicesfastest'),
(145, '6', '29', 'Double door  repair', '2000/-', 'images/door44.jpg', 'servicesfastest'),
(146, '6', '29', 'new door fitting', '15000/-', 'images/door55.jpg', 'servicesfastest'),
(147, '6', '29', 'door closer fitting', '1000/-', 'images/door77.jpg', 'servicesfastest'),
(148, '6', '27', 'Chair seat repair', '1000/-', 'images/chair11.jpg', 'services    fastest'),
(149, '6', '27', 'fancy Chair  repair', '2000/-', 'images/chair22.jpg', 'services    fastest'),
(150, '6', '27', ' Chair  repair', '1400/-', 'images/chair33.jpg', 'services    fastest'),
(151, '6', '27', 'fancy Chair seat repair', '1200/-', 'images/chair44.jpg', 'services    fastest'),
(152, '6', '27', 'fancy Chair coloring', '1300/-', 'images/chair55.jpg', 'services    fastest'),
(153, '4', '11', 'Main switch wiring', '1000/-', 'images/wire22.jpg', 'easy'),
(154, '4', '11', 'Room plugging wiring', '500/-', 'images/wie11.jpg', 'sdfghj'),
(155, '4', '11', 'house Point wiring', '700/-', 'images/w111.jpg', 'easy and fast service'),
(156, '4', '11', 'House Electrical Meter wiring', '2000/-', 'images/wire222.jpg', 'easy and fast service'),
(157, '4', '11', 'switch socket wiring', '700/-', 'images/swi77.jpg', 'fast'),
(158, '4', '10', 'Main switch problem', '700/-', 'images/mainsw.jpg', 'easy repair and change'),
(159, '4', '10', 'New Electrical Switch Fitting', '500/-', 'images/desftgty.jpg', 'easy fitt '),
(160, '4', '10', 'New Electrical Fancy Switch Fitting', '1000/-', 'images/fancysw.jpg', 'easy fitt '),
(161, '4', '10', 'Electrical Switch with fan regulator Fitting', '1000/-', 'images/dcfghjdf.jpg', 'easy fitt '),
(162, '4', '10', 'Electrical new Doorbell Switch Fitting', '500/-', 'images/doorweell.jpg', 'easy fitt '),
(163, '4', '9', 'Electrical collerMotor Bush Repairing', '500/-', 'images/coll11.jpg', 'easy fitt '),
(164, '4', '9', 'Electrical sealling fan Repairing', '500/-', 'images/seeling.jpg', 'fast repair'),
(165, '6', '27', 'park chair repair', '500/-', 'images/pareeedeed.jpg', 'fast service'),
(166, '6', '30', 'New Kichen rack fitting', '75000/-', 'images/kit1.jpg', 'fast service'),
(167, '6', '30', 'New Kichen fancy rack fitting', '80,000/-', 'images/kit4.jpg', 'fast service'),
(168, '6', '30', 'New Kichen simple rack fitting', '40,000', 'images/kit2.jpg', 'fast service'),
(169, '6', '30', 'New Kichen white rack fitting', '80,000/-', 'images/kit3.jpg', 'fast service'),
(170, '6', '30', 'New Kichen rack fitting', '50,000/-', 'images/kit5.jpg', 'fast service'),
(171, '6', '30', 'New Kichen rack HI-FI fitting', '1Lakh/-', 'images/kit7.jpg', 'fast service'),
(172, '6', '25', 'Box bed rack repair', '600/-', 'images/ox1.jpg', 'agfah'),
(173, '7', '31', 'Dry service ', '1300/-', 'images/dr11.jpg', 'agfah'),
(174, '7', '31', 'Dry service ', '1500/-', 'images/dry22.jpg', 'agfah'),
(175, '7', '31', 'window air condition Dry service ', '2000/-', 'images/drywi.jpg', 'agfah'),
(176, '7', '31', ' air condition out airfan Dry service', '1000/-', 'images/fandry.jpg', 'aygy'),
(177, '7', '31', 'small air condition Dry service', '700/-', 'images/smalllac.jpg', 'aygy'),
(178, '7', '31', 'small air condition motor Dry service', '800/-', 'images/aaaaaaaaaaddhfi.jpg', 'aygy'),
(179, '9', '43', 'wall flower designing painting', '7000/- per room', 'images/rooom11.jpg', 'easy to used'),
(180, '9', '43', 'check box painting', '10000/- per room', 'images/rooom0.jpg', 'hcg'),
(181, '9', '43', 'wall simple design painting', '4500/- per room', 'images/rooom3.jpg', 'ga'),
(182, '9', '43', 'half -half wall simple  painting', '5500/- per room', 'images/rooom5.jpg', 'good design'),
(183, '9', '43', 'sinry type wall painting', '11000/- per room', 'images/rooom7.jpg', 'easy and beautiful'),
(184, '9', '43', 'light bed room painting', '6000/- per room', 'images/rooom4.jpg', 'hdh'),
(185, '9', '44', 'flower wall kichen  painting ', '15000/-  per kichen', 'images/kic75.jpg', 'hdhgd'),
(186, '9', '44', 'simple kichen painting with rack', '1800/- per kichen', 'images/kic12.jpg', 'good service'),
(187, '9', '44', 'kichen full painting with rack', '14000/- per kichen', 'images/kic11.jpg', 'goooo'),
(188, '9', '44', ' Kichen painting with big rack ', '20000/-', 'images/kic14.jpg', 'gug'),
(189, '9', '44', 'Kichen light painting ', '6000/- per kichen', 'images/kic15.jpg', 'sdjd'),
(190, '9', '44', 'Kichen light design painting', '8000/- per kichen', 'images/lig5555555.jpg', 'xjxk'),
(191, '9', '45', 'flower sinery designing  painting', '10000/- per room', 'images/dra00.jpg', 'yg'),
(192, '9', '45', 'flower designing  painting', '7000/- per room', 'images/dra7.jpg', 'fdcgh'),
(193, '9', '45', 'light dwawing room painting', '7000/- per room', 'images/dra44.jpg', 'jhj'),
(194, '9', '45', 'wall check box  painting', '9000/- per room', 'images/dra55.jpg', 'gopo'),
(195, '9', '45', 'LCD type sinery painting', '10000/- per room', 'images/dwa11.jpg', 'g'),
(196, '9', '45', 'front wall center painting', '8000/- per room', 'images/dwa12.jpg', 'ygs'),
(197, '9', '46', 'Dubble wall Lobbby painting ', '20000/- per Lobby and according to area', 'images/ly11.jpg', 'sik'),
(198, '9', '46', 'fancy lobby wall painting ', '10000/- per wall', 'images/ly22.jpg', 'sjs'),
(199, '9', '46', 'simple chocolate painting full lobby', '14000/- per lobby', 'images/ly33.jpg', 'sijhs'),
(200, '9', '46', ' lobby wall  border painting', '20000/- per Lobby and according to area', 'images/ly77.jpg', 'uy'),
(201, '9', '46', 'simple  painting full lobby', '1500/- per lobby', 'images/ly44.jpg', 'shj'),
(202, '9', '46', 'fancy lobby wall sinery painting', '17000/- per wall', 'images/faafacfCFACAFACGA.jpg', 'xcj');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cancelorder`
--

CREATE TABLE IF NOT EXISTS `cancelorder` (
  `c_id` int(255) NOT NULL AUTO_INCREMENT,
  `o_id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reasion` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `c_id` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cancelorder`
--

INSERT INTO `cancelorder` (`c_id`, `o_id`, `email`, `reasion`, `ip`, `date`) VALUES
(1, 4, 'jpreet71@yahoo.com', 'Wrong Product Order', '127.0.0.1', '03/05/17'),
(2, 4, 'jpreet71@yahoo.com', 'Wrong Product Order', '127.0.0.1', '03/05/17'),
(3, 5, 'jpreet71@yahoo.com', 'Address/Phone no./Quantity is incorrect', '127.0.0.1', '03/05/17'),
(4, 6, 'jpreet71@yahoo.com', 'Other', '127.0.0.1', '03/05/17'),
(5, 7, 'jpreet71@yahoo.com', 'Wrong Product Order', '127.0.0.1', '03/05/17'),
(6, 19, 'jpreet71@yahoo.com', 'Other', '127.0.0.1', '03/05/17'),
(7, 10, 'jpreet71@yahoo.com', 'Wrong Product Order', '127.0.0.1', '04/05/17'),
(8, 11, 'jpreet71@yahoo.com', 'Unsure About Product Quality', '127.0.0.1', '04/05/17'),
(9, 13, 'jpreet71@yahoo.com', 'Wrong Product Order', '127.0.0.1', '07/05/17'),
(10, 2, 'jpreet71@yahoo.com', 'Wrong Product Order', '127.0.0.1', '08/05/17'),
(11, 3, 'jpreet71@yahoo.com', 'Wrong Product Order', '127.0.0.1', '08/05/17');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(255) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `c_id` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `pic`) VALUES
(1, 'Beauty', 'images/dftfglopu.jpg'),
(2, 'Plumbing', 'images/aslgf.jpg'),
(3, 'Computer Repair', 'images/dilji.jpg'),
(4, 'Electrician', 'images/dow.jpg'),
(5, 'Appliance Repair', 'images/hhhhhhhhhh.jpg'),
(6, 'Carpentry', 'images/carpentry-main.jpg'),
(7, 'Air condition ', 'images/dfghjcd.jpg'),
(8, 'Car And Bike', 'images/joint.jpg'),
(9, 'House Painting', 'images/poo1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `c_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `c_id` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`c_id`, `name`, `email`, `phone`, `address`, `ip`, `date`) VALUES
(1, 'sukhi', 'sukhi@gmail.com', '7435534575545', 'noooootttttttttt', '127.0.0.1', '05/05/17'),
(2, 'jaspreet', 'jpreet71@yahoo.com', '772552522', 'hello', '127.0.0.1', '05/05/17');

-- --------------------------------------------------------

--
-- Table structure for table `forget`
--

CREATE TABLE IF NOT EXISTS `forget` (
  `f_id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `conform_password` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`f_id`),
  UNIQUE KEY `f_id` (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `forget`
--

INSERT INTO `forget` (`f_id`, `email`, `password`, `conform_password`, `ip`, `date`) VALUES
(1, 'jpreet71@yahoo.com', 'jass', 'jass', '127.0.0.1', '08/05/17'),
(2, 'jpreet71@yahoo.com', 'jass1', 'jass', '127.0.0.1', '08/05/17'),
(3, '', '', '', '127.0.0.1', '08/05/17'),
(4, 'jpreet71@yahoo.com', '123', '33333', '127.0.0.1', '08/05/17'),
(5, 'jpreet71@yahoo.com', 'ja', 'aj', '127.0.0.1', '08/05/17'),
(6, '', '', '', '127.0.0.1', '08/05/17'),
(7, 'jpreet71@yahoo.com', 'jass', 'aaa', '127.0.0.1', '08/05/17'),
(8, '', '', '', '127.0.0.1', '08/05/17'),
(9, 'jpreet71@yahoo.com', 'asss', 'saaa', '127.0.0.1', '08/05/17'),
(10, '', '', '', '127.0.0.1', '08/05/17'),
(11, 'jpreet71@yahoo.com', '122', '222', '127.0.0.1', '08/05/17'),
(12, 'jpreet71@yahoo.com', 'a', 'c', '127.0.0.1', '08/05/17'),
(13, 'jpreet71@yahoo.com', 'a', 'a', '127.0.0.1', '08/05/17'),
(14, 'jpreet71@yahoo.com', 'hhhh', 'hhhh', '127.0.0.1', '08/05/17'),
(15, 'jpreet71@yahoo.com', 'hhhh', 'hhhh', '127.0.0.1', '08/05/17'),
(16, 'jpreet71@yahoo.com', 'jassss', 'jassss', '127.0.0.1', '08/05/17');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `password`) VALUES
('manager', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `oid` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `street_no` varchar(255) NOT NULL,
  `pin_code` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `servicesid` varchar(255) NOT NULL,
  `pay` varchar(255) NOT NULL,
  `vendor_proposal` varchar(255) NOT NULL,
  `v_email` varchar(255) NOT NULL,
  `v_profession` varchar(255) NOT NULL,
  `v_fee` varchar(255) NOT NULL,
  `working_per` varchar(255) NOT NULL,
  PRIMARY KEY (`oid`),
  UNIQUE KEY `oid` (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`oid`, `name`, `email`, `location`, `town`, `street_no`, `pin_code`, `address`, `status`, `price`, `servicesid`, `pay`, `vendor_proposal`, `v_email`, `v_profession`, `v_fee`, `working_per`) VALUES
(1, 'jaspreet', 'jpreet71@yahoo.com', 'Phagwara', 'satnampura', '5no.', 123234, 'qwer', 'approved', '1500', '0,10', 'Cash On Delivery', '1', 'dilpreet@yahoo.com', 'Electrician', '4000', 'Within One Day'),
(2, 'jaspreet', 'jpreet71@yahoo.com', 'Phagwara', 'satnampura', '5no.', 123432, 'fgrtrtrf', 'cancel by user', '', '', '', '', '', '', '', ''),
(3, 'jaspreet', 'jpreet71@yahoo.com', 'Phagwara', 'satnampura', '5no.', 123432, 'weidw', 'cancel by user', '3800', '0,10,1', 'Cash On Delivery', '', '', '', '', ''),
(4, 'jaspreet', 'jpreet71@yahoo.com', 'Phagwara', 'satnampura', '07no', 553553, 'fs', 'approved', '500', '0,6', 'Cash On Delivery', '1', 'manu@yahoo.com', 'Air condition', '1000/-', 'Within Two Days'),
(5, 'jaspreet', 'jpreet71@yahoo.com', 'ludhiana', 'jodewal basti', '05no', 47455, 'gddgrf', 'approved', '120', '0,24', 'Internet Banking', '', '', '', '', ''),
(6, 'jaspreet', 'jpreet71@yahoo.com', 'Mahilpur', 'Khanpur', '05no', 132443, 'hfff', 'approved', '4000', '0,85', 'Internet Banking', '', '', '', '', ''),
(7, 'jaspreet', 'jpreet71@yahoo.com', 'jalandhar', 'modeltown', 'qhq', 111111, 'qq', 'pending', '', '', '', '', '', '', '', ''),
(8, 'jaspreet', 'jpreet71@yahoo.com', 'Phagwara', 'satnampura', '12', 13304, 'psgg', 'approved', '120', '0,24', 'Internet Banking', '0', '', '', '', ''),
(9, 'jaspreet', 'jpreet71@yahoo.com', 'ludhiana', 'jodewal basti', '5no.', 171271, 'csdf', 'approved', '400', '0,1', 'Internet Banking', '1', 'manu@yahoo.com', 'plumbing', '1000/-', 'Within Two Days'),
(10, 'jaspreet', 'jpreet71@yahoo.com', 'Mahilpur', 'Khanpur', '5no.', 234554, 'PJG', 'approved', '17000', '0,122', 'Cash On Delivery', '0', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `r_id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobileno` bigint(255) NOT NULL,
  `question1` varchar(255) NOT NULL,
  `answer1` varchar(255) NOT NULL,
  `question2` varchar(255) NOT NULL,
  `answer2` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`r_id`),
  UNIQUE KEY `r_id` (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `username`, `email`, `password`, `gender`, `mobileno`, `question1`, `answer1`, `question2`, `answer2`, `address`, `date`, `ip`, `city`, `location`) VALUES
(1, 'jaspreet', 'jpreet71@yahoo.com', 'jassss', 'Male', 9501223775, 'Favourite singer?', 'kulwinder billa', 'your state?', 'punjab', 'phagwara', '02/05/17', '127.0.0.1', 'Mahilpur', 'Khanpur'),
(2, 'harpreet singh', 'happy@yahoo.com', '242424', 'Male', 7988821121, 'Favourite singer?', 'geeta zaildaar', 'your favourite crickter?', 'ms dhoni', 'jalandhar', '02/05/17', '127.0.0.1', 'ludhiana', 'jodewal basti'),
(3, 'anita sodhi', 'anitasodhi2@ymail.com', '12345', 'Male', 7525523253, 'What is your favourite movie?', 'yaar anmulle', 'your state?', 'punjab', 'jalandhar', '02/05/17', '127.0.0.1', '', ''),
(4, 'gavy pour', 'gavyg@yahoo.com', '121212', 'Male', 747474474, 'Favourite singer?', 'garry sandhu', 'your state?', 'punjab', 'goraeya', '02/05/17', '127.0.0.1', '', ''),
(5, '', '', '', 'Male', 0, '', '', '', '', '', '07/05/17', '127.0.0.1', '', ''),
(6, '', '', '', 'Male', 0, '', '', '', '', '', '07/05/17', '127.0.0.1', '', ''),
(7, 'jaspreet', 'jpreet71@yahoo.com', 'jassss', 'Male', 745454444, 'Favourite singer?', 'kulwinder billa', 'your state?', 'punjab', 'phagwara', '08/05/17', '127.0.0.1', 'Mahilpur', 'Khanpur');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `s_id` int(255) NOT NULL AUTO_INCREMENT,
  `c_id` int(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `s_id` (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`s_id`, `c_id`, `s_name`, `pic`) VALUES
(1, 1, 'Threading', 'images/fgtftdtdtdftdtf.jpg'),
(2, 1, 'Facial', 'images/10_make_up_hacks_that_will_change_every_girl_s_life1.jpg'),
(3, 3, 'Desktop', 'images/desktop.jpg'),
(4, 3, 'Laptop', 'images/laptop.jpg'),
(5, 3, 'I-pad', 'images/ipad.jpg'),
(6, 3, 'Tablet', 'images/tal.jpg'),
(7, 2, 'Tabs', 'images/tass.jpg'),
(8, 2, 'wash Basin', 'images/images (1).jpg'),
(9, 4, 'Fans', 'images/download (2).jpg'),
(10, 4, 'Switches', 'images/images (7).jpg'),
(11, 4, 'wiring', 'images/wiu.jpg'),
(12, 4, 'invertor', 'images/in.jpg'),
(13, 2, 'Showers', 'images/jass.jpg'),
(14, 2, 'water Filters', 'images/water.jpg'),
(15, 2, 'Sink', 'images/sink.jpg'),
(16, 1, 'Bleach', 'images/la2.jpg'),
(17, 1, 'Pedicure', 'images/peddiff.jpg'),
(18, 5, 'Ac', 'images/Ac.jpg'),
(19, 5, 'Washing Machine', 'images/washingmachine.jpg'),
(20, 5, 'Microwave Oven', 'images/microwave.jpg'),
(21, 5, 'Telivision', 'images/tele.jpg'),
(22, 5, 'LCD', 'images/lcd.jpg'),
(23, 5, 'LED', 'images/led.jpg'),
(24, 5, 'Refrigerator ', 'images/refri.jpg'),
(25, 6, 'Box Bed Repair', 'images/sucare.jpg'),
(26, 6, 'Table repair', 'images/Tablerepair.png'),
(27, 6, 'Chair repair', 'images/chair.jpg'),
(28, 6, 'Sofa repair', 'images/sofa.jpg'),
(29, 6, 'Door repair', 'images/door.jpg'),
(30, 6, 'Kichen Window rack', 'images/rack.jpg'),
(31, 7, 'Dry service', 'images/dry.jpg'),
(32, 7, 'Filter service', 'images/filter.jpg'),
(33, 8, 'Maurti Suzuki', 'images/maurti.jpg'),
(34, 8, 'Hyundai', 'images/images.jpg'),
(35, 8, 'Nissan', 'images/nissan.jpg'),
(36, 8, 'Mercedes Car', 'images/merceed.jpg'),
(37, 8, 'Hero', 'images/ike.jpg'),
(38, 8, 'Honda', 'images/honda.jpg'),
(39, 8, 'Tvs', 'images/tssss.jpg'),
(40, 8, 'Enfiled', 'images/uller.jpg'),
(41, 1, 'Mehndi ', 'images/maina.jpg'),
(42, 1, 'Makeup', 'images/m5.jpg'),
(43, 9, 'Bed Room Painting', 'images/su111111.jpg'),
(44, 9, 'Kichen Painting', 'images/main111111.jpg'),
(45, 9, 'Drawing Room', 'images/maindra.jpg'),
(46, 9, 'Lobby painting Desining', 'images/lymainn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `town`
--

CREATE TABLE IF NOT EXISTS `town` (
  `t_id` int(255) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  PRIMARY KEY (`t_id`),
  UNIQUE KEY `t_id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `town`
--

INSERT INTO `town` (`t_id`, `c_name`, `t_name`) VALUES
(1, 'Phagwara', 'satnampura'),
(2, 'Phagwara', 'hargobind nagar'),
(3, 'ludhiana', 'jodewal basti'),
(4, 'jalandhar', 'modeltown'),
(5, 'Mahilpur', 'Khanpur'),
(6, 'jalandhar', 'ramamandi'),
(7, 'hoshiarpur', 'Rosan ground');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `v_id` int(255) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(255) NOT NULL,
  `v_email` varchar(255) NOT NULL,
  `v_password` varchar(255) NOT NULL,
  `v_contact` varchar(255) NOT NULL,
  `v_professional` varchar(255) NOT NULL,
  `v_experience` varchar(255) NOT NULL,
  `v_address` varchar(255) NOT NULL,
  `v_pic` varchar(255) NOT NULL,
  `v_status` varchar(255) NOT NULL,
  PRIMARY KEY (`v_id`),
  UNIQUE KEY `v_id` (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`v_id`, `v_name`, `v_email`, `v_password`, `v_contact`, `v_professional`, `v_experience`, `v_address`, `v_pic`, `v_status`) VALUES
(1, 'jaspreet', 'jpreet71@yahoo.com', '12345', '7355454534', 'Electrician', 'Eight year', 'has', 'images/chrnjit.jpg', '0'),
(2, 'dilpreet dhillon', 'dilpreet@yahoo.com', '1235', '5577777777', 'Electrician', '1', 'hj', 'images/hdtfygjghj113.jpg', '1'),
(3, 'jaspreet', 'preet@yahoo.com', '12345', '7878754321', 'plumbing', '2year', 'jhsjd', 'images/sgssgs.jpg', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
