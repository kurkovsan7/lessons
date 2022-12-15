<?php
    echo "Задание 1","<br>";
    $a = 10;
    echo $a, "<br>";
    $a = 20;
    echo $a, "<br>";

    echo "Задание 2","<br>";
    $a = 1 + 2 + 3;
    echo $a, "<br>";

    echo "Задание 3","<br>";
    $a = 10;
    $b = 5;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo $result, "<br>";

    echo "Задание 4","<br>";
    $a = 1.5;
    $b = 0.75;
    echo $a + $b,"<br>";

    echo "Задание 5","<br>";
    $a =  -100;
    echo -($a), "<br>";

    echo "Задание 6","<br>";
    $a = 10;
    $b = 3;
    echo $a % $b, "<br>";

    echo "Задание 7","<br>";
    $a = "lesso 1";
    echo strlen($a), "<br>";

    echo "Задание 8", "<br>";
    echo '<form method="post">
                <input type="text" value="С новым годом!" />
          </form>';

    echo "Задание 9", "<br>";
    $a = true;
    if ($a) {
        $hi = "Привет!";
    }
    echo $hi, "<br>";

    echo "Задание 10", "<br>";
    $a = false;
    if ($a) {
    $hi = "Привет!";
    }
    echo $hi, "<br>";

    echo "Задание 11", "<br>";
    $b = null;
    echo $b, "<br>";

    echo "Задание 12", "<br>";
    $a = '12345';
    $sum = $a[0] + $a[1] + $a[2] + $a[3] + $a[4];
    echo $sum, "<br>";

    echo "Задание 13", "<br>";
    $hour = 60 * 60;
    $day = $hour * 24;
    $year = $day * 365;
    echo $year, "<br>";

    echo "Задание 14", "<br>";
    function fahrenheit_to_celsius($if)
    {
    $celsius=5/9*($if-32);
    return $celsius ;
    }
