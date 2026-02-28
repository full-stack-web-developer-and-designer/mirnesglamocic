-- ======================================================
-- Table: resume_contact
-- Description: Stores contact details for a resume page
-- ======================================================

-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `resume_contact`;

CREATE TABLE `resume_contact` (
  `contact_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` INT UNSIGNED NOT NULL COMMENT 'Reference to pages.page_id',
  `type` VARCHAR(50) NOT NULL COMMENT 'Contact type (email, phone, address, website, linkedin, github, etc.)',
  `value` VARCHAR(255) NOT NULL COMMENT 'Contact value (email address, phone number, URL, etc.)',
  `icon` VARCHAR(50) NOT NULL COMMENT 'CSS class for icon display',
  `sort_order` INT UNSIGNED NOT NULL,

  -- Primary key
  PRIMARY KEY (`contact_id`),

  -- Index for foreign key lookups
  KEY `idx_resume_contact_page` (`page_id`),

  CONSTRAINT `fk_resume_contact_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB 
  DEFAULT CHARSET=utf8mb4 
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Resume contact information';