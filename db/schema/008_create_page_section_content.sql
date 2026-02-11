-- =========================================
-- Table: page_section_content
-- Description: Text content for page sections (paragraphs only)
-- =========================================

DROP TABLE IF EXISTS `page_section_content`;

CREATE TABLE `page_section_content` (
  `content_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` INT(10) UNSIGNED NOT NULL COMMENT 'Reference to pages.page_id',

  `section` VARCHAR(50) NOT NULL COMMENT 'Section identifier (e.g. certificates)',
  `block` VARCHAR(50) NOT NULL COMMENT 'Content block (e.g. before_images, after_images)',
  `content` TEXT NOT NULL COMMENT 'Text content (one paragraph per row)',

  `position` TINYINT UNSIGNED NOT NULL DEFAULT 1 COMMENT 'Order inside block',

  PRIMARY KEY (`content_id`),
  KEY `idx_page_section` (`page_id`, `section`),

  CONSTRAINT `fk_section_content_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Stores structured text content for page sections (paragraphs only)';
