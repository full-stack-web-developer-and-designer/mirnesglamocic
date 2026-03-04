-- =========================================
-- Table: certificate_ctas
-- Description: Stores CTA content for certificate pages
-- =========================================

-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `certificate_ctas`;

CREATE TABLE `certificate_ctas` (
    `cta_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `page_id` INT(10) UNSIGNED NOT NULL COMMENT 'FK to pages table',
    `title` VARCHAR(255) NOT NULL COMMENT 'CTA heading/title',
    `paragraph1` TEXT NOT NULL COMMENT 'First paragraph',
    `paragraph2` TEXT COMMENT 'Second paragraph',
    `paragraph3` TEXT COMMENT 'Third paragraph',
    `contact_link` VARCHAR(255) DEFAULT "./#contact" COMMENT 'URL for Contact button',
    `projects_link` VARCHAR(255) DEFAULT "projects" COMMENT 'URL for Projects button',
    
    -- Primary key
    PRIMARY KEY (`cta_id`),
    CONSTRAINT `fk_cta_page` FOREIGN KEY (`page_id`) REFERENCES `pages` (`page_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Stores CTA content for certificate pages';
