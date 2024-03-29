<!-- handlers/form-handler.php -->
<?php
    $name = $_POST['name'] ?? '';
    $comment = $_POST['comment'] ?? '';

    if (!empty($name) && !empty($comment)) {
        $data = "Name: $name\nComment: $comment\n";
        file_put_contents('../data/comments.txt', $data, FILE_APPEND);
    }

    header("Location: ../index.php");
    exit();
?>
