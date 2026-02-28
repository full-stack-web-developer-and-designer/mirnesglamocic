-- =========================================
-- Inserts for table: resume_skill
-- Description: Categorized resume skills
-- =========================================

-- Clear existing data
TRUNCATE TABLE `resume_skills`;

INSERT INTO `resume_skills`
(`page_id`, `category`, `name`, `sort_order`)
VALUES
(17,'Frontend','HTML5',1),
(17,'Frontend','CSS3',2),
(17,'Frontend','Bootstrap',3),
(17,'Frontend','JavaScript',4),
(17,'Frontend','jQuery',5),

(17,'Backend','PHP',6),

(17,'Databases','MySQL',7),

(17,'Design','Photoshop',7),
(17,'Design','Illustrator',7),
(17,'Design','Bridge',7),
(17,'Design','Dreamweaver',7),
(17,'Design','Responsive Design',7),
(17,'Design','UI/UX',7),

(17,'CMS','WordPress',8),

(17,'Tools','Git',9),
(17,'Tools','GitHub',10),
(17,'Tools','WAMP',11),
(17,'Tools','XAMPP',12),

(17,'Systems','Windows',13),
(17,'Systems','Linux',14),

(17,'Other','Performance Optimization',15),
(17,'Other','SEO',16),
(17,'Other','Accessibility',17);