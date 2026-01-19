-- ===========================================
-- SQL File: create_certificate_category_map.sql
-- Purpose: Create the 'certificate_category_map' table
--          to map certificates to their categories (many-to-many relationship)
-- ===========================================

-- Drop the table if it already exists
DROP TABLE IF EXISTS `certificate_category_map`;

-- Create the table
CREATE TABLE IF NOT EXISTS `certificate_category_map` (

  -- Foreign key linking to a certificate
  `certificate_id` INT(11) UNSIGNED NOT NULL,

  -- Foreign key linking to a category
  `category_id` INT(10) UNSIGNED NOT NULL,

  -- Composite primary key ensures uniqueness of certificate-category pair
  PRIMARY KEY (`certificate_id`, `category_id`),

  -- Foreign key constraint: links to the certificates table
  -- Deleting a certificate will automatically remove its mappings
  CONSTRAINT `fk_map_cert` FOREIGN KEY (`certificate_id`)
      REFERENCES `certificates`(`certificate_id`)
      ON DELETE CASCADE
      ON UPDATE CASCADE,

  -- Foreign key constrai
