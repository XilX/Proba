<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nik1" placeholder="Введите ник"><br><br>
        <textarea name="msg1" cols=80% rows="10" placeholder="Введите текст"><?= (isset($_POST['msg1'])) ? $_POST['msg1'] : '' ?></textarea><br>
        <input type="reset" value="Сброс">
        <input type="submit" value="Отправить"><br><br>
    </form>
    <?php 
    
    include 'func.php';
    if ((!empty($_POST['msg1'])) || (!empty($_POST['nik1']))) {
            if (!empty(censorship($_POST['nik1'])) || !empty(censorship($_POST['msg1']))) {
            $_SESSION['time'] = time ();
            $result = time() - $_SESSION['time'];
            echo "Вы использовали нецензурные выражения и не можете писать в гостевой книге, прошло минут: ".(floor($result/60))." секунд: ".(floor($result%60))."!!!";
        } else if (time () < $_SESSION['time'] + 60) {
            $result = time() - $_SESSION['time'];
            echo "Вы использовали нецензурные выражения и не можете писать в гостевой книге, прошло минут: ".(floor($result/60))." секунд: ".(floor($result%60))."!!!";
        } else { 
            $arr = get_array_from_xml (file_get_contents("book.xml"));
            $arr[] = ["msg" => $_POST["msg1"], "nik" => $_POST["nik1"]];
            echo "<table class='table'>";
            echo "<tr class='table'><th class='table'>Ник</th><th class='table'>Сообщение</th></tr>";
            foreach ($arr as $k => $v) {
                $str2 = markdown(smile(bbCode(htmlspecialchars($v["nik"]))));
                $str3 = markdown(smile(bbCode(htmlspecialchars($v["msg"]))));
                echo "<tr>"."<td class='table'>".$str2."</td>"."<td class='table'>".$str3."</td>"."</tr>";
            }
            echo "</table>";
            $str = put_array_to_xml ($arr);
            file_put_contents("book.xml", $str);
        }
    }
    
    ?>
</body>
</html>