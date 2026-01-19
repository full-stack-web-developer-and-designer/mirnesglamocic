-- --------------------------------------------------------
-- Table: projects
-- Description: Stores all projects including websites, Photoshop works, logos, and illustrations.
-- Each project belongs to a category (linked via category_id) and optionally to a page (page_id).
-- --------------------------------------------------------

-- Drop the table if it already exists to allow clean re-creation
DROP TABLE IF EXISTS projects;

-- Create the projects table
CREATE TABLE projects (
    project_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
        -- Unique ID for each project, automatically increments
    
    category_id INT UNSIGNED NOT NULL,                 
        -- Links to project_categories.category_id to identify type: 
        -- e.g., 1 = website, 2 = Photoshop, 3 = logo, 4 = illustration
    
    title VARCHAR(255) NOT NULL,                       
        -- Human-readable title of the project
    
    summary VARCHAR(500) NOT NULL,                     
        -- Short description or summary of the project; used for all project types
    
    page_id INT UNSIGNED NOT NULL DEFAULT 14,         
        -- Optional: ID of the page this project belongs to
        -- Default is 14 to match the Projects page
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,   
        -- Timestamp when the project was created; automatically set
    
    CONSTRAINT fk_projects_category
        FOREIGN KEY (category_id) REFERENCES project_categories(category_id)
        ON DELETE CASCADE
        -- Ensures that if a category is deleted, all related projects are also deleted
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='All projects: websites, Photoshop, logos, illustrations';
