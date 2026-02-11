-- =========================================
-- Inserts for table: about_me_text
-- Description: About Me text paragraphs
-- =========================================

-- First, clear the about_me_text table
TRUNCATE TABLE `about_me_text`;

INSERT INTO `about_me_text` (
  `about_id`,
  `content`,
  `sort_order`
) VALUES
(
  1,
  'I''m Mirnes Glamočić and I was born in Jajce, Bosnia and Herzegovina, where I currently live. Over the last 15 years, I''ve moved over 30 times across 6 countries—I love traveling!',
  1
),
(
  1,
  'I''m a dedicated full-stack web developer and designer focused on creating clean, modern, and performance-driven websites. I build intuitive UIs, stable backend solutions, and functional digital tools using best practices, responsive design, and optimized workflows.',
  2
),
(
  1,
  'I combine strong frontend skills with solid backend logic to deliver projects that are visually appealing, secure, and technically reliable.',
  3
),
(
  1,
  'I take pride in writing maintainable code, optimizing performance, and ensuring projects are structured, scalable, and user-friendly. I continuously explore new technologies and improve my skillset.',
  4
);
