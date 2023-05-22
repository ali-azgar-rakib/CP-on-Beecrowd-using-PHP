<?php 


$i = readline();
$i = explode(" ",$i);

$a = $i[0];
$b = $i[1];
$c = $i[2];

$pi = 3.14159;

$triangel = number_format(.5 * $a * $c,'3','.','');
$circle = number_format($pi * $c *$c,'3','.','');
$trapizium = number_format((($a+$b)/2)*$c,'3','.','');
$square = number_format($b * $b,'3','.','');
$rectangle = number_format($a * $b,'3','.','');

echo "TRIANGULO: $triangel".PHP_EOL;
echo "CIRCULO: $circle".PHP_EOL;
echo "TRAPEZIO: $trapizium".PHP_EOL;
echo "QUADRADO: $square".PHP_EOL;
echo "RETANGULO: $rectangle".PHP_EOL;
