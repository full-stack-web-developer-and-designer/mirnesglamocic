SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `mirnesgl_quizzer` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `mirnesgl_quizzer`;

DROP TABLE IF EXISTS `choices`;
CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'A relational database management system'),
(2, 1, 0, 'Developed, distributed, and supported by Oracle Corporation'),
(3, 1, 0, 'Cross-platform, open-source and free'),
(4, 1, 1, 'All the options are correct'),
(5, 2, 1, 'SELECT'),
(6, 2, 0, 'GET'),
(7, 2, 0, 'EXTRACT'),
(8, 2, 0, 'OPEN'),
(9, 3, 0, 'MODIFY'),
(10, 3, 0, 'INSERT'),
(11, 3, 1, 'UPDATE'),
(12, 3, 0, 'SAVE'),
(13, 4, 1, 'DELETE'),
(14, 4, 0, 'COLLAPSE'),
(15, 4, 0, 'REMOVE'),
(16, 5, 1, 'INSERT INTO'),
(17, 5, 0, 'ADD RECORD'),
(18, 5, 0, 'ADD NEW'),
(19, 5, 0, 'INSERT NEW'),
(20, 6, 1, 'SELECT FirstName FROM Persons'),
(21, 6, 0, 'SELECT Persons.FirstName'),
(22, 6, 0, 'EXTRACT FirstName FROM Persons'),
(23, 7, 1, 'SELECT * FROM Persons  '),
(24, 7, 0, 'SELECT *.Persons'),
(25, 7, 0, 'SELECT Persons'),
(26, 7, 0, 'SELECT [all] FROM Persons');

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_number` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'What is MySQL?'),
(2, 'Which MySQL statement is used to select data from a database?'),
(3, 'Which MySQL statement is used to update data in a database?'),
(4, 'Which MySQL statement is used to delete data from a database?'),
(5, 'Which MYSQL statement is used to insert new data in a database?'),
(6, 'With MySQL, how do you select a column named \"FirstName\" from a table named \"Persons\"?'),
(7, 'With MySQL, how do you select all the columns from a table named \"Persons\"?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
