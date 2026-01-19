-- ===========================================
-- SQL File: certificate_categories.sql
-- Purpose: Creates the certificate_categories table
--          for storing categories of certificates,
--          linked to pages via a foreign key.
-- ===========================================

-- Drop the table if it already exists (prevents errors when re-running the script)
DROP TABLE IF EXISTS `certificate_categories`;

-- Create the table
CREATE TABLE IF NOT EXISTS `certificate_categories` (
  
  -- Primary key: Unique identifier for each category
  `category_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  
  -- Human-readable name of the category
  `name` VARCHAR(50) NOT NULL,
  
  -- Unique slug used for URLs or references
  `slug` VARCHAR(50) NOT NULL,
  
  -- Foreign key linking to the pages table
  `page_id` INT(10) UNSIGNED NOT NULL,
  
  -- Primary key constraint
  PRIMARY KEY (`category_id`),
  
  -- Ensure slugs are unique to avoid duplicates
  UNIQUE KEY `slug` (`slug`),
  
  -- Index for the foreign key to optimize queries
  KEY `fk_cert_cat_page` (`page_id`),
  
  -- Foreign key constraint linking to the pages table
  -- Ensures that deleting a page also deletes its categories
  CONSTRAINT `fk_cert_cat_page` FOREIGN KEY (`page_id`)
      REFERENCES `pages`(`page_id`)
      ON DELETE CASCADE
      ON UPDATE CASCADE

-- Table engine and character set
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Table with certificate categories linking to pages';