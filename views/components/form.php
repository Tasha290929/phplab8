<?php 
$title = "Leave a Comment";
$css = "../css/st.css";
$main = "../../index.php";
$view = "./comments.php";
require_once("../header.php");
?>

<form action="../../handlers/form-handler.php" method="POST" class="comment-form">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn-submit">Submit</button>
</form>


<?php include_once("../footer.php"); ?>
