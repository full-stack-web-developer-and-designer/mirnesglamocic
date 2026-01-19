-- =========================================================
-- Seed data for table: project_categories
-- Description: Default categories for projects
-- Each category belongs to page_id = 14
-- =========================================================

-- First, clear the project_categories table
TRUNCATE TABLE `project_categories`;

-- Insert default categories
INSERT INTO `project_categories` (`category_id`, `name`, `slug`, `page_id`) VALUES
    (1, 'Websites', 'websites', 14),
    (2, 'Photoshop', 'photoshop', 14),
    (3, 'Illustrations', 'illustrations', 14),
    (4, 'Logos', 'logos', 14);