<?php $rel = "./views/css/st.css";
//$css ="./views/css/st.css";

//$main = "../index.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $css ?>">
    <title><?php echo $title ?></title>
    <style>
.comment-form {
    max-width: 400px; /* Ширина формы */
    margin: 0 auto; /* Центрируем форму по горизонтали */
    background-color: #fff; /* Цвет фона формы */
    padding: 20px; /* Внутренний отступ формы */
    border-radius: 8px; /* Закругление углов формы */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Тень формы */
}

/* Стили для группы элементов формы */
.form-group {
    margin-bottom: 20px; /* Отступ между группами элементов */
}

/* Стили для меток */
.form-group label {
    display: block; /* Размещаем метки на новой строке */
    margin-bottom: 5px; /* Отступ снизу метки */
    font-weight: bold; /* Жирный шрифт для метки */
}

/* Стили для полей ввода */
.form-group input[type="text"],
.form-group textarea {
    width: 100%; /* Ширина поля ввода */
    padding: 10px; /* Внутренний отступ поля ввода */
    border: 1px solid #ccc; /* Граница поля ввода */
    border-radius: 5px; /* Закругление углов поля ввода */
    box-sizing: border-box; /* Размер содержимого поля ввода включает в себя границу и отступ */
}

/* Стили для кнопки отправки */
.btn-submit {
    display: block; /* Размещаем кнопку на новой строке */
    width: 100%; /* Ширина кнопки */
    padding: 10px; /* Внутренний отступ кнопки */
    background-color: #333; /* Цвет фона кнопки */
    color: #fff; /* Цвет текста кнопки */
    border: none; /* Убираем границу кнопки */
    border-radius: 5px; /* Закругление углов кнопки */
    cursor: pointer; /* Изменяем курсор при наведении на кнопку */
}

.btn-submit:hover {
    background-color: #555; /* Цвет фона кнопки при наведении */
}

</style>


    </style>
</head>
<body>
    <header>
        <h1><?php echo $title?></h1>
    </header>

    <nav>
        <ul>
            <li><a href="<?php echo $main ?>">Главная</a></li>
            <li><a href="<?php echo $view?>">Смотреть отзывы</a></li>
            <li><a href="<?php echo $otziv ?>">Оставить отзыв</a></li>
        </ul>
    </nav>
    

    <main>