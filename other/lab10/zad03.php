<?php
$fd = fopen("/tmp/data.txt", 'r');
$str = fgets($fd);

$str = explode(" ",$str);
$sum = array_sum($str);

fclose($fd);

echo $sum;

