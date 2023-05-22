<?php 


$r = readline();

$pi = 3.14159;
$volume = (4/3)*$pi*$r*$r*$r;

$volume = number_format($volume,'3','.','');

echo "VOLUME = $volume".PHP_EOL;
