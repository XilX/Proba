
<html>
<head>
    <meta charset="UTF-8">
    <Title>Калькул</Title>
</head>
<body>
<form method="POST" action="">

    <input type="radio" name="operation" value='+'>+
    <input type="radio" name="operation" value='-'>-
    <input type="radio" name="operation" value='*'>*
    <input type="radio" name="operation" value='/'>/
    <input type="radio" name="operation" value='%'>%<br><br>
    <input type="radio" name="operation" value='sub'>Возведение в степень<br>
    <input type="radio" name="operation" value='sup'>Деление по модулю<br>

               <input type="text" name="a" required><br>

               <input type="text" name="b" required><br>

<input type="submit" value="Отправить">

</form>

<?php

if (isset($_POST['a'])&&isset($_POST['b'])&&isset($_POST['operation']))
{


$a = $_POST['a'];

$b = $_POST['b'];

$radio = $_POST['operation'];


    // if ($radio=='+'){$c = $a + $b; echo "сумма= " . $c.'<br>';}
    // if ($radio=='-'){$c = $a - $b; echo "сумма= " . $c.'<br>';}
    // if ($radio=='*'){$c = $a * $b; echo "сумма= " . $c.'<br>';}
    // if ($radio=='/'){$c = $a / $b; echo "сумма= " . $c.'<br>';}
    // if ($radio=='%'){$c = $a / 100 * $b; echo "сумма= " . $c.'<br>';}
    // if ($radio=='sub'){$c = $a ** $b ; echo "сумма= " . $c.'<br>';}
    // if ($radio=='sup'){$c = $a % $b ; echo "сумма= " . $c.'<br>';}



switch ($radio) {
    case '+':
         $c = $a + $b;
        break;

    case '-':
        $c = $a - $b;
       break;

    case '*':
       $c = $a * $b;
      break;

    case '/':

    // print_r ($_POST);

        if ($b==0) {
           echo "На ноль делить нельзя";
        } else {
                $c = $a / $b;
        }
       break;

    case '%':
        $c = $a / 100 * $b;
       break;

    case 'sub':
        $c = $a ** $b;
       break;

    case 'sup':
       $c = $a % $b;
      break;

    default:
        echo "Неизвестная операция";
        break;
}

if (isset($c)){
    echo $c;

}

    echo "<br>С процентами: Допустим число у нас 8500, нужно узнать 30%. В первый инпут пишем 8500, во второй 30 - узнаем сколько это будет";

}

?>
</body>
</html>
