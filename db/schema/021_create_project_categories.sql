-- =========================================================
-- Table: project_categories
-- Description: Stores project categories used to group projects
-- Each category belongs to a specific page
-- Related table: pages (page_id)
-- =========================================================

DROP TABLE IF EXISTS `project_categories`;

CREATE TABLE `project_categories` (
  -- Primary key: unique identifier for each category
  `category_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,

  -- Human-readable category name (e.g. "WordPress", "Frontend")
  `name` VARCHAR(100) NOT NULL,

  -- URL-friendly identifier (used in routes and URLs)
  `slug` VARCHAR(50) NOT NULL,

  -- Reference to the page this category belongs to
  -- Defaults to page_id = 14
  `page_id` INT(10) UNSIGNED NOT NULL DEFAULT 14,

  -- Primary key
  PRIMARY KEY (`category_id`),

  -- Slug must be unique across categories
  UNIQUE KEY `uk_project_categories_slug` (`slug`),

  -- Index for foreign key lookups
  KEY `idx_project_categories_page_id` (`page_id`),

  -- Foreign key constraint linking categories to pages
  CONSTRAINT `fk_project_categories_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE

) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Project categories associated with pages';
