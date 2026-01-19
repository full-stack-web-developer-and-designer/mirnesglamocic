-- =========================================
-- Table: ita_certificate
-- Description: Certificates obtained from ITAcademy
-- =========================================

DROP TABLE IF EXISTS `ita_certificate`;

CREATE TABLE `ita_certificate` (
  `ita_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'Reference to pages.page_id',

  `code` VARCHAR(45) NOT NULL COMMENT 'Certificate code (e.g. PHP, WD)',
  `href` VARCHAR(255) NOT NULL COMMENT 'Certificate file or external URL',
  `alt` VARCHAR(255) NOT NULL COMMENT 'Accessible alternative text',

  PRIMARY KEY (`ita_id`),
  KEY `idx_ita_certificate_page` (`page_id`),

  CONSTRAINT `fk_ita_certificate_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='ITAcademy certificates linked to pages';
