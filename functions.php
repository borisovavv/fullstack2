<?php

//Функция выводит Hello
function sayHello () {
    echo 'Hello<br>';
} 

//Вывоз функции
sayHello();

//Функция, которая прибавляет к значению 1 

// function название(принимаемый аргумент) {
//    описание поведения функции;
// }

//Можно указать тип принимаемого аргумента, например: function multyply (int $a, int $b)

function plusOne($a) {
    echo ++$a;
}

function multyply ($a, $b) {
    echo $a * $b . '<br>';
}

// В с указано значение по умолчанию, то есть при вызове функции не обязательно указывать с (в этом случае с = 0)
// Сначала указываем обязательные аргументы, потом необязательные 
function sumNumbers($a, $b, $c = 0) { 
    echo $a +$b + $c . '<br>';
}

// echo в функции выводит на экран результат, return возвращает результат (но не выводит на экран), который можно будет вывести в любом месте
// return означает выход из функции, то есть echo 'Lalala'; не сработает

function returnPlusOne($a) {
    return [
        'oldValue' => $a,
        'newValue' => ++$a
    ];
    echo 'Lalala';
}

plusOne(55);

echo '<hr>';

//Пример с echo в функции

$number = 34; 

plusOne($number);

echo '<br>';

//Пример с return в функции

$number = 5; 

$result = returnPlusOne($number);
echo "Старое число: {$result['oldValue']}, новое число: {$result['newValue']} <br>";

echo '<hr>';

multyply(50, 5);

sumNumbers(1,2,3);

sumNumbers(1,2);

$res = sumNumbers(1, 2); 

echo '<pre>';
var_dump($res);


$numbers = [1, 5, 3, 7, 2, 4]; 

//Задача. Написать функцию, входящий параметр у которой это массив, функция должна вернуть максимальное значение

//Способ 1
function maxNumber(array $numbers) {
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }

    }
    return $max;
}

echo maxNumber($numbers) . '<br>'; 

//Способ 2

echo max($numbers) . '<br>'; 


//Если функция сложения, то начинаем с $res = 0, если умножения - с $res = 1

function sumArray (array $numbers) {
    $res = 0;
    foreach ($numbers as $number) {
        $res += $number;     // аналог $res = $res + $number
    }
    return $res;
}


function positive_sum($arr) {
    $res = 0;
    foreach ($arr as $number) {
        if ($number > 0) {
            $res += $number; 
        }
    }
    return $res;
}