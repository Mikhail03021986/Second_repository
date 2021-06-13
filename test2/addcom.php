<?php
    require __DIR__ . './../vendor/autoload.php';
    require __DIR__ . './../env.php';
    use Conn\DatabaseManager, Contentmakers\ContentMaker;

    try {
        if (!empty($_POST)) {
            # Соединяемся с БД, проверяем контент, добавляем в БД
            ContentMaker::setContent();
        }

        # Соединяемся (если нет соединения) с БД, проверяем контент, выводим из БД
        ContentMaker::getContent();

    } catch (\PDOException $e) {
        print "Ошибка выполнения запроса: " . $e->getMessage();
    }
