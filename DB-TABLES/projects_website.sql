-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2024 at 09:52 PM
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
-- Table structure for table `projects_website`
--

DROP TABLE IF EXISTS `projects_website`;
CREATE TABLE IF NOT EXISTS `projects_website` (
  `projects_website_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_600` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_550` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_500` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_408` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_300` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skills_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1200) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`projects_website_id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table with information about website projects.';

--
-- Dumping data for table `projects_website`
--

INSERT INTO `projects_website` (`projects_website_id`, `title`, `img_600`, `img_550`, `img_500`, `img_408`, `img_300`, `img`, `skills_class`, `skills`, `description`, `href`, `page_id`) VALUES
(1, 'SQL Quizzer', 'SQLquizzer_600.webp, ./websites/SQLquizzer_600@2x.webp 2x, ./websites/SQLquizzer_600@3x.webp 3x, ./websites/SQLquizzer_600@4x.webp 4x', 'SQLquizzer_550.webp, ./websites/SQLquizzer_550@2x.webp 2x, ./websites/SQLquizzer_550@3x.webp 3x, ./websites/SQLquizzer_550@4x.webp 4x', 'SQLquizzer_500.webp, ./websites/SQLquizzer_500@2x.webp 2x, ./websites/SQLquizzer_500@3x.webp 3x, ./websites/SQLquizzer_500@4x.webp 4x', 'SQLquizzer_408.webp, ./websites/SQLquizzer_408@2x.webp 2x, ./websites/SQLquizzer_408@3x.webp 3x, ./websites/SQLquizzer_408@4x.webp 4x', 'SQLquizzer_300.webp, ./websites/SQLquizzer_300@2x.webp 2x, ./websites/SQLquizzer_300@3x.webp 3x, ./websites/SQLquizzer_300@4x.webp 4x', 'SQLquizzer.jpg', 'verysimple', '<li class=\"project_simple\">Skills</li><li>HTML</li><li>CSS</li><li>PHP</li><li>MySQL</li>', 'This project contains a dynamic responsive SQL quizzer made with PHP, MySQL, HTML and CSS. So, the quiz contains some questions by w3school where user need to choose correct answer.<p>There is also the possibility of adding a question, and after that, that question appears with the other questions in the quiz and is instantly inserted into the database. For adding questions there is PHP validation so blank questions can not be added. It\''s necessary add a question, minimum 2 choices for answer and correct answer.</p><p>There are two tables in the database, one for questions and the other for answers, and with the help of the PHP mysqli api, the entered answer is checked. Each answer has the value of one point and after all the questions the total number of points won appears. This is achieved with the help of PHP sessions, which are started during each quiz and are destroyed at the same time so that the number of points is not added up for each quiz.', 'https://mysql-quizzer.epizy.com', 1),
(2, 'Shoutbox application', 'shoutbox_600.webp, ./websites/shoutbox_600@2x.webp 2x, ./websites/shoutbox_600@3x.webp 3x, ./websites/shoutbox_600@4x.webp 4x', 'shoutbox_550.webp, ./websites/shoutbox_550@2x.webp 2x, ./websites/shoutbox_550@3x.webp 3x, ./websites/shoutbox_550@4x.webp 4x', 'shoutbox_500.webp, ./websites/shoutbox_500@2x.webp 2x, ./websites/shoutbox_500@3x.webp 3x, ./websites/shoutbox_500@4x.webp 4x', 'shoutbox_408.webp, ./websites/shoutbox_408@2x.webp 2x, ./websites/shoutbox_408@3x.webp 3x, ./websites/shoutbox_408@4x.webp 4x', 'shoutbox_300.webp, ./websites/shoutbox_300@2x.webp 2x, ./websites/shoutbox_300@3x.webp 3x, ./websites/shoutbox_300@4x.webp 4x', 'shoutbox.jpg', 'simple', '<li class=\"project_title\">Skills</li><li>HTML</li><li>CSS</li><li>jQuery</li><li>AJAX</li><li>PHP</li><li>MySQL</li>', 'This project contains a dynamic responsive Shoutbox built using PHP, MySQL, jQuery, AJAX, HTML, and CSS. So, when the user sends a name and a message, that information appears at the top of the Shoutbox along with the time the message was sent. Also, this data is entered into the database, and with the help of AJAX, it appears instantly on the page, without reloading the page.</p><p>At the same time, this form has validation, and empty data cannot be sent, with AJAX and jQuery validation plugin, the answer \"Please fill in your name and message!\" appears immediately when the user tries to send empty data. This was done with jQuery validate groups to display one message for all inputs, instead of each input separately.</p><p>Moreover, there are built-in some PHP functions like ucwords which work in case when the user writes his name in lowercase letters, the first letter of the user\''s first and last name will be capitalized, and with a function ucfirst it\''s capitalized the first letter of a sentence if the user wrote their message in lowercase.', 'https://shoutbox.epizy.com', 1),
(3, 'WordPress site for the fictional company Terradium', 'terradium_600.webp, ./websites/terradium_600@2x.webp 2x, ./websites/terradium_600@3x.webp 3x, ./websites/terradium_600@4x.webp 4x', 'terradium_550.webp, ./websites/terradium_550@2x.webp 2x, ./websites/terradium_550@3x.webp 3x, ./websites/terradium_550@4x.webp 4x', 'terradium_500.webp, ./websites/terradium_500@2x.webp 2x, ./websites/terradium_500@3x.webp 3x, ./websites/terradium_500@4x.webp 4x', 'terradium_408.webp, ./websites/terradium_408@2x.webp 2x, ./websites/terradium_408@3x.webp 3x, ./websites/terradium408@4x.webp 4x', 'terradium_300.webp, ./websites/terradium_300@2x.webp 2x, ./websites/terradium_300@3x.webp 3x, ./websites/terradium_300@4x.webp 4x', 'terradium.jpg', 'wp', '<li class=\"project_wp\">Skills</li><li>WordPress</li><li>Elementor</li><li>HTML</li><li>CSS</li><li>JS</li>', 'This project contains a responsive WordPress website that contains five pages with a consistent design across all pages. It\''s created using the Hello Elementor WordPress theme and the entire project was done using the Elementor plugin.</p><p>Various widgets are implemented on this website, such as a slideshow with background images on the home page, a carousel gallery, an image gallery, a video, an SVG mask on an image, a list of icons, a map, and a brief description of the company\''s offerings on each page.</p><p>Also, custom CSS was used for the header and footer, as well as JavaScript for the copyright information in the footer. At the same time, an SSL certificate was installed, all traffic was redirected to https in the .htaccess file, as well as gzip compression was used and cache memory was saved for all types of files in user browsers.', 'https://terradium.epizy.com', 1),
(4, 'A multilingual WordPress website for an Olive Oil company', 'matic_600.webp, ./websites/matic_600@2x.webp 2x, ./websites/matic_600@3x.webp 3x, ./websites/matic_600@4x.webp 4x', 'matic_550.webp, ./websites/matic_550@2x.webp 2x, ./websites/matic_550@3x.webp 3x, ./websites/matic_550@4x.webp 4x', 'matic_500.webp, ./websites/matic_500@2x.webp 2x, ./websites/matic_500@3x.webp 3x, ./websites/matic_500@4x.webp 4x', 'matic_408.webp, ./websites/matic_408@2x.webp 2x, ./websites/matic_408@3x.webp 3x, ./websites/matic_408@4x.webp 4x', 'matic_300.webp, ./websites/matic_300@2x.webp, ./websites/matic_300@3x.webp 3x, ./websites/matic_300@4x.webp 4x', 'matic.jpg', 'wp elementor', '<li class=\"project_olive\">Skills</li><li>WordPress</li><li>Elementor</li><li>Polylang</li><li>Yoast SEO</li><li>Contact Form 7</li><li>WP-Optimize</li><li>HTML</li><li>CSS</li>', 'This project contains a responsive multilingual WordPress website for an Olive Oil company created in English, Korean, Poland, and Croatian language. It\''s created using WordPress with Elementor and Polylang plugins.</p><p>Also, contains some other plugins such as Contact Form 7 (manage flexible contact forms), Multilingual Contact Form 7 with Polylang (Enables translation and use of the same forms in different languages of Contact Form 7 forms with Polylang), Yoast SEO (helps website perform better in search engines like Google) and WP-Optimize (cleans the database, compresses images and caches pages).</p><p>Custom CSS was used for the header and footer, as well as JavaScript for the copyright information in the footer. At the same time, an SSL certificate was installed, all traffic was redirected to https in the .htaccess file, gzip compression was used and cache memory was saved for all types of files in user browsers.', 'https://oliveoilmatic.com', 1),
(5, 'Tourism Website', 'visit-neum_600.webp, ./websites/visit-neum_600@2x.webp 2x, ./websites/visit-neum_600@3x.webp 3x, ./websites/visit-neum_600@4x.webp 4x', 'visit-neum_550.webp, ./websites/visit-neum_550@2x.webp 2x, ./websites/visit-neum_550@3x.webp 3x, ./websites/visit-neum_550@4x.webp 4x', 'visit-neum_500.webp, ./websites/visit-neum_500@2x.webp 2x, ./websites/visit-neum_500@3x.webp 3x, ./websites/visit-neum_500@4x.webp 4x', 'visit-neum_408.webp, ./websites/visit-neum_408@2x.webp 2x, ./websites/visit-neum_408@3x.webp 3x, ./websites/visit-neum_408@4x.webp 4x', 'visit-neum_300.webp, ./websites/visit-neum_300@2x.webp 2x, ./websites/visit-neum_300@3x.webp 3x, ./websites/visit-neum_300@4x.webp 4x', 'visit-neum.jpg', NULL, '<li class=\"project_title\">Skills</li><li>HTML</li><li>CSS</li><li>JS</li><li>jQuery</li><li>JSON</li><li>AJAX</li><li>OOP</li><li>PHP</li><li>MySQL</li><li>PS</li><li>Bridge</li><li>SEO</li>', 'This project contains a complex dynamic responsive website with a complete reservation system in one city, where users can directly contact the owners of properties such as hotels, apartments, villas, rooms, restaurants, boats and car rentals, similar to the website booking.com.</p><p>On the home page is embedded the time for the next 7 days, the value of the currency at the NLB Bank exchange rate, and with the help of the LightSlider JavaScript library, object-oriented PHP, and SQL function rand() the properties are displayed randomly each time when home page is opened.</p><p>Each property contains a short description, a location on a Google map, an image gallery displayed with the help of the LightBox JavaScript library, and some properties also contain a video embedded by YouTube.</p><p>Also, all properties contain a contact form, which is created on a popup modal created with jQuery. At the same time, all pages contain another popup modal with a contact form for contacting the site administrator.</p><p>With excellent SEO, all properties have improved the site to appear at the top of Google searches.', 'https://visit-neum.com', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects_website`
--
ALTER TABLE `projects_website`
  ADD CONSTRAINT `fk_projects_website` FOREIGN KEY (`page_id`) REFERENCES `pages` (`page_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
