<?php

$number = readline();
$hour= readline();
$amount= readline();


$salary = number_format(($hour*$amount),'2','.','');

echo "NUMBER = $number";
echo "SALARY = $salary";
