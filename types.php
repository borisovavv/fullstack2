<?php

$name = 'Vika'; 
echo $name . ' ' . gettype($name) . ' ' . '<br>';

$age = 25; 
echo $age . ' ' . gettype($age) . ' ' . '<br>';

$money = 59999.99;
echo $money . ' ' . gettype($money) . ' ' . '<br>';

$isRain = true;
echo $isRain . ' ' . gettype($isRain) . ' ' . '<br>';

echo $notExist . ' ' . gettype($notExist) . ' ' . '<br>';

echo '<hr>';

if ($name) {
    echo '$name true <br>';
} else {
    echo '$name false <br>';
}

$emptyString = '';

if ($emptyString) {
    echo '$emptyString true <br>';
} else {
    echo '$emptyString false <br>';
}

$zero = 0;

if ($zero) {
    echo '$zero true <br>';
} else {
    echo '$zero false <br>';
}

$false = false; 
$null = NULL;

if ($null == $false) {
    echo '$null = $false true <br>';
} else {
    echo '$null = $false false <br>';
}

if ($null === $false) {
    echo '$null = $false true <br>';
} else {
    echo '$null = $false false <br>';
}

if (0 == "") {
    echo '0 == "" true <br>';
} else {
    echo '0 == "" false <br>';
}

if (0 === "") {
    echo '0 === "" true <br>';
} else {
    echo '0 === "" false <br>';
}

$message = "значение переменной name = $name";
echo $message;
echo '<br>';

$n = 10;
$new_num = $n++;
echo $new_num;
echo '<br>';

$n = 10;
$new_num = ++$n;
echo $new_num;
echo '<br>';

$age = 12;
$shoe_size = 13; 

if ($age > $shoe_size)
    print "Message 1";

    elseif (($shoe_size++)&&($age > 20))
        print "Message 2";

    else 
        print "Message 3";

print "Age: $age. Shoe size: $shoe_size";


?>