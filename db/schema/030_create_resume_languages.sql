-- ======================================================
-- Table: resume_languages
-- Description: Stores languages and proficiency levels
-- ======================================================

-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `resume_languages`;

CREATE TABLE `resume_languages` (
  `language_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` INT UNSIGNED NOT NULL COMMENT 'Reference to pages.page_id',
  `language` VARCHAR(100) NOT NULL COMMENT 'Language name',
  `proficiency` VARCHAR(100) NOT NULL COMMENT 'Proficiency level (Native, Fluent, Intermediate, etc.)',

  PRIMARY KEY (`language_id`),
  KEY `idx_resume_languages_page` (`page_id`),

  CONSTRAINT `fk_resume_languages_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Resume languages with proficiency levels';