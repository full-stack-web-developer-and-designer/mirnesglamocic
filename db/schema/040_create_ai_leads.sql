-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `ai_leads`;

CREATE TABLE `ai_leads` (

    `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `conversation_id` BIGINT UNSIGNED DEFAULT NULL,
    `name` VARCHAR(150) DEFAULT NULL,
    `email` VARCHAR(255) DEFAULT NULL,
    `phone` VARCHAR(100) DEFAULT NULL,
    `project_type` VARCHAR(150) DEFAULT NULL,
    `message` MEDIUMTEXT DEFAULT NULL,
    `status` ENUM(
        'new',
        'contacted',
        'converted',
        'closed'
    )
    NOT NULL DEFAULT 'new',


    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT fk_ai_leads_conversation

        FOREIGN KEY (`conversation_id`)
        REFERENCES `ai_conversations`(`id`)
        ON DELETE SET NULL,


    INDEX(`conversation_id`),
    INDEX(`status`),
    INDEX(`created_at`),
    INDEX(`email`)
)

ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;