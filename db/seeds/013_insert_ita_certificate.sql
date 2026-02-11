-- =========================================
-- Inserts for table: ita_certificate
-- Description: ITAcademy certificates
-- =========================================

-- First, clear the ita_certificate table
TRUNCATE TABLE `ita_certificate`;

INSERT INTO `ita_certificate` 
(`ita_id`, `code`, `href`, `alt`, `page_id`) 
VALUES
(1, 'PHP', 'cert-php.jpg', 'ITAcademy Certificate PHP Web Development by Mirnes Glamočić', 1),
(2, 'WD',  'cert-wd.jpg',  'ITAcademy Certificate Web Design by Mirnes Glamočić', 1);
