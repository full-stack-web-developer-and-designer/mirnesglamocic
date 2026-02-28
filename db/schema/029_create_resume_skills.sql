-- ==========================================================
-- Table: resume_skills
-- Description: Stores categorized skills for a resume page
-- ==========================================================

-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `resume_skills`;

CREATE TABLE `resume_skills` (
  `skill_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` INT UNSIGNED NOT NULL COMMENT 'Reference to pages.page_id',
  `category` VARCHAR(100) NOT NULL COMMENT 'Skill category (Frontend, Backend, Tools, etc.)',
  `name` VARCHAR(100) NOT NULL COMMENT 'Skill name',
  `sort_order` INT UNSIGNED NOT NULL COMMENT 'Display order within category',

  -- Primary key
  PRIMARY KEY (`skill_id`),

  -- Index for foreign key lookups
  KEY `idx_resume_skills_page` (`page_id`),

  CONSTRAINT `fk_resume_skills_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB 
  DEFAULT CHARSET=utf8mb4 
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Resume skills grouped by category';