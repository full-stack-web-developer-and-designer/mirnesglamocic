-- =========================================================
-- Table: support
-- Description: Stores external support / donation links
-- Related to: pages.page_id (many support links → one page)
-- Engine: InnoDB (required for foreign keys)
-- Charset: utf8mb4 (full Unicode support)
-- =========================================================

DROP TABLE IF EXISTS `support`;

CREATE TABLE `support` (
  -- Primary key: unique identifier for each support link
  `support_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,

  -- Reference to the page where the support icon is displayed
  `page_id` INT(10) UNSIGNED NOT NULL,

  -- URL to the external support platform
  `href` VARCHAR(2048) NOT NULL,

  -- Accessible label (ARIA) for screen readers
  `aria` VARCHAR(255) NOT NULL,

  -- Identifier for the icon (e.g. buymeacoffee, kofi, github-sponsors)
  `icon_id` VARCHAR(100) NOT NULL,

  -- Primary key
  PRIMARY KEY (`support_id`),

  -- Index for foreign key lookups
  KEY `idx_support_page_id` (`page_id`),

  -- Foreign key constraint linking to pages table
  CONSTRAINT `fk_support_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE

) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Stores support and donation links displayed on pages';
