<?php

$num = 0;

while($num <= 100) {
    if($num % 3 === 0) {
        echo "$num <br>";
    }
    $num++;
}

$i = 0;
$word = 'Ноль';
do {
    echo " $i = $word <br>";
    $i++;
    if($i % 2 === 0) {
        $word = 'Четное';
    } else {
        $word = 'Нечетное';
    }
} while($i <= 10);

$cities = [
    "Костромская область" => ["Дор","Асташево","Мантурово"],
    "Алтайский край" => ["Барнаул","Змеиногорск","Полковниково"],
    "Белгородская область" => ["Белгород","Борисовка","Волоконовка"],
];

foreach($cities as $region => $city) {
    echo "$region: <br>";
    $lastElement = end($city);
    foreach($city as $intValue) {
        if($intValue == $lastElement) {
            echo "$intValue<br>";
        } else {
            echo "$intValue, ";
        }
    }
}


function translate(string $string): string {
    $alfavit = [
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "yo",
        "ж" => "j",
        "з" => "z",
        "и" => "i",
        "й" => "i'",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "ч" => "ch",
        "ц" => "ts",
        "ч" => "h",
        "ш" => "sh",
        "щ" => "shch",
        "ы" => "Y",
        "э" => "E",
        "ю" => "ju",
        "я" => "ya",
    ];
    $result = '';
    $splitted = str_split($string, 2);
    foreach($splitted as $letter) {
        $result .= $alfavit[$letter];
    }
    return $result;
}

$list = [
    'Главная',
    'Побочная',
    'Необязательная'
];

?>

<ul>
<?php foreach($list as $item) : ?>
    <li><a href="#"><?=$item?></a></li>
<?endforeach;?>
</ul>

<?php
 