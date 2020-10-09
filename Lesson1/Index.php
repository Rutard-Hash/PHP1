

<?php
$a = 5;
$b = '05';
var_dump($a == $b);                             // Почему true? Потому что сравнение не строгое, и 5 = 5
var_dump((int)'012345');                        // Почему 12345? Интерпритатор просто убирает ноль и делать целочисленное значение так как нигде нет запятой
var_dump((float)123.0 === (int)123.0);          // Почему false? Потому что сравнение строгое, и одно число с дробной частью, а другое нет 
var_dump((int)0 === (int)'hello, world'); // Почему true? Строка при приведении к INT равна 0, а 0 равен False, и так как false = false, то true
?>



<?php
$title = "Hello World";
$message = "Oh, i'm sorry";
?>


<h1><?php echo $title ?><h1>
<p><?php echo $message ?><p>



<?php
$a = 10;
$b = 15;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

var_dump($a);
var_dump($b);
?>