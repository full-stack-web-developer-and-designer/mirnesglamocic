-- =========================================================
-- Inserts for table: resume_certifications
-- Description: Professional certifications for resume page
-- =========================================================
-- Clear existing data
TRUNCATE TABLE `resume_certifications`;

INSERT INTO `resume_certifications` (`page_id`, `icon_class`, `icon_id`, `title`, `sort_order`) VALUES
(17, 'linkedin', 'icon-linkedin', 'WordPress, Web Development & Web Design', 1),
(17, 'pluralsight', 'icon-pluralsight', 'Front-End and Back-End Development', 2),
(17, 'sololearn', 'icon-sololearn', 'HTML, CSS, JavaScript, jQuery, PHP, SQL', 3);