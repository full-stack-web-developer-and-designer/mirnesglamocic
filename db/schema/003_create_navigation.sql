-- =========================================
-- Table: navigation
-- Description: Stores main site navigation items
-- =========================================

DROP TABLE IF EXISTS `navigation`;

CREATE TABLE `navigation` (
  `nav_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` INT(10) UNSIGNED NOT NULL COMMENT 'Reference to pages.page_id',

  `label` VARCHAR(50) NOT NULL COMMENT 'Navigation label text',
  `link_type` ENUM('page', 'section') NOT NULL COMMENT 'Page link or in-page section link',
  `section_id` VARCHAR(50) DEFAULT NULL COMMENT 'HTML section ID when link_type = section',
  `target` ENUM('_self', '_blank') NOT NULL DEFAULT '_self' COMMENT 'Link target behavior',

  PRIMARY KEY (`nav_id`),
  KEY `idx_navigation_page_id` (`page_id`),

  CONSTRAINT `fk_navigation_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Navigation structure for site pages';
