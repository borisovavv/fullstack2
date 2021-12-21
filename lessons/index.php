<?php

include_once 'funcs.php';

echo "<select>";
for ($i = 0; $i < 5; $i++){
    include "options.php";
}
echo "</select><hr>";

// function plusOne ($a) {
//     $a = $a + 1;
// }

$a = 10; 

echo "$a<br>";

$a = plusOne($a); //11

echo "$a<br>";

wrongPlusOne();

echo "$a<br>";

function plusOne ($a) {
    $a = $a + 1;
    return $a;
}


//Как не нужно делать
function wrongPlusOne () {
    global $a; // Возьмет глобальную переменную а. Внутри фукции нельзя менять глобально значение переменной
    $a = $a + 1;
}

// dump($GLOBALS); // Хранит все объявленные переменные

$GLOBALS ['a'] = 999; // Так тоже не стоит делать