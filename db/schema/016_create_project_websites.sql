-- --------------------------------------------------------
-- Table: project_websites
-- Description: Stores website-specific details for projects of category 'website'.
-- Each record is linked 1:1 with a project in the `projects` table.
-- --------------------------------------------------------

-- Drop the table if it already exists to allow clean re-creation
DROP TABLE IF EXISTS project_websites;

-- Create the project_websites table
CREATE TABLE project_websites (
    project_id INT UNSIGNED PRIMARY KEY,  
        -- Links directly to projects.project_id
        -- Each website project has exactly one record here
    
    -- Website-specific project details
    role VARCHAR(255) NOT NULL,               
        -- Role performed on the website project (e.g., Frontend Developer)
    
    skills VARCHAR(255) NOT NULL,             
        -- Skills used for the project (e.g., HTML, CSS, JS)
    
    features VARCHAR(255) NOT NULL,           
        -- Key features implemented in the project
    
    link VARCHAR(255) NOT NULL,               
        -- Live URL of the website project
    
    github VARCHAR(255) DEFAULT NULL,        
        -- Optional: GitHub repository link for the project
    
    -- Website images (for responsive display)
    img_1100 VARCHAR(255) NOT NULL,          
        -- Image for large screens (1100px width)
    
    img_1100_2x VARCHAR(255) NOT NULL,      
        -- Retina/high-DPI version of img_1100
    
    img_768 VARCHAR(255) NOT NULL,           
        -- Image for tablet screens (768px width)
    
    img_768_2x VARCHAR(255) NOT NULL,       
        -- Retina/high-DPI version of img_768
    
    img_375 VARCHAR(255) NOT NULL,           
        -- Image for mobile screens (375px width)
    
    img_375_2x VARCHAR(255) NOT NULL,       
        -- Retina/high-DPI version of img_375
    
    img VARCHAR(255) NOT NULL,               
        -- Default/fallback image
    
    CONSTRAINT fk_project_websites_project
        FOREIGN KEY (project_id) REFERENCES projects(project_id)
        ON DELETE CASCADE
        -- Ensures that if the parent project is deleted, its website details are also removed
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 
  COMMENT='Website-specific project details including images, skills, features, and links';
