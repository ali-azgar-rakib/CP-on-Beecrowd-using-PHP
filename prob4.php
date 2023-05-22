<?php 


$line1 = readline();
$line2 = readline();

$line1 = explode(" ",$line1);
$line2 = explode(" ",$line2);

$sum = $line1[1] * $line1[2] + $line2[1] * $line2[2];
$sum = number_format($sum,'2','.','');
echo "VALOR A PAGAR: R$ $sum".PHP_EOL;
