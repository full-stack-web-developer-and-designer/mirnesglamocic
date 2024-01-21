-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2024 at 07:26 PM
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
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_120` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_110` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_105` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_100` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `img_120`, `img_110`, `img_105`, `img_100`, `img`, `alt`, `page_id`) VALUES
(1, 
'html-120.webp, ./images/html-120@2x.webp 2x, ./images/html-120@3x.webp 3x, ./images/html-120@4x.webp 4x', 
'html-110.webp, ./images/html-110@2x.webp 2x, ./images/html-110@3x.webp 3x, ./images/html-110@4x.webp 4x', 
'html-105.webp, ./images/html-105@2x.webp 2x, ./images/html-105@3x.webp 3x, ./images/html-105@4x.webp 4x', 
'html-100.webp, ./images/html-100@2x.webp 2x, ./images/html-100@3x.webp 3x, ./images/html-100@4x.webp 4x', 
'html.png', 'HTML logo', 1),
(2, 
'css-120.webp, ./images/css-120@2x.webp 2x, ./images/css-120@3x.webp 3x, ./images/css-120@4x.webp 4x', 
'css-110.webp, ./images/css-110@2x.webp 2x, ./images/css-110@3x.webp 3x, ./images/css-110@4x.webp 4x', 
'css-105.webp, ./images/css-105@2x.webp 2x, ./images/css-105@3x.webp 3x, ./images/css-105@4x.webp 4x', 
'css-100.webp, ./images/css-100@2x.webp 2x, ./images/css-100@3x.webp 3x, ./images/css-100@4x.webp 4x', 
'css.png', 'CSS logo', 1),
(3, 
'sass-120.webp, ./images/sass-120@2x.webp 2x, ./images/sass-120@3x.webp 3x, ./images/sass-120@4x.webp 4x', 
'sass-110.webp, ./images/sass-110@2x.webp 2x, ./images/sass-110@3x.webp 3x, ./images/sass-110@4x.webp 4x', 
'sass-105.webp, ./images/sass-105@2x.webp 2x, ./images/sass-105@3x.webp 3x, ./images/sass-105@4x.webp 4x', 
'sass-100.webp, ./images/sass-100@2x.webp 2x, ./images/sass-100@3x.webp 3x, ./images/sass-100@4x.webp 4x', 
'sass.png', 'SASS logo', 1),
(4,
'bootstrap-120.webp, ./images/bootstrap-120@2x.webp 2x, ./images/bootstrap-120@3x.webp 3x, ./images/bootstrap-120@4x.webp 4x', 
'bootstrap-110.webp, ./images/bootstrap-110@2x.webp 2x, ./images/bootstrap-110@3x.webp 3x, ./images/bootstrap-110@4x.webp 4x', 
'bootstrap-105.webp, ./images/bootstrap-105@2x.webp 2x, ./images/bootstrap-105@3x.webp 3x, ./images/bootstrap-105@4x.webp 4x', 
'bootstrap-100.webp, ./images/bootstrap-100@2x.webp 2x, ./images/bootstrap-100@3x.webp 3x, ./images/bootstrap-100@4x.webp 4x', 
'bootstrap.png', 'Bootstrap logo', 1),
(5, 
'javascript-120.webp, ./images/javascript-120@2x.webp 2x, ./images/javascript-120@3x.webp 3x, ./images/javascript-120@4x.webp 4x', 
'javascript-110.webp, ./images/javascript-110@2x.webp 2x, ./images/javascript-110@3x.webp 3x, ./images/javascript-110@4x.webp 4x', 
'javascript-105.webp, ./images/javascript-105@2x.webp 2x, ./images/javascript-105@3x.webp 3x, ./images/javascript-105@4x.webp 4x', 
'javascript-100.webp, ./images/javascript-100@2x.webp 2x, ./images/javascript-100@3x.webp 3x, ./images/javascript-100@4x.webp 4x', 
'javascript.png', 'JavaScript logo', 1),
(6, 
'jquery-120.webp, ./images/jquery-120@2x.webp 2x, ./images/jquery-120@3x.webp 3x, ./images/jquery-120@4x.webp 4x', 'jquery-110.webp, ./images/jquery-110@2x.webp 2x, ./images/jquery-110@3x.webp 3x, ./images/jquery-110@4x.webp 4x', 'jquery-105.webp, ./images/jquery-105@2x.webp 2x, ./images/jquery-105@3x.webp 3x, ./images/jquery-105@4x.webp 4x', 'jquery-100.webp, ./images/jquery-100@2x.webp 2x, ./images/jquery-100@3x.webp 3x, ./images/jquery-100@4x.webp 4x', 'jquery.png', 'jQuery logo', 1),
(7, 
'php-120.webp, ./images/php-120@2x.webp 2x, ./images/php-120@3x.webp 3x, ./images/php-120@4x.webp 4x', 
'php-110.webp, ./images/php-110@2x.webp 2x, ./images/php-110@3x.webp 3x, ./images/php-110@4x.webp 4x', 
'php-105.webp, ./images/php-105@2x.webp 2x, ./images/php-105@3x.webp 3x, ./images/php-105@4x.webp 4x', 
'php-100.webp, ./images/php-100@2x.webp 2x, ./images/php-100@3x.webp 3x, ./images/php-100@4x.webp 4x', 
'php.png', 'PHP logo', 1),
(8, 
'laravel-120.webp, ./images/laravel-120@2x.webp 2x, ./images/laravel-120@3x.webp 3x, ./images/laravel-120@4x.webp 4x', 'laravel-110.webp, ./images/laravel-110@2x.webp 2x, ./images/laravel-110@3x.webp 3x, ./images/laravel-110@4x.webp 4x', 'laravel-105.webp, ./images/laravel-105@2x.webp 2x, ./images/laravel-105@3x.webp 3x, ./images/laravel-105@4x.webp 4x', 'laravel-100.webp, ./images/laravel-100@2x.webp 2x, ./images/laravel-100@3x.webp 3x, ./images/laravel-100@4x.webp 4x', 'laravel.png', 'Laravel logo', 1),
(9, 
'symfony-120.webp, ./images/symfony-120@2x.webp 2x, ./images/symfony-120@3x.webp 3x, ./images/symfony-120@4x.webp 4x', 'symfony-110.webp, ./images/symfony-110@2x.webp 2x, ./images/symfony-110@3x.webp 3x, ./images/symfony-110@4x.webp 4x', 'symfony-105.webp, ./images/symfony-105@2x.webp 2x, ./images/symfony-105@3x.webp 3x, ./images/symfony-105@4x.webp 4x', 'symfony-100.webp, ./images/symfony-100@2x.webp 2x, ./images/symfony-100@3x.webp 3x, ./images/symfony-100@4x.webp 4x', 'symfony.png', 'Symfony logo', 1),
(10, 
'codeigniter-120.webp, ./images/codeigniter-120@2x.webp 2x, ./images/codeigniter-120@3x.webp 3x, ./images/codeigniter-120@4x.webp 4x', 
'codeigniter-110.webp, ./images/codeigniter-110@2x.webp 2x, ./images/codeigniter-110@3x.webp 3x, ./images/codeigniter-110@4x.webp 4x', 
'codeigniter-105.webp, ./images/codeigniter-105@2x.webp 2x, ./images/codeigniter-105@3x.webp 3x, ./images/codeigniter-105@4x.webp 4x', 
'codeigniter-100.webp, ./images/codeigniter-100@2x.webp 2x, ./images/codeigniter-100@3x.webp 3x, ./images/codeigniter-100@4x.webp 4x', 
'codeigniter.png', 'CodeIgniter logo', 1),
(11, 
'zend-120.webp, ./images/zend-120@2x.webp 2x, ./images/zend-120@3x.webp 3x, ./images/zend-120@4x.webp 4x', 
'zend-110.webp, ./images/zend-110@2x.webp 2x, ./images/zend-110@3x.webp 3x, ./images/zend-110@4x.webp 4x', 
'zend-105.webp, ./images/zend-105@2x.webp 2x, ./images/zend-105@3x.webp 3x, ./images/zend-105@4x.webp 4x', 
'zend-100.webp, ./images/zend-100@2x.webp 2x, ./images/zend-100@3x.webp 3x, ./images/zend-100@4x.webp 4x', 
'zend.png', 'Zend Framework logo', 1),
(12, 
'rest-120.webp, ./images/rest-120@2x.webp 2x, ./images/rest-120@3x.webp 3x, ./images/rest-120@4x.webp 4x', 
'rest-110.webp, ./images/rest-110@2x.webp 2x, ./images/rest-110@3x.webp 3x, ./images/rest-110@4x.webp 4x', 
'rest-105.webp, ./images/rest-105@2x.webp 2x, ./images/rest-105@3x.webp 3x, ./images/rest-105@4x.webp 4x', 
'rest-100.webp, ./images/rest-100@2x.webp 2x, ./images/rest-100@3x.webp 3x, ./images/rest-100@4x.webp 4x', 
'rest.png', 'RESTapi logo', 1),
(13, 
'json-120.webp, ./images/json-120@2x.webp 2x, ./images/json-120@3x.webp 3x, ./images/json-120@4x.webp 4x', 
'json-110.webp, ./images/json-110@2x.webp 2x, ./images/json-110@3x.webp 3x, ./images/json-110@4x.webp 4x', 
'json-105.webp, ./images/json-105@2x.webp 2x, ./images/json-105@3x.webp 3x, ./images/json-105@4x.webp 4x', 
'json-100.webp, ./images/json-100@2x.webp 2x, ./images/json-100@3x.webp 3x, ./images/json-100@4x.webp 4x', 
'json.png', 'JSON logo', 1),
(14, 
'xml-120.webp, ./images/xml-120@2x.webp 2x, ./images/xml-120@3x.webp 3x, ./images/xml-120@4x.webp 4x', 
'xml-110.webp, ./images/xml-110@2x.webp 2x, ./images/xml-110@3x.webp 3x, ./images/xml-110@4x.webp 4x', 
'xml-105.webp, ./images/xml-105@2x.webp 2x, ./images/xml-105@3x.webp 3x, ./images/xml-105@4x.webp 4x', 
'xml-100.webp, ./images/xml-100@2x.webp 2x, ./images/xml-100@3x.webp 3x, ./images/xml-100@4x.webp 4x', 
'xml.png', 'XML logo', 1),
(15, 
'mongodb-120.webp, ./images/mongodb-120@2x.webp 2x, ./images/mongodb-120@3x.webp 3x, ./images/mongodb-120@4x.webp 4x', 'mongodb-110.webp, ./images/mongodb-110@2x.webp 2x, ./images/mongodb-110@3x.webp 3x, ./images/mongodb-110@4x.webp 4x', 'mongodb-105.webp, ./images/mongodb-105@2x.webp 2x, ./images/mongodb-105@3x.webp 3x, ./images/mongodb-105@4x.webp 4x', 'mongodb-100.webp, ./images/mongodb-100@2x.webp 2x, ./images/mongodb-100@3x.webp 3x, ./images/mongodb-100@4x.webp 4x', 'mongodb.png', 'MongoDB logo', 1),
(16, 
'mysql-120.webp, ./images/mysql-120@2x.webp 2x, ./images/mysql-120@3x.webp 3x, ./images/mysql-120@4x.webp 4x', 'mysql-110.webp, ./images/mysql-110@2x.webp 2x, ./images/mysql-110@3x.webp 3x, ./images/mysql-110@4x.webp 4x', 'mysql-105.webp, ./images/mysql-105@2x.webp 2x, ./images/mysql-105@3x.webp 3x, ./images/mysql-105@4x.webp 4x', 'mysql-100.webp, ./images/mysql-100@2x.webp 2x, ./images/mysql-100@3x.webp 3x, ./images/mysql-100@4x.webp 4x', 
'mysql.png', 'MySQL logo', 1),
(17, 
'sqlite-120.webp, ./images/sqlite-120@2x.webp 2x, ./images/sqlite-120@3x.webp 3x, ./images/sqlite-120@4x.webp 4x', 'sqlite-110.webp, ./images/sqlite-110@2x.webp 2x, ./images/sqlite-110@3x.webp 3x, ./images/sqlite-110@4x.webp 4x', 'sqlite-105.webp, ./images/sqlite-105@2x.webp 2x, ./images/sqlite-105@3x.webp 3x, ./images/sqlite-105@4x.webp 4x', 'sqlite-100.webp, ./images/sqlite-100@2x.webp 2x, ./images/sqlite-100@3x.webp 3x, ./images/sqlite-100@4x.webp 4x', 'sqlite.png', 'SQLite logo', 1),
(18, 
'postgresql-120.webp, ./images/postgresql-120@2x.webp 2x, ./images/postgresql-120@3x.webp 3x, ./images/postgresql-120@4x.webp 4x', 
'postgresql-110.webp, ./images/postgresql-110@2x.webp 2x, ./images/postgresql-110@3x.webp 3x, ./images/postgresql-110@4x.webp 4x', 
'postgresql-105.webp, ./images/postgresql-105@2x.webp 2x, ./images/postgresql-105@3x.webp 3x, ./images/postgresql-105@4x.webp 4x', 
'postgresql-100.webp, ./images/postgresql-100@2x.webp 2x, ./images/postgresql-100@3x.webp 3x, ./images/postgresql-100@4x.webp 4x', 
'postgresql.png', 'PostgreSQL logo', 1),
(19, 
'wordpress-120.svg.webp, ./images/wordpress-120@2x.svg.webp 2x, ./images/wordpress-120@3x.svg.webp 3x, ./images/wordpress-120@4x.svg.webp 4x', 
'wordpress-110.svg.webp, ./images/wordpress-110@2x.svg.webp 2x, ./images/wordpress-110@3x.svg.webp 3x, ./images/wordpress-110@4x.svg.webp 4x', 
'wordpress-105.svg.webp, ./images/wordpress-105@2x.svg.webp 2x, ./images/wordpress-105@3x.svg.webp 3x, ./images/wordpress-105@4x.svg.webp 4x', 
'wordpress-100.svg.webp, ./images/wordpress-100@2x.svg.webp 2x, ./images/wordpress-100@3x.svg.webp 3x, ./images/wordpress-100@4x.svg.webp 4x', 
'wordpress.svg.png', 'WordPress logo', 1),
(20, 
'joomla-120.webp, ./images/joomla-120@2x.webp 2x, ./images/joomla-120@3x.webp 3x, ./images/joomla-120@4x.webp 4x', 'joomla-110.webp, ./images/joomla-110@2x.webp 2x, ./images/joomla-110@3x.webp 3x, ./images/joomla-110@4x.webp 4x', 'joomla-105.webp, ./images/joomla-105@2x.webp 2x, ./images/joomla-105@3x.webp 3x, ./images/joomla-105@4x.webp 4x', 'joomla-100.webp, ./images/joomla-100@2x.webp 2x, ./images/joomla-100@3x.webp 3x, ./images/joomla-100@4x.webp 4x', 'joomla.png', 'Joomla! logo', 1),
(21, 
'seo-120.webp, ./images/seo-120@2x.webp 2x, ./images/seo-120@3x.webp 3x, ./images/seo-120@4x.webp 4x', 
'seo-110.webp, ./images/seo-110@2x.webp 2x, ./images/seo-110@3x.webp 3x, ./images/seo-110@4x.webp 4x', 
'seo-105.webp, ./images/seo-105@2x.webp 2x, ./images/seo-105@3x.webp 3x, ./images/seo-105@4x.webp 4x', 
'seo-100.webp, ./images/seo-100@2x.webp 2x, ./images/seo-100@3x.webp 3x, ./images/seo-100@4x.webp 4x', 
'seo.png', 'SEO logo', 1),
(22, 
'docker-120.webp, ./images/docker-120@2x.webp 2x, ./images/docker-120@3x.webp 3x, ./images/docker-120@4x.webp 4x', 'docker-110.webp, ./images/docker-110@2x.webp 2x, ./images/docker-110@3x.webp 3x, ./images/docker-110@4x.webp 4x', 'docker-105.webp, ./images/docker-105@2x.webp 2x, ./images/docker-105@3x.webp 3x, ./images/docker-105@4x.webp 4x', 'docker-100.webp, ./images/docker-100@2x.webp 2x, ./images/docker-100@3x.webp 3x, ./images/docker-100@4x.webp 4x', 'docker.png', 'Docker logo', 1),
(23, 
'github-120.webp, ./images/github-120@2x.webp 2x, ./images/github-120@3x.webp 3x, ./images/github-120@4x.webp 4x', 'github-110.webp, ./images/github-110@2x.webp 2x, ./images/github-110@3x.webp 3x, ./images/github-110@4x.webp 4x', 'github-105.webp, ./images/github-105@2x.webp 2x, ./images/github-105@3x.webp 3x, ./images/github-105@4x.webp 4x', 'github-100.webp, ./images/github-100@2x.webp 2x, ./images/github-100@3x.webp 3x, ./images/github-100@4x.webp 4x', 'github.png', 'GitHub logo', 1),
(24, 
'apache-120.webp, ./images/apache-120@2x.webp 2x, ./images/apache-120@3x.webp 3x, ./images/apache-120@4x.webp 4x', 'apache-110.webp, ./images/apache-110@2x.webp 2x, ./images/apache-110@3x.webp 3x, ./images/apache-110@4x.webp 4x', 'apache-105.webp, ./images/apache-105@2x.webp 2x, ./images/apache-105@3x.webp 3x, ./images/apache-105@4x.webp 4x', 'apache-100.webp, ./images/apache-100@2x.webp 2x, ./images/apache-100@3x.webp 3x, ./images/apache-100@4x.webp 4x', 'apache.png', 'Apache logo', 1),
(25,
'dreamweaver-120.webp, ./images/dreamweaver-120@2x.webp 2x, ./images/dreamweaver-120@3x.webp 3x, ./images/dreamweaver-120@4x.webp 4x', 
'dreamweaver-110.webp, ./images/dreamweaver-110@2x.webp 2x, ./images/dreamweaver-110@3x.webp 3x, ./images/dreamweaver-110@4x.webp 4x', 
'dreamweaver-105.webp, ./images/dreamweaver-105@2x.webp 2x, ./images/dreamweaver-105@3x.webp 3x, ./images/dreamweaver-105@4x.webp 4x', 
'dreamweaver-100.webp, ./images/dreamweaver-100@2x.webp 2x, ./images/dreamweaver-100@3x.webp 3x, ./images/dreamweaver-100@4x.webp 4x', 
'dreamweaver.png', 'Adobe Dreamweaver logo', 1),
(26, 
'bridge-120.webp, ./images/bridge-120@2x.webp 2x, ./images/bridge-120@3x.webp 3x, ./images/bridge-120@4x.webp 4x', 'bridge-110.webp, ./images/bridge-110@2x.webp 2x, ./images/bridge-110@3x.webp 3x, ./images/bridge-110@4x.webp 4x', 'bridge-105.webp, ./images/bridge-105@2x.webp 2x, ./images/bridge-105@3x.webp 3x, ./images/bridge-105@4x.webp 4x', 'bridge-100.webp, ./images/bridge-100@2x.webp 2x, ./images/bridge-100@3x.webp 3x, ./images/bridge-100@4x.webp 4x', 'bridge.png', 'Bridge logo', 1),
(27, 
'lightroom-120.webp, ./images/lightroom-120@2x.webp 2x, ./images/lightroom-120@3x.webp 3x, ./images/lightroom-120@4x.webp 4x', 
'lightroom-110.webp, ./images/lightroom-110@2x.webp 2x, ./images/lightroom-110@3x.webp 3x, ./images/lightroom-110@4x.webp 4x', 
'lightroom-105.webp, ./images/lightroom-105@2x.webp 2x, ./images/lightroom-105@3x.webp 3x, ./images/lightroom-105@4x.webp 4x', 
'lightroom-100.webp, ./images/lightroom-100@2x.webp 2x, ./images/lightroom-100@3x.webp 3x, ./images/lightroom-100@4x.webp 4x', 
'lightroom.png', 'Lightroom logo', 1),
(28, 
'photoshop-120.webp, ./images/photoshop-120@2x.webp 2x, ./images/photoshop-120@3x.webp 3x, ./images/photoshop-120@4x.webp 4x', 
'photoshop-110.webp, ./images/photoshop-110@2x.webp 2x, ./images/photoshop-110@3x.webp 3x, ./images/photoshop-110@4x.webp 4x', 
'photoshop-105.webp, ./images/photoshop-105@2x.webp 2x, ./images/photoshop-105@3x.webp 3x, ./images/photoshop-105@4x.webp 4x', 
'photoshop-100.webp, ./images/photoshop-100@2x.webp 2x, ./images/photoshop-100@3x.webp 3x, ./images/photoshop-100@4x.webp 4x', 
'photoshop.png', 'Adobe Photoshop logo', 1),
(29, 
'illustrator-120.webp, ./images/illustrator-120@2x.webp 2x, ./images/illustrator-120@3x.webp 3x, ./images/illustrator-120@4x.webp 4x', 
'illustrator-110.webp, ./images/illustrator-110@2x.webp 2x, ./images/illustrator-110@3x.webp 3x, ./images/illustrator-110@4x.webp 4x', 
'illustrator-105.webp, ./images/illustrator-105@2x.webp 2x, ./images/illustrator-105@3x.webp 3x, ./images/illustrator-105@4x.webp 4x', 
'illustrator-100.webp, ./images/illustrator-100@2x.webp 2x, ./images/illustrator-100@3x.webp 3x, ./images/illustrator-100@4x.webp 4x', 
'illustrator.png', 'Adobe Illustrator logo', 1),
(30, 
'animate-120.webp, ./images/animate-120@2x.webp 2x, ./images/animate-120@3x.webp 3x, ./images/animate-120@4x.webp 4x', 'animate-110.webp, ./images/animate-110@2x.webp 2x, ./images/animate-110@3x.webp 3x, ./images/animate-110@4x.webp 4x', 'animate-105.webp, ./images/animate-105@2x.webp 2x, ./images/animate-105@3x.webp 3x, ./images/animate-105@4x.webp 4x', 'animate-100.webp, ./images/animate-100@2x.webp 2x, ./images/animate-100@3x.webp 3x, ./images/animate-100@4x.webp 4x', 'animate.png', 
'Adobe Animate logo', 1),
(31, 
'windows-120.webp, ./images/windows-120@2x.webp 2x, ./images/windows-120@3x.webp 3x, ./images/windows-120@4x.webp 4x', 'windows-110.webp, ./images/windows-110@2x.webp 2x, ./images/windows-110@3x.webp 3x, ./images/windows-110@4x.webp 4x', 'windows-105.webp, ./images/windows-105@2x.webp 2x, ./images/windows-105@3x.webp 3x, ./images/windows-105@4x.webp 4x', 'windows-100.webp, ./images/windows-100@2x.webp 2x, ./images/windows-100@3x.webp 3x, ./images/windows-100@4x.webp 4x', 'windows.png', 'Windows logo', 1),
(32, 
'ubuntu-120.webp, ./images/ubuntu-120@2x.webp 2x, ./images/ubuntu-120@3x.webp 3x, ./images/ubuntu-120@4x.webp 4x', 'ubuntu-110.webp, ./images/ubuntu-110@2x.webp 2x, ./images/ubuntu-110@3x.webp 3x, ./images/ubuntu-110@4x.webp 4x', 'ubuntu-105.webp, ./images/ubuntu-105@2x.webp 2x, ./images/ubuntu-105@3x.webp 3x, ./images/ubuntu-105@4x.webp 4x', 'ubuntu-100.webp, ./images/ubuntu-100@2x.webp 2x, ./images/ubuntu-100@3x.webp 3x, ./images/ubuntu-100@4x.webp 4x', 'ubuntu.png', 'Ubuntu logo', 1),
(33, 
'debian-120.webp, ./images/debian-120@2x.webp 2x, ./images/debian-120@3x.webp 3x, ./images/debian-120@4x.webp 4x', 'debian-110.webp, ./images/debian-110@2x.webp 2x, ./images/debian-110@3x.webp 3x, ./images/debian-110@4x.webp 4x', 'debian-105.webp, ./images/debian-105@2x.webp 2x, ./images/debian-105@3x.webp 3x, ./images/debian-105@4x.webp 4x', 'debian-100.webp, ./images/debian-100@2x.webp 2x, ./images/debian-100@3x.webp 3x, ./images/debian-100@4x.webp 4x', 'debian.png', 'Debian logo', 1),
(34, 
'fedora-120.webp, ./images/fedora-120@2x.webp 2x, ./images/fedora-120@3x.webp 3x, ./images/fedora-120@4x.webp 4x', 'fedora-110.webp, ./images/fedora-110@2x.webp 2x, ./images/fedora-110@3x.webp 3x, ./images/fedora-110@4x.webp 4x', 'fedora-105.webp, ./images/fedora-105@2x.webp 2x, ./images/fedora-105@3x.webp 3x, ./images/fedora-105@4x.webp 4x', 'fedora-100.webp, ./images/fedora-100@2x.webp 2x, ./images/fedora-100@3x.webp 3x, ./images/fedora-100@4x.webp 4x', 'fedora.png', 'Fedora logo', 1),
(35, 
'centos-120.webp, ./images/centos-120@2x.webp 2x, ./images/centos-120@3x.webp 3x, ./images/centos-120@4x.webp 4x', 'centos-110.webp, ./images/centos-110@2x.webp 2x, ./images/centos-110@3x.webp 3x, ./images/centos-110@4x.webp 4x', 'centos-105.webp, ./images/centos-105@2x.webp 2x, ./images/centos-105@3x.webp 3x, ./images/centos-105@4x.webp 4x', 'centos-100.webp, ./images/centos-100@2x.webp 2x, ./images/centos-100@3x.webp 3x, ./images/centos-100@4x.webp 4x', 'centos.png', 'CentOS logo', 1),
(36, 
'terminal-120.webp, ./images/terminal-120@2x.webp 2x, ./images/terminal-120@3x.webp 3x, ./images/terminal-120@4x.webp 4x', 
'terminal-110.webp, ./images/terminal-110@2x.webp 2x, ./images/terminal-110@3x.webp 3x, ./images/terminal-110@4x.webp 4x', 
'terminal-105.webp, ./images/terminal-105@2x.webp 2x, ./images/terminal-105@3x.webp 3x, ./images/terminal-105@4x.webp 4x', 
'terminal-100.webp, ./images/terminal-100@2x.webp 2x, ./images/terminal-100@3x.webp 3x, ./images/terminal-100@4x.webp 4x', 'terminal.png', 'CLI logo', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `fk_skills` FOREIGN KEY (`page_id`) REFERENCES `pages` (`page_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
