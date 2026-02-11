-- =========================================
-- Inserts for table: pages
-- Description: Initial pages for the website
-- =========================================

-- First, clear the pages table
TRUNCATE TABLE `pages`;

INSERT INTO `pages` (`page_id`, `title`, `slug`) VALUES
(1,  'Web Development, UI/UX and Web Design', 'web-development-ui-ux-web-design'),
(2,  'Front-end Certificates', 'front-end-certificates'),
(3,  'Back-end Certificates', 'back-end-certificates'),
(4,  'Database Certificates', 'database-certificates'),
(5,  'WordPress certificates', 'wordpress-certificates'),
(6,  'Web Services Certificates', 'web-services-certificates'),
(7,  'Web Design Certificates', 'web-design-certificates'),
(8,  'UI/UX Design Certificates', 'ui-ux-design-certificates'),
(9,  'SEO Certificates', 'seo-certificates'),
(10, 'Adobe CC Certificates', 'adobe-cc-certificates'),
(11, 'Version Control Certificates', 'version-control-certificates'),
(12, 'Docker Certificates', 'docker-certificates'),
(13, 'Linux Certificates', 'linux-certificates'),
(14, 'Projects', 'projects'),
(15, 'Forbidden!', 'forbidden'),
(16, 'Not Found!', 'not-found');
