-- ================================================================
-- Table: resume_main
-- Description: Stores main profile information for a resume page
-- ================================================================

-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `resume_main`;

CREATE TABLE `resume_main` (
  `resume_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` INT UNSIGNED NOT NULL COMMENT 'Reference to pages.page_id',
  `profile_text` TEXT NOT NULL COMMENT 'Professional summary/profile description',
  `availability_text` VARCHAR(255) NOT NULL COMMENT 'Availability or status text (e.g., Open to Work)',
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NOT NULL,

  -- Primary key
  PRIMARY KEY (`resume_id`),

  -- Index for foreign key lookups
  KEY `idx_resume_main_page_id` (`page_id`),

  CONSTRAINT `fk_resume_main_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB 
  DEFAULT CHARSET=utf8mb4 
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Resume main profile section';