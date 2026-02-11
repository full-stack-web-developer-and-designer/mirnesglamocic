-- =========================================
-- Table: about_me
-- Description: About Me section metadata
-- =========================================

DROP TABLE IF EXISTS `about_me`;

CREATE TABLE `about_me` (
  `about_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'Reference to pages.page_id',
  `heading` VARCHAR(100) NOT NULL COMMENT 'Section heading',
  `sort_order` TINYINT(3) UNSIGNED DEFAULT 0,
  PRIMARY KEY (`about_id`),
  UNIQUE KEY `uk_about_page` (`page_id`),
  KEY `idx_about_page` (`page_id`),

  CONSTRAINT `fk_about_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='About Me section metadata';
