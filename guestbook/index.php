<?php
require_once 'functions.php';
require_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Гостевая книга</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="feedback-form">
            <form action="" method="post">
                <input type="text" name="name" placeholder="Ваше имя" id="name" required>
                <textarea name="feedback" placeholder="Оставьте свой отзыв" id="feedback" required></textarea>
                <input type="submit" value="Отправить" id="button">
            </form>
        </div>
        <div class="smile-exampl">
            <?php
            foreach($smile as $key=>$value) {
                echo $key.' '.$value."\t";
            }
            ?>
        </div>
        <?php
        if (isset($_POST['name'])){
            echo '<div class="result-mess">';
            echo addFeedback($_POST['name'],$_POST['feedback']);
            echo '</div>';
        }
        ?>
        <div class="feed-list">
            <?php foreach(getAllFeedback() as $feedback){ ?>
            <div class="feed-list-item">
                <div class="name"><?=$feedback[2]?> <?=$feedback[0]?></div>
                <div class="feed"><?=$feedback[1]?></div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>