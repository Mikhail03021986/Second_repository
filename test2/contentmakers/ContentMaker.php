<?php
namespace Contentmakers;
    class ContentMaker {
    use \Conn\BasicSet;
        public static function setContent()
        {
            # Проверяем, переданы ли POST-параметры, если не
            # переданы - выводим сообщение об этом, если ответ 
            # положительный, помещаем новое сообщение в БД
            # Устанавливаем соединение с БД
            $pdo = \Conn\DatabaseManager::getConnection();
            $error=[];
            if(empty($_POST['nickname'])) {$error[] = "Отсуствует автор";}
            if(empty($_POST['content'])) {$error[] = "Отсуствует сообщение";}
            # Если ошибок нет - помещаем сообщение в БД
            if(empty($error))
            {
                $usr = $pdo->prepare(\Conn\DatabaseManager::queryInsert());
                $usr->execute([
                    'nickname' => $_POST['nickname'],
                    'content' => $_POST['content'],
                ]);
            }

        }
        
        public static function getContent()
        {
            # Устанавливаем соединение с БД
            $pdo = \Conn\DatabaseManager::getConnection();

            # Выводим сообщения из даты размещения в порядке убывания
            $com = $pdo->query(\Conn\DatabaseManager::querySelect());

            while($comments = $com->fetch()) {

                # Обрабатываем сообщения перед выводом, чтобы исключить вставку js-кода
                $comments['nickname'] = htmlentities($comments['nickname'], ENT_QUOTES|ENT_HTML5);
                $comments['content'] = nl2br(htmlentities($comments['content'], ENT_QUOTES|ENT_HTML5));
                # Форматируем дату и время
                $pattern1 = ['-', ' '];
                $data1 = str_replace($pattern1, ":", $comments['created_at']);
                $dataArr = explode(":", $data1); 
                $dataParsed = "{$dataArr[3]}:{$dataArr[4]}&nbsp&nbsp&nbsp&nbsp{$dataArr[2]}.{$dataArr[1]}.{$dataArr[0]}";

                # Выводим сообщение
                print "<div>". "</br></br>". 
                "<span class='author'>{$comments['nickname']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>" .
                "<span class='date'>{$dataParsed}</span>" . "</br>" . 
                "<span class='content'>{$comments['content']}</span>".
                "</div>";

            }
        }
    }
