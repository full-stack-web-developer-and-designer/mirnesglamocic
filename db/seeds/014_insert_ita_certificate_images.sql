-- =========================================
-- Inserts for table: ita_certificate_images
-- Description: Image files for ITAcademy certificates
-- =========================================

-- First, clear the ita_certificate_images table
TRUNCATE TABLE `ita_certificate_images`;

INSERT INTO `ita_certificate_images` (`image_id`, `ita_id`, `size_label`, `file_path`) VALUES
-- PHP Certificate (ita_id = 1)
(1, 1, 'img_400', 'cert-php-400.webp'),
(2, 1, 'img_400@2x', 'cert-php-400@2x.webp'),
(3, 1, 'img_300', 'cert-php-300.webp'),
(4, 1, 'img_300@2x', 'cert-php-300@2x.webp'),
(5, 1, 'img_250', 'cert-php-250.webp'),
(6, 1, 'img_250@2x', 'cert-php-250@2x.webp'),
(7, 1, 'img_200', 'cert-php-200.webp'),
(8, 1, 'img_200@2x', 'cert-php-200@2x.webp'),
(9, 1, 'img', 'cert-php-200.jpg'),
(10, 1, 'img@2x', 'cert-php-200@2x.jpg'),
(11, 1, 'img_full', 'big/cert-php.webp'),

-- Web Design Certificate (ita_id = 2)
(12, 2, 'img_400', 'cert-wd-400.webp'),
(13, 2, 'img_400@2x', 'cert-wd-400@2x.webp'),
(14, 2, 'img_300', 'cert-wd-300.webp'),
(15, 2, 'img_300@2x', 'cert-wd-300@2x.webp'),
(16, 2, 'img_250', 'cert-wd-250.webp'),
(17, 2, 'img_250@2x', 'cert-wd-250@2x.webp'),
(18, 2, 'img_200', 'cert-wd-200.webp'),
(19, 2, 'img_200@2x', 'cert-wd-200@2x.webp'),
(20, 2, 'img', 'cert-wd-200.jpg'),
(21, 2, 'img@2x', 'cert-wd-200@2x.jpg'),
(22, 2, 'img_full', 'big/cert-wd.webp');