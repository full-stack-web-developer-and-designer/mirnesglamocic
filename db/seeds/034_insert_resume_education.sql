-- =========================================
-- Inserts for table: resume_education
-- Description: Education history for resume page
-- =========================================
-- Clear existing data
TRUNCATE TABLE `resume_education`;

INSERT INTO `resume_education` (`page_id`, `institution_name`, `logo_url`, `degree`, `location`, `duration`, `sort_order`) VALUES
(17, 'ITAcademy by LINKgroup', '/images/itacademy.jfif', 'PHP Web Development & Web Design', 'Belgrade, Serbia', 'Sep 2016 - Jun 2018', 1);