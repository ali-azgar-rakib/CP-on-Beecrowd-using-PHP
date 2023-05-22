<?php 

$i = readline();

$i = explode(" ",$i);

$a = $i[0];
$b = $i[1];
$c = $i[2];

$gr = 0;
$m = (($a + $b + abs($a-$b))/2);
$gr = (($m + $c + abs($m-$c))/2);

echo "$gr eh o maior".PHP_EOL;
