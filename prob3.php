<?php

$name = readline();
$salary= readline();
$total_val= readline();


$total15 = $total_val / 10 * 1.5;


$sum =number_format( $salary + $total15,'2','.','');

echo "TOTAL = R$ $sum".PHP_EOL;
