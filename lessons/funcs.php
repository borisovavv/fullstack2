<?php
function test () {
    echo 'Test!';
}


//Выводит красиво любое значения, в том числе массивы

function dump ($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';   
}