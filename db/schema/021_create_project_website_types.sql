-- --------------------------------------------------------
-- Table: project_website_types
-- Description: Many-to-many relationship table linking projects to website types.
-- Each project can belong to multiple website types (e.g., Fullstack, Mini Apps),
-- and each website type can have multiple projects.
-- --------------------------------------------------------

-- Drop the table if it exists to allow a fresh creation
DROP TABLE IF EXISTS project_website_types;

-- Create the table
CREATE TABLE project_website_types (
    project_id INT UNSIGNED NOT NULL,
        -- References the project (from project_websites table)
        -- Part of composite primary key

    website_type_id INT UNSIGNED NOT NULL,
        -- References the website type (from website_types table)
        -- Part of composite primary key

    PRIMARY KEY (project_id, website_type_id),
        -- Composite primary key ensures no duplicate project-type assignments

    FOREIGN KEY (project_id) 
        REFERENCES project_websites(project_id) 
        ON DELETE CASCADE,
        -- If a project is deleted, related entries here are automatically removed

    FOREIGN KEY (website_type_id) 
        REFERENCES website_types(website_type_id) 
        ON DELETE CASCADE
        -- If a website type is deleted, related entries here are automatically removed
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Pivot table linking projects to website types for many-to-many relationships';
