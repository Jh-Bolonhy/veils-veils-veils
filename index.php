<?php
    $header = file_get_contents(__DIR__.'/partials/_header.php');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>Свадебные фаты на свадьбу</title>

    <?= file_get_contents(__DIR__.'/partials/_head-stylesheets.php')?>
</head>
<body>
        <?= file_get_contents(__DIR__.'/partials/_header.php')?>
        <?= file_get_contents(__DIR__.'/partials/_main-gallery.php')?>
        <?= file_get_contents(__DIR__.'/partials/_main-form.php')?>
        <?= file_get_contents(__DIR__.'/partials/_overlay-about.php')?>
        <?= file_get_contents(__DIR__.'/partials/_overlay-how-to.php')?>
        <?= file_get_contents(__DIR__.'/partials/_footer.php')?>

</body>
</html>