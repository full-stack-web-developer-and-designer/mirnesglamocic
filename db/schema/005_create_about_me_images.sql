-- =========================================
-- Table: about_me_images
-- Description: Multiple image versions for About Me section
-- =========================================

DROP TABLE IF EXISTS `about_me_images`;

CREATE TABLE `about_me_images` (
  `image_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `about_id` INT(10) UNSIGNED NOT NULL COMMENT 'Reference to about_me.about_id',

  `size_label` VARCHAR(20) NOT NULL COMMENT 'e.g. img_150, img_200, img_2x',
  `file_path` VARCHAR(255) NOT NULL COMMENT 'Relative image path or filename',
  `alt` VARCHAR(255) NOT NULL COMMENT 'Accessible alternative text',
  `sort_order` TINYINT(3) UNSIGNED DEFAULT 0,

  PRIMARY KEY (`image_id`),
  KEY `idx_about_images` (`about_id`),

  CONSTRAINT `fk_about_images`
    FOREIGN KEY (`about_id`)
    REFERENCES `about_me` (`about_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Multiple image versions for About Me section';
