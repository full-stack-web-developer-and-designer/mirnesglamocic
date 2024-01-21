-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2024 at 12:24 AM
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
-- Table structure for table `cert_desc`
--

DROP TABLE IF EXISTS `cert_desc`;
CREATE TABLE IF NOT EXISTS `cert_desc` (
  `cert_desc_id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `first_part` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_part` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cert_desc_id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table with description about certifications.';

--
-- Dumping data for table `cert_desc`
--

INSERT INTO `cert_desc` (`cert_desc_id`, `icon`, `title`, `first_part`, `second_part`, `href`, `page_id`) VALUES
(1, '<i class=&apos;fa-solid fa-code&apos; aria-hidden=&apos;true&apos;></i>', 'Front-end Development', 'Front-end development focuses on the visual aspects of a website – the part that users see and interact with.', 'Front-end developers work in languages like HTML, CSS, JavaScript, and various frameworks and libraries such as Bootstrap, AngularJS, React.js, Vue.js, jQuery, and Sass.', './frontendcertifikates.html', 1),
(2, '<i class=&apos;fa-solid fa-gear&apos; aria-hidden=&apos;true&apos;></i>', 'Back-end Development', 'Back-end development means working on server-side software, which focuses on everything you can&apos;t see on a website.', 'Back-end developers ensure the website performs correctly, focusing on databases, back-end logic, application programming interface (APIs), architecture, and servers.', './backendcertifikates.html', 1),
(3, '<i class=&apos;fa-solid fa-database&apos; aria-hidden=&apos;true&apos;></i>', 'Database Development', 'Database development is designing, creating a database, and analyzing requirements and their intents as raw data.', 'Database developers are responsible for the design, programming, construction, and implementation of new databases, as well as modifying existing databases to user needs.', '/databasecertificates.html', 1),
(4, '<i class=&apos;fa-brands fa-wordpress&apos; aria-hidden=&apos;true&apos;></i>', 'Wordpress Development', 'WordPress is an open-source content management system (CMS) used to build, modify, and maintain websites.', 'WordPress is written in PHP and run on a MySQL or MariaDB database with supported HTTPS. In addition, WordPress features include plugins and themes, among others.', '/wordpresscertificates.html', 1),
(5, '<i class=&apos;fas fa-server&apos; aria-hidden=&apos;true&apos;></i>', 'Web<br>Services', 'A web service is a software system that supports interoperable machine-to-machine interaction over a network.', 'Web services allow different organizations or applications from multiple sources to communicate without the need to share sensitive data or IT infrastructure.', '/webservicescertificates.html', 1),
(6, '<i class=&apos;fa-solid fa-pen-nib&apos; aria-hidden=&apos;true&apos;></i>', 'Web<br>Design', 'Web design is the creation of websites and pages to reflect a company&apos;s brand and information and ensure a user-friendly experience.', 'The world of web design is constantly evolving, including mobile apps and user interface design, to meet the growing needs of website owners and visitors alike.', '/webdesigncertificates.html', 1),
(7, '<img class=&apos;icons&apos; src=&apos;./images/ux-icon.svg&apos; alt=&apos;UI/UX logo&apos; loading=&apos;lazy&apos;>', 'UI/UX<br>Design', 'The point of UI/UX design is to create a product that will be both visually appealing and highly pleasant to interact with.', 'User interface design refers to the look and feel of a digital product, and UX refers to the experience a user has when interacting with it. Both elements work closely together.', '/uxcertificates.html', 1),
(8, '<img class=&apos;icons&apos; src=&apos;./images/seo-icon.svg&apos; alt=&apos;SEO logo&apos; loading=&apos;lazy&apos;>', 'Internet Marketing', 'Internet marketing and SEO are increasingly becoming mandatory for businesses of all types. SEO stands for search engine optimization.', 'It aims to improve a website&apos;s position in search results pages. The higher the website is listed, the more people will see it. SEO is considered an essential marketing activity.', '/seocertificates.html', 1),
(9, '<img class=&apos;icons&apos; src=&apos;./images/adobe-icon.svg&apos; alt=&apos;Adobe CC logo&apos; loading=&apos;lazy&apos;>', 'Adobe<br>Tools', 'Adobe Creative Cloud is a collection of software for graphic design, video editing, web development, and photography.', 'Photoshop and Illustrator are must-have software for creatives because they can serve a variety of design needs, specifically for photo editing and vector graphics designing.', '/adobecertificates.html', 1),
(10, '<i class=&apos;fa-brands fa-github&apos; aria-hidden=&apos;true&apos;></i>', 'Version Control', 'Version control systems are software tools that help software teams manage changes to source code over time.', 'Today, Git is the de facto standard for what&apos;s known as version control software. Git is designed to handle everything from small to very large projects with speed and efficiency.', '/gitcertificates.html', 1),
(11, '<i class=&apos;fab fa-docker&apos; aria-hidden=&apos;true&apos;></i>', 'Container Platforms', 'Docker is a platform designed to help developers build, manage, share, run, and distribute modern applications.', 'Docker emerged as a de facto standard platform to quickly compose, create, deploy, scale, and oversee containers across Docker hosts, and runs on Linux, macOS and Windows.', '/dockercertificates.html', 1),
(12, '<i class=&apos;fa-brands fa-linux&apos; aria-hidden=&apos;true&apos;></i>', 'Operating Systems', 'Operating System is defined as a collection of programs that coordinates the operations of computer hardware and software.', 'For the most part, the IT industry largely focuses on the top five OSs, including Apple&apos;s macOS, Microsoft Windows, Google&apos;s Android OS, Linux Operating System, and Apple iOS.', '/linuxcertificates.html', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cert_desc`
--
ALTER TABLE `cert_desc`
  ADD CONSTRAINT `fk_cert_desc` FOREIGN KEY (`page_id`) REFERENCES `pages` (`page_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
