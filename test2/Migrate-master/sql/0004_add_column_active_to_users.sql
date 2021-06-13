-- Новая колонка `active` таблицы `comments`
ALTER TABLE
    `comments`
ADD
    `active` TINYINT UNSIGNED NOT NULL DEFAULT '0'
AFTER
    `is_visible`;
