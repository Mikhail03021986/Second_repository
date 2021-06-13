// Назначить обработчики события click после загрузки документа
$(document).ready(function(){
    $("#submit-id").on("click", function() {

        // Проверяем корректность заполнения полей
        if($.trim($("#nickname").val()) === "") {
            alert ( 'Пожалуйста заполните поле "Автор"');
            return false;
        }

        if($.trim($("#content") .val()) === "") {
            alert ( 'Пожалуйста заполните поле "Сообщение"');
            return false;
        }

        // Блокируем кнопку отправки
        $("#sutmit-id").prop("disabled", true);
        // AJAX-sanpoc
        $.ajax({
            url: "test2/addcom.php",
            method: 'post',
            data: {nickname: $("#nickname").val(),
            content: $("#content").val()}
            
        }).done(function(data){
            //  Успешное получение ответа
            $("#getcomment").html(data);
            $("#submit-id").prop("disabled", false);
            
        });
    })
});

