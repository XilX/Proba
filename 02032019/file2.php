      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
<input type="text" name="x" autocomplete="off" placeholder="X" value="<?=$_POST["x"]?>"><br>
<input type="text" name="y" autocomplete="off" placeholder="Y" value="<?=$_POST["y"]?>"><br>
<select name="oper">
<option value="+" <?=($_POST["oper"]=="+")?'selected':'';?> style="background-color: red;">Сложить</option>
<option value="-" <?=($_POST["oper"]=="-")?'selected':'';?> style="background-color: silver;">Вычесть</option>
<option value="/" <?=($_POST["oper"]=="/")?'selected':'';?> style="background-color: yellow;">Поделить</option>
<option value="*" <?=($_POST["oper"]=="*")?'selected':'';?> style="background-color: green;">Умножить</option>
<option value="**" <?=($_POST["oper"]=="**")?'selected':'';?> style="background-color: blue;">Возвести в степень</option>
</select>
<input type="submit">
</form>

<?php
// print_r ($_POST);

// if [$_POST] {
// echo $funcr=$funcx*$funcy;
// }
// print_r ($_POST);
    if (!is_numeric($_POST["x"])){
        echo "x - ne chislo, vvedite chislo";
    } else {

                if (!is_numeric($_POST["y"])){
                    echo "y - ne chislo, vvedite chislo";
                }else {

                        switch ($_POST["oper"]) {
                            case '+':
                        echo $_POST["x"]+$_POST["y"];
                            break;

                            case '-':
                        echo $_POST["x"]-$_POST["y"];
                            break;

                            case '/':
                                if ($_POST["y"]<>0) {
                                    echo $_POST["x"]/$_POST["y"];
                                } else {
                                    echo "Na nol delit nelza";
                                }
                            break;
                            
                            case '*':
                        echo $_POST["x"]*$_POST["y"];
                            break;

                            case '**':
                        echo $_POST["x"]**$_POST["y"];
                            break;
                        }
                    }
            }



// echo $_POST["x"];
// echo $_POST["y"];
// echo $_POST["x"]+$_POST["y"];
// echo $_POST["x"]-$_POST["y"];
// echo $_POST["x"]/$_POST["y"];
// echo $_POST["x"]*$_POST["y"];
// echo $_POST["x"]**$_POST["y"];
?>
</body>
</html>