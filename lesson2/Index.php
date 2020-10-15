<?php
$a = 5;
$b = 7;

if($a && $b >= 0) {
    $c = $a - $b;
    echo $c;
} elseif($a && $b < 0) {
    $c = $a * $b;
    echo $c;
} else {
    $c = $a + $b;
    echo $c;
}


function Sum($arg1, $arg2) {
    $result = $arg1 + $arg2;
    return $result;
}

function Minus($arg1, $arg2) {
    $result = $arg1 - $arg2;
    return $result;
}

function Multi($arg1, $arg2) {
    $result = $arg1 * $arg2;
    return $result;
}

function Division($arg1, $arg2) {
    $result = $arg1 / $arg2;
    return $result;
}

?>

<br>
<?php

$date = date("F j, Y, g:i a");

echo $date;





function Powr(int $number, int $pow) {
    if($pow == 1) {
        return $number;
    }
    return $number * Powr($number, $pow - 1);
}

var_dump(Powr(9, 12));






function Declension(int $count, string $ending1, string $ending2, string $ending3) {

    if($count > 20) {
        $count %= 10;
    }

    if($count == 0 || $count > 4) {
        $ending = $ending1;
    } elseif ($count == 1) {
        $ending = $ending2;
    } else {
        $ending = $ending3;
    }

    return $count . ' ' . $ending;
}

$hours = 17;
echo Declension($hours, 'часов', 'час', 'часа')



?>