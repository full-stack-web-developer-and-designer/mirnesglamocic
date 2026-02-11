-- =========================================
-- Inserts for table: about_me
-- Description: About Me section metadata
-- =========================================

-- First, clear the about_me table
TRUNCATE TABLE `about_me`;

INSERT INTO `about_me` (
  `page_id`,
  `heading`,
  `sort_order`
) VALUES (
  1,
  'About Me',
  1
);
