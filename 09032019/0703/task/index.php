<?php
session_start();
//print_r($_SESSION);
if (isset($_POST['form_login']) && isset($_POST['form_login']) == "login") {
    $_SESSION['user_name'] = $_POST['name'];
    $_SESSION['bgimg'] = $_POST['bgimg'];
    $_SESSION['font_color'] = $_POST['font_color'];
} 
   
//print_r($_SESSION);
switch ($_GET['pg']) {
    case 'pg1':
        $filename = "str1.php";
        break;

    case 'pg2':
        $filename = "str2.php";
        break;

    case 'pg3':
        $filename = "str3.php";
        break;

    case 'pg4':
        $filename = "str4.php";
        break;
    
    case 'book':
        $filename = "book/book.php";
        break;

    case 'logout':
        $_SESSION = [];
        session_destroy();
        session_write_close();
        header("Location: login.php");
        break;

    default:
        $filename = "book/book.php";
        break;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body style="background-image:url(<?= isset($_SESSION['bgimg']) ? $_SESSION['bgimg'] : 'css/fonbody.jpg'?>) ; color:<?= isset($_SESSION['font_color']) ? $_SESSION['font_color'] : 'black'?>;">
    <div id="wrapper">  
        <table class="table" style="width: 100%">
            <tr> 
                <td style="width: 20%" class="table"><?php include 'menu.php'?></td>
                <td class="table"><?php include $filename?></td>
            </tr>
        </table><br>
        <?php
            if (isset($_SESSION['user_name'])) {
                echo "Вы вошли как: ".$_SESSION['user_name'];
            }
        ?>
    </div>
        <?php
            include 'time.php';
        ?>
</body>

</html> 