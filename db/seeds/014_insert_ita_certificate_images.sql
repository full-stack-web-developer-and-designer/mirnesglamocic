-- =========================================
-- Inserts for table: ita_certificate_images
-- Description: Image files for ITAcademy certificates
-- =========================================

-- First, clear the ita_certificate_images table
TRUNCATE TABLE `ita_certificate_images`;

INSERT INTO `ita_certificate_images` 
(`image_id`, `ita_id`, `size_label`, `file_path`) 
VALUES
-- PHP Certificate (ita_id = 1)
(1, 1, 'img_400', 'cert-php-1023.webp'),
(2, 1, 'img_300', 'cert-php-564.webp'),
(3, 1, 'img_250', 'cert-php-453.webp'),
(4, 1, 'img_200', 'cert-php-414.webp'),
(5, 1, 'img_180', 'cert-php-390.webp'),
(6, 1, 'img_170', 'cert-php-390.webp'),
(7, 1, 'img',     'cert-php.jpg'),

-- Web Design Certificate (ita_id = 2)
(8, 2, 'img_400', 'cert-wd-1023.webp'),
(9, 2, 'img_300', 'cert-wd-564.webp'),
(10, 2, 'img_250', 'cert-wd-453.webp'),
(11, 2, 'img_200', 'cert-wd-414.webp'),
(12, 2, 'img_180', 'cert-wd-390.webp'),
(13, 2, 'img_170', 'cert-wd-390.webp'),
(14, 2, 'img',     'cert-wd.jpg');
