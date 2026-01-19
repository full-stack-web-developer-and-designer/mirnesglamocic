-- =========================================
-- Table: meta
-- Description: Stores SEO and social metadata per page
-- =========================================

DROP TABLE IF EXISTS `meta`;

CREATE TABLE `meta` (
  `meta_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` INT(10) UNSIGNED NOT NULL COMMENT 'Reference to pages.page_id',

  `title` VARCHAR(255) NOT NULL COMMENT 'Meta title',
  `description` TEXT NOT NULL COMMENT 'Meta description',

  `og_url` VARCHAR(255) NOT NULL COMMENT 'Open Graph URL',
  `og_image` VARCHAR(255) NOT NULL COMMENT 'Open Graph image path',
  `twitter_image` VARCHAR(255) NOT NULL COMMENT 'Twitter card image path',

  `css` VARCHAR(255) NOT NULL COMMENT 'Optional page-specific CSS file',

  `created_at` DATETIME NOT NULL COMMENT 'Creation timestamp',
  `updated_at` DATETIME NOT NULL COMMENT 'Last update timestamp',

  PRIMARY KEY (`meta_id`),
  KEY `idx_meta_page_id` (`page_id`),

  CONSTRAINT `fk_meta_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='SEO metadata for pages';
