/*
|--------------------------------------------------------------------------
| Table: cert_desc
|--------------------------------------------------------------------------
| Purpose:
|   Stores descriptive data for certifications displayed on the website.
|   Each record represents a single certificate with its visual icon,
|   SEO-friendly slug, textual description, and page association.
|
| Columns:
|   cert_desc_id  - Primary key identifier (auto-incremented).
|   icon_id       - SVG symbol ID used for rendering the certificate icon.
|   title         - Human-readable certificate title.
|   description   - Full textual description of the certificate.
|   slug          - Unique SEO-friendly identifier used in URLs.
|   page_id       - Foreign key reference to the pages table.
|
| Relationships:
|   cert_desc.page_id → pages.page_id
|   - ON DELETE CASCADE
|   - ON UPDATE CASCADE
|
| Notes:
|   - Slug must be unique to prevent routing conflicts.
|   - utf8mb4 is used to support multilingual content.
|   - Description is stored as TEXT to allow flexible content length.
|--------------------------------------------------------------------------
*/
DROP TABLE IF EXISTS `cert_desc`;
CREATE TABLE `cert_desc` (
  `cert_desc_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `icon_id` VARCHAR(100) NOT NULL COMMENT 'SVG symbol ID',
  `title` VARCHAR(150) NOT NULL,
  `description` TEXT NOT NULL,
  `slug` VARCHAR(255) NOT NULL COMMENT 'Relative URL or slug',
  `page_id` INT UNSIGNED NOT NULL DEFAULT 1,

  PRIMARY KEY (`cert_desc_id`),
  UNIQUE KEY `uniq_cert_slug` (`slug`),
  KEY `idx_page_id` (`page_id`),

  CONSTRAINT `fk_cert_desc_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages`(`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci
COMMENT='Table with description about certifications.';
