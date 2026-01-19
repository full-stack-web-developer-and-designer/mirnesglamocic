-- --------------------------------------------------------
-- Table: project_images
-- Description: Stores images for general projects such as logos and illustrations.
-- Each project can have exactly one main image in this table.
-- Linked to the main 'projects' table via project_id.
-- --------------------------------------------------------

-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `project_images`;

-- Create the table
CREATE TABLE `project_images` (
    project_id INT UNSIGNED PRIMARY KEY,
        -- References the project in the main 'projects' table
        -- Ensures a one-to-one relationship: one image per project

    image VARCHAR(255) NOT NULL,
        -- File name of the image (relative to image folder)
        -- Example: 'factory.jpg' or 'bullseye-logo.jpg'

    CONSTRAINT fk_project_images_project
        FOREIGN KEY (project_id)
        REFERENCES projects(project_id)
        ON DELETE CASCADE
        -- If the linked project is deleted, the image record is automatically deleted
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='General project images table for logos and illustrations';
