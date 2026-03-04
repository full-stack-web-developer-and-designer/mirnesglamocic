-- =========================================
-- Inserts for table: resume_main
-- Description: Initial profile content for resume page
-- =========================================

-- Clear existing data
TRUNCATE TABLE `resume_main`;

INSERT INTO `resume_main`
(`page_id`, `profile_text`, `availability_text`, `created_at`, `updated_at`)
VALUES
(
17,
'Full-stack Web Developer and Designer with 10+ years building responsive, SEO-optimized websites using HTML, CSS, Bootstrap, JavaScript, jQuery, JSON, AJAX, XML, PHP, MySQL, as well as design tools including Photoshop, Illustrator, Bridge, and Dreamweaver. Experienced in WordPress development, SEO, Git & GitHub, WAMP/XAMPP environments, and various operating systems including Windows and Linux. Dedicated to delivering high-quality, functional, and visually appealing web solutions.',
'Available for freelance projects, long-term collaborations, and remote work.',
NOW(),
NOW()
);