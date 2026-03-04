-- =========================================
-- Inserts for table: resume_projects
-- Description: Resume projects section
-- =========================================

-- Clear existing data
TRUNCATE TABLE `resume_projects`;

INSERT INTO `resume_projects` (`page_id`, `title`, `description`, `link`, `sort_order`) VALUES
(17, 'Portfolio Website', 'Built using HTML, CSS, JavaScript, jQuery, PHP, MySQL', 'https://mirnesglamocic.com', 1),
(17, 'GitHub Projects', 'Frontend and backend web applications using PHP, MySQL, Bootstrap, jQuery, HTML and CSS', 'https://github.com/full-stack-web-developer-and-designer', 2);