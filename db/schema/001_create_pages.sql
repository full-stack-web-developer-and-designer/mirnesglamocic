-- =========================================
-- Table: pages
-- Description: Stores website pages metadata
-- =========================================

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `page_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL COMMENT 'Page title',
  `slug` VARCHAR(100) NOT NULL COMMENT 'URL-friendly unique identifier',
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `uk_pages_slug` (`slug`)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Website pages table';
