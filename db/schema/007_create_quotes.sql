-- =========================================
-- Table: quotes
-- Description:
-- Stores inspirational quotes
-- =========================================

DROP TABLE IF EXISTS `quotes`;

CREATE TABLE `quotes` (
  `quote_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` INT(10) UNSIGNED NOT NULL COMMENT 'Reference to pages.page_id',

  `quote_text` VARCHAR(255) NOT NULL COMMENT 'Quote content',
  `author` VARCHAR(100) DEFAULT NULL COMMENT 'Quote author',
  `sort_order` TINYINT(3) UNSIGNED DEFAULT 0 COMMENT 'Display order',

  PRIMARY KEY (`quote_id`),
  KEY `idx_quotes_page` (`page_id`),

  CONSTRAINT `fk_quotes_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Quotes displayed on pages';
