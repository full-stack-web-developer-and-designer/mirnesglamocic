-- =========================================
-- Table: skills
-- Description:
-- Stores technical and professional skills used in the portfolio.
-- Each skill is linked to an SVG icon, optional category grouping,
-- display order, and an associated page.
-- Designed for flexible sorting and structured presentation.
-- =========================================

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `skill_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon_id` varchar(100) NOT NULL COMMENT 'SVG symbol ID',
  `category` varchar(50) DEFAULT NULL,
  `sort_order` tinyint(3) UNSIGNED DEFAULT 0,
  `page_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `category_order` tinyint(3) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci 
COMMENT='Portfolio skills using SVG sprite icons';

-- Indexes
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`),
  ADD UNIQUE KEY `uniq_skill_icon` (`icon_id`),
  ADD KEY `idx_skills_page` (`page_id`);

-- Auto increment
ALTER TABLE `skills`
  MODIFY `skill_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

-- Foreign key constraint
ALTER TABLE `skills`
  ADD CONSTRAINT `fk_skills_page` FOREIGN KEY (`page_id`) REFERENCES `pages` (`page_id`) ON DELETE CASCADE ON UPDATE CASCADE;
