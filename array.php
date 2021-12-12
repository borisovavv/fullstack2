<?php

$numbers = [1, 2, 3, 4, 5];

echo $numbers[2]; //Будет выведено значение 3
echo '<br>';

$count = count($numbers); //count - длина массива

for ($i = 0; $i < $count; $i++) {
    echo "$i $numbers[$i] <br>";
}

echo '<hr>';

//Функция foreach отличается тем, что не нужно указывать условие

foreach ($numbers as $key => $value) { 
    echo "$key: $value <br>";
}

$new_numbers = []; //Сюда складываем значения

for ($i = 0; $i < 10; $i++) {
    $new_numbers[] = $i ** 2;
}

$new_numbers[3] = 99; //Можно менять значение
$new_numbers[10] = 100;
$new_numbers[67] = 67 * 67;

echo '<pre>';
print_r($new_numbers);

$person = [
    'name' => 'Vika',
    'age' => 25,
    'city' => 'Lipetsk',
    'language' => 'PHP'
];

// Можно дополнять массив

$person['car'] = true; 

echo '<pre>';
print_r($person);

$person['name'] = ''; 
echo '<pre>';
print_r($person);

//Убирает ключ и значение

unset($person['name']); 
echo '<pre>';
print_r($person);

echo '<hr>';

$colors = ['red', 'green', 'blue'];

$output = '';
foreach ($colors as $color) {  //foreach (массив as переменная, в которую складываются значения массива)
    $output = $output . ' ' . $color;
}

// echo trim ($output); // trim убирает пробелы слева и справа



//Перевод значений массива в строку - implode(разделитель, массив) 

$string_colors = implode(', ', $colors); 
echo "$string_colors<br>";

//Перевод строки в массив - explode(разделитель, строка) 

$new_str = 'Предложение из 4 слов';
$array = explode(' ', $new_str); 

print_r($array);

$numbers = [2, 4, 6, 1, 3];
print_r($numbers);

//Сортировка массива по числовым значениям

sort($numbers); 

print_r($numbers);

print_r($person);

//Не использовать на ассоциативных массивах, поскольку ключи сбрасываются

sort($person); 

print_r($person);

$person = [
    'name' => 'Vika',
    'age' => 25,
    'city' => 'Lipetsk',
    'language' => 'PHP'
];

// Сортировка значений для ассоциативнфх массивов

asort($person); 

print_r($person);

// Сортировка по ключам

ksort($person); 

print_r($person);

//Обратная сортировка по числовым значениям

rsort($numbers);

print_r($numbers);

//Обратная сортировка для ассоциативных массивов

arsort($person);

print_r($person);

//Обратная сортировка по ключам

krsort($person);

print_r($person);

echo '<hr>';

//Массивы в массиве

$persons = [
    [
        'name' => 'Vika',
        'age' => 25,
        'city' => 'Lipetsk',
        'languages' => ['PHP', 'JS']     
    ],
    [
        'name' => 'John',
        'age' => 31,
        'city' => 'Madrid',
    ],
    [
        'name' => 'Anton',
        'age' => 29,
        'city' => 'Kazan',        
    ]
];

//Функция "Сравнение значений (длинный способ) - сортировка по возрасту"

function sortByAge ($a, $b) {
    if ($a['age'] > $b['age']) {
        return 1;
    } else if ($a['age'] < $b['age']) {
        return -1; 
    } else {
        return 0;
    }
}

//Функция "Сравнение значений (короткий способ - сортировка по городу"

function sortByCity ($a, $b) {
    return $a['city'] <=> $b['city']; 
}

usort($persons, 'sortByAge');

print_r($persons);

usort($persons, 'sortByCity');

print_r($persons);

echo '<hr>';

$numberOne = 15;
$numberTwo = 15; 

// if ($numberOne > $numberTwo) {
//     echo 1;
// } else if ($numberOne < $numberTwo) {
//     echo -1; 
// } else {
//     echo 0;
// }

echo $numberOne <=> $numberTwo; // Короткий аналог сравнения значений

$names  = array_column($persons, 'name'); // Передает значения только одного ключа из массива - array_column(массив, нужный ключ);

print_r($names); 


array_multisort($names, SORT_DESC, $persons); //array_multisort(массив с нужным ключом, константа(в нашем случае, по убыванию), массив)

print_r($persons); 

echo '<hr>';

//Достает из массива только ключи

$keys = array_keys($person); 

print_r($keys);

//Достает из массива только значения

$values = array_values($person); 

print_r($values);

echo '<hr>';

print_r($persons[0]);

print_r($persons[0]['languages'][0][0]); // Первая буква элемента из ключа languages массива с индексом 1 в массиве persons

echo '<br>';

print_r($persons[0]['name']); // Элемент из ключа name массива индексом 1 в массиве persons

echo '<br>';

print_r($persons[1]['age']); // Элемент из ключа age массива с индексом 1 в массиве persons