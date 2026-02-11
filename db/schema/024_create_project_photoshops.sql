-- --------------------------------------------------------
-- Table: project_photoshop
-- Description: Stores Photoshop project images at multiple resolutions.
-- Each row corresponds to a single project, linked to the main projects table.
-- --------------------------------------------------------

-- Drop the table if it already exists to allow fresh creation
DROP TABLE IF EXISTS project_photoshop;

-- Create the table
CREATE TABLE project_photoshop (
    project_id INT UNSIGNED PRIMARY KEY,
        -- References the project in the main projects table
        -- Ensures one-to-one relationship (one Photoshop project per project)

    big_img   VARCHAR(255) NOT NULL,
        -- Full-size image for lightbox display

    img_576   VARCHAR(255) NOT NULL,
    img_530   VARCHAR(255) NOT NULL,
    img_500   VARCHAR(255) NOT NULL,
    img_450   VARCHAR(255) NOT NULL,
    img_408   VARCHAR(255) NOT NULL,
    img_350   VARCHAR(255) NOT NULL,
    img_282   VARCHAR(255) NOT NULL,
        -- Resized images for responsive display at different screen widths

    img       VARCHAR(255) NOT NULL,
        -- Default or smallest image for mobile devices / lazy loading

    CONSTRAINT fk_project_photoshop_project
        FOREIGN KEY (project_id)
        REFERENCES projects(project_id)
        ON DELETE CASCADE
        -- If a project is deleted, all associated Photoshop images are automatically deleted
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Photoshop project images table with multiple responsive sizes';
