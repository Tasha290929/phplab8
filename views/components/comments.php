<!-- views/components/comments.php -->
<?php
    $comments = file_get_contents('../data/comments.txt');
    $commentsArray = explode("\n", $comments);

    echo "<ul>";
    foreach ($commentsArray as $comment) {
        echo "<li>$comment</li>";
    }
    echo "</ul>";
?>
