-- ===========================================
-- SQL File: insert_certificate_categories.sql
-- Purpose: Insert initial data into certificate_categories table
--          for testing or initial setup.
-- ===========================================

-- Insert certificate categories
-- Note: Ensure that the `pages` table already exists and has matching page_id values.

-- First, clear the certificate_categories table
TRUNCATE TABLE `certificate_categories`;

INSERT INTO `certificate_categories` (`name`, `slug`, `page_id`) VALUES
('Frontend', 'frontend', 2),         -- Frontend development courses
('Backend', 'backend', 3),           -- Backend development courses
('Database', 'database', 4),         -- Database-related courses
('Docker', 'docker', 12),            -- Docker and containerization
('Linux', 'linux', 13),              -- Linux and server courses
('WordPress', 'wordpress', 5),       -- WordPress-related courses
('Web Services', 'webservices', 6),  -- REST APIs, SOAP, etc.
('Web Design', 'webdesign', 7),      -- General web design
('UI/UX Design', 'ux', 8),           -- User Interface / User Experience
('SEO & Marketing', 'seo', 9),      -- SEO and online marketing
('Adobe Tools', 'adobe', 10),       -- Photoshop, Illustrator, Lightroom, etc.
('Version Control', 'github', 11);  -- Git and GitHub related courses

-- ===========================================
-- Notes:
-- 1. The `page_id` must correspond to a valid entry in the `pages` table.
-- 2. Slugs must be unique.
-- 3. This file can be safely run after creating the `certificate_categories` table.
-- ===========================================
