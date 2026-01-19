-- =========================================
-- Table: ita_certificate_images
-- Description: Multiple image versions for ITAcademy certificates
-- =========================================

DROP TABLE IF EXISTS `ita_certificate_images`;

CREATE TABLE `ita_certificate_images` (
  `image_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key for images',
  `ita_id` INT(11) UNSIGNED NOT NULL COMMENT 'Reference to ita_certificate.ita_id',
  `size_label` VARCHAR(20) NOT NULL COMMENT 'Label for image size (e.g. img_400, img_300)',
  `file_path` VARCHAR(255) NOT NULL COMMENT 'Relative path or filename of the image',

  PRIMARY KEY (`image_id`),
  KEY `idx_ita_image_ita_id` (`ita_id`),
  
  CONSTRAINT `fk_ita_image_certificate`
    FOREIGN KEY (`ita_id`)
    REFERENCES `ita_certificate` (`ita_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Stores multiple image versions for ITAcademy certificates';
