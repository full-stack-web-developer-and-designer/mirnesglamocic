-- ==================================================
-- Table: resume_projects
-- Description: Stores projects displayed in resume
-- ==================================================

-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `resume_projects`;

CREATE TABLE `resume_projects` (
    `project_id` INT(11) NOT NULL AUTO_INCREMENT,
    `page_id` INT(11) UNSIGNED NOT NULL COMMENT 'Reference to pages.page_id',
    `title` VARCHAR(255) NOT NULL COMMENT 'Project title',
    `description` TEXT COMMENT 'Project description and technologies used',
    `link` VARCHAR(255) NOT NULL COMMENT 'Live project URL',
    `github_link` VARCHAR(255) DEFAULT NULL COMMENT 'GitHub repository URL',
    `sort_order` INT(11) DEFAULT 0,  -- To order the projects
    
    -- Primary key
    PRIMARY KEY (`project_id`),
    KEY `idx_resume_projects_page` (`page_id`),
    CONSTRAINT `fk_resume_projects_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE

) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Resume projects section';
