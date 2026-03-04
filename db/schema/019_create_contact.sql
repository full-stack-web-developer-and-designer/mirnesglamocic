-- =========================================================
-- Table: contact
-- Description: Stores contact form submissions
-- Related to: pages.page_id (many contacts → one page)
-- Engine: InnoDB (required for foreign keys)
-- Charset: utf8mb4 (full Unicode support)
-- =========================================================

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  -- Primary key: unique identifier for each contact message
  `contact_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,

  -- Name of the person submitting the contact form
  `name` VARCHAR(255) NOT NULL,

  -- Email address of the sender
  `email` VARCHAR(255) NOT NULL,

  -- Message content sent via the contact form
  `message` TEXT NOT NULL,

  -- Date and time when the message was sent
  `dateSent` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

  -- Reference to the page from which the contact form was submitted
  `page_id` INT(11) UNSIGNED NOT NULL DEFAULT 1,

  -- Primary key
  PRIMARY KEY (`contact_id`),

  -- Index for foreign key lookups
  KEY `idx_contact_page_id` (`page_id`),

  -- Foreign key constraint linking to pages table
  CONSTRAINT `fk_contact_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE

) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Stores contact form messages submitted by users';
