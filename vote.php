<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        echo "Столько символов в слове: ";
        echo mb_strlen('Привет', 'UTF-8'); // 6 символов

        echo "<br>";

        echo "Столько слов в тексте: ";
        echo mbStrWordCount('Привет, как дела? Чем занят?'); // 5 слов

        function mbStrWordCount($string = null) {
            return count(mb_split('[\s_"]', $string));
        }
    ?>
</body>
</html>