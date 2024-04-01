<?php
if(isset($_POST['submit'])) {
    $data = [
        'name' => $_POST['name'] ?? "",
        'message' => $_POST['comment'] ?? "",
    ];

    $file = fopen($_SERVER['DOCUMENT_ROOT'] . '../views/components/comments.txt', 'a') or die("Unable to open file!");
    foreach ($data as $field => $value) {
        fwrite($file, "$field: $value\n");
    }
    fwrite($file, "\n");
    fclose($file);

    header("Location: ../index.php");
    exit;
}
?>
