-- ===========================================
-- SQL File: create_certificates_table.sql
-- Purpose: Create the 'certificates' table to store
--          individual certificates linked to descriptions.
-- ===========================================

-- Drop the table if it already exists to avoid conflicts
DROP TABLE IF EXISTS `certificates`;

-- Create the table
CREATE TABLE IF NOT EXISTS `certificates` (
  
  -- Primary key: Unique identifier for each certificate
  `certificate_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  
  -- Foreign key linking to the certificate description table
  `cert_desc_id` INT(11) UNSIGNED NOT NULL DEFAULT 1,
  
  -- URL or path to the certificate image
  `picture` VARCHAR(255) NOT NULL,
  
  -- Alternative text for the certificate image
  `alt` VARCHAR(255) NOT NULL,
  
  -- Source of the certificate: LinkedIn, SoloLearn, Pluralsight, or Other
  `source` ENUM('LinkedIn','SoloLearn','Pluralsight','Other') NOT NULL,
  
  -- Primary key constraint
  PRIMARY KEY (`certificate_id`),
  
  -- Index for foreign key (optimizes queries)
  KEY `fk_cert_desc` (`cert_desc_id`),
  
  -- Foreign key constraint: links to the cert_desc table
  -- Ensures that deleting a description cascades to certificates
  CONSTRAINT `fk_cert_desc` FOREIGN KEY (`cert_desc_id`)
      REFERENCES `cert_desc`(`cert_desc_id`)
      ON DELETE CASCADE
      ON UPDATE CASCADE

-- Table engine and charset
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Table storing individual certificates linked to descriptions';

-- ===========================================
-- Notes:
-- 1. Ensure the 'cert_desc' table exists before running this file.
-- 2. Each certificate must have a valid cert_desc_id.
-- 3. This table can be safely recreated by dropping it first.
-- ===========================================
