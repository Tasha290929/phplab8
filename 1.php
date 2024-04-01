<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/css/st.css">
    <title>Document</title>
 
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