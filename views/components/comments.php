<?php
$css = "../css/st.css";
$main = "../../index.php";
$title = "Страница отзывов!";
$otziv = "./form.php";
require_once("../header.php");
?>

<h2> Данные были сохранены! Вот что хранится в файле: </h2><br />
<?php
$fileContent = file('./comments.txt');
foreach ($fileContent as $line) {
    echo $line . "<br />";
}
require_once("../footer.php");
?>
