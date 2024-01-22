-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2024 at 04:59 AM
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
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `projects_id` int(11) NOT NULL AUTO_INCREMENT,
  `article` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`projects_id`),
  UNIQUE KEY `image_UNIQUE` (`image`),
  KEY `page_id` (`page_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table with information about illustrations and logos projects.';

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projects_id`, `article`, `image`, `alt`, `content`, `page_id`) VALUES
(1, 'illustration', 'factory', 'Illustration of the factory', 'Illustration of the company created with the Line Segment Tool, Scissors, Arc, Rectangular Grid, Polar Grid and Spiral Tool.', 1),
(2, 'illustration', 'house', 'Illustration of simple house', 'Illustration of a simple house created using the Rectangle and Shaper tools.', 1),
(3, 'illustration', 'coil', 'Illustration of coil', 'Illustration of a coil created with the Ellipse Tool and compound paths using the Join command.', 1),
(4, 'illustration', 'sheriff', 'Illustration of sheriff''s badge', 'Illustration of sheriff''s badge with a star along with a bunch of circles and a big ellipse using the Shape Builder and an inset reflection.', 1),
(5, 'illustration', 'honeycomb', 'Illustration of honeycomb', 'Illustration of honeycomb created with Polygon Tool using a combination of Effects from Appearance panel.', 1),
(6, 'illustration', 'ellipses', 'Illustration of multiple ellipses', 'Illustration of multiple ellipses created with the Ellipse and Rectangle tools using Effects from the Appearance panel.', 1),
(7, 'illustration', 'electron', 'Illustration of the atomic symbol', 'Illustration of an atomic symbol created with the Ellipse tool using Effects from the Appearance panel.', 1),
(8, 'illustration', 'flower_petals', 'Illustration of flower petals', 'Illustration of flower petals created using the Ellipse tool, Transform Effects, Pucker & Bloat, and Zig Zag tools.', 1),
(9, 'illustration', 'orange', 'Illustration of orange wedge', 'Illustration of a single orange slice created with the Ellipse, Rectangle, Scale, and Rotate tools.', 1),
(10, 'illustration', 'ribbon', 'Illustration of möbius strip', 'Illustration of an overlapping ribbon created by a combination of hexagons, a blend of objects, the Rotate Tool, and the Live Paint Bucket.', 1),
(11, 'illustration', '3D-Star', 'Illustration of 3D Star', 'Illustration of a five-pointed 3D twisted woven metal star created using the Ellipse, Rectangle, Line, Rotate, and Scale tools.', 1),
(12, 'illustration', 'cubes', 'Illustration of dynamic cubes', 'Illustration of dynamic cubes created using the Line Tool, Transform, and Outer Glow Effects.', 1),
(13, 'logo', 'bullseye-logo', 'Bullseye logo', 'Expertly rendered Bullseye logo created from a single @ sign using the Polargrid and Scale tools.', 1),
(14, 'logo', 'interwoven-rings', 'The interwoven rings logo', 'The interwoven rings logo created from the bullseye logo using the Rotate tool, and the paths join command.', 1),
(15, 'logo', 'complementary-rings', 'Complemtary ring logo', 'Complemtary ring logo, created from a interwoven ring logo stitched together using the Ellipse, Rotate, and Scissors tools, along with the paths join command', 1),
(16, 'logo', 'pixelworker-star', 'Star logo of United Pixelworkers', 'Star logo by United Pixelworkers created using the Ellipse, Rotate, Scale, and Shear tools with warped gradient shadows.', 1),
(17, 'logo', 'frontiers', 'Frontiers Unlimited logo of tour company', 'Frontiers Unlimited Logo for tour company created using the Rectangle, Ellipse, Pen and Type tools along with the Pathfinder options.', 1),
(18, 'logo', 'olympic-ring', 'The Olympic Ring logo', 'The Olympic Ring logo created using a grid and the Ellipse Tool along with the Pathfinder options.', 1),
(19, 'logo', 'british-national-rail', 'The British National Rail logo', 'The British National Rail logo created using the Line Segment Tool and Rectangle Tool along with the Pathfinder and Stroke options.', 1),
(20, 'logo', 'recycle', 'The Recycle logo', 'The Recycle Logo created using the Polygon, Rectangle, Scissors, Rotate and Shape Builder tools along with the Stroke options in the Appearance panel.', 1),
(21, 'logo', 'bbc', 'BBC logo', 'BBC logo created using the Rectangle and Type tools along with the Align options.', 1),
(22, 'logo', 'google-drive', 'The Google Drive logo', 'The Google Drive Logo created using the Pollygon, Rotate, Pen, Shape Builder and Direct Selection tools along with the Pathfinder options.', 1),
(23, 'logo', 'google-chrome', 'The Google Chrome logo', 'The Google Chrome logo created using the Ellipse, Line Segment, Rotate, Selection and Shape Builders tools.', 1),
(24, 'logo', 'samsung', 'Samsung logo', 'Samsung logo created using the Ellipse and Type tools, along with the Pathfinder options.', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
