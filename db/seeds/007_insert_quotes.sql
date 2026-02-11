-- =========================================
-- Inserts for table: quotes
-- Description: Stores inspirational quotes
-- =========================================

-- First, clear the quotes table
TRUNCATE TABLE `quotes`;

INSERT INTO `quotes` (`page_id`, `quote_text`, `author`, `sort_order`) VALUES
(1, 'If you really want to do something, you''ll find a way. If you don''t, you''ll find an excuse.', 'Pablo Picasso', 1),
(1, 'Live as if you were to die tomorrow. Learn as if you were to live forever.', 'Mahatma Gandhi', 2),
(1, 'Choose a job you love, and you will never have to work a day in your life.', 'Confucius', 3);
