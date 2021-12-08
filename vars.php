<?php

$name = "Victoria";
$age = 25; 

echo $name; 
echo "<br>";
echo $age; 

$name2 = "Inna";
echo "<br>";
echo $name2; 

$lastName = "Borisova";

$fullName = $name . ' ' . $lastName;
echo "<br>";
echo $fullName; 

$word = 'lower_case';
$word = strtoupper($word);
echo "<br>";
echo $word; 

$upperCase = 'UPPER_CASE';
$upperCase = strtolower($upperCase);
echo "<br>";
echo $upperCase;