<!-- index.php -->
<?php

$title = "Милые и пушистые котики!";
$css ="./views/css/st.css";
$view = "../views/components/comments.php";
$otziv = "./views/components/form.php";
require_once("./views/header.php");
require_once("./handlers/functions.php"); 
$directory = './views/image/';
displayImages($directory);

include_once("./views/footer.php");
// <?php Page::part('footer'); 
