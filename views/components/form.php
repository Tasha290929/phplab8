<!-- views/components/form.php -->
<?php 
$title ="Оставить отзыв!";
$css = "stile.css";
require_once("../header.php");?>
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

<?php include_once("../footer.php");