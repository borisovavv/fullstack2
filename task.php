<?php

$gamburgerPrice = 4.95;
$coctailPrice = 1.95;
$cocaColaPrice = 0.85; 

$order = $gamburgerPrice * 2 + $coctailPrice + $cocaColaPrice;
$tip = $order * 0.16; 
$vat = ($order + $tip) * 0.075;
$total = $order + $tip + $vat;

echo $total;

?>