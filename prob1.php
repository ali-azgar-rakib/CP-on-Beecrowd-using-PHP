<?php
$number = readline();
$hour= readline();
$amount= readline();


$salary = number_format(($hour*$amount),'2','.','');


echo "NUMBER = $number".PHP_EOL;
echo "SALARY U\$ = $salary".PHP_EOL;
