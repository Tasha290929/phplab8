<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/css/st.css">
    <title>Document</title>
    <style> 

.comment-form {
    width: 50%; /* Ширина формы */
    margin: 0 auto; /* Центрирование формы */
    padding: 20px; /* Внутренний отступ */
    border: 1px solid #ccc; /* Граница формы */
    border-radius: 5px; /* Закругление углов */
}

.form-group {
    margin-bottom: 20px; /* Отступ между элементами формы */
}

label {
    display: block; /* Размещаем метку на отдельной строке */
    font-weight: bold; /* Жирный шрифт для метки */
}

input[type="text"],
textarea {
    width: 100%; /* Ширина поля ввода */
    padding: 10px; /* Внутренний отступ поля ввода */
    border: 1px solid #ccc; /* Граница поля ввода */
    border-radius: 5px; /* Закругление углов поля ввода */
}

button.btn-submit {
    padding: 10px 20px; /* Внутренний отступ кнопки */
    background-color: #007bff; /* Цвет фона кнопки */
    color: #fff; /* Цвет текста кнопки */
    border: none; /* Убираем границу кнопки */
    border-radius: 5px; /* Закругление углов кнопки */
    cursor: pointer; /* Изменяем курсор при наведении */
}

button.btn-submit:hover {
    background-color: #0056b3; /* Цвет фона кнопки при наведении */
}

</style>
</head>
<body>
    
<!-- views/components/form.php -->
<?php 
$title ="Оставить отзыв!";
$css = "../css/st.css";
?>
<form action="handlers/form-handler.php" method="POST" class="comment-form">
    <div class="form-group">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="comment">Комментарий:</label>
        <textarea id="comment" name="comment" required></textarea>
    </div>
    <button type="submit" class="btn-submit">Отправить</button>
</form>



</body>
</html>