-- ================================================
-- Table: resume_certifications
-- Description: Stores professional certifications
-- ================================================

-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `resume_certifications`;

CREATE TABLE `resume_certifications` (
    `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `page_id` INT(11) UNSIGNED NOT NULL COMMENT 'Reference to pages.page_id',
    `icon_class` VARCHAR(100),  -- The class for the icon (for example, 'linkedin', 'pluralsight')
    `icon_id` VARCHAR(100),     -- The icon ID used in the SVG sprite (e.g., 'icon-linkedin')
    `title` VARCHAR(255) NOT NULL,
    `sort_order` INT(11) DEFAULT 0,
    FOREIGN KEY (`page_id`) REFERENCES `pages`(`page_id`)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Resume certifications list';