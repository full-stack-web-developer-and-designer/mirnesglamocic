-- --------------------------------------------------------
-- Table: website_types
-- Description: Stores types or categories of websites (e.g., Fullstack, Mini Apps, WordPress)
-- Used to classify website projects in a human- and machine-readable way.
-- --------------------------------------------------------

-- Drop the table if it exists to allow a clean re-creation
DROP TABLE IF EXISTS website_types;

-- Create the table
CREATE TABLE website_types (
    website_type_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        -- Unique identifier for each website type

    name VARCHAR(50) NOT NULL UNIQUE,
        -- Human-readable name of the website type (e.g., "Fullstack Apps")
        -- Must be unique

    slug VARCHAR(50) NOT NULL UNIQUE
        -- URL-friendly version of the name (e.g., "fullstack-apps")
        -- Used for URLs and CSS classes
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Stores types/categories for website projects for filtering and organization';
