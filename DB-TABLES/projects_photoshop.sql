-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2024 at 02:06 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mirnesgl_cert`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects_photoshop`
--

DROP TABLE IF EXISTS `projects_photoshop`;
CREATE TABLE IF NOT EXISTS `projects_photoshop` (
  `projects_photoshop_id` int(11) NOT NULL AUTO_INCREMENT,
  `big_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_576` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_530` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_500` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_450` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_408` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_350` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_282` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`projects_photoshop_id`),
  KEY `page_id` (`page_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table with information about photoshop projects.';

--
-- Dumping data for table `projects_photoshop`
--

INSERT INTO `projects_photoshop` (`projects_photoshop_id`, `big_img`, `img_576`, `img_530`, `img_500`, `img_450`, `img_408`, `img_350`, `img_282`, `img`, `alt`, `content`, `page_id`) VALUES
(1, 'coffee-cup_e.webp', 'coffee-cup_e-576.webp,  ./photoshops/SMALL/coffee-cup_e-576@2x.webp 2x', 'coffee-cup_e-530.webp,  ./photoshops/SMALL/coffee-cup_e-530@2x.webp 2x', 'coffee-cup_e-500.webp,  ./photoshops/SMALL/coffee-cup_e-500@2x.webp 2x, ./photoshops/SMALL/coffee-cup_e-500@3x.webp 3x', 'coffee-cup_e-450.webp,  ./photoshops/SMALL/coffee-cup_e-450@2x.webp 2x, ./photoshops/SMALL/coffee-cup_e-450@3x.webp 3x', 'coffee-cup_e-408.webp,  ./photoshops/SMALL/coffee-cup_e-408@2x.webp 2x, ./photoshops/SMALL/coffee-cup_e-408@3x.webp 3x', 'coffee-cup_e-350.webp,  ./photoshops/SMALL/coffee-cup_e-350@2x.webp 2x, ./photoshops/SMALL/coffee-cup_e-350@3x.webp 3x', 'coffee-cup_e-282.webp,  ./photoshops/SMALL/coffee-cup_e-282@2x.webp 2x, ./photoshops/SMALL/coffee-cup_e-282@3x.webp 3x', 'coffee-cup_e.jpg', 'Removed object from a Coffee cup using Patch Tool', 'Removed object from a Coffee cup using Patch Tool', 1),
(2, 'coffee-cup.webp', 'coffee-cup-576.webp,  ./photoshops/SMALL/coffee-cup-576@2x.webp 2x', 'coffee-cup-530.webp,  ./photoshops/SMALL/coffee-cup-530@2x.webp 2x', 'coffee-cup-500.webp,  ./photoshops/SMALL/coffee-cup-500@2x.webp 2x, ./photoshops/SMALL/coffee-cup-500@3x.webp 3x', 'coffee-cup-450.webp,  ./photoshops/SMALL/coffee-cup-450@2x.webp 2x, ./photoshops/SMALL/coffee-cup-450@3x.webp 3x', 'coffee-cup-408.webp,  ./photoshops/SMALL/coffee-cup-408@2x.webp 2x, ./photoshops/SMALL/coffee-cup-408@3x.webp 3x', 'coffee-cup-350.webp,  ./photoshops/SMALL/coffee-cup-350@2x.webp 2x, ./photoshops/SMALL/coffee-cup-350@3x.webp 3x', 'coffee-cup-282.webp,  ./photoshops/SMALL/coffee-cup-282@2x.webp 2x, ./photoshops/SMALL/coffee-cup-282@3x.webp 3x', 'coffee-cup.jpg', 'Coffee cup', 'Image of Coffee cup', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
