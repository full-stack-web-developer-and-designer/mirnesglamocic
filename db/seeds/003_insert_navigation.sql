-- =========================================
-- Inserts for table: navigation
-- Description: Navigation menu items
-- =========================================

-- First, clear the navigation table
TRUNCATE TABLE `navigation`;

INSERT INTO `navigation` 
(`nav_id`, `page_id`, `label`, `link_type`, `section_id`, `target`) 
VALUES
(1,  1, 'About Me',  'section', 'aboutme',   '_self'),
(2,  1, 'Certificates', 'section', 'certificates', '_self'),
(3,  1, 'Skills', 'section', 'skills', '_self'),
(4,  1, 'Services', 'section', 'services', '_self'),
(5,  1, 'Pricing', 'section', 'pricing', '_self'),
(6,  1, 'Contact', 'section', 'contact', '_self'),
(7, 14, 'Projects', 'page', NULL, '_self');
