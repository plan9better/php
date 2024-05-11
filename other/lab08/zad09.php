<?php
fscanf(STDIN,"%d %d", $a, $b);
fscanf(STDIN,"%d %d", $c, $d);

$j = $c;
for($i = $a; $i <= $b && $j <= $d; $i++){
  $arr[$i] = $j;
  $j++;
}

print_r($arr);