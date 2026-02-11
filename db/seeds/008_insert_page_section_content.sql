-- =========================================
-- Inserts for table: page_section_content
-- Description: Text content for page sections (paragraphs only)
-- =========================================

-- First, clear the about_me_text table
TRUNCATE TABLE `page_section_content`;

INSERT INTO page_section_content (page_id, section, block, content, position)
VALUES
(1, 'certificates', 'before_images',
 'However, in 2016, I decided to enroll in ITAcademy, a school for a profitable IT career in department of PHP WEB DEVELOPMENT.', 1),

(1, 'certificates', 'before_images',
 'After successfully completing that program, I was very satisfied with the education provided, and I decided to continue my education in the department of WEB DESIGN.', 2),

(1, 'certificates', 'after_images',
 'I enjoy coding and the challenge of learning something new everyday, so over time, I wanted to learn a lot more about the complete web development and design, and continued to educate myself through various web platforms, such as w3Schools, Pluralsight, Eduonix, Udemy, Educba, Shawn Academy, Cybrary and LinkedIn.', 1),

(1, 'certificates', 'after_images',
 'Through the mentioned web platforms, I received over 1000 certificates and their number is continuously growing.', 2),

(1, 'certificates', 'after_images',
 'Below you can find and see some of these certificates.', 3);
