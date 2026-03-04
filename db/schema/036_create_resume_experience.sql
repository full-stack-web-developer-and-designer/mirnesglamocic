-- =============================================
-- Table: resume_experience
-- Description: Stores work experience entries
-- =============================================

-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `resume_experience`;

CREATE TABLE `resume_experience` (
  `experience_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` INT(11) UNSIGNED NOT NULL COMMENT 'Reference to pages.page_id',
  `job_title` VARCHAR(150) NOT NULL COMMENT 'Job position title',
  `company` VARCHAR(150) DEFAULT NULL COMMENT 'Company name',
  `location` VARCHAR(150) DEFAULT NULL COMMENT 'Work location (City, Country or Remote)',
  `start_year` VARCHAR(20) NOT NULL COMMENT 'Start date or year',
  `end_year` VARCHAR(20) DEFAULT NULL COMMENT 'End date or NULL if current',

  -- Primary key
  PRIMARY KEY (`experience_id`),

  -- Index for foreign key lookups
  KEY `idx_resume_experience_page` (`page_id`),

  CONSTRAINT `fk_resume_experience_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE

) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Resume work experience entries';