<?php

//https://www.codewars.com/kata/582cb0224e56e068d800003c/php
//Keep Hydrated!

// Nathan loves cycling.
// Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of water per hour of cycling.
// You get given the time in hours and you need to return the number of litres Nathan will drink, 
// rounded to the smallest value.
// For example:
// time = 3 ----> litres = 1
// time = 6.7---> litres = 3
// time = 11.8--> litres = 5

function litres($hours) {
   $lit = $hours * 0.5;
    return floor($lit);
  }

echo litres(5.3);

// https://www.codewars.com/kata/57a0e5c372292dd76d000d7e
// String repeat
// Write a function called repeatStr which repeats the given string string exactly n times.

// repeatStr(6, "I") // "IIIIII"
// repeatStr(5, "Hello") // "HelloHelloHelloHelloHello"


function repeatStr($n, $str)
{
    $output = '';
    for ($i = 0; $i < $n; $i++) {
        $output .= $str;
    }
    return $output;
}

echo repeatStr(5, 'H');


//https://www.codewars.com/kata/5168bb5dfe9a00b126000018/php
//Reversed Strings

function solution($str) {
  return strrev($str);
}


//https://www.codewars.com/kata/5859c82bd41fc6207900007a/train/php
//Thinkful - String Drills: Quotable

function quotable($name, $quote) {
  return "$name said: \"$quote\"";
}

//https://www.codewars.com/kata/5933a1f8552bc2750a0000ed/php 
//Get Nth Even Number

function nthEven($n) {
  return ($n -1) * 2;
}

// https://www.codewars.com/kata/54ff3102c1bad923760001f3/php
// Vowel Count

//Return the number (count) of vowels in the given string.
// We will consider a, e, i, o, u as vowels for this Kata (but not y).
// The input string will only consist of lower case letters and/or spaces.

function getCount($str) {
  $vowelsCount = 0;
  $vowels = ['a', 'e', 'i', 'o', 'u'];  
  for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $vowels)) { // Есть ли значение i в массиве vowels
      $vowelsCount++;
    }
  }
  return $vowelsCount;
}


// https://www.codewars.com/kata/55bf01e5a717a0d57e0000ec/php
// Persistent Bugger.
// Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence, which is the number of times you must multiply the digits in num until you reach a single digit.

// For example (Input --> Output):

// 39 --> 3 (because 3*9 = 27, 2*7 = 14, 1*4 = 4 and 4 has only one digit)
// 999 --> 4 (because 9*9*9 = 729, 7*2*9 = 126, 1*2*6 = 12, and finally 1*2 = 2)
// 4 --> 0 (because 4 is already a one-digit number)


function persistence(int $num): int {
  // Write your code here
  $counter = 0;
  while (strlen(strval($num)) > 1){
    $temp = 1;
    for ($i = 0; $i < strlen(strval($num)); $i++) {
        $temp *=strval($num) [$i];
    }
    $counter++;
    $num = $temp;
  }
  return $counter;
}

