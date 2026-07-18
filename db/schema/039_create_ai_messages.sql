-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `ai_messages`;

CREATE TABLE `ai_messages` (

    `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    `conversation_id` BIGINT UNSIGNED NOT NULL,

    `role` ENUM(
        'visitor',
        'assistant',
        'system'
    )
    NOT NULL DEFAULT 'visitor',

    `message` MEDIUMTEXT NOT NULL,

    `model` VARCHAR(100) DEFAULT NULL,

    `tokens` INT UNSIGNED DEFAULT 0,

    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,


    CONSTRAINT fk_ai_messages_conversation

        FOREIGN KEY (`conversation_id`)

        REFERENCES `ai_conversations`(`id`)

        ON DELETE CASCADE,


    INDEX(`conversation_id`),
    INDEX(`role`),
    INDEX(`created_at`)

)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;