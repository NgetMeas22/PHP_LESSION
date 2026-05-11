<?php

    $day = date('D');
    switch($day){
        case "Mon": echo"Today is Monday";break;
        case "Tue": echo"Today is Tuesday";break;
        case "Wed": echo"Today is Wednesday";break;
        case "Thu": echo"Today is Thursday";break;
        case "Fri": echo"Today is Friday";break;
        case "Sat": echo"Today is Saturday";break;
        case "Sun": echo"Today is Sunday";break;
    }
    echo"<br>";

   
$x = 250;
$y = 100;
$operator = "-";

switch ($operator) {
    case "+":
        echo "x+y = ", $x + $y;
        break;

    case "-":
        echo "x-y = ", $x - $y;
        break;

    case "*":
        echo "x*y = ", $x * $y;
        break;

    case "/":
        echo "x/y = ", $x / $y;
        break;

    case "%":
        echo "x%y = ", $x % $y;
        break;

    default:
        echo "Invalid operator";
}


?>

