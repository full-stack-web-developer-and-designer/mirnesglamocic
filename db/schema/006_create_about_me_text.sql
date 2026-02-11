-- =========================================
-- Table: about_me_text
-- Description: About Me text paragraphs
-- =========================================

DROP TABLE IF EXISTS `about_me_text`;

CREATE TABLE `about_me_text` (
  `text_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `about_id` INT(10) UNSIGNED NOT NULL COMMENT 'Reference to about_me.about_id',
  `content` TEXT NOT NULL COMMENT 'Paragraph text',
  `sort_order` TINYINT(3) UNSIGNED DEFAULT 0,
  PRIMARY KEY (`text_id`),
  KEY `idx_about_text` (`about_id`),

  CONSTRAINT `fk_about_text`
    FOREIGN KEY (`about_id`)
    REFERENCES `about_me` (`about_id`)
    ON DELETE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='About Me text paragraphs';
