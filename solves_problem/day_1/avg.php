<?php

$a = readline();
$b = readline();
$c = readline();

$a = $a *2;
$b = $b * 3;
$c = $c * 5;

$sum = ($a + $b + $c)/10;
$sum = number_format($sum,1,'.','');
echo "MEDIA = $sum";
