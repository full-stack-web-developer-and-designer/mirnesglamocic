-- =============================================================
-- Table: resume_experience_point
-- Description: Stores bullet points for each experience entry
-- =============================================================

-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `resume_experience_points`;

CREATE TABLE `resume_experience_points` (
`point_id` INT(11) NOT NULL AUTO_INCREMENT,
`experience_id` INT(11) UNSIGNED NOT NULL COMMENT 'Reference to resume_experience.experience_id',
`description` TEXT NOT NULL COMMENT 'Bullet point description of responsibility or achievement',

PRIMARY KEY (`point_id`),

KEY `idx_resume_experience_points_exp` (`experience_id`),

CONSTRAINT `fk_resume_experience_points_exp`
    FOREIGN KEY (`experience_id`) 
    REFERENCES `resume_experience`(`experience_id`) 
    ON DELETE CASCADE
    ON UPDATE CASCADE

) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Experience bullet points';