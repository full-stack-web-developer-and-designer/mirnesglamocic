-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2024 at 04:21 AM
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
-- Table structure for table `ita_certificates`
--

DROP TABLE IF EXISTS `ita_certificates`;
CREATE TABLE IF NOT EXISTS `ita_certificates` (
  `ita_id` int(11) NOT NULL AUTO_INCREMENT,
  `article` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_400` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_300` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_250` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_200` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_180` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_170` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ita_id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table with informations about certificates by ITAcademy.';

--
-- Dumping data for table `ita_certificates`
--

INSERT INTO `ita_certificates` (`ita_id`, `article`, `href`, `img_400`, `img_300`, `img_250`, `img_200`, `img_180`, `img_170`, `img`, `alt`, `page_id`) VALUES
(1, 'PHP', './images/BIG/cert-php.jpg', './images/cert-php.webp, ./images/cert-php@2x.webp 2x, ./images/cert-php@3x.webp 3x', './images/cert-php-1023.webp, ./images/cert-php-1023@2x.webp 2x, ./images/cert-php-1023@3x.webp 3x, ./images/cert-php-1023@4x.webp 4x', './images/cert-php-564.webp, ./images/cert-php-564@2x.webp 2x, ./images/cert-php-564@3x.webp 3x, ./images/cert-php-564@4x.webp 4x', './images/cert-php-453.webp, ./images/cert-php-453@2x.webp 2x, ./images/cert-php-453@3x.webp 3x, ./images/cert-php-453@4x.webp 4x', './images/cert-php-414.webp, ./images/cert-php-414@2x.webp 2x, ./images/cert-php-414@3x.webp 3x, ./images/cert-php-414@4x.webp 4x', './images/cert-php-390.webp, ./images/cert-php-390@2x.webp 2x, ./images/cert-php-390@3x.webp 3x, ./images/cert-php-390@4x.webp 4x', './images/cert-php.jpg', 'ITAcademy Certificate PHP Web Development by Mirnes Glamočić', 1),
(2, 'WD', './images/BIG/cert-wd.jpg', './images/cert-wd.webp, ./images/cert-wd@2x.webp 2x, ./images/cert-wd@3x.webp 3x', './images/cert-wd-1023.webp, ./images/cert-wd-1023@2x.webp 2x, ./images/cert-wd-1023@3x.webp 3x, ./images/cert-wd-1023@4x.webp 4x', './images/cert-wd-564.webp, ./images/cert-wd-564@2x.webp 2x, ./images/cert-wd-564@3x.webp 3x, ./images/cert-wd-564@4x.webp 4x', './images/cert-wd-453.webp, ./images/cert-wd-453@2x.webp 2x, ./images/cert-wd-453@4x.webp 4x', './images/cert-wd-414.webp, ./images/cert-wd-414@2x.webp 2x, ./images/cert-wd-414@3x.webp 3x, ./images/cert-wd-414@4x.webp 4x', './images/cert-wd-390.webp, ./images/cert-wd-390@2x.webp 2x, ./images/cert-wd-390@3x.webp 3x, ./images/cert-wd-390@4x.webp 4x', './images/cert-wd.jpg', 'ITAcademy Certificate Web Design by Mirnes Glamočić', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
