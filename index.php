<!-- index.php -->
<?php
$title = "Милые и пушистые котики!";
$css ="st.css";
require_once("./views/header.php");
require_once("./handlers/functions.php"); // Исправлено название файла

$directory = './views/image/';
displayImages($directory);

include_once("./views/footer.php");
?>
