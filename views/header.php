<?php $rel = "./views/css/";
$otziv = "/components/form.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $rel.$css ?>">
    <title><?php echo $title ?></title>
</head>
<body>
    <header>
        <h1><?php echo $title?></h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Фото котов</a></li>
            <li><a href="<?php echo $otziv ?>">Оставить отзыв</a></li>
        </ul>
    </nav>

    <main>