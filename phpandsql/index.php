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
    print_r($_POST);

    $link = mysqli_connect("localhost", "root", "", "book");

    if (mysqli_connect_errno()) {
        echo "Не удалось подключиться к MySQL: (" .
            mysqli_connect_errno() . ") " . mysqli_connect_error();
    }


    $insert = "INSERT INTO `guest_book` (NIK,MSG) VALUES ('".$_POST['NIK']."', '".$_POST['MSG']."')";
    $query = mysqli_query($link, $insert);
    $res = mysqli_query($link, "SELECT * FROM guest_book");

    echo "<table border='1'>";
    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($res);
    mysqli_close($link);
    //$res = mysqli_query($link, "INSERT INTO 'guest_book'(NIK,MSG) VALUES ('Петя','Привет')");
    
    ?>
    <br><br>
    <fieldset>
        <form action="#" method="post">
            <input name="nik" type="text" placeholder="Введите свой ник"><br><br>
            <textarea name="msg" id="" cols="30" rows="10" placeholder="Введите сообщение"></textarea><br><br>
            <input type="submit"> <input type="reset" value="Сбросить"><br>
        </form>
    </fieldset>

    <?php
    ?>
</body>

</html> 