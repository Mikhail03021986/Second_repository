<!DOCTYPE html> 
<html lang='ru'> 
    <head>
    <link rel="stylesheet" href="test2/CSS/index.css">
    <title>Тест000</title>
    <meta charset='utf-8'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="test2/JS/form000.js"></script>

    </head>
    <body>
    <div id='form'>
        <div class='header'>
            <div class='head1'>
                <br><span class='info'>Телефон: (499) 340-94-71</span>
                <br><span class='info'>Email: </span><span class='info' style="text-decoration: underline">info@future-group.ru</span>
                <br><span class='info2'>Комментарии</span>
            </div>
            <div class='head2'><img src="test2/future_internet_agency.png" alt="logotype" width="100" heigh="100"></div>
        </div>

        <div class='center'>
            <div id='getcomment'> <?php require 'test2/addcom.php';?> </div>
            <p>
                <span style="font-size: 16pt"> Оставить комментарий </span>
            </p>
            <p>
                <span style="font-weight: bold">Ваше имя:</span>
                <span>
                    </br><textarea rows='1' cols='40'  id='nickname' type='text'></textarea>
                </span>
            </p>
            <p>
                <span style="font-weight: bold">Ваш комментарий:</span>
                <span>
                    </br><textarea style="background: #e8eaf6" rows='6' cols='40'  id='content' type='text'></textarea>
                </span>
            </p>
            <p>
                <span class='ttl'>&nbsp;</span>
                <span class='fld'>
                    <input id='submit-id' name='submit-id' type='submit' value='Отправить' />
                </span>
            </p>
        </div>
        <div class='footer'>
            <div class='foot1'><img src="test2/future_internet_agency.png" alt="logotype" width="120" heigh="120" align='left'></div>
            <div class='foot2'>
                <br><span class='info'>Телефон: (499) 340-94-71</span>
                <br><span class='info'>Email: </span><span class='info' style="text-decoration: underline">info@future-group.ru</span>
                <br><span class='info'>Адрес: </span><span class='info' style="text-decoration: underline">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</span>
                <br><br><span style="line-height: 4">&copy 2010 - 2014 Future. Все права защищены</span>
            </div>
        </div>
    </div>
    </body>
    </html>
