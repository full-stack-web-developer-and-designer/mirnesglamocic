-- =============================================
-- Inserts for table: resume_contact
-- Description: Contact details for resume page
-- =============================================

-- Clear existing data
TRUNCATE TABLE `resume_contact`;

INSERT INTO `resume_contact`
(`page_id`, `type`, `value`, `icon`, `sort_order`)
VALUES
(17, 'email', 'contact@mirnesglamocic.com', 'fas fa-envelope', 1),
(17, 'website', 'https://mirnesglamocic.com', 'fas fa-globe', 2),
(17, 'github', 'https://github.com/full-stack-web-developer-and-designer', 'fab fa-github', 3),
(17, 'linkedin', 'https://www.linkedin.com/in/mirnesglamocic', 'fab fa-linkedin', 4),
(17, 'phone', '+387 63 734 327', 'fas fa-phone', 5),
(17, 'address', 'Jajce, Bosnia & Herzegovina', 'fas fa-map-marker-alt', 6);