-- =========================================
-- Table: resume_education
-- Description: Stores education history
-- =========================================

-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `resume_education`;

CREATE TABLE `resume_education` (
    `education_id` INT(11) NOT NULL AUTO_INCREMENT,
    `page_id` INT(11) UNSIGNED NOT NULL COMMENT 'Reference to pages.page_id',
    `institution_name` VARCHAR(255) NOT NULL COMMENT 'Name of educational institution',
    `logo_url` VARCHAR(255) COMMENT 'Path to institution logo image',
    `degree` VARCHAR(255) COMMENT 'Degree or certification obtained',
    `location` VARCHAR(255) COMMENT 'Institution location',
    `duration` VARCHAR(100) COMMENT 'Study duration (e.g., 2016–2018)',
    `sort_order` INT(11) DEFAULT 0,

    -- Primary key
    PRIMARY KEY (`education_id`),

    -- Index for foreign key lookups
    KEY `idx_resume_education_page` (`page_id`),

    -- Foreign key constraint linking categories to pages
    CONSTRAINT `fk_resume_education_page`
      FOREIGN KEY (`page_id`)
      REFERENCES `pages` (`page_id`)
      ON DELETE CASCADE
      ON UPDATE CASCADE

) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Resume education history';