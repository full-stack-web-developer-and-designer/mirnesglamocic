-- =========================================
-- Inserts for table: resume_language
-- Description: Languages and proficiency levels
-- =========================================

-- Clear existing data
TRUNCATE TABLE `resume_languages`;

INSERT INTO `resume_languages`
(`page_id`, `language`, `proficiency`)
VALUES
(17,'English','Fluent'),
(17,'Italian','Fluent'),
(17,'German','Intermediate'),
(17,'Slovenian','Intermediate'),
(17,'Bosnian','Native'),
(17,'Croatian','Native'),
(17,'Serbian','Native');