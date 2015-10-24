-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2015 at 12:12 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `es-birding`
--

-- --------------------------------------------------------

--
-- Table structure for table `birds`
--

CREATE TABLE IF NOT EXISTS `birds` (
`id` int(11) NOT NULL,
  `species` varchar(45) CHARACTER SET utf8 NOT NULL,
  `img` varchar(120) CHARACTER SET latin1 NOT NULL,
  `body_size` int(11) NOT NULL,
  `beak_length` int(11) NOT NULL,
  `legs_length` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `birds`
--

INSERT INTO `birds` (`id`, `species`, `img`, `body_size`, `beak_length`, `legs_length`) VALUES
(5, 'sparrow', 'https://www.bforball.com/image/categ/sparrow.png', 0, 0, 0),
(6, 'kestrel', 'http://www.girisholeti.com/thumbs/Common%20Kestrel-1338718967.jpg', 1, 0, 0),
(7, 'buzzard', 'http://www.treadingsoftly.org/blog/wp-content/uploads/2013/10/Buzzard-small-200x200.jpg', 2, 0, 0),
(8, 'kingfisher', 'http://www.exmoor-nationalpark.gov.uk/__data/assets/image/0020/411365/Kingfisher.jpg', 0, 1, 0),
(9, 'bee-eater', 'http://verlaat-fotografie.nl/img/s2/v50/p993764555-11.jpg', 1, 1, 0),
(10, 'cormorant', 'http://www.chinafacttours.com/images/guilin/cormorants-fishing/cormorants-fishing-760695.jpg.thumb.jpg', 2, 1, 0),
(11, '(kentish) plover', 'http://www.bird-research.jp/1_shiryo/photo/medaichidori.jpg', 0, 0, 1),
(12, 'moorhen', 'http://www.esasuccess.org/images/species/HawaiianCommonMoorhen_JohnandKarenHollingsworth_USFWS.jpg', 1, 0, 1),
(13, 'bustard', 'http://www.wild-animal.photography/img/s7/v152/p642400395-11.jpg', 2, 0, 1),
(14, 'snipe', 'http://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/snipe_2.jpg', 0, 1, 1),
(15, 'suqacco heron', 'http://www.getaway.co.za/wp-content/uploads/2013/01/Francois-Retief-squacco-heron-taking-off3-200x200.jpg', 1, 1, 1),
(16, 'stork', 'http://www.ngkenya.com/thumbs/vert0190.jpg', 2, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birds`
--
ALTER TABLE `birds`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birds`
--
ALTER TABLE `birds`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
